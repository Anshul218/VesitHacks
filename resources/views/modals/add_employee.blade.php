<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="add_manager.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700&display=swap" rel="stylesheet">
    <title>Add Employee</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            font-size: 17px;
            line-height: 1.6;
        }

        nav {
            margin: 0px;
            padding: 0px
        }

        /* The Modal (background) */
        .modal {
            display: block;
            /* Hidden by default */
            position: fixed;
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            /* Enable scroll if needed */
            background-color: #888;
        }

        /*Modal Header*/
        .modal-header {
            background-color: #72d5eecc;
            padding: 20px;
            color: black;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .modal-footer {
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

        .modal_body {
            padding: 0px;
        }

        .close {
            color: black;
            float: right;
            font-size: 30px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .container {
            max-width: 75% !important;
        }

        .row {
            padding-top: 30px;
            margin-bottom: 0px;
        }

        .control-label .text-info {
            display: inline-block;
        }

        #SaveButton {
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

<body>
    <!-- <h2>Modal</h2>
    <button id="myBtn" onclick="first()">Open Modal</button>
    The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add Employee</h2>
                <span class="close" id="close1">&times;</span>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="InputEmail" class="col-form-label">
                                <h5>Email address:</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="input1" aria-describedby="emailHelp"
                                placeholder="abc@example.com">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <!-- <div class="form-group"> -->
                            <label for="Department" class="col-form-label">
                                <h5>Post:</h5>
                            </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="input3" placeholder="Post">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="save()" id="SaveButton"> Add</button>
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
        span1.onclick = function () {
            console.log("close");
            modal.style.display = "none";
            var url = "http://vesithacks.com/dashboard";
            location.replace(url);  
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>