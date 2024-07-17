<?php
if (isset($_FILES['file'])){

    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];

    move_uploaded_file($tmp_name, "image/". $name);

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button >submit</button>
</form>

</body>
</html>
