<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .color-container {
            display: flex;
            flex-direction: column;  
            gap: 10px;  
        }
    </style>
</head>

<body>
    <div class="color-container">
    <?php 
    $connect=mysqli_connect('localhost','root','','colors');
    if(!$connect){
       die("Connection Failed:" .mysqli_connect_error());

    }else{
        echo "database connected"."<br>";
    }

    $query='SELECT * FROM colors';
    $colors= mysqli_query($connect,$query);
    echo '<pre>'. print_r($colors). '</pre>';
    foreach ($colors as $color){
        echo '<div class="color" style="background-color: ' . $color['Hex'] . ';">' . $color['Name'] . '</div>';
    }
    ?>
    </div>
</body>
</html>