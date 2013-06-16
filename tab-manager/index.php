<!DOCTYPE html>
<html>
	<head>
		<!-- Include the required tab-manager.css file -->
		<link rel="stylesheet" href="tab-manager.css">

		<!-- Include the required JQuery plugin -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

		<!-- Then, include the required tab-manager.js file -->
		<script src="tab-manager.js"></script>

		<title>Tab Manager Demo</title>

		<!-- For demonstration purposes only -->
		<style type="text/css">
			#content-1, #content-2, #content-3, #content-4 {height: 500px;}

			#content-1 {background-color: red; color: white;}
			#content-2 {background-color: blue; color: white;}
			#content-3 {background-color: green; color: white;}
			#content-4 {background-color: yellow;}

			.tab-wrapper > .active {background-color: pink;}
		</style>
	</head>
	<body>

		<!-- All tabs must be wrapped in an element (preferrably a div) of class "tab-wrapper" -->
		<div class="tab-wrapper">

			<!-- Each tab (as in the examples below) must store the corresponding content id in the "content-id" attribute -->
			<!-- Set the default tab's class to "active." This attribute MUST BE unique -->
			<div content-id="content-1" class="active">Tab 1</div>
			<div content-id="content-2">Tab 2</div>
			<div content-id="content-3">Tab 3</div>
			<div content-id="content-4">Tab 4</div>
		</div>

		<!-- All content sections must be wrapped in an element (preferrably a div) of class "content-wrapper" -->
		<div class="content-wrapper">

			<!-- Set the default content's class to "active." This attribute MUST BE unique -->
			<div id="content-1" class="active">Content 1</div>
			<div id="content-2">Content 2</div>
			<div id="content-3">Content 3</div>
			<div id="content-4">Content 4</div>
		</div>
	</body>
</html>