<?php
$username = "root";
$hostname = "localhost";
$dbname = "blockchain";
$password = "";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if ($con) {
    echo "connected";
}
?>

<?php

// if (isset($_POST['submit'])) {
//     echo  $image_name = $_FILES['userPhoto']['name'];
//     // exit();
//     $temp_image_name =  $_FILES['userPhoto']['tmp_name'];
//     $randomid = (rand(1, 1000000));
//     move_uploaded_file($temp_image_name, "image/$image_name");


//     $query = "INSERT INTO `identification`( ``unique_id`, `img`) VALUES ('$randomid',' $image_name')";
//     $run = mysqli_query($con, $query);
//     if ($run) {
//         echo "form submmited successfully";
//         // header("location:upload.html");
//         # code...
//     } else {
//         echo "not successful";
//     }
// }



// Check if the image was uploaded
if (isset($_FILES['userPhoto'])) {
    // Get the image file path
    echo  $image_path = $_FILES['userPhoto']['tmp_name'];
    exit();

    // Check if the file is an image
    if (exif_imagetype($image_path)) {
        // Save the image to a desired location
        move_uploaded_file($image_path, '/image/$image_path');
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'The uploaded file is not an image']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No image was uploaded']);
}


?>