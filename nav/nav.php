<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <style>
    .navigation>.navbar {
      background: linear-gradient(to right bottom, #4CA1AF, #C4E0E5);
      width: 100%;
      position: fixed;
      z-index: 2;
      margin-top:-70px;
    }
    .navbar-brand {
      color: black;
    }
    .navbar-nav {
      margin-left: 1200px;
    }
    .navbar-nav a {
      color: black;
    }
    @media screen and (max-width: 1000px) {
      .navigation>.navbar {
        position: relative;
        margin-top:0px;
      }
      .navbar-nav {
        margin-left: 0px;
      }
      .navbar-toggler {
      width: 57px;
      color: rgba(0,0,0,.55);
      border-color: rgba(0,0,0,.1);
    }
  }

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">BIDDMART</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          <a class="nav-link active" aria-current="page" href="links/cart.php">Cart</a>
          <a class="nav-link active" aria-current="page" href="links/account.php">Account</a>
        </div>
      </div>
    </div>
  </nav>
</body>
</html>