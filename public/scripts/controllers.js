var TwitterMarkovControllers = angular.module('TwitterMarkovControllers', []);

TwitterMarkovControllers.controller('WelcomeCtrl', ['$scope', '$http',
function ($scope, $http) {

    $scope.submitToBuild = function(){
        console.log('success');
    };

}]);