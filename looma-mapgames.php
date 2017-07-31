<!doctype html>
<!--
Author: Julia
Email: julia.wang@menloschool.org
Filename: looma-mapgames.html
Date:Fall 2015
Description: page with links to map games
-->


	<?php $page_title = 'Looma Map Games ';
	      include ('includes/header.php'); ?>
	<!-- add CSS files for this page:
		<link rel="stylesheet" href="css/filename.css"> -->
	</head>

<body>
	<div id="main-container-horizontal">
		<h2 class="title"> <?php keyword("Looma Maps Practice Exercises"); ?> </h2>
		<div class="center">
			<br><br><br><br>
		<a href="looma-maps-worldgame.php">
			<button type="button" class="activity play img navigate" ><?php keyword('World') ?>  </button>
			</a>

		<a href="looma-maps-asiacountrygame.php">
			<button type="button" class="activity play img navigate"><?php keyword('Asia') ?>  </button>
		</a>

	</div>

    <?php include ('includes/toolbar.php'); ?>
   	<?php include ('includes/js-includes.php'); ?>

  </body>
</html>