
<?php
include('finalivest/includes/ivestheader.php');
?>
<?php 

if (isset($_POST['form_submitted'])) {

   $first_name = sanitizeString($_POST['first_name']);
   $last_name = sanitizeString($_POST['last_name']);
   $password = md5($_POST['password']);
   $email = sanitizeString($_POST['email']);
   
   include 'finalivest/includes/db_connect.php';
   
   $query = "
   INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password_id`, `email`, `created_at`)
   
   VALUES
   ( null, '".$first_name."', '".$last_name."', '".$password."', '".$email."', NOW() )
  
  "; 
  
  $save = $conn->query($query);
  
  if ($save) {
  
  echo "<p>Registered</p>";
  
  }
  
  else {
  
  echo $conn->error;
  
  }
  
  
}


function sanitizeString($var)
{

return  stripslashes(strip_tags(htmlentities($var)));

}

?>


<p>
   <a href="login.php">Login</a>
</p>


<form action="ivestregistration.php" method="POST" class="center">
<p style="font-size: 200px; color: #000080;"> IVEST</p>
<div style="padding: 10px;">
First name: <input type="text" name="first_name">
</div>

<div style="padding: 10px;">
Last name: <input type="text" name="last_name">
</div>

<div style="padding: 10px;">
Password: <input type="password" name="password">
</div>

<div style="padding: 10px;">
Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email">
</div>

<input type="hidden" name="form_submitted" value="1">


<input type="submit" value="Submit">


</form>


<?php
include('finalivest/includes/ivestfooter.php');
?>


