var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl : "templates/jobs.html"
        })
        .when("/details", {
            templateUrl : "templates/job-details.html"
        });
});