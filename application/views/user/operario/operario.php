<div class="main-content container">
    <div class="user-profile">
        <div class="row">
            <div class="col-md-12">
                <div class="user-display">
                    <div class="user-display-cover"><img src="<?php echo URL::base(); ?>assets/img/cover.jpg" alt="cover"></div>
                    <div class="user-display-bottom">
                        <div class="user-display-id"><img src="<?php echo URL::base(); ?>assets/img/avatars/img3.jpg" alt="avatar" class="user-display-avatar">
                            <div class="user-display-name">Justin Adams</div>
                        </div>
                        <div class="user-display-stats">
                            <div class="user-display-stat"><span class="user-display-stat-counter">26</span><span class="user-display-stat-title">Issues</span></div>
                            <div class="user-display-stat"><span class="user-display-stat-counter">165</span><span class="user-display-stat-title">Commits</span></div>
                            <div class="user-display-stat"><span class="user-display-stat-counter">43</span><span class="user-display-stat-title">Followers</span></div>
                            <div class="user-display-stat"><span class="user-display-stat-counter">157</span><span class="user-display-stat-title">Following</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="row">
        <div class="col-md-4">
          <div class="user-info-list panel panel-default">
            <div class="panel-heading panel-heading-divider">About Me</div>
            <div class="panel-body">
              <table class="no-border no-strip skills">
                <tbody class="no-border-x no-border-y">
                  <tr>
                    <td class="icon"><span class="icon s7-portfolio"></span></td>
                    <td class="item">Ocupation</td>
                    <td><a href="#">Designer</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="icon s7-gift"></span></td>
                    <td class="item">Birthday</td>
                    <td> <a href="#">16 September 1989</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="icon s7-phone"></span></td>
                    <td class="item">Mobile</td>
                    <td> <a href="#">(999) 999-9999</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="icon s7-global"></span></td>
                    <td class="item">Website</td>
                    <td> <a href="#">www.website.com</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="icon s7-map-marker"></span></td>
                    <td class="item">Location</td>
                    <td> <a href="#">Montreal, Canada</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="panel-heading panel-heading-divider">Elsewhere</div>
            <div class="panel-body">
              <table class="no-border no-strip social">
                <tbody class="no-border-x no-border-y">
                  <tr>
                    <td class="icon"><span class="fa fa-facebook"></span></td>
                    <td class="item"><a href="#">Facebook</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="fa fa-twitter"></span></td>
                    <td class="item"> <a href="#">Twitter</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="fa fa-dribbble"></span></td>
                    <td class="item"> <a href="#">Dribble</a></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="fa fa-github"></span></td>
                    <td class="item"> <a href="#">Github</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="user-countdown panel panel-border-color panel-border-color-primary">
            <div class="panel-body">
              <div class="countdown-title">Project Deadline</div>
              <div id="user-countdown"></div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="widget widget-fullwidth user-develop-chart">
            <div class="widget-head">
              <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-refresh-2"></span></div><span class="title">Development Activity</span>
            </div>
            <div class="widget-chart-container">
              <div id="develop-chart-legend" class="legend-container"></div>
              <div id="develop-chart" style="height: 180px;"></div>
              <div class="chart-table pt-3">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th style="width:37%;">User</th>
                      <th style="width:36%;">Commit</th>
                      <th>Date</th>
                      <th class="actions"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="user-avatar"> <img src="<?php echo URL::base(); ?>assets/img/avatars/img1.jpg" alt="Avatar">Ryan Lawrence</td>
                      <td>Initial commit</td>
                      <td>May 6, 2016</td>
                      <td class="actions"><a href="#" class="icon"><i class="s7-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="<?php echo URL::base(); ?>assets/img/avatars/img2.jpg" alt="Avatar">Benji Miller</td>
                      <td>Main structure</td>
                      <td>April 22, 2016</td>
                      <td class="actions"><a href="#" class="icon"><i class="s7-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="<?php echo URL::base(); ?>assets/img/avatars/img3.jpg" alt="Avatar">Justine Adams</td>
                      <td>Left sidebar adjusments</td>
                      <td>April 15, 2016</td>
                      <td class="actions"><a href="#" class="icon"><i class="s7-trash"></i></a></td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="<?php echo URL::base(); ?>assets/img/avatars/img4.jpg" alt="Avatar">Brett Harris</td>
                      <td>Topbar dropdown style</td>
                      <td>April 8, 2016</td>
                      <td class="actions"><a href="#" class="icon"><i class="s7-trash"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="widget widget-tile widget-tile-wide">
            <div class="tile-info">
              <div class="icon"><span class="s7-graph1"></span></div>
              <div class="data-info">
                <div class="title">Support Tickets</div>
              </div>
            </div>
            <div class="tile-value"><span data-toggle="counter" data-end="157">0</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="widget widget-calendar">
                <div class="cal-container">
                    <div class="cal-calendar">
                        <div class="ui-datepicker"></div><a href="#" class="add-note"><span class="icon s7-plus"></span>Add a new note</a>
                    </div>
                    <div class="cal-notes"><span class="day">Thursday</span><span class="date">September 24</span><span class="title">Notes</span>
                        <ul>
                            <li><span class="hour">12h</span><span class="event-name">Meeting with investors</span></li>
                            <li><span class="hour">8h</span><span class="event-name">Dentist date</span></li>
                            <li><span class="hour">1h</span><span class="event-name">Lunch with Julie</span></li>
                            <li><span class="hour">11h</span><span class="event-name">Prepare report</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <ul class="timeline">
                <li class="timeline-item">
                    <div class="timeline-date"><span>Sep 16, 2017</span></div>
                    <div class="timeline-content">
                        <div class="timeline-avatar"><img src="<?php echo URL::base(); ?>assets/img/avatars/img1.jpg" alt="Avatar" class="circle"></div>
                        <div class="timeline-header"><span class="timeline-time">4:34 PM</span><span class="timeline-autor">Ryan Lawrence</span>
                          <p class="timeline-activity">Pellentesque imperdiet sit <a href="#">Amet nisl sed mattis</a>.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-item timeline-item-detailed">
                    <div class="timeline-date"><span>Sep 13, 2017</span></div>
                    <div class="timeline-content">
                        <div class="timeline-avatar"><img src="<?php echo URL::base(); ?>assets/img/avatars/img2.jpg" alt="Avatar" class="circle"></div>
                        <div class="timeline-header">
                            <span class="timeline-time">9:54 AM</span><span class="timeline-autor">Benji Miller  </span>
                            <p class="timeline-activity">Mauris condimentum est <a href="#">Viverra erat fermentum</a>.</p>
                            <div class="timeline-summary">
                              <p>Suspendisse ac libero sed mauris tempor vehicula porttitor non sapien. Aliquam viver... </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item timeline-item-detailed timeline-item-gallery">
                    <div class="timeline-date"><span>Aug 23, 2017</span></div>
                    <div class="timeline-content">
                        <div class="timeline-avatar"><img src="<?php echo URL::base(); ?>assets/img/avatars/img3.jpg" alt="Avatar" class="circle"></div>
                        <div class="timeline-header"><span class="timeline-time">10:42 AM</span><span class="timeline-autor">Justin Adams </span>
                            <p class="timeline-activity">pellentesque tortor <a href="#">enim</a>.</p>
                            <div class="timeline-gallery"><img src="<?php echo URL::base(); ?>assets/img/gallery/img2.jpg" alt="Thumbnail" class="gallery-thumbnail"><img src="<?php echo URL::base(); ?>assets/img/gallery/img4.jpg" alt="Thumbnail" class="gallery-thumbnail"><img src="<?php echo URL::base(); ?>assets/img/gallery/img11.jpg" alt="Thumbnail" class="gallery-thumbnail"></div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item timeline-item-detailed">
                    <div class="timeline-date"><span>Aug 6, 2017</span></div>
                    <div class="timeline-content">
                        <div class="timeline-avatar"><img src="<?php echo URL::base(); ?>assets/img/avatars/img4.jpg" alt="Avatar" class="circle"></div>
                        <div class="timeline-header"><span class="timeline-time">7:15 PM</span><span class="timeline-autor">Brett Harris</span>
                            <p class="timeline-activity">Mauris condimentum est <a href="#">Vestibulum justo neque</a>.</p>
                            <div class="timeline-summary">
                              <p>Quisque condimentum enim nec porttitor egestas. Morbi fermentum in ante volutpat... </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-date"><span>Jun 11, 2017</span></div>
                    <div class="timeline-content">
                        <div class="timeline-avatar"><img src="<?php echo URL::base(); ?>assets/img/avatar.jpg" alt="Avatar" class="circle"></div>
                        <div class="timeline-header"><span class="timeline-time">6:25 AM</span><span class="timeline-autor">Sherwood Clifford </span>
                            <p class="timeline-activity">pellentesque tortor <a href="#">Aliquam viverra</a>.</p>
                            <blockquote class="timeline-blockquote">
                                <p>Quisque condimentum enim nec porttitor egestas. </p>
                                <footer>Aliquam viverra ornare dolor.</footer>
                            </blockquote>
                        </div>
                    </div>
                </li>
                <li class="timeline-item timeline-loadmore">
                    <a href="#" class="btn btn-sm btn-secondary load-more-btn">Load more</a>
                </li>
            </ul>
        </div>
    </div>
</div>