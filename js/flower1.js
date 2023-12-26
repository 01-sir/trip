(function(){
    var F_item = document.querySelectorAll(".F_item");
var curId = 1;
for(var i = 0; i < F_item.length; i++){
    F_item[i].classList.add(`F_${curId}`); 
    curId++; 
}

function $(selector){
    return document.querySelector(selector);
}
var click = $("#click");
var aixin = $("#aixin");
var i_aixin = $("#i_aixin");
var icon = $("#aixin .iconfont");
// 点击事件
var curTarge = 134;
click.onclick = function(){
    curTarge++;
    // 在点击的时候爱心发生变化
    click.onmousedown = function(){
        icon.style.color = 'red';
        click.onmouseup = function(){
            icon.style.color = "white";
            i_aixin.innerHTML = `${curTarge}`;
            click.onmousedown = null;
        }
    }
}
})();


// 在点击时要变化的那个线条
var type_nav = document.getElementsByClassName("type_ul")[0];
var type_img = document.querySelectorAll(".type_img");
for(let i = 0; i < type_nav.children.length; i++){
    type_nav.children[i].onclick = function(){
        // 判断是否除了现在还有其他元素有做这个类
        open();
        type_nav.children[i].className = "active";
        type_img[i].classList.add("block");
    }
}
function open(){
    var active = document.querySelectorAll(".active");
    var block = document.querySelectorAll(".type_img .block");
    if(active ||block){
        for(var i = 0; i < type_nav.children.length; i++){
            type_nav.children[i].className = "";
            type_img[i].className = "type_img";
        }
    }
}