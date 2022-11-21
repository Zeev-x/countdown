<script>
  var iend = new Date("Jan 1, 2023 00:00:00")
  var end = iend.getTime();
  var shiki = setInterval(function(){
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
    
    var result = day + " Days| " + hour + " Hours| " + min + " Minutes| " + sec + " Seconds ";
    document.getElementById('count').innerHTML = result
    document.getElementById('cend').innerHTML = iend
    if(dis < 0){
      closeInterval(shiki);
      document.getElementById('count').innerHTML = "EXPIRED";
    }
  },100);
  
 
 window.setTimeout("mori()", 1000);
 
 function mori(){
 
 var sslmt = document.getElementById('sel');
 var sdate = document.getElementById('date');
   
   setTimeout("mori()",1000);
   var time = new Date().getHours();
   
   if(time >= 1 && time < 10){sslmt.innerHTML = "Selamat Pagi"} else
   if(time >= 10 && time < 15){sslmt.innerHTML = "Selamat Siang"} else
   if(time >= 15 && time < 18){sslmt.innerHTML = "Selamat Sore"} else
   if(time >= 18 || time < 1){sslmt.innerHTML = "Selamat Malam"} else {
     sslmt.innerHTML = "Tengah Malam"
   }
   var tm = new Date();
   var months = ["Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
   var days = ["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
   var a = days[tm.getDay()];
   var b = tm.getDate();
   var c = months[tm.getMonth()];
   var d = tm.getFullYear();
   var e = tm.getHours();
   var f = tm.getMinutes();
   
   var rdate = a + "," + b + " " + c + " " + d + " | " + e + " : " + f
   sdate.innerHTML = rdate
 }
</script><br>
<h1><a id="sel">Loading...</a> User</h1>
<br>
<h3>New Year Countdown</h3>
<a id="count">Loading...</a>
<br>
<h6>Note : Perhitungan mungkin tidak sama dengan beberapa zona waktu.</h6>
<br>
<a id="date">Loading...</a>
<p>Countdown berakhir pada <a id="cend"></a></p>
<style>
  @font-face {
    font-family: digital;
    src: url("Demonized.ttf")
  }
  body {
    color: white;
    width: 95%;
    text-align: center;
    background-color: black;
    background-image: url("https://telegra.ph/file/41d135184c1cd142bebcb.jpg");
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-size: 30px;
    margin: auto;
  }
  h1,h3 {
    font-family: digital;
  }
  h6 {
    font-family: Monospace;
    font-size: 20px;
  }
  #count {
    background-color: #fffd00;
    border: black 5px solid;
    padding: 10px 20px;
    border-radius: 50px;
   /* font-size: 30px;  */
    color: black;
  }
  #date {
    font-size: 10px; 
    color: white;
    font-family: digital;
  }
  p {
    font-size: 20%;
    font-family: digital;
  }
  i {
    color: yellow;
  }
</style>