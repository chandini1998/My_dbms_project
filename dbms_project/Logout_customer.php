<?php
session_start();
session_destroy();
{
	header("location:Dealer_login.php");
}