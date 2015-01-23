var TwitterMarkovControllers = angular.module('TwitterMarkovControllers', []);

TwitterMarkovControllers.controller('WelcomeCtrl', ['$scope', '$http',
function ($scope, $http) {
    $scope.isLoading = false;
    $scope.randomTweet = [];

    $scope.submitToBuild = function(){
        $scope.isLoading = true;

        $http.get('/build/' + $scope.username).
            success(function(data, status, headers, config) {
                $scope.randomTweet.unshift(data);

                $scope.isLoading = false;
            }).
            error(function(data, status, headers, config) {
                console.log('Error processing request');

                $scope.isLoading = false;
            });
    };

}]);