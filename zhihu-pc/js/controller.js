var ctrl = angular.module("ctrl",[]);
// ctrl.controller('nav',function ($scope,api) {
//     api.getNav.then(
//         function(data){
//             $scope.nav=data;
//         });
//     console.log($scope.nav);
// });
ctrl.controller('navList',function ($scope, $routeParams,api) {
   api.getList($routeParams.id).then(
       function (data) {
           $scope.data =data.data.stories;
       }
   );
});
ctrl.controller("show",function ($scope, $routeParams,api) {
    api.getShow($routeParams.id).then(
        function (data) {
            console.log(data.data)
            $scope.data =data.data;
        }
    );
});
