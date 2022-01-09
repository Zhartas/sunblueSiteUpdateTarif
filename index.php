<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
 
if( $detect->isMobile() && !$detect->isTablet() ){
	include "mobile/index.php";    
}else if( $detect->isTablet() ){
	include "tablet/index.php";    
}else{
	include "site/index.php";
}
?>