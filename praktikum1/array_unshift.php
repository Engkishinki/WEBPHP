<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pop</title>
</head>
<body>
    <?php
    // fungsi array unshift berguna untuk menambahkan satu atau dua lebih nilai awal dalam sebuah array
    $nama=["asep","pani","candra","budi"];
    array_unshift($nama, "aladi", "sandra");
    foreach($nama as $pahlawan){
        echo $pahlawan."<br>";
    }
    ?>
</body>
</html>
