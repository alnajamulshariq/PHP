<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo 'we are learning data types in php'.'<br>';
    echo '<h1>we are learning data types in php</h1><br>';

    // data types

    // $name=strlen('pakistan');
    // echo $name;
    // $age=25;
    // $price=99.5;

    // var_dump($name.'<br>');
    // var_dump($age);
    // var_dump($price);

    $name=str_word_count('this function will count number of words in a statement ');
    echo $name.'<br>';


    $name1=strrev('asghar ali');
    echo $name1.'<br>';

    $name2=strpos('wajid','d');
    echo $name2.'<br>';

    $name3=str_replace('welcome','metrostargate','hello');
    echo $name3;

    ?>
</body>
</html>