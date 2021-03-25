function countTime() {  
    var date = new Date();  
    var now = date.getTime();
    var str="1953/7/27 00:00:00";
    var endDate = new Date(str); 
    var end = endDate.getTime();  
    
    var leftTime = now-end;   
    var d,h,m,s;  
    if (leftTime>=0) {  
        d = Math.floor(leftTime/1000/60/60/24);  
        h = Math.floor(leftTime/1000/60/60%24);  
        m = Math.floor(leftTime/1000/60%60);  
        s = Math.floor(leftTime/1000%60);                     
    }  
    document.getElementById("_d").innerHTML = d+"天";  
    document.getElementById("_h").innerHTML = h+"时";  
    document.getElementById("_m").innerHTML = m+"分";  
    document.getElementById("_s").innerHTML = s+"秒";  
    setTimeout(countTime,1000);  
}