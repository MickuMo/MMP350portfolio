
    <footer id="main-footer">
        <div class="row">
           
           <div class="small-6 columns">
			    <p class="copyright">&copy; <?php the_author(); ?> <?php echo date("Y") ?></p>
			</div>
           
            <div class="small-6 columns">
                    <?php $footer_menu = array(
						'theme_location' => 'footer-menu'
					   );
				    ?>
				    <?php wp_nav_menu($footer_menu); ?>

            </div>
            
        </div>
    </footer>
    
    </body>
</html>
