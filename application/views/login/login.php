<div class="main-content container">                
    <div class="splash-container row">                    
        <div class="container-fluid">                                                
            <div class="col-sm-12 form-message">
                <img src="<?php echo URL::base();?>assets/img/dcs-ag.png" alt="logo" width="169" height="60" class="logo-img mb-4" />
                <span class="splash-description text-center mt-5 mb-5">Ingrese sus datos</span>
                <form method="POST" action="http://localhost/dcscrm/login/login">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon s7-user"></i>
                            </span>
                            <input id="username" name="username" type="text" placeholder="Usuario" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon s7-lock"></i>
                            </span>
                            <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control">
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