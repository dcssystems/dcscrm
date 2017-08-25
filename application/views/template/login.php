<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://localhost/dcscrm/assets/img/favicon.ico">
    <title><?php echo $site; ?></title>
    <?php foreach($styles as $style):
        echo $style . "\n";
    endforeach; ?>
  </head>
  <body class="mai-splash-screen">
    <div class="mai-wrapper mai-login">
        <?php echo $content; ?>
    </div>
    <?php foreach($scripts as $script):
        echo $script . "\n";
    endforeach; ?>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        <?php if(!empty($error) && $error == TRUE): ?>
        alert("Usuario y/o contraseña no son correctos!");
        <?php endif; ?>
      });
      
    </script>
  </body>
</html>