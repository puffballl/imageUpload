<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image upload</title>
</head>
<body>

<h1> Upload hier je images</h1>

<form method="post" action="process_upload.php" enctype="multipart/form-data">

    <label><input type="file" name="image"/></label>
    <label>Title: <input type="text" name="title"/> </label>
    <label>Descriptie: <input type="text" name="descriptie"/> </label>
    <input type="submit" name="submit image" value="Uploaden"/>
</form>
<br>
<a href="show_image.php">Klik om de plaatjes te zien</a>


</body>
</html>