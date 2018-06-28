var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            controller  : 'mainController',
            templateUrl : "templates/jobs.html"
        })
        .when("/details", {
            controller  : 'jobController',
            templateUrl : "templates/job-details.html"
        });
});