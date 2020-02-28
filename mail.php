<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Friday Knights</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <!-- Fonts / CSS -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:500,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/e9bf300c20.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="assets/img/logo.svg" alt="Friday Knights" class="img-fluid" width="120px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav" id="menu">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="podcast.html">Episodes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.html">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#connect">Connect</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--End of Nav-->

  <!--Stay Connected-->
  <div class="hero mt-5" id="connect">
    <div class="p-4 text-center">
      <div class="container">
        <h1 class="text-center">Message Sent !</h1>
        <div>
          <?php
            if(isset( $_POST['name']))
            $name = $_POST['name'];
            if(isset( $_POST['email']))
            $email = $_POST['email'];
            if(isset( $_POST['message']))
            $message = $_POST['message'];
            if ($name === ''){
              echo "Name cannot be empty.";
              die();
            } 
            if ($email === ''){
              echo "Email cannot be empty.";
              die();
            } 
            if ($message === ''){
            echo "Message cannot be empty.";
            die();
            }

            $content="From: $name \nEmail: $email \nMessage: $message";
            $to = "mailbag@fridayknights.fun, james@fridayknights.fun";
            $subject = "Friday Knight's Form Inquiry";
            $headers = "From: " . $email . "\r\n" . "Content-type: text/html;charset=UTF-8" . "\r\n";

            mail($to, $subject, $content, $headers);
            echo "email on its way, we will get back to you shortly";

          ?>
        </div>
        <a href="index.html" class="btn btn-success">Go Back</a>
      </div>
    </div>
    </div>
  <!--Footer-->
  <footer class="bg-highlight d-flex align-items-center">
    <div class="container">
      <div class="d-flex justify-content-between">
        <div class="connect">
          <a href="https://twitter.com/FridayKnights" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://discordapp.com/invite/QqbWE5N" target="_blank"><i class="fab fa-discord "></i></a>
          <a
            href="https://podcasts.apple.com/us/podcast/friday-knights-a-5e-dungeons-and-dragons-real-play-podcast/id1329864163?mt=2&app=podcast"><i
              class="fas fa-podcast"></i></a>
          <a
            href="https://play.google.com/music/m/It4m7itsmpzu3uh6a4fpebv5sc4?t=Friday_Knights_A_5e_Dungeons_and_Dragons_Real_Play_Podcast"><i
              class="fab fa-google-play"></i></a>
        </div>
        <div class="d-flex justify-content-end">
          <p>Copright &copy; Friday Knights 2019.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="assets/js/main.js" type="text/javascript"></script>

</body>

</html>
