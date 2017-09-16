<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT-Gymnasiet Kristianstad</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <section id="hero">
      <div class="container">
        <div class="row">
         
          <div class="col-md-5 col-md-offset-1">
            <h1>Välkommen till ITG Kristianstads Elevportal!</h1>
            <h2 class="pt10">Support, info, guider &amp; nyheter för dig som går på IT&#8209;Gymnasiet i Kristianstad.</h2>
          </div><!-- ./col-md-5 -->

          <div class="col-md-5 col-md-offset-1">

            <div class="hero-cta-login">

              <div class="hero-cta-title">
                Logga in på Mina Sidor
              </div>

              <div class="pt20 pb20 pr20 pl20">
                <div class="form-group">
                  <label for="username">Användarnamn</label>
                  <input type="text" class="form-control" id="username" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="pwd">Lösenord</label>
                  <input type="password" class="form-control" id="pwd">
                </div>
                <input class="btn btn-primary" type="submit" value="Logga in">
                <!-- <span class="pl10">Du loggar in med ditt learnet-konto.</span> -->
              </div>

            </div><!-- /.hero-cta-login -->
          </div><!-- /.col-md-6 -->

        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-4">
          <a class="link-no-style" href="#">
            <div class="intro-block bg-primary text-center">            
                <i class="fa fa-wrench"></i>
                <div class="intro-block-title mt20 mb20">Support</div>
                <div class="intro-block-paragraph">Startar inte datorn? Glömt lösenordet? Vill du byta bakgrundsbild? We love support!</div>
            </div><!-- /.intro-block bg-primary -->
          </a>  
          </div><!-- /.col-md-4 -->
          
          <div class="col-md-4">
            <div class="intro-block bg-pink text-center">
              <i class="fa fa-newspaper-o"></i>
              <div class="intro-block-title mt20 mb20">Nyheter</div>
              <div class="intro-block-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, doloribus similique.</div>
            </div><!-- /.intro-block bg-primary -->
          </div><!-- /.col-md-4 -->

          <div class="col-md-4">
            <div class="intro-block bg-yellow text-center">
              <i class="fa fa-book"></i>
              <div class="intro-block-title mt20 mb20">Guider</div>
              <div class="intro-block-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, doloribus similique.</div>
            </div><!-- /.intro-block bg-yellow -->
          </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <section class="bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Senaste artiklarna</h2>
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.bg-secondary -->

    <?php include 'views/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>