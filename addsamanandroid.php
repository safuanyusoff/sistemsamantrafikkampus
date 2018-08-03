<?PHP
include_once("include/db_connection.php");

if( isset($_POST['txtBarcode']) && isset($_POST['txtName']) && isset($_POST['txtDate']) && isset($_POST['txtUser_id']) ) {

//$id = $_POST['txtKP'];
$barcode = $_POST['txtBarcode'];
$name = $_POST ['txtName'];
$date = $_POST['txtDate'];
$User_id = $_POST['txtUser_id'];

$query = "INSERT INTO denda(saman_ID, kenderaan_id, tarikh, staffID )
VALUES ('$barcode','$name','$date','$User_id')";

$result = mysqli_query($conn, $query);

if(($result > 0)){

if (isset($_POST['mobile']) && $_POST['mobile'] == "android"){

   echo "success";
   exit;

   }
   echo "Insert Successfully";
    }
    else {
   echo "Something Error <br/>";
   }

}
?>
