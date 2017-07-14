<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo URL::base();?>assets/img/favicon.png">
    <title>.:: Dircon Solutions - Module Persons ::.</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" href="<?php echo URL::base();?>assets/css/themes/orange-juice.css" type="text/css"/>
  </head>
  <body>
    <nav class="navbar navbar-full navbar-inverse navbar-fixed-top mai-top-header">
      <div class="container"><a href="#" class="navbar-brand"></a>
        <!--Left Menu-->
        <ul class="nav navbar-nav mai-top-nav">
          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Services <span class="angle-down s7-angle-down"></span></a>
            <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Information</a><a href="#" class="dropdown-item">Company</a><a href="#" class="dropdown-item">Documentation</a><a href="#" class="dropdown-item">API Settings</a><a href="#" class="dropdown-item">Export Info</a></div>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
        </ul>
        <!--Icons Menu-->
        <ul class="navbar-nav float-lg-right mai-icons-nav">
          <li class="dropdown nav-item mai-messages"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="icon s7-comment"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="title">Messages</div>
                <div class="mai-scroller">
                  <div class="content">
                    <ul>
                      <li><a href="#">
                          <div class="img"><img src="<?php echo URL::base();?>assets/img/avatars/img1.jpg"></div>
                          <div class="content"><span class="date">16 Sept</span><span class="name">Victor Jara</span><span class="desc">The song that has been brave, will always be the new song. </span></div></a></li>
                      <li><a href="#">
                          <div class="img"><img src="<?php echo URL::base();?>assets/img/avatars/img2.jpg"></div>
                          <div class="content"><span class="date">4 Sept</span><span class="name">Gustavo Cerati</span><span class="desc">You will see me fly across the city of fury where no one knows of me.</span></div></a></li>
                      <li><a href="#">
                          <div class="img"><img src="<?php echo URL::base();?>assets/img/avatars/img3.jpg"></div>
                          <div class="content"><span class="date">13 Aug</span><span class="name">Jaime Garzón</span><span class="desc">Now everything came back to the abnormality.</span></div></a></li>
                      <li><a href="#">
                          <div class="img"><img src="<?php echo URL::base();?>assets/img/avatars/img4.jpg"></div>
                          <div class="content"><span class="date">13 Aug</span><span class="name">Allen Collins</span><span class="desc">Things just couldn't even be the same 'Cause I'm as free as a bird now.</span></div></a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer"> <a href="#">View all messages</a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item mai-notifications"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="icon s7-bell"></span><span class="indicator"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="title">Notifications</div>
                <div class="mai-scroller">
                  <div class="content">
                    <ul>
                      <li><a href="#">
                          <div class="icon"><span class="s7-check"></span></div>
                          <div class="content"><span class="desc">This is a new message for my dear friend <strong>Rob</strong>.</span><span class="date">10 minutes ago</span></div></a></li>
                      <li><a href="#">
                          <div class="icon"><span class="s7-add-user"></span></div>
                          <div class="content"><span class="desc">You have a new fiend request pending from <strong>John Doe</strong>.</span><span class="date">2 days ago</span></div></a></li>
                      <li><a href="#">
                          <div class="icon"><span class="s7-graph1"></span></div>
                          <div class="content"><span class="desc">Your site visits have increased <strong>15.5%</strong> more since the last week.</span><span class="date">2 hours ago</span></div></a></li>
                      <li><a href="#">
                          <div class="icon"><span class="s7-check"></span></div>
                          <div class="content"><span class="desc">This is a new message for my dear friend <strong>Rob</strong>.</span><span class="date">10 minutes ago</span></div></a></li>
                    </ul>
                  </div>
                </div>
                <div class="footer"> <a href="#">View all notifications</a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item mai-settings"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="icon s7-settings"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="title">Settings</div>
                <div class="content">
                  <ul>
                    <li><span>Enable Notifications</span>
                      <div class="float-right">
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="check" id="switch1"><span>
                            <label for="switch1"></label></span>
                        </div>
                      </div>
                    </li>
                    <li><span>Auto Commit</span>
                      <div class="float-right">
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="check2" id="switch2"><span>
                            <label for="switch2"></label></span>
                        </div>
                      </div>
                    </li>
                    <li><span>Sidebar</span>
                      <div class="float-right">
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="check3" id="switch3"><span>
                            <label for="switch3"></label></span>
                        </div>
                      </div>
                    </li>
                    <li><span>Full-width Layout</span>
                      <div class="float-right">
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="check4" id="switch4"><span>
                            <label for="switch4"></label></span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!--User Menu-->
        <ul class="nav navbar-nav float-lg-right mai-user-nav">
          <li class="dropdown nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle nav-link"> <img src="<?php echo URL::base();?>assets/img/avatar.jpg"><span class="user-name">Violeta Parra</span><span class="angle-down s7-angle-down"></span></a>
            <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item"> <span class="icon s7-home"> </span>My Account</a><a href="#" class="dropdown-item"> <span class="icon s7-user"> </span>Profile</a><a href="#" class="dropdown-item"> <span class="icon s7-cash"> </span>Billing</a><a href="#" class="dropdown-item"> <span class="icon s7-tools"> </span>Settings</a><a href="#" class="dropdown-item"> <span class="icon s7-power"> </span>Log Out</a></div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="mai-wrapper">
      <nav class="navbar mai-sub-header">
        <div class="container">
            <!-- Mega Menu structure-->
            <nav class="navbar navbar-toggleable-sm">
                <button type="button" data-toggle="collapse" data-target="#mai-navbar-collapse" aria-controls="#mai-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler hidden-md-up collapsed">
                    <div class="icon-bar"><span></span><span></span><span></span></div>
                </button>
                <div id="mai-navbar-collapse" class="navbar-collapse collapse mai-nav-tabs">
                    <ul class="nav navbar-nav">
                        <li class="nav-item parent">
                            <a href="<?php echo URL::base(); ?>user/dashboard" role="button" aria-expanded="false" class="nav-link">
                                <span class="icon s7-home"></span><span>Inicio</span>
                            </a>                            
                        </li>
                        <li class="nav-item parent open">
                            <a href="javascript:void();" role="button" aria-expanded="false" class="nav-link">
                                <span class="icon s7-diamond"></span><span>Personas</span>
                            </a>
                            <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                <li class="nav-item">
                                    <a href="<?php echo URL::base(); ?>persons/dashboard" class="nav-link">
                                        <span class="icon s7-box2"></span><span class="name">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo URL::base(); ?>persons/new" class="nav-link active">
                                        <span class="icon s7-box2"></span><span class="name">Nuevo</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>                    
            <!--Search input-->
            <div class="search">
                <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
            </div>
        </div>
      </nav>
        <div class="main-content container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-divider">Registro de personas
                            <span class="panel-subtitle">Esta interfaz permite registar, una persona en el sistema.</span>
                        </div>
                        <div class="panel-body">
                            <form>
                                <!-- nombre -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Nombres</label>
                                    <div class="col-sm-6">
                                        <input name="name" id="name" type="text" required placeholder="Nombre" class="form-control">
                                    </div>
                                </div>
                                <!-- apellido -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Apellidos</label>
                                    <div class="col-sm-6">
                                        <input name="lastname" id="lastname" type="text" required placeholder="Apellidos" class="form-control">
                                    </div>
                                </div>
                                <!-- tipo de documento -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Tipo de documento</label>
                                    <div class="col-sm-6">
                                        <select name="typedoc" id="typedoc" class="form-control custom-select">
                                            <option value="" selected>Seleccione documento</option>
                                            <option value="1">D.N.I.</option>
                                            <option value="2">R.U.C.</option>
                                            <option value="3">Carnet de extranjeria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Documento</label>
                                    <div class="col-sm-6">
                                        <input name="document" id="document" type="text" required placeholder="" class="form-control">
                                    </div>
                                </div>
                                <!-- direccion -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Dirección</label>
                                    <div class="col-sm-6">
                                        <input name="address" id="address" type="text" required placeholder="Dirección" class="form-control">
                                    </div>
                                </div>
                                <!-- departamento -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Departamento</label>
                                    <div class="col-sm-6">
                                        <select name="department" id="department" class="form-control custom-select">
                                            <option value="" selected>SELECCIONE DEPARTAMENTO</option>
                                            <?php foreach($department as $dpto): ?>
                                            <option value="<?php echo $dpto->idDpto;?>"><?php echo $dpto->varDescripcion;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <!-- province -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Provincia</label>
                                    <div class="col-sm-6">
                                        <select name="province" id="province" class="form-control custom-select">
                                            <option value="" selected>SELECCIONE PROVINCIA</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- district -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Distirto</label>
                                    <div class="col-sm-6">
                                        <select name="district" id="district" class="form-control custom-select">
                                            <option value="" selected>SELECCIONE DISTRITO</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- correo -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Email</label>
                                    <div class="col-sm-6">
                                        <input name="email" id="email" type="text" required placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <!-- referencia -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Referencia</label>
                                    <div class="col-sm-6">
                                        <textarea name="reference" id="reference" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo URL::base();?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base();?>assets/lib/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base();?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base();?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base();?>assets/js/app.js" type="text/javascript"></script>
    <script src="<?php echo URL::base();?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	$('form').parsley();
      });
    </script>
  </body>
</html>