<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Argument by Reference</title>
</head>
<body>
    <?php
        function printMe($param = NULL){
            echo "$param";
        }

        printMe();
        printMe("This is Test");
    ?>
</body>
</html>