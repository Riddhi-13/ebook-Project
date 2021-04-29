<?php
include_once 'init.php';
  include 'header.php';
if(isset($_POST['btn-send']))
{
$data = [
       'name'             => $_POST['name'],
       'email'            => $_POST['email'],
       'subject'         => $_POST['subject'],
       'msg'         => $_POST['msg'],
	   
       'name_error'       => '',
       'email_error'      => '',
       'subject_error'   => '',
	   'subject_error'   => ''
       


   ];
   

   /*
        * Name validation
   */ 
   if(empty($data['name'])){
    $data['name_error'] = "Name is required";
   } 
   

   /*
       * Email validation
   */ 
   if(empty($data['email'])){
    $data['email_error'] = "Email is required";
   }
   
   
   if(empty($data['subject'])){
    $data['subject_error'] = "subject is required";
   }
   
   if(empty($data['msg'])){
    $data['msg_error'] = "message is required";
   }
  
 

   /*
        * Submit the form
   */ 

   if(empty($data['name_error']) && empty($data['email_error']) && empty($data['subject_error']) && empty($data['msg_error']) ){
     
     if($source->Query("INSERT INTO user_queries(name,email,subject,msg) VALUES (?,?,?,?)", [$data['name'], $data['email'], $data['subject'],$data['msg']])){
     $_SESSION['query_success'] = "Your query is successfully sent";
    header("location:index.php");
     }

   }



}

?>