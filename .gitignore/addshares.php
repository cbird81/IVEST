<?php
session_start();

include('ivestheader_1.php');
?>
<?php 

if (isset($_POST['form_submitted'])) {

   
   $amount = sanitizeString($_POST['amount']);
   $price = sanitizeString($_POST['price']);
   $user_id = sanitizeString($_POST['user_id']);
   $investment_type = ($_POST['investment_type']);
   $created_at = sanitizeString($_POST['created_at']);
   
   include 'db_connect.php';
   
   $query = "
   INSERT INTO `shares` ( `shares_id`, `amount`, `price`, `investment_type`, `user_id`, `created_at`)
   
   VALUES
   ( Null, '".$amount."', '".$price."', '".$investment_type."', '".$user_id."',  '".$created_at."' )
  
  "; 
   echo $query;
  
  $add = $conn->query($query);
  
  if ($add) {
  
  echo "<p>Sharesadded</p>";
  
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


<form action="addshares.php" method="POST" class="center">


<div style="padding: 10px;">
Amount: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="float" name="amount">
</div>

<div style="padding: 10px;">
Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="float" name="price">
</div>

<div style="padding: 10px;">
User_id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_id">
</div>

<div style="padding: 10px;">
Investment Type:&nbsp;<input type="text" name="investment_type">
</div>


<div style="padding: 10px;">
Created_at: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="created_at">
</div>

<input type="hidden" name="form_submitted" value="1">

<div>
<input type="submit" value="Submit">
</div>

</form>


<?php
include('ivestfooter.php');
?>
