angular.module('app')
    .config(function($routeProvider, $locationProvider) {

        $locationProvider.html5Mode(true);

        $routeProvider
            .when("/", {
                templateUrl : "partials/index.html"
            })
            .when("/login", {
                templateUrl : "partials/login.html",
                controller : "LoginCtrl"
            })
            .when("/register", {
                templateUrl : "partials/register.html",
                controller : "RegisterCtrl"
            })
            .when("/forgortPassword", {
                templateUrl : "reset_password.html",
                controller : "ResetCtrl"
            })
            .when("/user", {
                templateUrl : "app.html"
            })
            .when("/bank", {
                templateUrl : "back.html"
            })
            .when("/payament", {
                templateUrl : "banck.html"
            });

            $routeProvider.otherwise({redirectTo: '/login'});
});