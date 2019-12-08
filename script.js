/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Get the modal
var modal = document.getElementById("ImageViewerModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("modalImage");
var captionText = document.getElementById("caption");

$( ".grid-item" ).click(function() {
  modal.style.display = "block";
  modalImg.src = onlyGetBackgroundImageUrl(this.style.backgroundImage);
  captionText.innerHTML = this.getAttribute("data-alt");
  //console.log(onlyGetBackgroundImageUrl(this.style.backgroundImage));

});



// function you can use:
function onlyGetBackgroundImageUrl(str) {
    return str.split('"')[1];
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}