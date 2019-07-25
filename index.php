<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>	
<link rel="stylesheet" href="style.css">
<body>
	<div class="container">
	<form action="upload.php" method="post" enctype="multipart/form-data">
   <h1> Select image to upload: </h1>
    <input type="file" class="container_file" name="fileToUpload" id="fileToUpload">
    <input type="submit" class="container_upload"  value="Upload Image" name="submit">
</form>

</body>
</html>
