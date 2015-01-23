var TwitterMarkovGenerator = angular.module('TwitterMarkovGenerator', [
    'ngRoute',
    'TwitterMarkovControllers'
]);

TwitterMarkovGenerator.config(
function($routeProvider, $locationProvider) {
    
    $routeProvider.
    when('/welcome', {
        templateUrl: 'scripts/partials/welcome.html',
        controller: 'WelcomeCtrl'
    }).
    otherwise({
        redirectTo: '/welcome'
    });
    
});