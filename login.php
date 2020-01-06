<?php include 'base.php' ?>
 
<div id="login" class="modal" >
  <div class="modal-content animate">
    <div class="heading">
      <p><span onclick="window.location.href='/jamb/home.php'" class="close" title="Close Modal">&times;</span></p>
      <h3>Login</h3>
    </div>

    <div class="container form-group">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username"  class="form-control">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  class="form-control" required>
     
    <div>
        <p class="cur">Forgot <a onclick="window.location.href='/jamb/forgotpassword.php'"><u>password?</u></a></p>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
        <button type="button" >Login</button>
        <button type="button" onclick="window.location.href='/jamb/register.php'">Sign Up</button>
        <div >Registered Successfully.Redirecting to home page</div>
      </div>
    </div>
</div>
