<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "contact" || $cat_get == "contact"){
					$cid = mysqli_real_escape_string($link,$_POST["cid"]);
$name = mysqli_real_escape_string($link,$_POST["name"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$subject = mysqli_real_escape_string($link,$_POST["subject"]);
$msg = mysqli_real_escape_string($link,$_POST["msg"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `contact` (  `cid` , `name` , `email` , `subject` , `msg` ) VALUES ( '".$cid."' , '".$name."' , '".$email."' , '".$subject."' , '".$msg."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `contact` SET  `cid` =  '".$cid."' , `name` =  '".$name."' , `email` =  '".$email."' , `subject` =  '".$subject."' , `msg` =  '".$msg."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `contact` WHERE id = '".$id_get."' ");
					}
					header("location:"."contact.php");
				}
				
				if($cat == "user" || $cat_get == "user"){
					$uid = mysqli_real_escape_string($link,$_POST["uid"]);
$name = mysqli_real_escape_string($link,$_POST["name"]);
$phone = mysqli_real_escape_string($link,$_POST["phone"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$password = mysqli_real_escape_string($link,$_POST["password"]);
$status = mysqli_real_escape_string($link,$_POST["status"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `user` (  `uid` , `name` , `phone` , `email` , `password` , `status` ) VALUES ( '".$uid."' , '".$name."' , '".$phone."' , '".$email."' , '".md5($password)."', '".$status."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `user` SET  `uid` =  '".$uid."' , `name` =  '".$name."' , `phone` =  '".$phone."' , `email` =  '".$email."' , `status` =  '".$status."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `user` WHERE id = '".$id_get."' ");
					}
					header("location:"."user.php");
				}
				
				if($cat == "users" || $cat_get == "users"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$password = mysqli_real_escape_string($link,$_POST["password"]);
$role = mysqli_real_escape_string($link,$_POST["role"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>