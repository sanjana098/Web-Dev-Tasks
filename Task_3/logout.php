<?php
//if(isset($_SESSION["active"])&&($_SESSION["active"]!="")){
	session_start();
	$_SESSION["active"]= null;
	session_unset($_SESSION["active"]);
	session_destroy();
//}
header("location:form.html");
?>