var list = angular.module("list",[]);

list.directive('lists',function () {
   return {
       scope:{
           data:"=",
       },
       templateUrl:"home.html",
       controller:function ($scope) {
           $scope.isShow = true;
           $scope.showis = false;
           $scope.isshow = function (v) {
               $scope.shown = v;
               $scope.isShow = false;
               $scope.showis = true;
           }
       }
   }
});
list.directive('shows',function () {
    return {
        scope:{
            data:"=",
        },
        templateUrl:"show.html"
    }
});
