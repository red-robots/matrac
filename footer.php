<?php
/**
 * The template for displaying the footer.
 *
 */
?>
	</div><!-- #main .wrapper -->
	<div id="footer">
		<div class="site-info">
            <p>
				<?php the_field('footer_info' , 'option');  ?>
            </p>
		</div><!-- .site-info -->
	</div><!-- #footer -->


<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50969136-1', 'metrolinapreparedness.org');
  ga('send', 'pageview');

</script>
</body>
</html>