<?php

function make_user($name,$chat_id){
	global $db;
	$name = mysqli_real_escape_string($name);
	$chat_id = mysqli_real_escape_string($chat_id);
	$query = "insert into `users`(name,chat_id) values('{$name}','{$chat_id}')";
	mysqli_query($query,$db) or die("пользователя создать не удалось");
}