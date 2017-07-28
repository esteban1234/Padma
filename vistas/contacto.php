<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
  <nav class="pull-left">
    <ul>
      <a class="enlaces" href="../index.php">INICIO</a>
      <a class="enlaces" href="nosotros.php">NOSOTROS</a>
      <a class="enlaces" href="servicios.php">SERVICIOS</a>
      <a class="enlaces" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>
  <figure class=" logo pull-right">
    <img src="../img/padma.png" class="img-responsive" alt="">
  </figure>

  <div class="menu-op">
    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
  </div>
</header>

<div class="banner4">
    <div class="fondo4">
    	<p >CONTACTO</p>
    	<!-- <div style="text-align: center; margin-top: 5%;">
      <a style="color: #fff;" class="btn btn-danger btn-outline btn-lg" href="contacto.php">CONTACTANOS</a>
    </div> -->
    </div>
</div>
<br>	<br><br>
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Contáctanos</h2> <br><br>
              <p>Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p> <br><br>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                  <form class="form-horizontal" onSubmit="return false">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre Completo</label>
                      <input type="text" class="form-control" id="txtNOMBRE" placeholder="Escribe tu nombre completo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="txtCORREO" placeholder="Escribe tu correo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTel2">Teléfono</label>
                      <input type="text" class="form-control" id="txtTELEFONO" placeholder="Escribe tu numero de Teléfono">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  class="form-control" id="txtCOMENTARIO" placeholder="Escribe tu Mensaje"></textarea>
                   </div>
                   <div id="_AJAX_PRE_"></div>
                    <button type="submit" class="btn btn-default" onclick="sendCORREO()">Enviar Mensaje</button>
                  </form> <br>	<br>

                  <hr> <br>	<br>


                </div>
              </div>
            </div>
        </div>
      </section>

      <div class="container">
	<div class="row">
	<h3 class="text-center">Información adicional</h3> <br><br>
    <div class="col-xs-12 col-sm-12 col-md-3">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color: rgba( 33, 47, 60 , 0.9)">
            <center><i class = "fa fa-clock-o" style="color:#fff"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4 class="text-center">Lunes a Viernes de 9am a 6pm
            <div class="pull-right badge" id="WrControls"></div></h4>
          </div>
        </a>
      </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(81, 90, 90, 0.9)">
            <center><i class="fa fa-phone" style="color:#fff"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title" >
            <h4 class="text-center">Pendiente
            <div class="pull-right badge" id="WrForms"></div>
            </h4>
          </div>

        </a>
      </div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba( 121, 125, 127 , 0.9)">
             <center><i class="fa fa-envelope-open-o" style="color:#fff"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4 class="text-center">info@padma.com.mx
            <div class="pull-right badge" id="WrGridSystem"></div></h4>
          </div>

        </a>
      </div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba( 95, 106, 106 , 0.9)">
             <center><i class="fa fa-street-view" style="color:#fff"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title2">
            <h4 class="texto-justificado">C. Del Gran Parque #225-A por C. Del Bosque y C. Paseo De La Cordillera. Col. Las Cumbres 2 Sector, Monterrey, Nuevo Leon. C.P. 64610
            <div class="pull-right badge" id="WrInformation"></div></h4>
          </div>

        </a>
      </div>
	</div>

</div>
</div> <br><br>


<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
