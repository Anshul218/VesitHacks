@extends('navbars.navbars')
@section('dashboard')
    <style>
            body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: transparent !important; 
    font-size: 17px;
    line-height: 1.6;
}
nav {
    margin:0px;
    padding: 0px
}
/* The Modal (background) */
.modal {
    display: block; /* Hidden by default */
    position: fixed; 
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%; 
    overflow: auto;  /* Enable scroll if needed */
    opacity:1 ;
  }
/*Modal Header*/
.modal-header{
    background-color: #72d5eecc;
    padding: 20px;
    color: black;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.modal-footer{
    background-color: #72d5eecc;
    color: black;
    padding: 20px;
}

.modal-content {
    background-color: #fff;
    border: 1px solid #888;
    margin: 5% auto;
    width: 45%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
    animation-name: modalopen;
    animation-duration: 1.2s;
}
.modal_body{
    padding: 0px;
}
.close {
    color: black;
    float: right;
    font-size: 30px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.card-header{
    background-color: #17252a;
    border-radius: 0px;
}
.card-header h3{
    color: white;
}
.card{
    margin-top: 20px;
    margin-bottom: 20px;
}

.container{
    max-width: 75% !important;               
}
.row{
    padding-top: 30px; 
    margin-bottom:0px;         
}
.control-label .text-info { 
    display:inline-block; 
}
#SaveButton{
    max-width: 20%;
    align-self: center !important;
    margin: auto;
}
@keyframes modalopen {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
}
/*Modal Ends*/
    </style>

</head>
<link rel="stylesheet" href="edit_profile.css">
<body>
    <!-- <h2>Modal</h2>
    <button id="myBtn" onclick="first()">Open Modal</button>
    The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Profile</h2>
                <span class="close" id="close1">&times;</span>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="FirstName" class="col-form-label">
                                <h5>First Name</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <!-- <label for="name" class="control-label"><p class="text-info">Jatin</p><i class="icon-star"></i></label> -->
                            <input type="text" class="form-control" id="input1" placeholder="First Name" disabled>
                        </div>
                        <div class="col-sm-2">
                            <div class="controls">
                                <button type="button" class="btn btn-dark" id="edit" onclick="enable1()"><i
                                        class="fa fa-edit"></i> Edit</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="LastName" class="col-form-label">
                                <h5>Last Name</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="input2" placeholder="Last Name" disabled>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-dark" onclick="enable2()"><i class="fa fa-edit"></i>
                                Edit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="InputEmail" class="col-form-label">
                                <h5>Email address</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <input type="email" class="form-control input-all" id="input3" aria-describedby="emailHelp"
                                placeholder="abc@example.com" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="InputPassword" class="col-form-label">
                                <h5>Phone</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <input type="tel" class="form-control input-all" id="input5" placeholder="1234567891"
                                disabled>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-dark" onclick="enable5()"><i class="fa fa-edit"></i>
                                Edit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="LastName" class="col-form-label">
                                <h5>Address</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control input-all" placeholder="Address" id="input6"
                                disabled>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-dark" onclick="enable6()"><i class="fa fa-edit"></i>
                                Edit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="About" class="col-form-label">
                                <h5>Description</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <textarea class="form-control input-all" placeholder="About me.." id="input7" rows="3"
                                cols="10" disabled></textarea>
                        </div>
                        <div class="col-sm-2" style="padding-top: 3%">
                            <button type="button" class="btn btn-dark" onclick="enable7()"><i class="fa fa-edit"></i>
                                Edit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="save()" id="SaveButton"> Save Changes</button>
            </div>
        </div>
    </div>
    <!-- <script src="profilePage.js"></script> -->
    <script>
            // Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span1 = document.getElementById("close1");

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    console.log("close");
  modal.style.display = "none";
  var url = "http://vesithacks.com/dashboard";
  location.replace(url); 
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
    </script>
@endsection