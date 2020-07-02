<!DOCTYPE html>
<html>
  <title>Pizza</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Raleway"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <style>
    body,
    h1 {
      font-family: "Raleway", Arial, sans-serif;
    }
    h1 {
      letter-spacing: 6px;
    }
    .w3-row-padding img {
      margin-bottom: 12px;
    }
  </style>
  <body>
    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width: 1500px;">
      <!-- Header -->
      <header
        class="w3-panel w3-center w3-opacity"
        style="padding: 128px 16px;"
      >
      <h1 class="w3-xlarge">COMIDA</h1>
      <h1>CHATARRA</h1>

        <div class="w3-padding-32">
          <div class="w3-bar w3-border">
          <a href="index.php" class="w3-bar-item w3-button">Hamburguesa</a>
            <a href="hotdog.php" class="w3-bar-item w3-button w3-light-grey"
              >Hot Dog</a
            >
            <a href="pizza.php" class="w3-bar-item w3-button">Pizza</a>
            <a href="listado.php" class="w3-bar-item w3-button w3-light-grey"
              >Listado de suscripciones</a>
             
          </div>
        </div>
      </header>

      <!-- Photo Grid -->
      <div class="w3-row-padding " style="margin-bottom: 128px;">
        <div class="w3-half">
          <img src="img/pizza/1.png" style="width: 100%;" />
          <img src="img/pizza/2.jpg" style="width: 100%;" />
          <img src="img/pizza/3.jpg" style="width: 100%;" />
          
        </div>

        <div class="w3-half">
          
          <img src="img/pizza/4.jpg" style="width: 100%;" />
          <img src="img/pizza/5.jpg" style="width: 100%;" />
          <img src="img/pizza/6.jpg" style="width: 100%;" />
          
        </div>
      </div>
      <!-- formulario -->

      <div class="w3-content w3-panel w3-center " style="max-width: 1500px;">
        <h1 class="w3-xlarge">¡Suscribete!</h1>

        

        <div class="container">
          <form method="post">
            
            <input type="text" name="name" placeholder="Nombre completo">
        
            <input type="email"  name="email" placeholder="Correo electronico">
        
            <input type="submit" name="register">
          </form>
         <?php
            include("registro.php")
         ?>
        </div>
      </div>

      <!-- End Page Content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
       
      <p>
        Proyecto final de redes de computadoras
         
      </p>
    </footer>
  </body>
</html>
