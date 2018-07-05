app.controller('mainController', function($scope, $http, rest) {

    $scope.search = {
        "category_id": "",
        "city_id": "",
        "start_date": "",
        "end_date": "",
        "keyword": "",
        "page": 1
    };

    rest.get('categories', null).then(function(response){
        $scope.categories = response.data;
    });

    rest.get('cities', null).then(function(response){
        $scope.cities = response.data;
    });

    $scope.openSearch = function() {
        $('#search').modal('show');
    };

    $scope.getData = function() {
        $scope.search.page = 1;
        jobs.init();
    };

    $scope.prevPage = function() {
        $scope.search.page = parseInt($scope.search.page) - parseInt(1);
        jobs.init();
    };

    $scope.nextPage = function() {
        $scope.search.page = parseInt($scope.search.page) + parseInt(1);
        jobs.init();
    };

    var jobs = {
        init: function () {
            rest.get('jobs', $scope.search).then(function(response){
                $scope.data = response.data;
            });
            $('#search').modal('hide');
        }
    };

    jobs.init();

});