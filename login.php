Live Demo
<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i"
    />
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css" />

    <link rel="stylesheet" href="assets/css/styles.min.css" />
  </head>

  <body>
    <nav
      class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar"
    >
      <div class="container">
        <a href="#">Kerem Karaköse</a
        ><button
          data-toggle="collapse"
          class="navbar-toggler"
          data-target="#navcol-1"
        >
          <span class="sr-only">Toggle navigation</span
          ><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="index.html">Ana Sayfa</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link active" href="login.html">Giriş Yap</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="getting-started-info">
       
    </div>
    <h2>Kullanıcı adı ve şifre giriniz</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'g130910063@sakarya.edu.tr' && 
                  $_POST['password'] == '123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'g130910063@sakarya.edu.tr';
                  
                  echo 'You have entered valid use name and password';
                $URL="https://g130910063.000webhostapp.com/index2.html";
                echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

               }else {
                  $msg = 'Yanlış parola';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = g130910063@sakarya.edu.tr" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 123" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			         
      </div> 
  
      <footer class="page-footer dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h5>Footer</h5>
            <ul>
              <li><a href="#">Ana Sayfa</a></li>
              <li><a href="#">Giriş Yap</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
  </body>
</html>
