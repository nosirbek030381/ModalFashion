<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Malumot kiritish</title>

    <style>
        body {
            background-image: linear-gradient(to bottom, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
        }
    </style>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <label for="title">Title</label><br>
        <input type="text" name="title" id="title">
        <br>
        <label for="malumot">Malumot</label><br>
        <input type="text" name="malumot" id="malumot">
        <br>
        <br>
        <label for="sana">Sana</label>
        <input type="date" name="sana" id="sana">
        <br>
        <label for="image">Surat:</label><br>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>


</body>

</html>