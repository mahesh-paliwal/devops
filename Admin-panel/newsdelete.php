<?php include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM addnews WHERE news_id = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script> alert('Record Deleted') </script>";

?>

    <meta http-equiv="refresh" content="0; url = http://localhost/devopsfarm/admin-panel/viewnews.php" />

<?php
} else {
    echo "<script> alert('Failed to delete') </script>";
}
?>