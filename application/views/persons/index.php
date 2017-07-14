<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo URL::base(); ?>assets/img/favicon.png">
    <title>.:: Dircon Solutions - Module Persons ::.</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>assets/lib/datatables/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="<?php echo URL::base(); ?>assets/css/themes/orange-juice.css" type="text/css"/>
  </head>
  <body>
    <nav class="navbar navbar-full navbar-inverse navbar-fixed-top mai-top-header">
        <div class="container"><a href="<?php echo URL::base(); ?>user/dashboard" class="navbar-brand"></a>
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
          <li class="dropdown nav-item">
              <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle nav-link"> <img src="<?php echo URL::base();?>assets/img/avatar.jpg"><span class="user-name">Violeta Parra</span><span class="angle-down s7-angle-down"></span></a>
            <div role="menu" class="dropdown-menu">
                <a href="#" class="dropdown-item"> 
                    <span class="icon s7-home"> </span>My Account
                </a>
                <a href="#" class="dropdown-item"> 
                    <span class="icon s7-user"> </span>Profile
                </a>
                <a href="#" class="dropdown-item"> 
                    <span class="icon s7-cash"> </span>Billing
                </a>
                <a href="#" class="dropdown-item"> 
                    <span class="icon s7-tools"> </span>Settings
                </a>
                <a href="#" class="dropdown-item"> 
                    <span class="icon s7-power"> </span>Log Out
                </a>
            </div>
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
                                    <a href="<?php echo URL::base(); ?>persons/dashboard" class="nav-link active">
                                        <span class="icon s7-box2"></span><span class="name">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo URL::base(); ?>persons/new" class="nav-link">
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
                <div class="col-sm-12">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">Export Functions
                            <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div>
                        </div>
                        <div class="panel-body">
                            <table id="table3" class="table table-striped table-hover table-fw-widget">
                              <thead>
                                <tr>
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform(s)</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd gradeX">
                                  <td>Trident</td>
                                  <td>
                                    Internet
                                    Explorer 4.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td class="center"> 4</td>
                                  <td class="center"></td>
                                </tr>
                                <tr class="even gradeC">
                                  <td>Trident</td>
                                  <td>
                                    Internet
                                    Explorer 5.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td class="center">5</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="odd gradeA">
                                  <td>Trident</td>
                                  <td>
                                    Internet
                                    Explorer 5.5
                                  </td>
                                  <td>Win 95+</td>
                                  <td class="center">5.5</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="even gradeA">
                                  <td>Trident</td>
                                  <td>
                                    Internet
                                    Explorer 6
                                  </td>
                                  <td>Win 98+</td>
                                  <td class="center">6</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="odd gradeA">
                                  <td>Trident</td>
                                  <td>Internet Explorer 7</td>
                                  <td>Win XP SP2+</td>
                                  <td class="center">7</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="even gradeA">
                                  <td>Trident</td>
                                  <td>AOL browser (AOL desktop)</td>
                                  <td>Win XP</td>
                                  <td class="center">6</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Firefox 1.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td class="center">1.7</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Firefox 1.5</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Firefox 2.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Firefox 3.0</td>
                                  <td>Win 2k+ / OSX.3+</td>
                                  <td class="center">1.9</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Camino 1.0</td>
                                  <td>OSX.2+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Camino 1.5</td>
                                  <td>OSX.3+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Netscape 7.2</td>
                                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                                  <td class="center">1.7</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Netscape Browser 8</td>
                                  <td>Win 98SE+</td>
                                  <td class="center">1.7</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Netscape Navigator 9</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.1</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1.1</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.2</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1.2</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.3</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1.3</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.4</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1.4</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.5</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1.5</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.6</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">1.6</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.7</td>
                                  <td>Win 98+ / OSX.1+</td>
                                  <td class="center">1.7</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Mozilla 1.8</td>
                                  <td>Win 98+ / OSX.1+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Seamonkey 1.1</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Gecko</td>
                                  <td>Epiphany 2.20</td>
                                  <td>Gnome</td>
                                  <td class="center">1.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>Safari 1.2</td>
                                  <td>OSX.3</td>
                                  <td class="center">125.5</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>Safari 1.3</td>
                                  <td>OSX.3</td>
                                  <td class="center">312.8</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>Safari 2.0</td>
                                  <td>OSX.4+</td>
                                  <td class="center">419.3</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>Safari 3.0</td>
                                  <td>OSX.4+</td>
                                  <td class="center">522.1</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>OmniWeb 5.5</td>
                                  <td>OSX.4+</td>
                                  <td class="center">420</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>iPod Touch / iPhone</td>
                                  <td>iPod</td>
                                  <td class="center">420.1</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Webkit</td>
                                  <td>S60</td>
                                  <td>S60</td>
                                  <td class="center">413</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 7.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 7.5</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 8.0</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 8.5</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 9.0</td>
                                  <td>Win 95+ / OSX.3+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 9.2</td>
                                  <td>Win 88+ / OSX.3+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera 9.5</td>
                                  <td>Win 88+ / OSX.3+</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Opera for Wii</td>
                                  <td>Wii</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Nokia N800</td>
                                  <td>N800</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Presto</td>
                                  <td>Nintendo DS browser</td>
                                  <td>Nintendo DS</td>
                                  <td class="center">8.5</td>
                                  <td class="center">C/A<sup>1</sup></td>
                                </tr>
                                <tr class="gradeC">
                                  <td>KHTML</td>
                                  <td>Konqureror 3.1</td>
                                  <td>KDE 3.1</td>
                                  <td class="center">3.1</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>KHTML</td>
                                  <td>Konqureror 3.3</td>
                                  <td>KDE 3.3</td>
                                  <td class="center">3.3</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>KHTML</td>
                                  <td>Konqureror 3.5</td>
                                  <td>KDE 3.5</td>
                                  <td class="center">3.5</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeX">
                                  <td>Tasman</td>
                                  <td>Internet Explorer 4.5</td>
                                  <td>Mac OS 8-9</td>
                                  <td class="center">-</td>
                                  <td class="center">X</td>
                                </tr>
                                <tr class="gradeC">
                                  <td>Tasman</td>
                                  <td>Internet Explorer 5.1</td>
                                  <td>Mac OS 7.6-9</td>
                                  <td class="center">1</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="gradeC">
                                  <td>Tasman</td>
                                  <td>Internet Explorer 5.2</td>
                                  <td>Mac OS 8-X</td>
                                  <td class="center">1</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Misc</td>
                                  <td>NetFront 3.1</td>
                                  <td>Embedded devices</td>
                                  <td class="center">-</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                  <td>Misc</td>
                                  <td>NetFront 3.4</td>
                                  <td>Embedded devices</td>
                                  <td class="center">-</td>
                                  <td class="center">A</td>
                                </tr>
                                <tr class="gradeX">
                                  <td>Misc</td>
                                  <td>Dillo 0.8</td>
                                  <td>Embedded devices</td>
                                  <td class="center">-</td>
                                  <td class="center">X</td>
                                </tr>
                                <tr class="gradeX">
                                  <td>Misc</td>
                                  <td>Links</td>
                                  <td>Text only</td>
                                  <td class="center">-</td>
                                  <td class="center">X</td>
                                </tr>
                                <tr class="gradeX">
                                  <td>Misc</td>
                                  <td>Lynx</td>
                                  <td>Text only</td>
                                  <td class="center">-</td>
                                  <td class="center">X</td>
                                </tr>
                                <tr class="gradeC">
                                  <td>Misc</td>
                                  <td>IE Mobile</td>
                                  <td>Windows Mobile 6</td>
                                  <td class="center">-</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="gradeC">
                                  <td>Misc</td>
                                  <td>PSP browser</td>
                                  <td>PSP</td>
                                  <td class="center">-</td>
                                  <td class="center">C</td>
                                </tr>
                                <tr class="gradeU">
                                  <td>Other browsers</td>
                                  <td>All others</td>
                                  <td>-</td>
                                  <td class="center">-</td>
                                  <td class="center">U</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo URL::base(); ?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/js/app.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo URL::base(); ?>assets/js/app-tables-datatables.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
  </body>
</html>