app.factory('rest', ['$http', function($http) {
    var api_url ='http://localhost/api/v1/';
    return {
        get: function (controller) {
            return $http.get(api_url + controller);
        }
    };
    return {
        getItem: function (controller, id) {
            return $http.get(api_url + controller + '/' + id);
        }
    };
}]);