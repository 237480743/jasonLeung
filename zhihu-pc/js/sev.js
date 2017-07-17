var sev = angular.module("sev",[]);
sev.factory("api",function ($http, $q) {
    return {
        getNav:(function () {
            var d = $q.defer();
            $http({
                url:'php/lian.php?url=http://news-at.zhihu.com/api/4/themes'
            }).then(function (data) {
                d.resolve(data)
            });
            return d.promise
        })(),
        getNavInfo:(function () {
            var d = $q.defer();
            $http({
                url: 'php/lian.php?url=http://news-at.zhihu.com/api/4/news/latest'
            }).then(function (data) {
                d.resolve(data)
            });
            return d.promise
        })(),
        getList:function (id) {
            var d = $q.defer();
            $http({
                url: 'php/lian.php?url=http://news-at.zhihu.com/api/4/theme/'+id
            }).then(function (data) {
                d.resolve(data)
            });
            return d.promise
        },
        getShow:function (id) {
            var d = $q.defer();
            $http({
                url: 'php/lian.php?url=http://news-at.zhihu.com/api/4/news/'+id
            }).then(function (data) {
                d.resolve(data)
            });
            return d.promise
        }
    }

});
