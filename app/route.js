var app=angular.module("app1", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/course", {
        templateUrl : "templates/course.html",
        controller:"courseCtrl"
    })
    .when("/home", {
        templateUrl : "templates/home.html",
        controller:"homeCtrl"
    });
    
    });

app.controller("courseCtrl",function($scope) {
    $scope.courses=["php","AngularJS","Bootstrap","JavaScript"];
});
