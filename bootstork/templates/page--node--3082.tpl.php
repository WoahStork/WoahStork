
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
<!-- This is for error messages and whatnot -->
    
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
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>WoahStork for Dispensaries</h1>
                        <h3>Welcome to the early-access beta for WoahStork, the revolutionary technology connecting all parts of the cannabis culture.</h3>
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
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About WoahStork</h2>
                    <p class="lead">WoahStork combines the power of preference learning with one of the largest cannabis repositories on the internet, allowing users to research, try, and review thousands of strains and products. Add in the ability to place pick-up or delivery orders, and you have one of the most powerful pieces of technology in the cannabis industry, and the value to our dispensary partners is just as powerful.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="sites/all/themes/bootstork/img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Benefits</h2>
                    <p class="lead">As a WoahStork dispensary, you'll be more than just a menu on a web-page or a dot on a map                      
                    </p>
                    <ul>
                      <li>Reach and retain new customers</li>
                      <li>Reduce walk-in wait times by allowing pick-up orders</li>
                      <li>Establish customer buying habits through follow-up marketing</li>
                      <li>Advertise specials to attract new customers</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="sites/all/themes/bootstork/img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Amazing Features</h2>
                    <p class="lead">Run the world from your WoahStork Dashboard:</p>
                    <ul>
                      <li>Manage pick-up and delivery orders</li>
                      <li>Edit your menu, hours, and photos</li>
                      <li>Run specials to move product</li>
                      <li>Access powerful customer analytics</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="sites/all/themes/bootstork/img/phones.png" alt="">
                </div>
            </div>

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