app.controller('mainController', function($scope, $http, rest) {

    rest.get('jobs').then(function(response){
        $scope.data = response.data;
    });
    // console.log($scope.jobs);

});