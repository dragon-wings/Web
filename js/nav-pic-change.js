//变量声明
var container = document.getElementById("container");
var pointer = document.getElementById("pointer");
var right = document.getElementById("right");
var left = document.getElementById("left");

var image = container.children[0];
var ol = image.children[1];
var ul = image.children[0];

var imagesize = image.offsetWidth;
var pic = 0;

right.onclick = picturechange;
left.onclick = despicturechange;

//每次切换图片的控制函数
function change(element, target) {
    clearInterval(element.timeId);
    element.timeId = setInterval(function () {
        var current = element.offsetLeft;
        var step = 20;
        step = current < target ? step : -step;
        current += step;
        if (Math.abs(current - target) > Math.abs(step)) {
            element.style.left = current + "px";
        } else {
            clearInterval(element.timeId);
            element.style.left = target + "px";
        }
    }, 1);
}

function picturechange() {
    if (pic == ul.children.length - 1) {
        pic = 0;
        ul.style.left = 0 + "px";
    }
    pic++;
    change(ul, -pic * imagesize);
    if (pic == ul.children.length - 1) {
        ol.children[ol.children.length - 1].className = "";
        ol.children[0].className = "current";
    } else {
        for (var i = 0; i < ol.children.length; i++) {
            ol.children[i].removeAttribute("class");
        }
        ol.children[pic].className = "current";
    }
}

function despicturechange(){
    if (pic==0){
        pic=ul.children.length-1;
        ul.style.left=-pic*imagesize+"px";
    }
    pic--;
    change(ul,-pic*imagesize);
    for (var i = 0; i < ol.children.length; i++) {
        ol.children[i].removeAttribute("class");
    }
   
    ol.children[pic].className = "current";
}

function stopInterval(){
    pointer.style.display = "block";
    clearInterval(timeId);
}

function startInterval(){
    pointer.style.display="none";
    timeId=setInterval(picturechange,3000);
}

//根据图片的个数创建索引
for(var i = 0;i < ul.children.length;i ++){
    var li = document.createElement("li");
    ol.appendChild(li);
    li.innerText = (i + 1);
    li.setAttribute("index",i);
    //当鼠标放在索引上执行
    li.onmouseover = function(){
        for (var j = 0; j < ol.children.length; j++) {
            ol.children[j].removeAttribute("class");
        }
        this.className = "current";
        pic = this.getAttribute("index");
        change(ul, -pic * imagesize);
    }
}
//主函数
ol.children[0].className = "current";
ul.appendChild(ul.children[0].cloneNode(true));
var timeId=setInterval(picturechange,3000);

container.onmouseover = stopInterval;
container.onmouseout = startInterval;

(function(window, document){
    $(function () {
        var one = $("#one").offset().top;
        var two = $("#two").offset().top;
        var three = $("#three").offset().top;
        var four = $("#four").offset().top;
        var five = $("#five").offset().top;
        var six = $("#six").offset().top;
        $("#1st").click(function () {
            $('html,body').animate({scrollTop:one},1000);
        });
        $("#2nd").click(function(){
            $('html,body').animate({scrollTop:two},1000);
        });
        $("#3rd").click(function(){
            $('html,body').animate({scrollTop:three},1000);
        });
        $("#4th").click(function(){
            $('html,body').animate({scrollTop:four},1000);
        });
        $("#5th").click(function(){
            $('html,body').animate({scrollTop:five},1000);
        });
        $("#6th").click(function(){
            $('html,body').animate({scrollTop:six},1000);
        });
    })
})(window, document);


var subbox = document.getElementsByClassName("jinianleft")[0];
var list = subbox.getElementsByTagName("li");

opacity(0);
var tag = 1;

time = setInterval(lunbo,2500);
subbox.onmouseover = function(){
    clearInterval(time);
}
subbox.onmouseout = function(){
    time = setInterval(lunbo, 2500); 
}

function opacity(i){
    for(var j = 0;j<3;j++){
        list[j].style.opacity = "0";
        list[j+3].className = "";
    }

    list[i].style.opacity = "1";
    list[i+3].className = "current";
}
function lunbo(){
    opacity(tag);
    if(tag == 2){
        tag = 0;
    }else{
        tag++;
    }
}

clickTag(3);
clickTag(4);
clickTag(5);

function clickTag(msl) {
    list[msl].onclick = function(){
        opacity(msl-3);
    }
}






