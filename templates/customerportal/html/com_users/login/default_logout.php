<?php

$mainframe = JFactory::getApplication();
$user = JFactory::getUser();
if($user->id == 1)
 {
    // redirect here
    $mainframe->redirect('index.php');
 }else{
     // redirect to login page
    $mainframe->redirect('portal');
 }
?>