<?php
$filename = $_FILES["image"]["name"];
$isUploaded = is_uploaded_file($_FILES["image"]["tmp_name"]);
$filenameIsImage = preg_match("/\.(gif|jpg)$/", $filename);
if ($isUploaded && $filenameIsImage) {
move_uploaded_file($_FILES["image"]["tmp_name"], $filename);
} else {
header("HTTP/1.1 400 Unable to accept uploaded file.");
die("Unable to accept uploaded file");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> CSE 154: Viewing file <?= $filename ?>
</title>
<style>
img{
height: 40vh;
width: 40%;
}
</style>
</head>
<body>
<h2>21MCA0248</h2>
<img src="<?= $filename ?>" alt="user uploaded image">
</body>
</html>

<html>
<head>
<title>image upload</title>
</head>
<body>
<h2>Image Upload</h2>
<form action="img_submit.php" method="post"enctype="multipart/form-data">
<input type="file"name="image"title="fileupload">
<input type="submit"value="upload a file">
</form>
</body>
</html>
