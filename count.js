var shiki = setInterval(function(){
  var scount = document.getElementById("count");
  var end = new Date("Jan 1,2023 00:00:00").getTime();
  var now = new Date().getTime();
  var dist = end - now;
  
  var iday = dist / (1000*60*60*24);
  var ihour = (dist % (1000*60*60*24) / (1000*60*60));
  var imin = (dist % (1000*60*60) / (1000*60));
  var isec = (dist % (1000*60) / (1000));
  
  var day = Math.floor(iday);
  var hour = Math.floor(ihour);
  var min = Math.floor(imin);
  var sec = Math.floor(isec);
  
  var result = day + " Days| " + hour + " Hours| " + min + " Minutes| " + sec + " Seconds ";
  scount.innerHTML = result;
  
  if(dist < 0){
    closeIntervall(shiki);
    scount.innerHTML = "Happy New Year";
  }
  
  var sa = new Date().getHours();
  var sb = ["Selamat Pagi","Selamat Siang","Selamat Sore","Selamat Malam","Tengah Malam"];
  var sc = document.getElementById("selamat");
  if(sa >= 1 && sa < 10){
    sc.innerHTML = sb[0];
  } else if(sa >= 10 && sa < 15){
    sc.innerHTML = sb[1];
  } else if(sa >= 15 && sa <18){
    sc.innerHTML = sb[2];
  } else if(sa >= 18 || sa <1){
    sc.innerHTML = sb[3];
  } else {
    sc.innerHTML = sb[4];
  }
},1000);