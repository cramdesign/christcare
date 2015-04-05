<!DOCTYPE html>
<html>
<head>
<title>Christ Care Pediatrics and Family Medicine</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

<style>
/* font imports
------------------------------------------ */

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,800);



/* setup
------------------------------------------ */

/* universal box-sizing */
*, *:before, *:after {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}

/* define and set horizontal bands */
.row, .wrap {
	max-width: 1040px;
	margin-left: auto;
	margin-right: auto;
	position: relative;
}

@media (min-width:600px) {

	.row, .wrap {
		width: 88%;
	}
	
}/* end @media */

.wrap {
	max-width: 1300px;
	width: auto;
	overflow-x: hidden;
}

/* nested rows should fill container */
.row .row {
	width: auto;
}

/* contain and clear floated elements inside certain elements */
.row:before, .row:after,
.grid:before, .grid:after,
.wrap:before, .wrap:after,
.clear:before, .clear:after {
	display: table;
	content: "";
	clear: both;
}



/* basic styling
------------------------------------------ */

body {
	background: #fff;
	font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 15px;
	line-height: 1.75;
	color: #777;
	-webkit-font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
	text-align: center;
	margin: 0;
}

img {
	max-width: 100%;
	height: auto;
}

h1, h2, h3, h4, h5, h6 {
	margin: 0 0 0.75em 0;
	line-height: 1.3;
	font-weight: bold;
	font-weight: 800;
	letter-spacing: -0.04em;
}

p + h1, p + h2, p + h3, p + h4,
ul + h1, ul + h2, ul + h3, ul + h4,
ol + h1, ol + h2, ol + h3, ol + h4,
dl + h1, dl + h2, dl + h3, dl + h4 {
	margin-top: 1.5em;
}

h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover {
	color: #333;
}

h1, h2 {
	clear: both;
}

h1 { font-size: 2.6em; }
h2 { font-size: 2.2em; }
h3 { font-size: 1.8em; }
h4 { font-size: 1.4em; }
h5 { font-size: 1.0em; }
h6 { font-size: 0.8em; text-transform: uppercase; letter-spacing: 1px; }

ul {
	list-style: none;
}


/* Simple Resposive Grid 
-------------------------------------------------------------- */

.grid {
	margin: 0;
	position: relative;
}

.grid .item {
	padding: 1em 0;
}

.grid .item figure img {
	width: 100%;
}

.grid .item > a {
	display: block;
}

@media (min-width:600px) {

	.grid {
		margin: 0 -2em;
	}

	.grid .item {
		width: 50%;
		padding: 2em;
		float: left;
	}
	
}/* end @media */

@media (min-width:600px) and (max-width:900px) {

	.grid .item:nth-child(2n+1) {
		clear: left;
	}
	
}/* end @media */

@media (min-width:900px) {

	.grid.two {
		margin: 0 -3em;
	}
	
	.grid.two .item {
		width: 50%;
		padding: 2em 3em;
	}

	.grid.three .item {
		width: 33.333%;
	}
	
	.grid.four .item {
		width: 25%;
	}
	
	.grid.five .item {
		width: 20%;
	}
	
	.grid.six .item {
		width: 16.666%;
	}
	
	.grid.two .item:nth-child(2n+1),
	.grid.three .item:nth-child(3n+1),
	.grid.four .item:nth-child(4n+1),
	.grid.five .item:nth-child(5n+1),
	.grid.six .item:nth-child(6n+1){
		clear: left;
	}
	
}/* end @media */


#feature {
	text-align: center;
	padding: 3em 0;
}

#quote {
	background: #eaa241;
	color: #555;
	font-style: italic;
	padding: 1em;
}

@media (min-width: 800px) {

	#quote {
		padding: 2em 4em;
		font-size: 1.25em;
		line-height: 1.5;
	}

}

#content {
	background: #f2f2f2;
	padding: 3em 0;
}

#footer {
	padding: 2em 0;
	text-align: center;
	background: #555;
	color: #eee;
	text-transform: uppercase;
	font-size: 0.8em;
}
</style>
</head>
<body>
<div id="feature" class="row">
	<img src="<?php echo get_template_directory_uri(); ?>/css/images/ccp-logo.png">
</div>

<div id="quote" class="row">
	<span>Our mission is to share the love and message of Jesus Christ while addressing the physical, emotional and spiritual needs for the wellness of the patient and their family.</span>
</div>

<div id="content" class="row">
	<div class="grid two">
		
		<div class="item">
			<h2>South Shore Office</h2>
			<p class="intro">137 State Route 3117<br />
			South Shore, KY 41175<br />
			<strong>Phone:</strong> (606) 932-2079</p>
			<p><a href="https://goo.gl/maps/4PhKZ">Directions</a></p>
			<h4>Office Hours</h4>
			<ul>
				<li>Monday &#8211; Friday: 10am &#8211; 5pm</li>
				<li>Saturday and Sunday: 2pm &#8211; 5pm</li>
			</ul>
		</div><!-- item -->
		
		<div class="item">
			<h2>Lucasville Office</h2>
			<p class="intro">50 Center Street<br />
			Lucasville, OH 45648<br />
			<strong>Phone:</strong> (740) 259-1356</p>
			<p><a href="https://goo.gl/maps/lSUth">Directions</a></p>
			<h4>Office Hours</h4>
			<ul>
				<li>Monday &#8211; Friday: 10am &#8211; 5pm</li>
			</ul>

		</div><!-- item -->
		
	</div>
</div>	

<div id="footer" class="row">
	<p>Full site coming very soon.</p>
</div>

</body>
</html>