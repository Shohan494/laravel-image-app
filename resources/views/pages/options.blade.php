<html>
<head>
	<title>Options</title>
	  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
</head>
<body class="cyan darken-3">
	<div class="container">


    <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>
        <a href="gray" class="waves-effect waves-light btn"><i class="material-icons right">gray</i>button</a>
        <br>
        <br>
        <a href="blue" class="waves-effect waves-light btn"><i class="material-icons right">blue</i>button</a>
        <br>
        <br>
        <a href="mirror" class="waves-effect waves-light btn"><i class="material-icons right">Mirror</i>button</a>
        <br>
        <br>
        <a href="combo" class="waves-effect waves-light btn"><i class="material-icons right">combo</i>button</a>
        <br>
        <br>
        <a href="download" class="waves-effect waves-light btn"><i class="material-icons right">Download</i>button</a>
      </div>

      <div class="col s9">
        <!-- Teal page content  -->
<?php
$img = Image::make(public_path('uploads/theimage.jpg'));
$img->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
?>
<img src="{!! $base64 !!}">
      </div>

    </div>
		

	</div>
</body>
</html>


