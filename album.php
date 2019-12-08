<?php
require 'db.php';

if(isset($_GET['album'])){
    $albumid = $_GET['album'];
}else{
    $imagesObj->redirect('index.php');
}
?>

<!doctype html>
<!--
A license header 
Or use as a set of comments
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Igloo | Albums</title>
    <meta name="description" content="A short description for search engines to read from your website">
    <meta name="author" content="Nicole Sawler">

    <link rel="stylesheet" href="style.css?v=1.0">
    <link rel="stylesheet" href="mobile.css?v=1.0">

</head>
<body>
    <!-- Page content goes here -->
    <div id="" class=" container">

  <?php
  
  $imagesObj->getAlbumPageInfo($albumid);
  
  //Images
  // output data of each row
  echo '  <div class="grid-layout"> ';
  $imagesObj->getImagesByAlbumId($albumid);
  echo '  </div> ';
  ?>
        <br><a href="index.php">Back to all albums</a>     
        
        
<div id="ImageViewerModal" class="modal">
  <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
</div>
    
         
        
        
        
        
    </div>
    <!-- Page content ends here -->
  <script src="jquery.min.js"></script> 
  <script src="script.js"></script>
</body>
</html>