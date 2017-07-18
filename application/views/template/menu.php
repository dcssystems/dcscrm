<nav class="navbar navbar-toggleable-sm">
    <button type="button" data-toggle="collapse" data-target="#mai-navbar-collapse" aria-controls="#mai-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler hidden-md-up collapsed">
        <div class="icon-bar"><span></span><span></span><span></span></div>
    </button>
    <div id="mai-navbar-collapse" class="navbar-collapse collapse mai-nav-tabs">
        <ul class="nav navbar-nav">
            <li class="nav-item parent">
                <a href="<?php //echo URL::base(); user/dashboard?>#" role="button" aria-expanded="false" class="nav-link">
                    <span class="icon s7-home"></span><span>Inicio</span>
                </a>                            
            </li>
            <li class="nav-item parent open">
                <a href="javascript:void();" role="button" aria-expanded="false" class="nav-link">
                    <span class="icon s7-diamond"></span><span>Personas</span>
                </a>
                <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                    <li class="nav-item">
                        <a href="<?php echo URL::base(); ?>persons/dashboard" class="nav-link <?php echo !empty($dashboard)?'active':''; ?>">
                            <span class="icon s7-box2"></span><span class="name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URL::base(); ?>persons/new" class="nav-link <?php echo !empty($active)?'active':''; ?>">
                            <span class="icon s7-box2"></span><span class="name">Nuevo</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>