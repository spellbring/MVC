
<html>
    <head>
        <title><?php if (isset($this->titulo)) {
    echo $this->titulo;
} ?></title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf8">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="">Framework B&aacute;sico MVC</a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li> 
                            <li><a href="#">Page 3</a></li> 
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">