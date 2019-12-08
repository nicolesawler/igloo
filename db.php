<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = "localhost";
$username = "root";
$password = "root";
$database = "igloo";

// Create connection
$conn = new mysqli($host, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


include 'class.images.php';

$imagesObj = new IMAGES($conn);
     
