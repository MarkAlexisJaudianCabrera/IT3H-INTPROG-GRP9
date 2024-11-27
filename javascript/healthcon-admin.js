function addNewCon(){
    var x = document.getElementById("AddCon-id");
    if (x.className === "AddNewCon-contents") {
      x.className += "activeAddCon";
    } else {
      x.className = "AddNewCon-contents";
    }
}

function EditCon(){
    var z = document.getElementById("EditCon-id");
    if (z.className === "EditCon-contents") {
      z.className += "activeEditCon";
    } else {
      z.className = "EditCon-contents";
    }
}

var modal = document.getElementById("myPopup"); // Get the modal
var btn = document.getElementById("myButton");   // Get the button that opens the modal
var span = document.getElementsByClassName("close")[0]; // Get the <span> element that closes the modal

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block"; 

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none"; 

    }
}