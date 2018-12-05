<?php
    require('libs/db.php');

    if(isset($_GET["id"])){
        $userID = $_GET['id'];
    }
    $sql = "DELETE FROM user  WHERE id = $userID";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($link);
    
?>