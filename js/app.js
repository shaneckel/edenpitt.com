var projectsApp = angular.module('eden', ['ngResource']);

projectsApp.config(function($routeProvider) {
  $routeProvider
          .when('/', {
    controller: 'ProjectListCtrl',
    templateUrl: 'projectlist.html'})
          .when('/project/:id', {
    controller: 'ProjectDetailCtrl',
    templateUrl: 'projectdetail.html'
  })
          .otherwise('/');
});

projectsApp.factory('Project', function($http) {
  var json = $http.get('project.json').then(function(response) {
    return response.data;
  });

  var Project = function(data) {
    if (data) angular.copy(data, this);
  };

  Project.query = function() {
    return json.then(function(data) {
      return data.map(function(project) {
        return new Project(project);
      });
    })
  };

  Project.get = function(id) {
    return json.then(function(data) {
      var result = null;
      angular.forEach(data, function(project) {
        if (project.id == id) result = new Project(project);
      });
      return result;
    })
  };
  
  return Project;
});

projectsApp.controller('ProjectListCtrl', function(Project, $scope) {
  $scope.projects = Project.query();
});

projectsApp.controller('ProjectDetailCtrl', function(Project, $routeParams, $scope) {
  $scope.project = $routeParams.id
          ? Project.get($routeParams.id)
          : new Project();
});