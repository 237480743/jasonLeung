
    //左侧状态栏
    var floor=document.querySelectorAll('.floor');
    var btnss=document.querySelectorAll('.mao');
    obj=document.body.scrollTop==0?document.documentElement:document.body;
    var obj;
    obj = document.body.scrollTop == 0 ? document.documentElement : document.body;
    for(let i=0;i<floor.length;i++){
        btnss[i].onclick=function () {
            var ot=floor[i].offsetTop-50;
            // console.log(ot);
            animate(obj,{scrollTop:ot},500);
            for(var j=0;j<floor.length;j++){
                btnss[j].style.color="black";
            }
            btnss[i].style.color="red";
        }
    }
    //图片放大
    var img1=document.querySelectorAll('.lbw-c-c-l>img');
    var img2=document.querySelectorAll('.lbw-c-c-r-c1>img');

    for(let i=0;i<img1.length;i++){
        img1[i].onmouseover=function () {

            // img1[i].style.width='600px';
            animate(img1[i],{width:650},500);
        };
        img1[i].onmouseout=function () {
            animate(img1[i],{width:537},500);
        }

    }
    for(let i=0;i<img2.length;i++){
        img2[i].onmouseover=function () {
            // img1[i].style.width='600px';
            animate(img2[i],{width:250},500);
        };
        img2[i].onmouseout=function () {
            animate(img2[i],{width:195},500);
        }
    }



