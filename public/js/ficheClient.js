// Get the modal
var modalProd = document.getElementById("modAddProd");

// Get the button that opens the modal
var btn = document.getElementById("addProd");

// Get the <span> element that closes the modal
var spanProd = document.getElementsByClassName("close-prod")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modalProd.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanProd.onclick = function() {
  modalProd.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalProd) {
    modalProd.style.display = "none";
  }
}


// Get the modal
var modalAddr = document.getElementById("modAddAdresse");

// Get the button that opens the modal
var btn = document.getElementById("addAdresse");

// Get the <span> element that closes the modal
var spanAddr = document.getElementsByClassName("close-add")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modalAddr.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanAddr.onclick = function() {
  modalAddr.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalAddr) {
    modalAddr.style.display = "none";
  }
}