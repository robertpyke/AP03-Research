<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title_for_layout?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<!-- Include external files and scripts here (See HTML helper for more info.) -->
		<!-- 
			Example of how to include something here -> Place this in your specific view:
			< ?php echo $javascript->link('jtip', false); ?> 
		-->
		<?php
			echo $scripts_for_layout;
		?>
	</head>
	<body>

		<div id="header">
			<div id="menu"></div>
		</div>

		<!-- Flash Messages-->
		<?php echo $this->Session->flash('flash', array('element' => 'flash')); ?>

		<!-- View Content Here -->
		<?php echo $content_for_layout ?>

		<div id="footer"></div>

	</body>
</html>
