<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>CountDown</title>
  </head>
  <body>
    <script>
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
    </script><br><br>
    <h1>Countdown</h1><br>
    <a id="count"></a>
    <br><br><br>
    <p>© Copyright Lynch 2022</p>
    <style>
      body {
        text-align: center;
        color: white;
        background-color: black;
        font-size: 25px;
        height: 90vh;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url("https://waifu2x.booru.pics/outfiles/9d5d079fd41672abda3f57c3231dfd2689c82bd2_s2_n2.jpg");
      }
      #count {
        border: white 4px solid;
        padding: 10px 20px;
        border-radius: 30px;
      }
      p {
        font-size: 30%;
      }
    </style>
  </body>
</html>
