<?php
include './class/function.php';
$course_obj = new course();
$course_obj->remove_domain($_REQUEST['domain']); 
 ?>
