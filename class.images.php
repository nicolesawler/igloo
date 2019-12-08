<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IMAGES{
    

    private $db;

    function __construct($conn)
    {
      $this->db = $conn;
      $this->imagesFolder = 'images';
    }
    
    
    /***
     * 
     * Get All Images
     * 
     * 
     * 
     */   
    public function getImages(){
        
        $sql = "SELECT * FROM igloo.images";
        
        $result = $this->db->query($sql);
        //counter
        $i;
        
        
        if ($result->num_rows > 0) {
            //result in object form.
             while ($obj = $result->fetch_object()) {
                 $i++;
                  if(rand(5,100) > 90){
                     printf ("<div class='grid-item span-3 grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;' data-alt='%s'>  </div>", 
                              $obj->i_name, $obj->i_caption, $obj->i_title); 
                
                 }elseif(rand(5,100) < 15){
                     printf ("<div class='grid-item span-2 grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;' data-alt='%s'>  </div>", 
                              $obj->i_name, $obj->i_caption, $obj->i_title); 
                 }else{
                    printf ("<div id='single' class='grid-item grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;' data-alt='%s'>  </div>", 
                             $obj->i_name, $obj->i_caption, $obj->i_title); 
                 }
            }
        } else {
            return false;
        }
        
    }
    
    
    /***
     * 
     * Get Albums
     * 
     * 
     * 
     */
    
        public function getAlbums(){
        
        $sql = "SELECT * FROM igloo.albums";
        
        $result = $this->db->query($sql);
        //counter
        $i;
        
        
        if ($result->num_rows > 0) {
            //result in object form.
             while ($obj = $result->fetch_object()) {
                 $i++;
                 if(rand(5,100) > 90){
                     printf ("<a href='album.php?album=%s'><div class='grid-item span-3 grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;'> %s <br><small>%s</small> </div></a>", 
                             $obj->a_thumb, $obj->a_name, $obj->a_desc); 
                 }else{
                    printf ("<a href='album.php?album=%s'><div class='grid-item grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;'> %s <br><small>%s</small> </div></a>", 
                            $obj->a_id, $obj->a_thumb, $obj->a_name, $obj->a_desc); 
                 }
                
            }
        } else {
            return false;
        }
        
    }
    
    
    /***
     * 
     * Get Images in Album
     * 
     * 
     * 
     */
    
    public function getImagesByAlbumId($id){
        
                
        $sql = "SELECT * FROM igloo.images WHERE a_id =" . $id;
        
        $result = $this->db->query($sql);
        //counter
        $i;
        
        
        if ($result->num_rows > 0) {
            //result in object form.
             while ($obj = $result->fetch_object()) {
                 $i++;
                 if(rand(5,100) > 90){
                     printf ("<div class='grid-item span-3 grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;' data-alt='%s'> %s  </div>", 
                              $obj->i_name, $obj->i_caption, $obj->i_title); 
                
                 }elseif(rand(5,100) < 15){
                     printf ("<div class='grid-item span-2 grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;' data-alt='%s'> %s  </div>", 
                              $obj->i_name, $obj->i_caption, $obj->i_title); 
                 }else{
                    printf ("<div id='single' class='grid-item grid-item-".$i."' style='background:url($this->imagesFolder/%s); background-size:cover;' data-alt='%s'> %s </div>", 
                             $obj->i_name, $obj->i_caption, $obj->i_title); 
                 }
                
            }
        } else {
            echo "No images in this album.";
        }
    }
    
    
    
    
    
        /***
     * 
     * Get Images in Album
     * 
     * 
     * 
     */
    
    public function getAlbumPageInfo($id){
        $sql = "SELECT * FROM igloo.albums WHERE a_id =" . $id;
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            //result in object form.
             while ($obj = $result->fetch_object()) {
                 
                    printf ("<h2> %s </h2> <p> %s </p>", 
                             $obj->a_name, $obj->a_desc); 
                
            }
        } else {
            return false;
        }
    }
    
    
    
    
    //in case 
    //redirect function
    public function redirect($url)
    {
        header("Location: $url");
    } 
    
    
}