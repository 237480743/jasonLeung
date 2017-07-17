    window.onload=function () {
        var gsfont=document.querySelectorAll(".gs-font");
        var showbox=document.querySelectorAll(".gs-right>a");
        //兼容火狐和谷歌
        var obj=document.documentElement.scrollTop==0?document.body:document.documentElement;
        gsfont.forEach(function (v,i) {
            v.onmouseover=function(){
                this.classList.add("gs-bcircle");
            };
            v.onmouseout=function(){
                this.classList.remove("gs-bcircle");
            };
            v.onclick=function () {
                var h=showbox[i].offsetTop;
                animate(obj,{scrollTop:h},500);
            }
        });



        //结束
    };
