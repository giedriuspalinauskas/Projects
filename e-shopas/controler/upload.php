<?php
include('../models/prisijungimas-db.php');
include('../models/preke-crud.php');
include('../models/img-crud.php');

// print_r($_POST);
$target_dir = "../img/";
$target_file = $target_dir ."org". basename($_FILES["fileToUpload"]["name"]);
$target_file_lg = $target_dir ."lg". basename($_FILES["fileToUpload"]["name"]);
$target_file_md = $target_dir ."md". basename($_FILES["fileToUpload"]["name"]);
$target_file_sm = $target_dir ."sm". basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

$uploadedfile = $_FILES['fileToUpload']['tmp_name'];
list($width, $height, $type) = getimagesize($uploadedfile);
$old_image = load_image($uploadedfile, $type);
$new_image = resize_image(400, 400, $old_image, $width, $height);
imagejpeg($new_image, $target_file_lg);
$new_image = resize_image(200, 200, $old_image, $width, $height);
imagejpeg($new_image, $target_file_md);
$new_image = resize_image(100, 100, $old_image, $width, $height);
imagejpeg($new_image, $target_file_sm);
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    createImg($_FILES["fileToUpload"]["name"],
    $_POST['aprasymas'],
    $_POST['pozicija'],
    $_POST['prekes_id']
  );
  header('Location: ../admin-prekes.php');
} else {
  echo "Sorry, there was an error uploading your file.";
}
}

function load_image($filename, $type) {
 if( $type == IMAGETYPE_JPEG ) {
 $image = imagecreatefromjpeg($filename);
 }
 elseif( $type == IMAGETYPE_PNG ) {
 $image = imagecreatefrompng($filename);
 }
 elseif( $type == IMAGETYPE_GIF ) {
 $image = imagecreatefromgif($filename);
 }
 return $image;
}

function resize_image($new_width, $new_height, $image, $width, $height) {
 $new_image = imagecreatetruecolor($new_width, $new_height);
 imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
 return $new_image;
}


// $uploadedfile = $_FILES['fileToUpload']['tmp_name'];
// list($width, $height, $type) = getimagesize($uploadedfile);
// $old_image = load_image($uploadedfile, $type);
// $new_image = resize_image(400, 400, $old_image, $width, $height);
// imagejpeg($new_image, $target_file_lg);
// $new_image = resize_image(200, 200, $old_image, $width, $height);
// imagejpeg($new_image, $target_file_md);
// $new_image = resize_image(100, 100, $old_image, $width, $height);
// imagejpeg($new_image, $target_file_sm);

?>
