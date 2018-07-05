app.controller('mainController', function($scope, $http, rest) {

    $scope.search = {
        "category_id": "",
        "city_id": "",
        "start_date": "",
        "end_date": "",
        "keyword": ""
    }

    var page = 1;

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
        rest.post('jobs/search', $scope.search).then(function(response){
            $scope.data = response.data;
            $('#search').modal('hide');
        });
    };

    $scope.prevPage = function() {
        page = parseInt(page) - parseInt(1);
        jobs.init();
    };

    $scope.nextPage = function() {
        page = parseInt(page) + parseInt(1);
        jobs.init();
    };

    var jobs = {
        init: function () {
            rest.get('jobs', page).then(function(response){
                $scope.data = response.data;
            });
        }
    };

    jobs.init();


});