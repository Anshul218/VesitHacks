// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span1 = document.getElementById("close1");

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    console.log("close");
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function enable1(){
    document.getElementById("input1").disabled=false;
  }
  function enable2(){
    document.getElementById("input2").disabled=false;
  }
  function enable3(){
    document.getElementById("input3").disabled=false;
  }
  function enable4(){
    document.getElementById("input4").disabled=false;
  }
  function enable5(){
    document.getElementById("input5").disabled=false;
  }
  function enable6(){
    document.getElementById("input6").disabled=false;
  }
  function enable7(){
    document.getElementById("input7").disabled=false;
  }
  function save(){
    document.getElementById("input1").disabled=true;
    document.getElementById("input2").disabled=true;
    document.getElementById("input3").disabled=true;
    document.getElementById("input4").disabled=true;
    document.getElementById("input5").disabled=true;
    document.getElementById("input6").disabled=true;
    document.getElementById("input7").disabled=true;
  }