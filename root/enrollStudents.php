<?php
foreach ($_POST['id'] as $id) {
    $cId = $_POST['courseId'];
    echo ("Enrolled user: " . $id . " for course Id: " . $cId . "<br />");
    $sql = "UPDATE studentTaking SET authorised = 1 WHERE id = '$id' 
            AND courseId = $cId ";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}

?>