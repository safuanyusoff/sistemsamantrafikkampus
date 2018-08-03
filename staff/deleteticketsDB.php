

<?php
$ID = $_GET['ID'];

$sql = "delete from saman where saman_id='$ID' ";
$result = mysqli_query($conn, $sql);

	header('Location:index.php?page=updatetickets');
?>
