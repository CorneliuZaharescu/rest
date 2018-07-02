app.factory('rest', ['$http', function($http) {
    var api_url ='http://localhost:8000/api/';
    return {
        get: function (controller) {
            return $http.get(api_url + controller).then(function(response){
                return response
            });
        },
        getItem: function (controller, id) {
            return $http.get(api_url + controller + '/' + id).then(function(response){
                return response
            });
        }
    };
}]);