<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@if (get_field('seo_title'))
		<title>{{ get_field('seo_title') }} | {{ get_bloginfo('name') }}</title>
		<meta property="og:title" content="{{ get_field('seo_title') }} | {{ get_bloginfo('name') }}">
	@else
		<title>{{ the_title() }} | {{ get_bloginfo('name') }}</title>
		<meta property="og:title" content="{{ the_title() }} | {{ get_bloginfo('name') }}">
	@endif
	<meta property="og:site_name" content="{{ get_bloginfo('name') }}">
	<meta property="og:url" content="{{ $_SERVER['PHP_SELF'] }}">
	<meta property="og:image" content="">
	@if (get_field('seo_description'))
		<meta name="description" content="{{ get_field('seo_description') }}">
		<meta property="og:description" content="{{ get_field('seo_description') }}" />
	@endif
	@if (get_field('seo_keywords'))
		<meta name="keywords" content="{{ get_field('seo_keywords') }}" />
	@endif

	<link href="{{ get_template_directory_uri() }}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ get_template_directory_uri() }}/assets/css/main.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container-fluid" id="header-wrapper">
		<div class="row">
			
			<div class="container" id="nav-inner">
				<div class="row">
				
					<nav class="navbar navbar-default" id="nav-wrapper">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="{{ site_url() }}">{{ get_bloginfo('name') }}</a>
							</div><!-- ./navbar-header -->
							<?php
							wp_nav_menu( array(
								'menu' => 'header-menu',
								'theme_location' => 'header-menu',
								'depth' => 2,
								'container' => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id' => 'main-nav',
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
								'walker' => new wp_bootstrap_navwalker())
							)
							?>
						</div><!-- /.container-fluid -->
					</nav>
				
				</div><!-- ./row -->
			</div><!-- ./container -->
			
		</div><!-- ./row -->
	</div><!-- #/header-wrapper -->
	
	<div class="container-fluid" id="content-wrapper">
		<div class="row">
			
			<div class="container" id="content-inner">
				<div class="row">
					
					@yield('content')
					
				</div><!-- ./row -->
			</div><!-- ./container -->
			
		</div><!-- ./row -->
	</div><!-- #/content-wrapper -->
	
	<div class="container-fluid" id="footer-wrapper">
		<div class="row">
			
			<div class="container" id="footer-inner">
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
					</div><!-- ./col-lg-12 -->
					
				</div><!-- ./row -->
			</div><!-- #/footer-inner -->
			
		</div><!-- ./row -->
	</div><!-- #/content-wrapper -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="{{ get_template_directory_uri() }}/assets/js/bootstrap.min.js"></script>
	<script src="{{ get_template_directory_uri() }}/assets/js/main.js"></script>
</body>
</html>