<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Argument by Reference</title>
</head>
<body>
    <?php
        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            return $sum;
        }
        $return_value = addFunction(10,20);
        echo "return value from the funnction => $return_value";
    ?>
</body>
</html>