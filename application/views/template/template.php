<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>.:: Dircon Solutions - Module Persons ::.</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
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
                          <div class="img"><img src="assets/img/avatars/img1.jpg"></div>
                          <div class="content"><span class="date">16 Sept</span><span class="name">Victor Jara</span><span class="desc">The song that has been brave, will always be the new song. </span></div></a></li>
                      <li><a href="#">
                          <div class="img"><img src="assets/img/avatars/img2.jpg"></div>
                          <div class="content"><span class="date">4 Sept</span><span class="name">Gustavo Cerati</span><span class="desc">You will see me fly across the city of fury where no one knows of me.</span></div></a></li>
                      <li><a href="#">
                          <div class="img"><img src="assets/img/avatars/img3.jpg"></div>
                          <div class="content"><span class="date">13 Aug</span><span class="name">Jaime Garzón</span><span class="desc">Now everything came back to the abnormality.</span></div></a></li>
                      <li><a href="#">
                          <div class="img"><img src="assets/img/avatars/img4.jpg"></div>
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
          <li class="dropdown nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle nav-link"> <img src="assets/img/avatar.jpg"><span class="user-name">Violeta Parra</span><span class="angle-down s7-angle-down"></span></a>
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
                                    <li class="nav-item parent"><a href="#" role="button" aria-expanded="false" class="nav-link"><span class="icon s7-home"></span><span>Home</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                                  <li class="nav-item"><a href="index.html" class="nav-link"><span class="icon s7-monitor"></span><span class="name">Dashboard</span></a>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="ui-elements.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-diamond"></span><span class="name">UI Elements</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="ui-general.html" class="dropdown-item">General</a><a href="ui-panels.html" class="dropdown-item">Panels</a><a href="ui-buttons.html" class="dropdown-item">Buttons</a><a href="ui-typography.html" class="dropdown-item">Typography</a><a href="ui-grid.html" class="dropdown-item">Grid</a>
                                                              </div>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="ui-elements.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-diamond"></span><span class="name">Components</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="ui-alerts.html" class="dropdown-item">Alerts</a><a href="ui-icons.html" class="dropdown-item">Icons</a><a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp; Accordions</a>
                                                              </div>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="plugins.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-plugin"></span><span class="name">Plugins</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="ui-modals.html" class="dropdown-item">Modals</a><a href="ui-nestable-lists.html" class="dropdown-item">Nestable Lists</a><a href="ui-notifications.html" class="dropdown-item">Notifications</a>
                                                              </div>
                                                  </li>
                                      </ul>
                                    </li>
                                    <li class="nav-item parent"><a href="#" role="button" aria-expanded="false" class="nav-link"><span class="icon s7-rocket"></span><span>Forms</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                                  <li class="nav-item"><a href="form-elements.html" class="nav-link"><span class="name">Elements</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="form-validation.html" class="nav-link"><span class="name">Validation</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="form-masks.html" class="nav-link"><span class="name">Masks</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="form-xeditable.html" class="nav-link"><span class="name">X-Editable</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="form-multiselect.html" class="nav-link"><span class="name">Multiselect</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="form-wizard.html" class="nav-link"><span class="name">Wizard</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="form-upload.html" class="nav-link"><span class="name">Upload</span></a>
                                                  </li>
                                      </ul>
                                    </li>
                                    <li class="nav-item parent open"><a href="#" role="button" aria-expanded="false" class="nav-link"><span class="icon s7-diamond"></span><span>Tables</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                                  <li class="nav-item"><a href="tables-general.html" class="nav-link"><span class="icon s7-box2"></span><span class="name">General</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="tables-datatables.html" class="nav-link active"><span class="icon s7-box2"></span><span class="name">Data Tables</span></a>
                                                  </li>
                                      </ul>
                                    </li>
                                    <li class="nav-item parent"><a href="#" role="button" aria-expanded="false" class="nav-link"><span class="icon s7-portfolio"></span><span>Pages</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                                  <li class="nav-item"><a href="pages-profile.html" class="nav-link"><span class="icon s7-user"></span><span class="name">Profile</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="pages-pricing-tables.html" class="nav-link"><span class="icon s7-cash"></span><span class="name">Pricing</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="pages-invoice.html" class="nav-link"><span class="icon s7-wallet"></span><span class="name">Invoice</span></a>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="login.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-diamond"></span><span class="name">Login</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="pages-login.html" class="dropdown-item">Login</a><a href="pages-sign-up.html" class="dropdown-item">Sign Up</a><a href="pages-forgot-password.html" class="dropdown-item">Forgot Password</a>
                                                              </div>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="mail.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-mail"></span><span class="name">Mail</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="email-inbox.html" class="dropdown-item">Inbox</a><a href="email-detail.html" class="dropdown-item">Detail</a><a href="email-compose.html" class="dropdown-item">Compose</a>
                                                              </div>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="maps.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-map-marker"></span><span class="name">Maps</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="maps-google.html" class="dropdown-item">Google Maps</a><a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                              </div>
                                                  </li>
                                                  <li class="nav-item dropdown parent"><a href="extra.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-diamond"></span><span class="name">Extra Pages</span></a>
                                                              <div role="menu" class="dropdown-menu mai-sub-nav"><a href="pages-blank.html" class="dropdown-item">Blank Page</a><a href="pages-blank-header.html" class="dropdown-item">Blank Page Header</a><a href="pages-404.html" class="dropdown-item">404 Page</a><a href="pages-gallery.html" class="dropdown-item">Gallery</a><a href="pages-calendar.html" class="dropdown-item">Calendar</a>
                                                              </div>
                                                  </li>
                                      </ul>
                                    </li>
                                    <li class="nav-item parent"><a href="#" role="button" aria-expanded="false" class="nav-link"><span class="icon s7-display1"></span><span>Charts</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                                  <li class="nav-item"><a href="charts-flot.html" class="nav-link"><span class="icon s7-graph"></span><span class="name">Flot</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="charts-sparklines.html" class="nav-link"><span class="icon s7-graph1"></span><span class="name">Sparklines</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="charts-morris.html" class="nav-link"><span class="icon s7-graph3"></span><span class="name">Morris.js</span></a>
                                                  </li>
                                                  <li class="nav-item"><a href="charts-chartjs.html" class="nav-link"><span class="icon s7-graph2"></span><span class="name">Chart.js</span></a>
                                                  </li>
                                      </ul>
                                    </li>
                                    <li class="nav-item parent"><a href="#" role="button" aria-expanded="false" class="nav-link"><span class="icon s7-tools"></span><span>Layouts</span></a>
                                      <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                                  <li class="nav-item dropdown parent mega-menu"><a href="mega-menu.html" data-toggle="dropdown" class="nav-link"><span class="icon s7-ribbon"></span><span class="name">Mega Menu</span></a>
                                                              <div role="menu" class="dropdown-menu mai-mega-menu mai-sub-nav">
                                                                <div class="mai-mega-menu-row">
                                                                  <div class="mai-mega-menu-column">
                                                                              <div class="mai-mega-menu-section parent"><a href="#" class="nav-link"><span class="icon s7-note2"></span><span>Forms</span></a>
                                                                                <div class="mai-mega-menu-sub-items mai-sub-nav"><a href="form-elements.html" class="dropdown-item">Elements</a><a href="form-validation.html" class="dropdown-item">Validation</a><a href="form-masks.html" class="dropdown-item">Input Masks</a><a href="form-xeditable.html" class="dropdown-item">X Editable</a><a href="form-multiselect.html" class="dropdown-item">Multiselect</a><a href="form-wizard.html" class="dropdown-item">Wizard</a><a href="form-upload.html" class="dropdown-item">Multi Upload</a><a href="form-editor.html" class="dropdown-item">Text Editor</a>
                                                                                </div>
                                                                              </div>
                                                                  </div>
                                                                  <div class="mai-mega-menu-column">
                                                                              <div class="mai-mega-menu-section parent"><a href="#" class="nav-link"><span class="icon s7-keypad"></span><span>Tables</span></a>
                                                                                <div class="mai-mega-menu-sub-items mai-sub-nav"><a href="tables-general.html" class="dropdown-item">General</a><a href="tables-datatables.html" class="dropdown-item active">Datatables</a>
                                                                                </div>
                                                                              </div>
                                                                  </div>
                                                                  <div class="mai-mega-menu-column">
                                                                              <div class="mai-mega-menu-section parent"><a href="#" class="nav-link"><span class="icon s7-bookmarks"></span><span>Pages</span></a>
                                                                                <div class="mai-mega-menu-sub-items mai-sub-nav"><a href="pages-login.html" class="dropdown-item">Login</a><a href="pages-sign-up.html" class="dropdown-item">Sign Up</a><a href="pages-forgot-password.html" class="dropdown-item">Forgot Password</a><a href="pages-blank.html" class="dropdown-item">Blank Page</a><a href="pages-calendar.html" class="dropdown-item">Calendar</a><a href="pages-gallery.html" class="dropdown-item">Gallery</a><a href="pages-pricing-tables.html" class="dropdown-item">Pricing Tables</a><a href="pages-invoice.html" class="dropdown-item">Invoice</a><a href="pages-profile.html" class="dropdown-item">Profile</a><a href="pages-404.html" class="dropdown-item">404 Page</a>
                                                                                </div>
                                                                              </div>
                                                                  </div>
                                                                  <div class="mai-mega-menu-column">
                                                                              <div class="mai-mega-menu-section parent"><a href="#" class="nav-link"><span class="icon s7-map"></span><span>Maps</span></a>
                                                                                <div class="mai-mega-menu-sub-items mai-sub-nav"><a href="maps-google.html" class="dropdown-item">Google Maps</a><a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                                                </div>
                                                                              </div>
                                                                              <div class="mai-mega-menu-section parent"><a href="#" class="nav-link"><span class="icon s7-mail"></span><span>Mail</span></a>
                                                                                <div class="mai-mega-menu-sub-items mai-sub-nav"><a href="email-inbox.html" class="dropdown-item">Inbox</a><a href="email-detail.html" class="dropdown-item">Detail</a><a href="email-compose.html" class="dropdown-item">Compose</a>
                                                                                </div>
                                                                              </div>
                                                                  </div>
                                                                </div>
                                                              </div>
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
              <div class="panel-heading">Default
                <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div>
              </div>
              <div class="panel-body">
                <table id="table1" class="table table-striped table-hover">
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
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">Custom Layout
                <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div><span class="panel-subtitle">This is a custom datable layout</span>
              </div>
              <div class="panel-body">
                <table id="table2" class="table table-striped table-hover table-fw-widget">
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
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/app-tables-datatables.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
  </body>
</html>