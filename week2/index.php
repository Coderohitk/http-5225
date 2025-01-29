<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <h1>PHP and Creating Output</h1>

    <?php 
    echo "<h1>PHP and Creating Output</h1>";
    echo "<p>The PHP echo command can be used to create output.</p>";
    echo '<img src="https://www.google.com/image">';
    
    ?>
  <?php
  $name="Rohit Kumar";
  $lastName="Kumar";

  echo "hello ".$name;

  $person["first"]="Rohit";
  $person["last"]="Kumar";
  $person["email"]="Rohit.kumar1814@gmail.com";
  $person["web"]="http://pixelr.io";

echo "Hello, ".$person["first"];



  
  ?>
  <a href="mailto:<?php echo $person['email']; ?>">Mail me</a>

  <a href="<?php echo $person['web']; ?>">Visit</a>

  <p>The PHP echo command can be used to create output.</p>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ' and "?</p>

    <img src="php-logo.png">

  </body>
</html>