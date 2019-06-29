<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 5px 10px;
    background-color: black;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) 
.close {
    position: relative;
    right: 20px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: white;
    cursor: pointer;
} */

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<li><a onclick="document.getElementById('myModal').style.display='block'" style="font-size: 18px;">| Login |</a></li>

<div id="myModal" class="modal">
  <font color="black">
  <form class="modal-content animate" action="config/loginproses.php" style="height: 600px;width: 600px;" method="POST">
 
    <div class="container" style="background-color:#cdd51f" align="right">
      <button type="button" onclick="document.getElementById('myModal').style.display='none'" class="cancelbtn btn btn-outline-dark"><font color="white">Cancel</font></button>
    </div> 
    <div class="imgcontainer">
      <img src="images/user.png" alt="Avatar" class="avatar" style="height:80px; width: 80px;">
    </div>

    <div class="container" style="height: 500px;width: 500px;">
      <hr>
      <label><i class="fa fa-envelope" aria-hidden="true"></i><b>  Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label><b><i class="fa fa-unlock-alt" aria-hidden="true"></i>  Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <hr>
      <button type="submit" class="btn btn-outline-dark">Login</button>
    </div>
  </form>
  </font>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>