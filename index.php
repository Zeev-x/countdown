<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>lynch.co.id</title>
  </head>
  <body>
    <br><br><br><br>
    <h1 id="selamat">W E L C O M E</h1>
    <div class="content"><br>
      <h3>New Year Countdown</h3>
      <br>
      <a id="count">Loading...</a>
      <br><br>
      <i>Note : Perhitungan mungkin tidak berlaku di beberapa zona waktu</i>
      <br><br>
      <br><br><hr>
      <footer>© Copyright Lynch 2022</footer>
    </div>
    <script src="count.js"></script>
    <script>
      var r = Math.floor(Math.random()*3);
      var bg = [
               "https://waifu2x.booru.pics/outfiles/ff4fcf0b47eeda20ef3a3448eb815fea17eb375a_s2_n2.jpg",
               "https://telegra.ph/file/41d135184c1cd142bebcb.jpg",
               "https://waifu2x.booru.pics/outfiles/9d0231d46fd7620190fbc0b2dce8c7a3dcb6d523_s2_n2.jpg",
               ];
     var result = bg[r];
      document.write(`<style>
      body {
  background-color: black;
  text-align: center;
  color: white;
  height: 90vh;
  margin: auto;
  width: 75%;
  background-image: url(${result});
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font-family: myfont;
}
</style>`)
    </script>
  </body>
</html>
