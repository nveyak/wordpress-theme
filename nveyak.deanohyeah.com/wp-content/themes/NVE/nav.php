<nav class="navbar-inverse main-nav">
			<div class="navbar navbar-inner nav-collapse collapse">
			      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
            <?php 
            $defaults = array(
            	'theme_location'  => 'primary',
            	'container'       => 'div',
            	'menu_class'      => 'nav ',
            	'echo'            => true,
            	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            	'depth'           => 0,
            );
            wp_nav_menu( $defaults ); ?>
			</div>
</nav>