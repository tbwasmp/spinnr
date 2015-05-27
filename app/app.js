var spinnrApp = angular.module('spinnrApp', ['ngAnimate', 'ui.router', 'slick', 'ngMessages']);

spinnrApp.config(function ($stateProvider, $urlRouterProvider) {
  //
  // Now set up the states
  $stateProvider
    .state('registration', {
      url: "/registration",
      templateUrl: "app/components/registration/registration.php",
      controller: "FormController"
    })
    .state('registration.spinnrapp', { // nested state for the registration form
      url: "/spinnrapp", // url will be nested /registration/artist
      templateUrl: "app/components/registration/partials/registration-profile.php"
    })
    .state('registration.artist', { // nested state for the registration form
      url: "/artist", // url will be nested /registration/artist
      templateUrl: "app/components/registration/partials/registration-artist.php"
    })
    .state('registration.share', { // each nested state will have their own view
      url: "/share", // url will be nested /registration/share
      templateUrl: "app/components/registration/partials/registration-share.php"
    });
    //
    // For any unmatched url, redirect to /
    $urlRouterProvider.otherwise("/registration/spinnrapp");
});

spinnrApp.controller('FormController', ['$scope', '$http', '$state', function (scope, http, state){

  // get list of cities and store it to select
  http.get('cities.json').success(function(data){
    scope.cities = data;
  })

  // we will store all our form data in this object
  scope.formData = {};

  // function to process the form
  scope.processForm = function(isValid) {
    scope.$submitted = true;
    if(isValid && state.$current=='registration.spinnrapp') {
      state.go('registration.artist');
    } else if(isValid && state.$current=='registration.artist') {
      state.go('registration.share');
    } else if(!isValid && state.$current=='registration.artist') {
      alert('Please make sure you have selected an artist.');
    }
  };
}]);

spinnrApp.directive('jqdatepicker', function ($parse) {
  return function (scope, element, attrs, controller) {
    var ngModel = $parse(attrs.ngModel);
    $(function(){
      element.datepicker({
        showOn:"both",
        changeYear:true,
        changeMonth:true,
        numberOfMonths: 1,
        dateFormat:'yy-mm-dd',
        maxDate: "+1M +10D",
        yearRange: '1960:2001',
        onSelect:function (date, inst) {
          scope.$apply(function(scope){
            // Change binded variable
            ngModel.assign(scope, date);
          });
        }
      });
    });
  }
});