var ngEden = angular.module("ngEden",  ['ui.router', 'ngAnimate', 'breakpointApp']) 

ngEden.run(['$rootScope', '$state', '$stateParams', 
  function ($rootScope,   $state, $stateParams ) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
 
    $state.init = 'no';
    $state.ready = 'no';

    $rootScope.$on('$stateChangeStart', function(event){ 
      $state.ready = 'no';
      disabled = false; 
    })
 
    $rootScope.$on('$viewContentLoaded', function(event){ 
       $state.init = 'yes';
       $state.ready = 'yes';
    })

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
      templateUrl: 'template/contact.html',
    })     

    .state("brunch", {
      url: "/brunch",
      templateUrl: 'template/brunch.html',
      resolve: {
        brunch: ['brunch', function(brunch){
          return brunch.all();
        }]
      },
      controller: ['$scope', '$state', 'brunch', 'utils',
        function (  $scope,   $state,   brunch,   utils) {
          $scope.brunch = brunch; 
      }]    
    }) 

    .state("about", {
      url: "/about",
      templateUrl: 'template/about.html',
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

ngEden.factory('brunch', ['$http', function ($http, utils) {
  var path = 'js/data/brunch.json';
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

ngEden.directive('headerMain', function () {
  return {
    restrict: 'E',
    templateUrl: 'template/header.html',
    replace: true
  };
});

ngEden.directive('footerMain', function () {
  return {
    restrict: 'E',
    templateUrl: 'template/footer.html',
    replace: true
  };
});

ngEden.directive('backImg', function(){
  return function(scope, element, attrs){
    attrs.$observe('backImg', function(value) {
      element.css({
        'background-image': 'url(' + value +')'
      });
    });
  };
});

ngEden.controller('formController', function ($scope, $http) {

    // create a blank object to hold our form information
    // $scope will allow this to pass between controller and view
    $scope.formData = { };
    console.log("sadad");

    $scope.processForm = function() {
      console.log("processs");
      $http({
        method  : 'POST',
        url     : 'process.php',
        //data    :  $scope.formData, 
        data : { 'name' : "test"}
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      })
      // $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
      // $http.post('process.php', $scope.formData)
        .success(function(data) {
          console.log(data);

          if (!data.success) {
            // if not successful, bind errors to error variables
            $scope.errorName = data.errors.name;
            $scope.errorEmail = data.errors.email;
            $scope.errorMessage = data.errors.message;
          } else {
            // if successful, bind success message to message
            $scope.message = data.message;
          }
        });
    };
  });


// $scope.$on('breakpointChange', function(event, breakpoint, oldClass) { 
//   console.log('Entering:' + breakpoint.class); 
//   console.log('Leaving:' + oldClass); 
//   console.log('windowSize' + breakpoint.windowSize); 
// });