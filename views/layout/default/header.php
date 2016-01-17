
<html>
    <head>
        <title><?php
            if (isset($this->titulo)) {
                echo $this->titulo;
            }
            ?></title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf8">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
  <div class="ui-pnotify " id="divAlertExito" style="width: 300px; right: 25px; top: 25px; opacity: 1; display: none; cursor: auto;">
            <div class="alert ui-pnotify-container alert-success ui-pnotify-shadow" style="min-height: 16px;">
                <h4 class="ui-pnotify-title">Terminado</h4>

                <div class="ui-pnotify-text" id="mensajeOk"><span id="msjOk"></span></div>
            </div>
        </div>

        <div class="ui-pnotify " id="divAlertWar" style="width: 300px; right: 25px; top: 25px; opacity: 1; display: none; cursor: auto;">
            <div class="alert ui-pnotify-container alert-danger ui-pnotify-shadow" style="min-height: 16px;">
                <h4 class="ui-pnotify-title">&iexcl;Atenci&oacute;n!</h4>
                <div class="ui-pnotify-text" id="mensajeWar"><span id="msjWar"></span></div>
            </div><!--<img src="<?php echo $_layoutParams['ruta_img']; ?>st_rojo.png" width="16" border="0"  />-->
        </div>
        <div class="ui-pnotify " id="divAlertInfo" style="width: 300px; right: 25px; top: 25px; opacity: 1; display: none; cursor: auto;">
            <div class="alert ui-pnotify-container alert-info ui-pnotify-shadow" style="min-height: 16px;">
                <h4 class="ui-pnotify-title">Cargando</h4>
                <div class="ui-pnotify-text" id="mensajeWar"><span id="msjInfo"></span></div>
            </div><img src="<?php echo $_layoutParams['ruta_img']; ?>loading.gif" width="16" border="0"  />
        </div>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id="modal_dialog" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #07a; color: #fff">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="ML_tituloForm"></h4>
            </div>

            <div class="modal-body" id="ML_divPopup"></div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <header class="header">

                <nav class="navbar navbar-custom" role="navigation">

                    <div class="container">

                   <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"></a>
                        </div>

                        <div class="collapse navbar-collapse" id="custom-collapse">
                            <ul class="nav navbar-nav navbar-left">

                                <!--<li><a href="#skills">Habilidades</a></li>-->
                                <!--<li><a href="#testimonials">Testimonios</a></li>-->
                                <li><a href="sistema">Inicio</a></li>
                          
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mensajes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">No existen mensajes</a> </li>
                                    </ul>  
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo Session::get('SESS_USER'); ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="datoslogin"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Mis datos</a></li>
                                        <li><a href="<?php echo BASE_URL ?>login"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div><!-- .container -->

                </nav>

          
        </header>
      
        <div class="container">