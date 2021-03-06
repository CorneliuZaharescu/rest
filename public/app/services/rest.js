app.factory('rest', ['$http', function($http) {
    var api_url ='http://localhost:8000/api/';
    return {
        get: function (controller, obj) {

            return $http.get(api_url + controller, {params: obj}).then(function(response){
                return response;
            });
        },
        getItem: function (controller, id) {
            return $http.get(api_url + controller + '/' + id).then(function(response){
                return response;
            });
        },
        post: function (controller, obj) {
            return $http.post(api_url + controller, obj).then(function(response){
                return response;
            });
        },
    };
}]);