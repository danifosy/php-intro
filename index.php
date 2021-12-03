<?php
include 'person.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

<p>This is a paragraph</p>
    
<?php

 $person1 = new Person("Dani", "blue", 33);
 echo $person1->getName();

?>

<p>This is also also a paragraph</p>

</body>
</html>