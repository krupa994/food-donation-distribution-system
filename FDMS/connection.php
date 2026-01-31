

<?php
//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("localhost", "food_donation", "food_donation");
$db = mysqli_select_db($connection, 'food');
?>
