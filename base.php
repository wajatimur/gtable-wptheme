<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
	<?php if (is_front_page()) { ?>
	<div class="jumbotron masthead">
		<div class="container">
			<h1>DTRE</h1>
			<p>DataTables RowEditable, Simplified inline table editing.</p>
			<p>
				<a href="https://github.com/wajatimur/dtre/archive/master.zip" class="btn btn-primary btn-large" >Download Latest DTRE</a>
			</p>
			<ul class="masthead-links">
				<li>
					<a href="http://github.com/wajatimur/dtre" >GitHub project</a>
				</li>
				<li>
					<a href="#demo" >Demo</a>
				</li>
				<li>
					Version 0.9.1
				</li>
			</ul>
		</div>
	</div>
	
	<div class="bs-docs-social">
		<div class="container">
			<ul class="bs-docs-social-buttons">
			  <li>
				<iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=wajatimur&repo=dtre&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
			  </li>
			  <li>
				<iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=wajatimur&repo=dtre&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px"></iframe>
			  </li>
			  
			  <li class="follow-btn">
				<a href="https://twitter.com/azrijamil" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="false">Follow @azrijamil</a>
			  </li>
			  <li class="tweet-btn">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://github.com/wajatimur/dtre" data-count="horizontal" data-via="azrijamil" data-related="mdo:Creator of DTRE">Tweet</a>
			  </li>
			</ul>
		</div>
	</div>
	<?php } ?>
	
	<div id="wrap" class="container" role="document">
		<?php if (is_front_page()) { ?>
		<div class="marketing">
			<h1>Introducing DTRE.</h1>
			<p class="marketing-byline">Minimal setup and powerful table editing library for faster and easier web development.</p>
			<div class="row-fluid">
				<div class="span3">
					<h2>Overview.</h2>
					<p>Built by <a href="http://twitter.com/azrijamil">Azri Jamil</a>, DTRE objective is to simplified table editing process and development. Data are update through XMLHTTPRequest to back-end server supported by any type of server.</p>
				</div>
				<div class="span3">
					<h2>Features</h2>
					<p>DTRE is a plugins for the great jQuery tables plugins; DataTables(http://www.datatables.net/). It will automatically create an editable row with an input element and capable of updating the back-end server with a basic command such as add, edit and delete.</p>
				</div>
				<div class="span3">
					<h2>Extra Milages</h2>
					<p>Keep your code clean by utilizing a useful built features. Event, dialog edit, server response processing and more.</p>
				</div>
				<div class="span3">
					<h2>For Developer</h2>
					<p>DTRE have been built from scratch, beautifully code for other to understand. Please help us to improved the code.</p>
				</div>
			</div>
		</div>
		<?php } ?>
		
		<div id="content" class="row">
			<div id="main" class="<?php echo roots_main_class(); ?>" role="main">
			<?php include roots_template_path(); ?>
			</div>
			<?php if (roots_display_sidebar()) : ?>
			<aside id="sidebar" class="<?php echo roots_sidebar_class(); ?>" role="complementary">
			<?php get_template_part('templates/sidebar'); ?>
			</aside>
			<?php endif; ?>
		</div><!-- /#content -->
	</div><!-- /#wrap -->
	
	
	<?php get_template_part('templates/footer'); ?>

</body>
</html>
