<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Funtin Call</title>
</head>
<body>
    <?php
        function sayHello(){
            echo "Hello<br>";
            echo "This is PHP<br>";
        }

        $function_holder = "sayHello";
        $function_holder();
    ?>
</body>
</html>