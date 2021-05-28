<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="/img/logo.png" type="image/png">
	<title>
		ZUBRSOFT
	</title>
	<link rel="stylesheet" href="css/style.css">
    
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
   
<body>
    <header>
    <div class="logo1">
      <a href="index.html"><img class="graficlogo" style="position: relative; width: 100px; height: 100px;" src="img\LOGO.png"> </a>  
      <div class="social">
    </div>    
    </div>
    <nav>
      <div class="topnav" id="myTopnav">
        <a id="menu" href="#" class="icon"> &#9776; </a>
        <a href="aboutus.html">О НАС</a>
        <a href="services.html">СЕРВИС</a>
        <a href="industry.html">ИНДУСТРИЯ</a>
        <a href="partners.html">ПАРНЁРЫ</a>
        <a href="blog.html">БЛОГ</a>
        <a href="contacts.html">КОНТАКТЫ</a>
      </div>
    </nav>
  </header>
 
	<main>
    <?php
    if($_COOKIE['user'] == ''):
    ?>
<div class="container_2">
  <form action="php/auth.php" method="post">
    <div class="row">
      <h2 style="text-align:center">ВОЙТИ</h2>
      <div class="vl">
        <span class="vl-innertext"></span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Войти с Facebook
        </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Войти с Twitter
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Войти с Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p></p>
        </div>

        <input type="text" name="login" id="login" placeholder="Логин" required>
        <input type="pass" id="pass" name="pass" placeholder="Пароль" required>
        <input type="submit" value="Войти">
      </div>

    </div>
  </form>
</div>
<?php else: ?>
  <p> в сети <?=$_COOKIE ['user']?> <a href="#"> выйти </p>
<?php endif; ?>
<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="reg.html" style="color:white" class="btn">Регистрация</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Забыли пароль?</a>
    </div>
  </div>
</div>

</main>
<footer>
  <nav>
        <div class="topnav_33" id="myTopnav">
        <a href="aboutus.html">О НАС</a>
        <a href="services.html">СЕРВИС</a>
        <a href="industry.html">ИНДУСТРИЯ</a>
        <a href="partners.html">ПАРНЁРЫ</a>
        <a href="blog.html">БЛОГ</a>
        <a href="contacts.html">КОНТАКТЫ</a>
        </div>
  </nav>

  <div class="logo">
    <a href="index.html"> <img class="graficlog_1" src="img/LOGO.png" alt="" style="position: relative; width: 100px; height: 100px";> </a>
  </div>

    <div class="social">
      <a href="https://vk.com/zubrsoft"> <img src="img/vk.png" alt="" width="50" height="50"> </a>
      <a href="https://www.instagram.com/zubrsoft/"> <img src="img/inst.png" alt="" width="50" height="50"> </a>
      <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQF994vg7YpmkgAAAXmBhxRAH6J_iYOpjJcGpN92csLbll-_hseiQNnQqzMCh3tOpkUuXDQhtQsumoLvjqqfbGPqxYPg7s_3X27uvXYo1V-E5naZZV51vQzXVHMGPB8iDcYe1jQ=&originalReferer=https://zubrsoft.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F18335400%2F"> <img src="img/in.png" alt="" width="50" height="50"> </a>
      <a href="https://www.facebook.com/zubrsoft"> <img src="img/face.png" alt="" width="50" height="50"> </a>
      <a href="https://twitter.com/ZubrSoft"> <img src="img/twitter.png" alt="" width="50" height="50"> </a>
       <p>ДИПЛОМНЫЙ ПРОЕКТ ВЕРИНСКИЙ Д.Ю. Т-793 2021</p>
    </div>
   
</footer>
	<script src="js/skript.js"></script>
</body>
</html>

