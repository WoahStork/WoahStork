

    <!-- Navigation -->
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>
<!-- READ THIS GREG             This is for error messages and whatnot -->
    
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?> 

      
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
	    <video autoplay loop poster="/img/bg-bed.png" id="bgvid">
		    <source src="sites/all/themes/bootstork/img/ws-video-long.webm" type="video/webm">
		    <source src="sites/all/themes/bootstork/img/ws-video-long.mp4" type="video/mp4">
		    <source src="sites/all/themes/bootstork/img/ws-video-long.ogg" type="video/ogv">
		</video>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>The cannabis delivery app that learns from you.</h1>
                        <h3>Welcome to the early-access beta for Woahstork, the first cannabis delivery and pick-up app that learns your preferences as you use it, and rewards you for trying new strains.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline dark-group">
                            <li>
                                <a data-toggle="modal" data-target="#signup1" style="color:white;" class="btn btn-default btn-lg"><span class="network-name" style="color:white;">Sign up for early beta access</span></a>
                            </li>
                     
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

  <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
	                <h4 class="section-heading">Features</h4>
	                <br/>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Welcome to the Woah</h2>
                    <p class="lead"><b>So many strains, so little time</b><br/> Imagine an app that lets you schedule your cannabis pick-up and delivery orders while <i>learning</i> what you like and making recommendations on new products you haven’t tried yet – all while earning rewards. Welcome to Woahstork.</p>
                    
                </div>
            </div>
            <div class="row bucket-container">
	            <a href="/about#order"><div class="bucket-inner b1 col-xs-12 col-sm-6 col-md-4" >
		            <div class=""><h3>Order cannabis online<br/><small>(search menus across all dispensaries via web, iOS, and Android)</small></h3></div>
	            </div>
	            </a>
	            <a href="/about#straingenie">
	            <div class="bucket-inner b2 col-xs-12 col-sm-6 col-md-4">
		            <div class=""><h3>Meet the strain genie<br/><small>(he suggests the perfect strain for your current need)</small></h3></div>
	            </div>
	            </a>
	            <a href="/about#history">
	            <div class="bucket-inner b3 col-xs-12 col-sm-6 col-md-4">
		            <div class=""><h3>harness your history<br/><small>(use your past to predict your present)</small></h3></div>
	            </div>
	            </a>
	            <a href="/about#privacy">
	            <div class="bucket-inner b4 col-xs-12 col-sm-6 col-md-4">
		            <div class=""><h3>feel private and secure<br/><small>(we provided one-time verification, account encryption, and HIPAA compliance)</small></h3></div>
	            </div>
	            </a>
	            <a href="/about#preroll">
	            <div class="bucket-inner b5 col-xs-12 col-sm-6 col-md-4">
		            <div class=""><h3>Keep it custom<br/><small>(prerolls, the way you want them)</small></h3></div>
	            </div>
	            </a>
	            <a href="/about#woahs">
	            <div class="bucket-inner b6 col-xs-12 col-sm-6 col-md-4">
		            <div class=""><h3>Earn Woahs<br/><small>(get prestige, free stuff, and more)</small></h3></div>
	            </div>
	            </a>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

  <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Sign up now</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a data-toggle="modal" data-target="#signup1" class="btn btn-default btn-lg"> <span class="network-name">WoahStork Early Beta Access</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
<footer class="footer container_fluid">
  <?php print render($page['footer']); ?>
</footer>
<!-- Modal Nonsense -->

<!-- Sign Up 1 -->
<div class="modal fade" id="signup1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Early Access Beta Sign Up</h4>
      </div>
      <div class="modal-body">
        <div class="btn-group" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <a href="user/dispensary/register"> 
                <button type="button" class="btn btn-lg btn-success">I own a dispensary</button></a>
          </div>
          <div class="btn-group" role="group">
            <a href="user/register">
                <button type="button" class="btn btn-lg btn-info">I want beta user access</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>