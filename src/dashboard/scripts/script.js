const menu = document.getElementById('menu-label');
const sidebar = document.getElementsByClassName('sidebar')[0];

menu.addEventListener('click', function () {
  sidebar.classList.toggle('hide');
});

let list = document.querySelectorAll('.list-item');
for (let i = 0; i < list.length; i++) {
  list[i].onclick = function () {
    let j = 0;
    while (j < list.length) {
      list[j++].className = 'list-item';
    }
    list[i].className = 'list-item active';
  };
}

// jam digital
function UpdateClock() {
    var now = new Date();
    var dname=now.getDay(),
    mo=now.getMonth(),
    dnum=now.getDate(),
    yr=now.getFullYear(),
    hou=now.getHours(),
    min=now.getMinutes(),
    sec=now.getSeconds(),
    pe="AM";

    if (hou==0) {
        hou=12;
    }
    if (hou>12) {
        hou=hou-12;
        pe="PM";
    }
    Number.prototype.pad = function(digits){
        for(var n= this.toString(); n.length<digits; n = 0 + n);
        return n;
    }
    var months =["Januari","Febuari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember"];
    var weeks=["Minggu","senin","selasa","Rabu","Kamis","Jum'at","Sabtu"];
    var ids =["dayname","month","daynum","year","hour","minutes","second","Period"];
    var values=[weeks[dname],months[mo],dnum.pad(2),yr,hou.pad(2),min.pad(2),sec.pad(2),pe];
    for (var i = 0; i < ids.length; i++) 
    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    
}
function initClock() {  
    UpdateClock();
    window.setInterval("UpdateClock()",1);
}
