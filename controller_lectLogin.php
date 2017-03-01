<?php
//includes
include("CONFIG/connection.php");  //include the database connection
include("CONFIG/config.php");  //include the application configuration settings

//variables
$title="L02 MySQLi Examples";

//views
if(isset($_POST['btn_register'])){
			include("LIBRARY/helperFunctionsDatabase.php");
			include("LIBRARY/helperFunctionsTables.php");
			include("MODELS/model_lectLogin.php");
			include("VIEWS/view_lecLogin.php");
		}
else{
	//redirect to main controller
	header('Location: controller_main.php');  //PHP manual : http://php.net/manual/en/function.header.php
	break;
}
?>
