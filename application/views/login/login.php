<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <title>.:: DirCon Solution ::.</title>
        <link rel="stylesheet" type="text/css" href="assets/lib/stroke-7/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
        <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    </head>
    <body class="mai-splash-screen">
        <div class="mai-wrapper mai-login">
            <div class="main-content container">
                <div class="splash-container row">
                    <div class="container-fluid">
                        <div class="col-sm-12 form-message">
                            <img src="assets/img/dcs-ag.png" alt="logo" width="169" height="53" class="logo-img mb-4" />
                            <span class="splash-description text-center mt-5 mb-5">Ingresar datos de usuario</span>
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="icon s7-user"></i>
                                        </span>
                                        <input id="username" type="text" placeholder="Usuario" autocomplete="off" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="icon s7-lock"></i>
                                        </span>
                                        <input id="password" type="password" placeholder="Contraseña" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-lg btn-primary btn-block">Enviar</button>
                                </div>
                            </form>
                            <div class="out-links"><a href="#">© <?php echo date('Y'); ?> Dircon Solutions </a></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="assets/lib/tether/js/tether.min.js" type="text/javascript"></script>
        <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            //initialize the javascript
            App.init();
          });

        </script>
    </body>
</html>