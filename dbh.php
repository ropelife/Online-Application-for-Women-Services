<?php

$conn=mysqli_connect("localhost","root","","wsdb");

if(!$conn){
	die("Couldnot connect to server");
}