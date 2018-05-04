<?php 
session_start();

function sanitizeString($var)
{
    return  stripslashes(strip_tags(htmlentities($var)));
}


if (isset($_POST['form_submitted'])) {

   $password = md5($_POST['password']);
   $email = sanitizeString($_POST['email']);
   
   include 'finalivest/includes/db_connect.php';
   
   $query = "
      SELECT * FROM `users`
      WHERE `email` = '". $email ."' AND `password_id` = '". $password ."' 
    ";

   $login = $conn->query($query);
 
 if ($login->num_rows == 1) {
    $user_id = $login->fetch_object()->user_id;
    $_SESSION['user_id'] = $user_id;
    header('Location: finalivest/includes/viewshares.php');
 } 
 else
 {
    echo "Wrong credentials";
 }
 
 
  

}

?>



<?php
include('finalivest/includes/ivestheader.php');
?>

<p>
   <a href="ivestregistration.php">Register</a>
</p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="center">

<div style="padding: 10px;">
Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email">
</div>

<div style="padding: 10px;">
Password: <input type="password" name="password">
</div>


<input type="hidden" name="form_submitted" value="1">


<input type="submit" value="Submit">


</form>

<?php
include('finalivest/includes/ivestfooter.php');
?>

