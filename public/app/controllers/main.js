app.controller('mainController', function($scope, $http, rest) {

    $scope.search = {
        "category_id": "",
        "city_id": "",
        "start_date": "",
        "end_date": "",
        "keyword": ""
    }

    rest.get('jobs').then(function(response){
        $scope.data = response.data;
    });

    rest.get('categories').then(function(response){
        $scope.categories = response.data;
    });

    rest.get('cities').then(function(response){
        $scope.cities = response.data;
    });

    $scope.openSearch = function() {
        $('#search').modal('show');
    }

    $scope.getData = function() {
        rest.post('jobs/search', $scope.search).then(function(response){
            $scope.data = response.data;
            $('#search').modal('hide');
        });
    }
});