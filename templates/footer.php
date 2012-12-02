<footer id="content-info" class="footer" role="contentinfo">
  	<div class="container">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
		<ul class="footer-links">
		  <li>Sponsored By <a href="http://nematix.com">Nematix Software</a></li>
		</ul>
	  	<?php dynamic_sidebar('sidebar-footer'); ?>
	  	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  	</div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>
