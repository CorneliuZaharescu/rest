app.factory('rest', ['$http', function($http) {
    var api_url ='http://localhost/api/v1/';
    return {
        get: function () {
            return $http.get(api_url+'jobs');
        }
    };
}]);