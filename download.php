<html>
<body>

  <head>

  <title>Kissanime Downloader</title>

  <link rel="stylesheet" href="style.css">

  <link rel="icon" type="image/x-icon" href="favicon.ico">

  </head>

  <body>

  <div id=body>

  <h1>Kissanime Downloader</h1>

  URL: <?php echo $_POST["url"]; ?>
  <?php
  $location = "C:/wamp/www/files/Anime/"
  $out = str_ireplace("https://kissanime.com/anime/", "", $_POST["url"]);
  $out = str_ireplace("https://kissanime.to/anime/", "", $_POST["url"]);
  echo "<br>";
  echo "Anime name: " . $out;
  shell_exec("Start-Job python kad.py " . $_POST["url"] . " " . $location . $out);
  ?>


  </div>

</body>
</html>
