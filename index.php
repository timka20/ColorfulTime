<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>timka20 - ColorfulTime</title>
  <link rel="stylesheet" href="style.css">
  <script src="app.js"></script>
</head>
<body>
  <section>
    <div class="clock">
      <div class="container">
        <?php
            $ismobile = false;
            if(preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT'])) {
                echo '<p style="color: white; font-size: 24px; font-family: Montserrat; text-align: center;">Извините, ваше устройство не поддерживается.</p>';
            }
            else{ ?>
                <h2 id="hour">00</h2>
                <h2 class="dot">:</h2>
                <h2 id="minute">00</h2>
                <h2 class="dot">:</h2>
                <h2 id="second">00</h2>
                <span id="ampm">AM</span>
            <?php
            }
        ?>
        
      </div>
    </div>
  </section>
</body>
</html>


