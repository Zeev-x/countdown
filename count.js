var shiki = setInterval(function(){
        var end = new Date("Feb 17,2023 00:00:00").getTime();
        var now = new Date().getTime();
        var dis = end - now;
        
        var iday = dis / (1000*60*60*24);
        var ihour = (dis % (1000*60*60*24) / (1000*60*60));
        var imin = (dis % (1000*60*60) / (1000*60));
        var isec = (dis % (1000*60) / (1000));
        
        var day = Math.floor(iday);
        var hour = Math.floor(ihour);
        var min = Math.floor(imin);
        var sec = Math.floor(isec);
        
        var res = day + " Days| " + hour + " Hours| " + min + " Minutes| " + sec + " Seconds ";
        document.getElementById('count').innerHTML = res;
        
        if(dis < 0){
          closeInterval(shiki);
          document.getElementById('count').innerHTML = "Selamat Ulang Tahun";
        }
      },1000);
