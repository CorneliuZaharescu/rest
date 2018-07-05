var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            controller  : 'mainController',
            templateUrl : "templates/jobs.html"
        })
        .when("/jobs/:id", {
            controller  : 'jobController',
            templateUrl : "templates/job-details.html"
        });
});