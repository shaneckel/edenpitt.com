var ngEden = angular.module("ngEden",  ['ui.router' ]) 

ngEden.run(['$rootScope', '$state', '$stateParams',
  function ($rootScope,   $state,   $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
  }]);
 
ngEden.config(function($urlRouterProvider, $stateProvider){
  
  $urlRouterProvider
    .otherwise('/');

  $stateProvider
    .state("home", {
      url: "/",
      templateUrl: 'template/home.html'
    })

    .state("dinner", {
      url: "/dinner",
      templateUrl: 'template/menu.html',
      resolve: {
        menu: ['menu', function(menu){
          return menu.all();
        }]
      },
      controller: ['$scope', '$state', 'menu', 'utils',
        function (  $scope,   $state,   menu,   utils) {
          $scope.menu = menu; 
      }]
    })

    .state("contact", {
      url: "/contact",
      template: '<section class="contact"><h1>contact</h1></section>'
    })     

    .state("brunch", {
      url: "/brunch",
      template: '<section class="brunch"><h1>brunch</h1></section>'
    }) 

    .state("about", {
      url: "/about",
      template: '<section class="about"><h1>about</h1></section>'
    });

});

ngEden.factory('menu', ['$http', function ($http, utils) {
  var path = 'js/data/menu.json';
  var menu = $http.get(path).then(function (resp) {
    return resp.data.menu;
  });

  var factory = {};
  factory.all = function () {
    return menu;
  };
  // factory.get = function (id) {
  //   //A way to parse out the menu
  //   return contacts.then(function(){
  //     return utils.findById(contacts, id);
  //   })
  // };
  return factory;
}])

ngEden.factory('utils', function () {
  return {
    // Util for finding an object by its 'id' property among an array
    findById: function findById(a, id) {
      for (var i = 0; i < a.length; i++) {
        if (a[i].id == id) return a[i];
      }
      return null;
    },

    // Util for returning a randomKey from a collection that also isn't the current key
    newRandomKey: function newRandomKey(coll, key, currentKey){
      var randKey;
      do {
        randKey = coll[Math.floor(coll.length * Math.random())][key];
      } while (randKey == currentKey);
      return randKey;
    }

  };
});

ngEden.directive("scroll", function ($window) {
  return function(scope, element, attrs) {
    angular.element($window).bind("scroll", function() {
      if(this.pageYOffset >= 100) {
        scope.scrollpast = true;
      } else {
        scope.scrollpast = false;
      }
      scope.$apply();
    });
  };
});