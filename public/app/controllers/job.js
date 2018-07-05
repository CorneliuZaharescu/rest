app.controller('jobController', function($scope, $http, rest, $routeParams) {
    var id = $routeParams.id;
    rest.getItem('jobs', id).then(function (response) {
        $scope.item = response.data[0];
    });
});