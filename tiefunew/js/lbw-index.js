

$(function () {
            $("img.lazy").lazyload({effect: "fadeIn"});
})

//轮播图
// banner轮播图
var dian1=document.querySelectorAll(".ly-dian1");
var banner222=document.querySelectorAll("#ly-banner");
for(let i=0;i<dian1.length;i++){
    dian1[i].onmouseover=function(){
        for(let j=0;j<banner222.length;j++){
            // alert(1);
            dian1[j].style.background="#fff";
            banner222[j].style.opacity="0";
            banner222[j].style.zIndex="0";
        }
        dian1[i].style.background="#C77C51";
        banner222[i].style.opacity="1";
        banner222[i].style.zIndex="1";
        num=i;
    }
}
// banner自动换图
var num=0;
var t1=setInterval(ww,3000)
function ww(){
    num++;
    if(num==dian1.length){
        num=0;
    }
    if(num==-1){
        num=dian1.length-1;
    }
    for(let j=0;j<banner222.length;j++){
        dian1[j].style.background="#fff";
        banner222[j].style.opacity="0";
        banner222[j].style.zIndex="0";
    }
    banner222[num].style.opacity="1";
    banner222[num].style.zIndex="1";
    dian1[num].style.background="#C77C51"
}
var bannerbox=document.getElementsByClassName("ly-lunbo")[0];
bannerbox.onmouseover=function () {
    clearInterval(t1);
};
bannerbox.onmouseout=function () {
    t1=setInterval(ww,3000);
}
//	banner图箭头切换
var next=document.querySelector(".ly-jt-right222");
var prev=document.querySelector(".ly-jt-left222");
console.log(next);
next.onclick=function () {
    // alert(1);
    ww();
}
prev.onclick=function () {
    num-=2;
    ww();
}


















