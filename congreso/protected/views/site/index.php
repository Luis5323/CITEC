<!-- Start Home Page Slider -->
<section id="home">
  <!-- Carousel -->
  <div id="main-slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#main-slide" data-slide-to="0" class="active"></li>
      <li data-target="#main-slide" data-slide-to="1"></li>
      <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!--/ Indicators end-->

    <!-- Carousel inner -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated2">
              <span>Bienvenidos a <strong>CITEC 2015</strong></span>
            </h2>
            <h3 class="animated3">
              <span>Inspirando tecnolog&iacute;a</span>
            </h3>
            <p class="animated4"><a href="#informacion" class="slider btn btn-primary">Detalles</a>
            </p>
          </div>
        </div>
      </div>
      <!--/ Carousel item end -->
      <div class="item">
        <img class="img-responsive" src="images/slider/conferencia.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated4">
              <span><strong>CITEC</strong> Ponentes</span>
            </h2>
            <h3 class="animated5">
              <span>Ent&eacute;rate de nuestros ponentes para el evento</span>
            </h3> 
            <p class="animated6"><a href="#ponentes" class="slider btn btn-primary">Con&oacute;celos</a>
            </p>
          </div>
        </div>
      </div>
      <!--/ Carousel item end -->
      <div class="item">
        <img class="img-responsive" src="images/slider/evento.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated7 white">
              <span>Citec <strong>Eventos</strong></span>
            </h2>
            <h3 class="animated8 white">
              <span>Conoce nuestros enventos, no te quedes fuera!</span>
            </h3> 
            <div class="">
              <a class="animated4 slider btn btn-primary btn-min-block" href="#" data-toggle="modal" data-target="#modal_registro">Registrar</a>
              <a class="animated4 slider btn btn-default btn-min-block" href="#especificaciones">Detalles</a>
            </div>
          </div>
        </div>
      </div>
      <!--/ Carousel item end -->
    </div>
    <!-- Carousel inner end-->

    <!-- Controls -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
      <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
      <span><i class="fa fa-angle-right"></i></span>
    </a>
  </div>
  <!-- /carousel -->
</section>
<!-- End Home Page Slider -->


<!-- Start Information Section -->
<div id="informacion" class="service section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Video Promocional</span></h4>
        <!-- Vimeo Iframe -->
        <iframe width="854" height="510" src="https://www.youtube.com/embed/XHdMxVbTniE" frameborder="0" allowfullscreen></iframe>
        <br><br>
      </div>

      <!-- Fecha Icon 1 -->
      <a data-toggle="modal" data-target="#modal_cuando">
        <div class="col-md-6 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
          <div class="service-icon">
            <i class="fa fa-calendar-o icon-large"></i>
          </div>
          <div class="service-content">
            <h4>¿Cu&aacute;do?</h4>
            <p>¿A&uacute;n no conoces la fecha del evento? No te quedes fuera y descubrela aqu&iacute;.</p>
          </div>
        </div>
      </a>
      <!-- End Service Icon 1 -->

      <!-- Lugar Icon 2 -->
      <a data-toggle="modal" data-target="#modal_donde">
        <div class="col-md-6 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
          <div class="service-icon">
            <i class="fa fa-map-marker icon-large"></i>
          </div>
          <div class="service-content">
            <h4>¿D&oacute;nde?</h4>
            <p>¿No conoces en donde se llevar&aacute; acabo el evento? No te preocupes, nosotros te decimos la ubicaci&oacute;n</p>
          </div>
        </div>
      </a>
      <!-- End Service Icon 2 -->

    </div><!-- .row -->
  </div><!-- .container -->
</div>
<!-- End Services Section -->

<!-- Modal Mapa -->
<div class="modal fade" id="modal_donde" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mapa del Evento</h4>
        <h3><a href="https://goo.gl/maps/RxYWO" target="mapa">Ir a ITC Campus 2, Ahora!!</a></h3>
      </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7472.337284447405!2d-100.8128702!3d20.5402797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbabd68688f33%3A0xf62987cd7c560734!2sInstituto+Tecnologico+de+Celaya!5e0!3m2!1ses-419!2smx!4v1430696634732" width="100%" height="450" frameborder="0" style="border:0"></iframe>
     
      </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>


<!-- Modal Evento -->
<div class="modal fade" id="modal_cuando" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $evento->nombre; ?></h4>
      </div>
      <div class="modal-body">
        <center>
          <?php echo $evento->mas_informacion; ?>
          <br><br>
          <!-- Separacion de DATETIME -->
            <?php
            $fecha_i = preg_split("/[\s-]/", $evento->fecha_inicio);
            $fecha_f = preg_split("/[\s-]/", $evento->fecha_fin);
            $ano_i = $fecha_i[0];     $ano_f = $fecha_f[0];
            $mes_i = $fecha_i[1];     $mes_f = $fecha_f[1];
            $dia_i = $fecha_i[2];     $dia_f = $fecha_f[2];
            $hora_i = $fecha_i[3];    $hora_f = $fecha_f[3];
            echo  '<b>Iniciamos el d&iacute;a </b>'.$dia_i.'/'.$mes_i.'/'.$ano_i.'<b> a las </b>'.$hora_i.'<br>';            
            echo  '<b>Clausura: </b>'.$dia_f.'/'.$mes_f.'/'.$ano_f; ?>
          <br>
          <img src="<?php echo $evento->logotipo; ?>">
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- Start Purchase Section -->
<div id="especificaciones" class="section purchase">
  <div class="container">

    <!-- Start Video Section Content -->
    <div class="section-video-content text-center">

      <!-- Start Animations Text -->
      <h1 class="fittext wite-text uppercase tlt">
        <span class="texts">
          <span>Proyectos creativos</span>
          <span>Talleres vanguardistas</span>
          <span>Temas innovadores</span>
          <span>Distinguidas personalidades</span>
        </span>
         te esperan <br/>en este <strong>CITEC 2015</strong>
      </h1>
      <!-- End Animations Text -->

    </div>
    <!-- End Section Content -->

  </div><!-- .container -->
</div>
<!-- End Purchase Section -->


<!-- Start Eventos Section -->
<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:0; border-bottom:0; background:#fff;">
  <div class="container">

    <!-- Start Big Heading -->
    <div class="big-title text-center">
      <p class="title-desc">Caracter&iacute;sticas De</p>
      <h1>Nuestros <strong>Eventos</strong></h1>
    </div>
    <!-- End Big Heading -->

    <!-- Some Text -->
    <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

      <!-- Divider -->
      <div class="hr1" style="margin-bottom:15px;"></div>
      <center>
      <!-- Start Recent Projects Carousel -->
      <!-- Start Recent Projects Carousel -->
      <ul id="portfolio-list" data-animated="fadeIn">
        <li>
          <img src="images/Portfolio/comida.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Tracidicional comida de Sistemas</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="images/Portfolio/2.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Quarterly Musashino</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="images/Portfolio/3.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Mainichi April 2014</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="images/Portfolio/4.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Shitamachi Rocket</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="images/Portfolio/5.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Majesty express vol. 01</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="images/Portfolio/6.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
      </ul>
      <!-- End Recent Projects Carousel -->
    </center>
    <!-- Divider -->
    <div class="hr1" style="margin-bottom:30px;"></div>

    <!-- Button in Center -->
   <!-- <p class="text-center"><a href="#" class="btn-system btn-medium border-btn"><i class="icon-brush"></i> M&aacute;s Informaci&oacute;n</a></p>-->

          <!-- Facebook Page Pluggin-->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      </script>
      
      <center>
        <div class="fb-page" data-href="https://www.facebook.com/itcelayaOficial" data-width="500" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"></div>
      </center>

  </div>
</div>
<!-- End Eventos Section -->




  <!-- Start Noticias Section -->
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

         <!-- Start Recent Posts Carousel -->
         <div class="latest-posts">
          <h4 class="classic-title"><span>Calendario de Actividades</span></h4>
          <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

            <!-- Posts 1 (Talleres) -->
            <?php 
                   foreach ($talleres as $key => $value) {
                ?>
            <div class="post-row item">
              <div class="left-meta-post">
                <div class="post-date">
                  <span class="day">
                  <!-- Separacion de DATETIME -->
                    <?php
                    $fecha_i = preg_split("/[\s-]/", $value->fecha_inicio);
                    $fecha_f = preg_split("/[\s-]/", $value->fecha_fin);
                    $ano_i = $fecha_i[0];     $ano_f = $fecha_f[0];
                    $mes_i = $fecha_i[1];     $mes_f = $fecha_f[1];
                    $dia_i = $fecha_i[2];     $dia_f = $fecha_f[2];
                    $hora_i = $fecha_i[3];    $hora_f = $fecha_f[3];
                    echo  $dia_i; ?>
                  </span>
                  <span class="month">
                    <!-- Seleccion del MES -->
                    <?php
                    $array = array(
                      01=>'ENE', 02=>'FEB', 03=>'MAR',
                      04=>'ABR', 05=>'MAY', 06=>'JUN',
                      07=>'JUL', 08=>'AGO', 09=>'SEP',
                      10=>'OCT', 11=>'NOV', 12=>'DIC' );
                    echo $array[intval($mes_i)]?>
                  </span>
                </div>
                <div class="post-type"><i class="fa fa-calendar-o"></i></div>
              </div>
              <!-- Titulo de la Actividad -->
              <h3 class="post-title"><a href="#">Taller: <?php echo $value->nombre; ?></a></h3>
              <!-- Informacion de la Actividad -->
              <div class="post-content">
                <p>
                  <h5><?php echo 'Lugar: '.$value->lugar; ?></h5>
                  <?php 
                    echo '<b> Inicio: </b>'.$dia_i.'/'.$mes_i.'/'.$ano_i."<br>";
                    echo '<b> Fin: </b>'.$dia_f.'/'.$mes_f.'/'.$ano_f; ?>
                    <h5><?php echo '$'.$value->costo; ?></h5>
                  <a class="read-more" href="#">Leer M&aacute;s...</a>
                </p>
              </div>
            </div>   

            <!-- Posts 2 (Visitas industriales) -->                 
            <?php } ?>

             <?php 
                   foreach ($industrial as $key => $value) {
                ?>
            <div class="post-row item">
              <div class="left-meta-post">
                <div class="post-date">
                  <span class="day">
                    <!-- Separacion de DATETIME -->
                    <?php
                    $fecha_i = preg_split("/[\s-]/", $value->fecha_inicio);
                    $fecha_f = preg_split("/[\s-]/", $value->fecha_fin);
                    $ano_i = $fecha_i[0];     $ano_f = $fecha_f[0];
                    $mes_i = $fecha_i[1];     $mes_f = $fecha_f[1];
                    $dia_i = $fecha_i[2];     $dia_f = $fecha_f[2];
                    $hora_i = $fecha_i[3];    $hora_f = $fecha_f[3];
                    echo  $dia_i; ?>
                  </span>
                  <span class="month">
                    <!-- Seleccion del MES -->
                    <?php
                    $array = array(
                      01=>'ENE', 02=>'FEB', 03=>'MAR',
                      04=>'ABR', 05=>'MAY', 06=>'JUN',
                      07=>'JUL', 08=>'AGO', 09=>'SEP',
                      10=>'OCT', 11=>'NOV', 12=>'DIC' );
                    echo $array[intval($mes_i)]?>
                  </span>
                </div>
                <div class="post-type"><i class="fa fa-calendar-o"></i>
                </div>
              </div>
              <!-- Titulo de la Actividad -->
              <h3 class="post-title"><a href="#">Visita Industrial: <?php echo $value->nombre; ?></a></h3>
              <div class="post-content">
                <p>
                  <h5><?php echo 'Lugar: '.$value->lugar; ?></h5>
                  <?php 
                    echo '<b> Inicio: </b>'.$dia_i.'/'.$mes_i.'/'.$ano_i."<br>";
                    echo '<b> Fin: </b>'.$dia_f.'/'.$mes_f.'/'.$ano_f; ?>
                    <h5><?php echo '$'.$value->costo; ?></h5>
                  <a class="read-more" href="#">Leer M&aacute;s...</a>
                </p>
              </div>
            </div>  

            <!-- Posts 3 (Evento Social) -->          
            <?php } ?>

             <?php 
                   foreach ($eventoSocial as $key => $value) {
                ?>
            <div class="post-row item">
              <div class="left-meta-post">
                <div class="post-date">
                  <span class="day">
                    <!-- Separacion de DATETIME -->
                    <?php
                    $fecha_i = preg_split("/[\s-]/", $value->fecha_inicio);
                    $fecha_f = preg_split("/[\s-]/", $value->fecha_fin);
                    $ano_i = $fecha_i[0];     $ano_f = $fecha_f[0];
                    $mes_i = $fecha_i[1];     $mes_f = $fecha_f[1];
                    $dia_i = $fecha_i[2];     $dia_f = $fecha_f[2];
                    $hora_i = $fecha_i[3];    $hora_f = $fecha_f[3];
                    echo  $dia_i; ?>
                  </span>
                  <span class="month">
                    <!-- Seleccion del MES -->
                    <?php
                    $array = array(
                      01=>'ENE', 02=>'FEB', 03=>'MAR',
                      04=>'ABR', 05=>'MAY', 06=>'JUN',
                      07=>'JUL', 08=>'AGO', 09=>'SEP',
                      10=>'OCT', 11=>'NOV', 12=>'DIC' );
                    echo $array[intval($mes_i)]?>
                  </span>
                </div>
                <div class="post-type"><i class="fa fa-calendar-o"></i></div>
              </div>
              <h3 class="post-title"><a href="#">Evento social: <?php echo $value->nombre; ?></a></h3>
              <div class="post-content">
                <p>
                  <h5><?php echo 'Lugar: '.$value->lugar; ?></h5>
                  <?php 
                    echo '<b> Inicio: </b>'.$dia_i.'/'.$mes_i.'/'.$ano_i."<br>";
                    echo '<b> Fin: </b>'.$dia_f.'/'.$mes_f.'/'.$ano_f; ?>
                    <h5><?php echo '$'.$value->costo; ?></h5>
                  <a class="read-more" href="#">Leer M&aacute;s...</a>
                </p>
              </div>
            </div>                    
            <?php } ?>

            
          </div>
        </div>
        <!-- End Recent Posts Carousel -->

      </div>

    </div>
  </div>
</div>
<!-- End Noticias Section -->


<!-- Start Hoteles Table Section -->
<div class=" section pricing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Start Big Heading -->
        <div class="big-title text-center">
          <h1>Agradable <strong>Hospedaje</strong></h1>
        </div>
        <!-- End Big Heading -->

        <!-- Text -->
        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
    </div>

    <div class="row pricing-tables">

      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="pricing-table">
          <div class="plan-name">
            <h3><strong>Hotel St. George Celaya</strong></h3>
          </div>
          <div class="plan-price">
            <div class="price-value">$36<span>.00</span></div>
            <div class="interval">por noche</div>
          </div>
          <div class="plan-list">
            <ul>
              <li><strong>Telefono: <br></strong> +52 461 614 6530</li>
              <li><a target="_blank" href="http://www.hotelstgeorge.com.mx/"><strong>hotelstgeorge.com</strong></a></li>
            </ul>
          </div>
          <div class="plan-signup">
            <a href="#" class="btn-system btn-small" data-toggle="modal" data-target="#modal_Hotel_1">Detalles</a>
          </div>
        </div>
      </div>

      <!-- Modal Hotel 1 -->
      <div class="modal fade" id="modal_Hotel_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">St. George</h4>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14946.781045944948!2d-100.83667699999998!3d20.518715000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbaf9a08e7b09%3A0xe520504adaeae9b3!2sHotel+St.+George!5e0!3m2!1ses!2s!4v1428199089643" width="600" height="450" frameborder="0" style="border:0"></iframe>            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="pricing-table">
          <div class="plan-name">
            <h3><strong>Hotel Mary Celaya</strong></h3>
          </div>
          <div class="plan-price">
            <div class="price-value">$50<span>.00</span></div>
            <div class="interval">por noche</div>
          </div>
          <div class="plan-list">
            <ul>
              <li><strong>Telefono: <br></strong> +52 461 612 0450</li>
              <li><a href="#"><strong>-</strong></a></li>
            </ul>
          </div>
          <div class="plan-signup">
            <a href="#" class="btn-system btn-small" data-toggle="modal" data-target="#modal_Hotel_2">Detalles</a>
          </div>
        </div>
      </div>

      <!-- Modal Hotel 2 -->
      <div class="modal fade" id="modal_Hotel_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Mary</h4>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14946.69874001782!2d-100.81473600000005!3d20.519558000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba88e2e052d9%3A0xe78d6a428a89890b!2sHotel+Mary!5e0!3m2!1ses!2s!4v1428199347364" width="600" height="450" frameborder="0" style="border:0"></iframe>            
              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="pricing-table">
          <div class="plan-name">
            <h3><strong>Hotel Wyndham Garden Celaya</strong></h3>
          </div>
          <div class="plan-price">
            <div class="price-value">$67<span>.00</span></div>
            <div class="interval">por noche</div>
          </div>
          <div class="plan-list">
            <ul>
              <li><strong>Telefono: <br></strong> +52 461 192 0500</li>
              <li><a target="_blank" href="http://www.wyndham.com/hotels/mexico/celaya/wyndham-garden-celaya/hotel-overview?cid=local"><strong>wyndham.com</strong></a></li>
            </ul>
          </div>
          <div class="plan-signup">
            <a href="#" class="btn-system btn-small" data-toggle="modal" data-target="#modal_Hotel_3">Detalles</a>
          </div>
        </div>
      </div>

      <!-- Modal Hotel 3 -->
      <div class="modal fade" id="modal_Hotel_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Wyndham Garden Celaya</h4>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14943.41480237818!2d-100.82447400000001!3d20.553166000000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbadff2a0206d%3A0xdf41336fa214d3fe!2sHotel+Wyndham+Garden+Celaya!5e0!3m2!1ses!2s!4v1428198536801" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="pricing-table">
          <div class="plan-name">
            <h3><strong>Hotel Casa Inn Celaya</strong></h3>
          </div>
          <div class="plan-price">
            <div class="price-value">$82<span>.00</span></div>
            <div class="interval">por noche</div>
          </div>
          <div class="plan-list">
            <ul>
              <li><strong>Telefono: <br></strong> +52 461 598 6700</li>
              <li><a href="#"><strong>-</strong></a></li>
            </ul>
          </div>
          <div class="plan-signup">
            <a href="#" class="btn-system btn-small" data-toggle="modal" data-target="#modal_Hotel_4">Detalles</a>
          </div>
        </div>
      </div>

      <!-- Modal Hotel 4 -->
      <div class="modal fade" id="modal_Hotel_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Mary</h4>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14945.383652204015!2d-100.77823200000002!3d20.533023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cb069cd47ec6f%3A0x83d5a0f0d9847699!2sHotel+Casa+Inn!5e0!3m2!1ses!2s!4v1428199649856" width="600" height="450" frameborder="0" style="border:0"></iframe>              <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!--<div class="col-md-3 col-sm-3 col-xs-12">
        <div class="pricing-table highlight-plan">
          <div class="plan-name">
            <h3>Advanced</h3>
          </div>
          <div class="plan-price">
            <div class="price-value">$99<span>.00</span></div>
            <div class="interval">per month</div>
          </div>
          <div class="plan-list">
            <ul>
              <li><strong>40 GB</strong> Storage</li>
              <li><strong>40GB</strong> Transfer</li>
              <li><strong>10</strong> Domains</li>
              <li><strong>20</strong> Projects</li>
              <li><strong>Free</strong> installation</li>
            </ul>
          </div>
          <div class="plan-signup">
            <a href="#" class="btn-system btn-small border-btn">Sign Up Now</a>
          </div>
        </div>
      </div>-->

  </div>
</div>

<center>
<div class="plan-signup">
        <a href="#" class="btn-system btn-small" data-toggle="modal" data-target="#modal_Hotel_Mas">M&aacute;s Informaci&oacute;n</a>
      </div>

      <!-- Modal Hotel Mas -->
      <div class="modal fade" id="modal_Hotel_Mas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">M&aacute;s Hoteles</h4>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14944.553643077852!2d-100.81252!3d20.541517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shoteles!5e0!3m2!1ses!2s!4v1428200017255" width="600" height="450" frameborder="0" style="border:0"></iframe>            </div>
          </div>
        </div>
      </div>
</div>
</center>
<!-- End Hoteles Table Section -->


<!-- Start Ponentes Section -->
<div id="ponentes" class="section" style="background:#fff;">
  <div class="container">

    <!-- Start Big Heading -->
    <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
      <h1>Nuestros <strong>Ponentes</strong></h1>
    </div>
    <!-- End Big Heading -->

    <!-- Some Text -->
    <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <span class="accent-color sh-tooltip" data-placement="right" title="Simple Tooltip">doloremque laudantium</span>, totam rem aperiam, eaque ipsa quae ab illo inventore
      <br/>veritatis et quasi <span class="accent-color sh-tooltip" data-placement="bottom" title="Simple Tooltip">architecto</span> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>



      <!-- Start Team Members -->
      <div class="row">
        <?php 
        foreach ($participante as $key => $value) {
        ?>
        <!-- Ponente Memebr 1 -->
        <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
          <div class="team-member modern">
            <!-- Ponente Photo, Name & Position -->
            <div class="member-photo">
              <img alt="" src="images/ponentes/face_placehold.jpg" />
              <div class="member-name"><?php echo $value->nombres; ?><span><?php echo $value->apellidos; ?></span>
              </div>
            </div>
            <!-- Ponente Words -->
            <div class="member-info">
              <p><h2>Email:</h2> <?php echo $value->email; ?></p>
            </div>
            <!-- Ponente Social Links -->
            <div class="member-socail">
              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
              <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
              <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
              <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
            </div>
          </div>
        </div>
        <!-- End Ponente 1 -->
       <?php } ?>
      </div>
      <!-- End Ponente Members -->

    </div><!-- .container -->
  </div>
  <!-- End Team Member Section -->

  <!-- Start Descargables Section -->
<div id="descargables">
<div class=" section pricing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Start Big Heading -->
        <div class="big-title text-center">
          <h1><strong>Formatos</strong> Descargables</h1>
        </div>
        <!-- End Big Heading -->

        <!-- Text -->
        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/doc.png" alt="...">
      <div class="caption">
        <h3>Formato</h3>
        <p>Conozca y descargue el formato para el artículo final.</p>
        <p><a href="formatos/programa_sitec.pdf" class="btn btn-success" role="button">Ver Documento</a></p>
      </div>
    </div>
  </div>
</div>
    </div>

</div>
</div>
</div>
</div>
</center>
<!-- End Descargables Section -->


  <!-- Start Footer Section -->
  <footer>
    <div class="container">
      <div class="row footer-widgets">
        <div class="footer-widget social-widget">
          <h4>Siguenos en<span class="head-line"></span></h4>
          <ul class="social-icons">
            <li>
              <a target="_blank" class="facebook" href="https://www.facebook.com/itcelayaOficial"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a target="_blank" class="twitter" href="https://twitter.com/itcelayaoficial"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a target="_blank" class="google" href="https://plus.google.com/108807866126938532844/about?hl=es"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a target="_blank" class="instgram" href="https://instagram.com/itcelaya"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a target="_blank" class="youtube" href="https://www.youtube.com/user/ItcelayaOficial"><i class="fa fa-youtube-play"></i></a>
            </li>
          </ul>
        </div>
      </div><!-- row footer-widgets -->
      <!-- End Subscribe & Social Links Widget -->


        <!-- Start Contact Widget -->
        <div class="col-md-12 col-xs-12">
          <div class="footer-widget contact-widget">
            <h4><img src="images/banner_itc.jpg" class="img-responsive" alt="Footer Logo" /></h4>
            <center>
              <h4>&quot;La t&eacute;cnica por un M&eacute;xico mejor&quot;<span class="head-line"></span></h4>
            </center>
            <ul>
              <li><span>Direcci&oacute;n:</span> Av. Garc&iacute;a Cubas 1200, Esquina Ignacio Borunda Celaya, Gto. M&eacute;xico</li>
              <li><span>Tel&eacute;fono:</span> +01 461 617 7770</li>
              <li><span>Website:</span> www.itcelaya.edu.mx</li>
            </ul>
          </div>
        </div><!-- .col-md-3 -->
        <!-- End Contact Widget -->


      <!-- Start Copyright -->
      <div class="copyright-section">
        <div class="row">
          <div class="col-md-6">
            <p>&copy; 2015 CITEC -  Derechos Reservados <a href="http://itcelaya.edu.mx"> ITCelaya</a> </p>
          </div><!-- .col-md-6 -->
          <div class="col-md-6">
            <ul class="footer-nav">
              <li><a href="#">Sitemap</a>
              </li>
              <li><a href="#">Privacy Policy</a>
              </li>
              <li><a href="#">Contact</a>
              </li>
            </ul>
          </div><!-- .col-md-6 -->
        </div><!-- .row -->
      </div>
      <!-- End Copyright -->

    </div>
  </footer>
  <!-- End Footer Section -->


</div>
<!-- End Full Body Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div id="loader">
  <div class="spinner">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
</div>                 

<!-- Modal Inicio Sesion -->
<div class="modal fade" id="modal_sesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inicio de Sesi&oacute;n</h4>
      </div>
      <div class="modal-body">
        <div class="row"> 
          <div class="col-md-12">

            <div class="form-group">
              <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                  'validateOnSubmit'=>true,
                  ),
                  )); ?>

                  <div class="form-group">
                    <div class="controls">
                      <?php echo $form->labelEx($model,'email'); ?>
                      <?php echo $form->textField($model,'email',
                      array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'usuario@correo.com')); ?>
                      <?php echo $form->error($model,'email',array('class'=>'alert alert-danger')); ?>
                    </div>
                  </div>

                  <!--contraseña-->
                  <div class="form-group">
                   <div class="controls">
                    <?php echo $form->labelEx($model,'contraseña'); ?>
                    <?php echo $form->passwordField($model,'contraseña',
                    array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Contraseña')); ?>
                    <?php echo $form->error($model,'contraseña',array('class'=>'alert alert-danger')); ?>
                  </div>
                </div>
                <p align=right class="note">
                  <b>Los campos con <font color="red">*</font> son requeridos.<br><br>
                    <a href="#" data-toggle='modal' data-target='#modal_registro' data-dismiss='modal'>¿A&uacute;n no tienes cuenta? Registrate</a>
                  </b>
                </p>
                <?php //echo CHtml::submitButton('Entrar',array('class'=>'btn btn-large btn-success')); ?>
            </div><!-- form -->

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-large btn-success">Entrar</button>
        <button type="reset" class="btn btn-large btn-danger" data-dismiss="modal">Cancelar</button>
        <?php $this->endWidget(); ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal Registro -->
<div class="modal fade" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro</h4>
      </div>
      <div class="modal-body">
        <div class="row"> 
          <div class="col-md-12">

            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'participantes-form','enableAjaxValidation'=>false,
              )
              ); ?>

              <!--campos de registro-->
              <fieldset>
                <!--nombre-->
                <div class="form-group">
                  <div class="controls">
                    <?php echo $form->labelEx($model,'nombres'); ?>
                    <?php echo $form->textField($model,'nombres',
                    array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Nombre(s)')); ?>
                    <?php echo $form->error($model,'nombres',array('class'=>'alert alert-danger')); ?>
                  </div
>                </div>

                <!--apellidos-->
                <div class="form-group">
                  <div class="controls">
                    <?php echo $form->labelEx($model,'apellidos'); ?>
                    <?php echo $form->textField($model,'apellidos',
                    array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Apellido(s)')); ?>
                    <?php echo $form->error($model,'apellidos',array('class'=>'alert alert-danger')); ?>
                  </div>
                </div>

                <!--email-->
                <div class="form-group">
                  <div class="controls">
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email',
                    array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'usuario@correo.com')); ?>
                    <?php echo $form->error($model,'email',array('class'=>'alert alert-danger')); ?>
                  </div>
                </div>

                <!--contraseña-->
                <div class="form-group">
                 <div class="controls">
                  <?php echo $form->labelEx($model,'contraseña'); ?>
                  <?php echo $form->passwordField($model,'contraseña',
                  array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Contraseña')); ?>
                  <?php echo $form->error($model,'contraseña',array('class'=>'alert alert-danger')); ?>
                </div>
              </div>

              <div class="form-group">
                <div class="controls">
                  <?php echo $form->labelEx($model,'veri_contraseña'); ?>
                  <?php echo $form->passwordField($model,'veri_contraseña',
                  array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Contraseña')); ?>
                  <?php echo $form->error($model,'veri_contraseña',array('class'=>'alert alert-danger')); ?>           
                </div>
              </div>
            </fieldset>
            <?php /*echo CHtml::submitButton('Registrar',
            array('class'=>'btn btn-large btn-success')); ?>

            <?php echo CHtml::submitButton('Cancelar',
            array('class'=>'btn btn-large btn-danger', 'data-dismiss'=>'modal'));*/ ?>
          </div>
        </div>
        <p align=right class="note">
          <b>Los campos con <font color="red">*</font> son requeridos.<br><br>
            <a href="#" data-toggle='modal' data-target='#modal_sesion' data-dismiss='modal'>¿Ya tienes cuenta? Inicia Sesi&oacute;n</a>
          </b>      
        </p>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-large btn-success">Registrar</button>
        <button type="reset" class="btn btn-large btn-danger" data-dismiss="modal">Cancelar</button>
        <?php $this->endWidget(); ?>
      </div>
    </div>
  </div>
</div>



