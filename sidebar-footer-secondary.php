<div class="second-footer-widget-area">
    <div class="skin">
        <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { 
            dynamic_sidebar( 'second-footer-widget-area' );
        } else {                    
            if ( has_nav_menu( 'sub' ) ) { ?>
                    <div class="widget"><h2><?php bloginfo( 'name' ); ?></h2> 
                    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sub' ) ); ?>
                    </div>
            <?php } else { ?>
                <div class="widget">
                    <h2><?php bloginfo( 'name' ); ?></h2> 
                    <div class="menu-header">
                        <ul id="menu-submenu" class="menu">
                            <li class="menu-item">URL: <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'url' ); ?></a></li>
                            <li class="menu-item">RSS-Feed: <a href="<?php bloginfo( 'rss_url' ); ?>"><?php bloginfo( 'rss_url' ); ?></a></li>
                        </ul>
                    </div>
                </div>
            <?php } } ?>
    </div>
</div>
