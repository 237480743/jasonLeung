var app = angular.module("app",["ctrl","sev","ngRoute","ngSanitize"]);
app.run(function ($rootScope,api) {
    var id;
        api.getNav.then(
        function(data){
            $rootScope.nav=data.data.others;
        }
    );
    api.getNavInfo.then(
        function (data) {
            $rootScope.indexlist=data.data.stories;
        }
    )

});
app.config(function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl:"tmp/home.html",
    }).when('/list/:id',{
        templateUrl:"tmp/list.html",
        controller: "navList"
    }).when('/show/:id',{
        templateUrl:"tmp/show.html",
        controller: "show"
    })
});




// .when('/list/:index',{
//     templateUrl:"tmp/list.html",
//     controller: "list"
// }).when('/show/:id/:index',{
//     templateUrl:"tmp/show.html",
//     controller:'show'
// }).when('/lian/:data',{
//     templateUrl:"php/lian.php",
//     controller:'home'
// }).

