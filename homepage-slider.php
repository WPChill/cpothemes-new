<?php if ( is_front_page() ) { ?>
    <div class="clear"></div>
    <div id="welcome" class="welcome">
        <h1 class="welcome-title"><?php _e( 'Find your next business WordPress theme here', 'cpotheme' ); ?></h1>
        <div class="welcome-description">
			<?php _e( 'We specialize in creating some of the Best Business WordPress Themes on the market. Subscribe and get access to our entire collection.', 'cpotheme' ); ?>
            <br/><br/>
            <a id="welcome-pricing" class="button button_medium"
               href="<?php _e( 'https://cpothemes.com/pricing', 'cpotheme' ); ?>">
				<?php _e( 'See Pricing', 'cpotheme' ); ?>
            </a>
        </div>
    </div>
<?php } ?>