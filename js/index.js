// 初始化
function $(selector){
    return document.querySelector(selector);
}
// 动画函数
/**
 * 传入一个对象；
 * @param {object} obj 
 */
function createAnimtion(obj){
    var form = obj.from;
    var to = obj.to;
    var durtion = obj.durtion || 2000;
    var times = obj.times || 15;
    var once = Math.floor(durtion / times);
    var dis = (to - from) / once;
    var curIndex = 0
    var anmintionId = null;
    anmintionId = setInterval(function(){
        curIndex++;
        form += dis;
        if(once === curIndex){
            // 关闭计时器
            clearInterval(anmintionId);
            // 执行最后的结束的函数
            obj.onend && obj.onend();
        }
        // 没有就执行这里的函数
        obj.onmove && obj.onmove(from); 
    },times);
}
// dom
var banner = $(".main-banner");
var bannerImg = $(".main-banner img");
var bannerLeft = $("#left");
var bannerRight = $("#right");
// 轮播图
var curTargetImg = 1;
var durtion = 2000;
var timeId = null;
function inti(){
    if(timeId){
        return;
    }
    timeId = setInterval(function(){
        bannerImg.src = `./images/banner${curTargetImg}.jpg`;
        curTargetImg++;
        curTargetImg = curTargetImg % 3 + 1;
    },durtion);
}
function createImg(curTargetImg){
    console.log(curTargetImg);
    bannerImg.src = `./images/banner${curTargetImg}.jpg`;
}
// 向前
function prev(){
    curTargetImg++;
    if(curTargetImg > 3){
        curTargetImg = 1;
    }
    createImg(curTargetImg);
}

// 向后
function next(){
    curTargetImg--;
    if(curTargetImg < 1){
        curTargetImg = 3;
    }
    createImg(curTargetImg);
}
bannerLeft.onclick = next;
bannerRight.onclick = prev;
// 开始
function strat(){
    inti();
}
// 停止
function stop(){
    clearInterval(timeId);
    timeId = null;
}
strat();
banner.onmouseenter = stop;
banner.onmouseleave = strat;