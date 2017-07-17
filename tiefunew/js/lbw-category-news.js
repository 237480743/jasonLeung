var img1=document.querySelectorAll('.section-c-c-m>img');
var img2=document.querySelectorAll('.section-c-c-m');

for(let i=0;i<img1.length;i++){
    img1[i].onmouseover=function () {

        // img1[i].style.width='600px';
        animate(img1[i],{width:350},500);
    };
    img1[i].onmouseout=function () {
        animate(img1[i],{width:303},500);
    }

}

