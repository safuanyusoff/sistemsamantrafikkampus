

<?php
	include_once("include/db_connection.php");
	date_default_timezone_set('Asia/Kuala_Lumpur');
$ID = $_GET['id'];
$saman = $_GET['saman'];
$tarikh = $_GET['tarikh'];
$datetime = date("DATE_ATOM");

$sql = "UPDATE denda set Tarikh_bayar='".$today."' where kenderaan_ID='".$ID."' and saman_ID='".$saman."' and tarikh='".$tarikh."' ";
$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
    echo "Record deleted successfully";
		    echo $datetime;
} else {
    echo "Error deleting record: ". $conn->error ;
}
	header('Location:index.php?page=updatetickets');
?>
