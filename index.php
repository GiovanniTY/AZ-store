<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="main.css"rel="stylesheet">
    <link href="assets/css/style.css"rel="stylesheet">
    <title>AZ_Store</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid justify-content-between">
    <a class="navbar-brand spacer custom-text-color" href="#">AZ[store]</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
<<<<<<< HEAD
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Product</a>
        <a class="nav-link" href="#">Contact</a>
        <a class="nav-link disabled login" aria-disabled="true">Login</a>
=======
        <a class="nav-link" href="?c=products">Product</a>
        <a class="nav-link" href="?c=cart">cart</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        <a class="nav-link disabled" aria-disabled="true">Login</a>
>>>>>>> afea0e6fa7f4dd3fca7f05284efdc49560494962
      </div>
    </div>
  </div>
</nav>
<<<<<<< HEAD
    <main>
      <div class="shoe">
        <p>
        SHOE THE
        </p>
        <p>RIGHT <span class="one">ONE</span>.
        </p>
        <button class="btn btn-primary btn-sm">See our store</button>
      </div>
      <div class="nike">
        <img class="shoe1" src="shoe_one.png">
        NIKE
      </div>
    </main>
=======
    <?php

    $c = $_GET['c'];
    $a = $_GET['a'];
   
    function getPath($page) {
    
      require __DIR__ . "/pages/".$page.".php";
  }

  if (!isset($c)) {
    header("LOCATION: ?c=home");
  }
    switch ($c) {
      case 'home':
        getPath('home');
        break;
      case 'cart':
        getPath('cart');
        break;
      case 'products':
        getPath('products');
        break;
      // pour ajouter une page rajouter un case en suivant les exemples précèdents
      default:
        getPath('404');
        break;
    }
    ?>
   
>>>>>>> afea0e6fa7f4dd3fca7f05284efdc49560494962
</body>
</html>