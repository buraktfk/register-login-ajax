<?php 

/**
* 
*/
class redirect
{
	
	function __construct()
	{
		session_start();

		if (isset($_SESSION["yetki"])) {
			header("location:../oturum/admin/index.php");
		}
		elseif (isset($_SESSION["email"])) {
			header("location:../oturum/user/index.php");
		}
		
	}
}

?>