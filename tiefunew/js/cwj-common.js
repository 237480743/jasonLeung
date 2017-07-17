/**
 * Created by Administrator on 2017/4/30.
 */

// 导航移入样式
var lis = document.querySelectorAll('.cwj-nav ul li');
var toTop = document.querySelector('.cwj-toTop');

console.log(toTop);

lis.forEach(function (value) {
    value.onmouseover =function () {
        this.classList.add('cwj-active');
    };
    value.onmouseout =function () {
        this.classList.remove('cwj-active');
    }
});




// 返回顶部
window.onscroll = function(){
    var obj = document.body.scrollTop ==0? document.documentElement:document.body;
    toTop.onclick = function(){
        animate(obj,{scrollTop:0},500);
    }
};


$(function () {

    $("img.lazy").lazyload({effect: "fadeIn"});


})