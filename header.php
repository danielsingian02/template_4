<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	wp_head();
	?>
</head>

<body>

	<header class="template_4_head">
		<!-- navigation menu -->
		<nav class="navbar navbar-expand-lg desktop">
			<div class="container-fluid d-flex flex-row justify-content-center">

				<button 
					class="navbar-toggler" 
					type="button" 
					data-bs-toggle="offcanvas" 
					data-bs-target="#offcanvasScrolling" 
					aria-controls="offcanvasScrolling">

					<i class="fa fa-bars" aria-hidden="true"></i>

				</button>

				<div 
					class="offcanvas offcanvas-end"
					data-bs-scroll="true" 
					data-bs-backdrop="false" 
					tabindex="-1" 
					id="offcanvasScrolling" 
					aria-labelledby="offcanvasScrollingLabel">

					<div class="offcanvas-header">

						<h5 class="offcanvas-title" id="offcanvasScrollingLabel">
							<?php echo get_bloginfo(); ?>
						</h5>

						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

					</div>

					<div class="offcanvas-body">

						<div class="template_4_header_menu w-100">

							<?php wp_nav_menu( 'primary' ); ?>

						</div>

					</div>					

				</div>

			</div>
		</nav>

	</header>
