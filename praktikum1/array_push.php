<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Push</title>
</head>
<body>
    <?php
    // array push berfungsi menambahkan nilai terakhir dalam array
    $nama=["ijul","hana","oci","adi"];
    array_push($nama, "ijul");
    foreach($nama as $pahlawan){
        echo $pahlawan."<br>";
    }
    ?>
</body>
</html>