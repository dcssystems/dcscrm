<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo URL::base();?>assets/img/favicon.png">
    <title><?php echo $site; ?></title>
    <?php foreach($styles as $style):
        echo $style . "\n"; 
    endforeach; ?>
  </head>
  <body>
    <?php echo $header; ?>
    <div class="mai-wrapper">
      <nav class="navbar mai-sub-header">
        <div class="container">
            <!-- Mega Menu structure-->
                <?php echo $menu; ?>
            <!--Search input-->
            <div class="search">
              <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
            </div>
        </div>
      </nav>
      <div class="main-content container">
        <?php echo $content; ?>
      </div>
    </div>
    <?php foreach($scripts as $script):
        echo $script . "\n";
    endforeach; ?> 
      <?php if($value == 1){?>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/js/app-tables-datatables.js" type="text/javascript"></script>
      <?php }elseif($value == 2){ ?>
        <script src="<?php echo URL::base();?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
      <?php } ?>
    
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        <?php if($value == 1){?>
        App.dataTables();
        <?php }elseif($value == 2){?>
        $('form').parsley();
        $('#department').change(function(){
            var department = $(this).select().val();
            $.post('http://localhost/dcscrm/ajax/province', {id:department}, function(data){
                //console.log(data);
                $('#province').html(data);
            });
            $('#district').select().val('');
        });
        $('#province').change(function(){
            var dpto = $('#department').select().val();
            var province = $(this).select().val();
            $.post('http://localhost/dcscrm/ajax/district', {id:province,dpto:dpto}, function(data){
                console.log(dpto, province);
                $('#district').html(data);
            });
        });
        <?php } ?>
      });
    </script>
  </body>
</html>