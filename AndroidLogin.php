<?PHP
include_once("include/db_connection.php");
if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ) {

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$query = "SELECT * FROM  staff WHERE staff_ID ='$username' AND password ='$password'";

$result = mysqli_query($conn, $query);
if($result->num_rows > 0){
  if (isset($_POST['mobile']) && $_POST['mobile'] == "android"){
    echo "berjaya";
    exit;
  }
  echo "Successful";
}
else
  {
  echo "Failed <br/>";
  }
}
?>

<!--<html>
<head><title>Login | Event_Management</title></head>
<body>
     <h1>Login Example | Event_Management </h1>
     <form action="<?PHP $_PHP_SELF ?>" method="post">
           Phone Number <input type="text" name="txtPhoneNumber" value="" /><br/>
           Password <input type="password" name="txtPassword" value="" /><br/>
           <input type="submit" name="bLogin1" value="Login"/>
     </form>
</body>
</html> -->
