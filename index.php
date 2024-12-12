<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortopedia Ortomott - Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php include 'inc/header.php'; ?>
</header>

<body>
    <div class="conteudo">

    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext"></div>
		  <img src="img/frente.jpg" style="width:100%">
        <div class="text"></div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext"></div>
       <img src="img/dentro1.jpg" style="width:100%">
        <div class="text"></div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="img/dentro2.jpg" style="width:100%">
        <div class="text"></div>
      </div>
	
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(0)"></span>
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>

        <p class="conteudo__texto">Nossa empresa atua no ramo de produtos ortopédicos, hospitalares, fisioterápicos, para estética e recentemente calçados anatômicos de conforto. Atendemos Ibirubá e região desde 1996 e estamos situados com fácil acesso, no centro.</p>

        <p></p>
    </div>
</body>

<footer>

    <?php include 'inc/footer.php'; ?>

</footer>

<script src="js/slide.js"></script>

</html>