<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add New</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['add_new'])) { //user logging in

        require 'add_new_php.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <div class="form">
      
      <!--
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
      -->

         <div id="add">   
          <h1>Add New User!</h1>
          
          <form action="add_new.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              ID<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name="id"/>
          </div>
              
             <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="first_name"/>
          </div>
              
            <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="last_name"/>
          </div>  
              
              <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
              
           <div class="field-wrap">
            <label>
              User Type<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="user_type"/>
          </div>
          <!--
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          -->
          <button class="button button-block" name="add_new" />Add</button>
          
          </form>

        </div>
          
        <!--
          <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>
        

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  -->
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>