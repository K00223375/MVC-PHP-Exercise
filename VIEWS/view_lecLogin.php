<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo __CSS;?>">
  </head>
  <body>
    <h1>Lecture Login!</h1>
<?php
 include("FORMS/queryLectForm.html");
 ?>

  </body>
  <a href="<?php echo $_SERVER["PHP_SELF"];?>">Home</a>
</html>

<?php
//if DEBUG  mode is on - process some debug code here
if (__DEBUG==1) {
	echo '<hr><h2>Debug Information:</h2>';
	echo '<h4>Post Array:</h4>';
	print_r($_POST);
	};

?>
