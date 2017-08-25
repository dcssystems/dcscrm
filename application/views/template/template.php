<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo URL::base();?>assets/img/favicon.ico">
    <title><?php echo $site; ?></title>
    <?php foreach($styles as $style):
        echo $style . "\n"; 
    endforeach; ?>
    <link href="<?php echo URL::base();?>assets/lib/datapicker/css/datepicker.css" rel="stylesheet" type="text/css"/>
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
        <script src="<?php echo URL::base(); ?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datapicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/js/app-form-elements.js" type="text/javascript"></script>
      <?php }elseif($value == 2){ ?>
        <script src="<?php echo URL::base(); ?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datapicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/js/app-form-elements.js" type="text/javascript"></script>
        
      <?php }else if($value == 3){ ?>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/countdown/jquery.countdown.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/countup/countUp.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/lib/datapicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="<?php echo URL::base(); ?>assets/js/app-pages-profile.js" type="text/javascript"></script>
      <?php } ?>
    
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        <?php if($value == 1){?>
        App.dataTables();
        $('form').parsley();
        $("#btnNewCampaign").click(function(){
            var form = $("#formNewCampaign").serialize();
            //alert(form);
            $.post('<?php echo URL::site('ajax/newcampaign');?>', form, function(data){
                alert(data);
            });
        });
        $("#table3>tbody>tr").click(function(){
            var getValue = $(this).data('personcall');
            console.log(getValue);
            $("#person-call").modal('show');
        });
        $("#fecInicio").datepicker();
        
        <?php }elseif($value == 2){?>
        App.formElements();
        $('form').parsley();
        $('#department').change(function(){
            var department = $(this).select().val();
            $.post('<?php echo URL::site('ajax/province');?>', {id:department}, function(data){
                //console.log(data);
                $('#province').html(data);
            });
            $('#district').select().val('');
        });
        $('#province').change(function(){
            var dpto = $('#department').select().val();
            var province = $(this).select().val();
            $.post('<?php echo URL::site('ajax/district');?>', {id:province,dpto:dpto}, function(data){
                console.log(dpto, province);
                $('#district').html(data);
            });
        });
        $("#uploadFile").click(function(){
            var file_data = $('#filePersons').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $('#mod-info').modal('show');
            $.ajax({
                url: '<?php echo URL::site('ajax/uploadfile');?>', // point to server-side PHP script 
                dataType: 'json', // what to expect back from the PHP script
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                    $('#mod-info').modal('hide');
                    $.each(response, function(i, j){
                        if(i == "error"){
                            $('#mod-danger').modal('show');
                            $('#msgError').html(j);
                        }else if(i == "ok"){
                            $('#mod-primary').modal('show');
                            $('#msgOkey').html(j);
                            $('#formUploadFile').trigger("reset");
                            $("label[for='filePersons']").html('<i class="icon s7-upload"></i><span>Archivo ...</span>');
                        }else{
                            console.log(response);
                        }
                    });
                }
            });
        });
        <?php }elseif($value == 3){?>
        App.profile();
        <?php } ?>
      });
    </script>
  </body>
</html>