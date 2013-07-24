<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="styles.css" />
		<script src="js/bootstrap.js"></script>
		<!--	
		<link rel="stylesheet/less" type="text/css" href="fbootstrapp//lib/bootstrap.less">
		<script src="fbootstrapp//less.js" type="text/javascript"></script>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="fbootstrapp//bootstrap.css">
		-->
	</head>
	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">kuroneco</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
			</div>
		</div>

		<div class="container">
			<form id="upload" action="index.html" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>HTML File Upload</legend>

					<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

					<div>
						<label for="fileselect">Files to upload:</label>
						<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
						<div id="filedrag">or drop files here</div>
					</div>
					<div id="submitbutton">
						<button type="submit">Upload Files</button>
					</div>
				</fieldset>
			</form>
			<div id="messages">
				<p>Status Messages</p>
			</div>

			<div class="row-fluid">
				<figure>
                    <div id="info">original</div>
					<span id="img"></span>
                    <div id="info">grayscale</div>
					<form action="" method="post" name="grayscale">
					<canvas id="grayscale" style="display: none; "></canvas>
					</form>
                    <div id="info">brightness</div>
					<canvas id="brightness" style="display: none; "></canvas>
                    <div id="info">threshold</div>
					<canvas id="threshold" style="display: none; "></canvas>
                    <div id="info">sharpen</div>
					<canvas id="sharpen" style="display: none; "></canvas>
                    <div id="info">blur</div>
					<canvas id="blur" style="display: none; "></canvas>
                    <div id="info">sobel</div>
					<canvas id="sobel" style="display: none; "></canvas>
                    <div id="info">reverse</div>
					<canvas id="reverse" style="display: none; "></canvas>
                    <div id="info">boostred</div>
					<canvas id="boostred" style="display: none; "></canvas>
                    <div id="info">boostgreen</div>
					<canvas id="boostgreen" style="display: none; "></canvas>
                    <div id="info">boostblue</div>
					<canvas id="boostblue" style="display: none; "></canvas>

					<button onclick="execute()">Filtering the image</button>

				</figure>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="filter.js"></script>
	<script type="text/javascript" src="exec.js"></script>
	<script type="text/javascript" src="filedrag.js"></script>
</body>
</html>
