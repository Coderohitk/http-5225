<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
</head>
<body>
    <h1>Code challenge 1</h1>
    <?php 
    $randondomHour=ceil(rand(1,24));
     echo '<h1>'. $randondomHour .'</h1>';
    if($randondomHour>=5 && $randondomHour<=9){
        echo '<h2>Breakfast: "Bananas, Apples, and Oats"</h2>';
    }
    else if($randondomHour>=12 && $randondomHour<=14){
        echo '<h2>Lunch: "Fish, Chicken, and Vegetables"</h2>';
    }
    else if($randondomHour>=19 && $randondomHour<=21){
        echo '<h2>Dinner: "Steak, Carrots, and Broccoli"</h2>';
    }
    ?>
    <h1>Code challenge 2</h1>
    <?php 
    $randnumber=ceil(rand(1,100));
    echo '<h1>'. $randnumber .'</h1>';
    if($randnumber%3===0 && $randnumber%5==0){
        echo '<h2>"FizzBuzz"</h2>';
    }
    else if($randnumber%3==0){
        echo '<h2>"Fizz"</h2>';
    }
    else if($randnumber%5==0){
       echo '<h2>"Buzz"</h2>';
    }
    else if($randnumber%3!=0 && $randnumber%5!=0){
        
    }
    
    ?>
</body>
</html>