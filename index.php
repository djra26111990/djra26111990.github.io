<?php

if (!isset($_POST['submit'])) {

// form was submmitted
$thankYou="";
}

else

{

$recipient="djra26111990@gmail.com";
$subject="Mensaje de comentario recibido";
$sender=$_POST["sender"];
$senderEmail=$_POST["senderEmail"];
$message=$_POST["message"];

$mailBody="Nombre: $sender\nEmail: $senderEmail\n\n$message";
mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

$thankYou="<p>Gracias! su mensaje ha sido enviado!.</p>";

}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css">
  <title>Escena compañia de arte y teatro</title>
  </head>
  <body>
    <section class="section-top">
      <img src="/img/#" alt="Logo de escena">
      <div>
        <h1>Escena</h1>
        <h2>¿Quiénes Somos?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique eget est ut facilisis. Nulla quis ligula purus. Etiam dictum rhoncus lorem, eu egestas libero accumsan quis. Donec posuere bibendum nisi a rhoncus.</p>   
      </div>
    </section>
    <section class="section-play-meet">
      <div>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        <h1>Conoce</h1>
        <h3>Nullam sit amet leo cursus, rhoncus justo vitae, mollis diam. Proin gravida justo eu aliquet aliquet.</h3>
      </div>
    </section>
    <section class="section-clases">
      <h1>Clases</h1>
      <div>
        <h2>Niños</h2>
        <img src="#" alt="Niños">
        <p>Donec id lorem a justo ultricies malesuada. Aenean commodo sit amet metus gravida molestie. Cras nec nulla rhoncus, lacinia leo at, hendrerit odio.</p>
      </div>
      <div>
        <h2>Jóvenes</h2>
        <img src="#" alt="Jóvenes">
        <p>Donec id lorem a justo ultricies malesuada. Aenean commodo sit amet metus gravida molestie. Cras nec nulla rhoncus, lacinia leo at, hendrerit odio.</p>
      </div>
    </section>
    <section class="section-programa">
      <div>
        <h1>Programa Continuo</h1>
        <p>Nam a feugiat nulla, et interdum leo. Ut imperdiet consequat justo, sed ultrices dui ullamcorper eu. Ut fermentum vulputate libero, sed fringilla mi dapibus eu. In hac habitasse platea dictumst.</p>     
      </div>
    </section>
    <section class="section-contacto">
    
    <?=$thankYou ?>
    
    <form method="post" action="index.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
    </section>
    <footer class="footer">
        <h1>Siguenos en: </h1>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f fa-3x"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram fa-3x"></i></a></li>
        </ul>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha256-+xf9aJnHocnmrigq2hIDJGBSAnJdF5NH+Ooe5J2PHiI=" crossorigin="anonymous"></script>
    
    <script>
        //iniciamos rellax
    </script>
  </body>
</html>
