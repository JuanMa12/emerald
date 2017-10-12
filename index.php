<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Emerald</title>
    <link rel="shortcut icon" type="image/png" href="./images/logo.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 banner">
          <img src="./images/logo.png" class="logo center-block img-responsive" alt="">
        </div>
        <div class="col-md-12 not-margin">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="./images/slide1.jpeg" alt="1">
                </div>

                <div class="item">
                  <img src="./images/slide2.jpeg" alt="2">
                </div>

                <div class="item">
                  <img src="./images/slide3.jpeg" alt="3">
                </div>
              </div>

              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <div class="col-md-12 text-center">
          <h2>Completa el formulario</h2>
        </div>
        <div class="contact">
              <div class="col-md-6 m-30">
                  <form class="" action="../controllers/store.php" method="post">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="Tu Nombre" class="form-control in" required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Tu Correo" class="form-control in" required>
                    </div>
                    <div class="form-group">
                      <input type="number" name="phone" placeholder="Tu telefono" class="form-control in" required>
                    </div>
                    <div class="form-group">
                      <textarea name="message" class="form-control text-tarea in" placeholder="Tu Mensaje" required></textarea>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" name="" required>
                        <span for="" class="label-acepto">Acepto terminos y condiciones</span>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="button">Enviar</button>
                    </div>

                  </form>
              </div>
              <div class="col-md-6 m-30">
                <img src="./images/contacto.jpeg" class="img-responsive img-contact center-block" alt="">
              </div>
          </div>
          <div class="col-md-12 text-center footer">
            <p>Emeral Studio - 2017 - Todos los derechos son reservados.</p>
          </div>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
