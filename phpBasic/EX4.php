<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 4</title>
</head>
<body>
    <?php
        function test($s){
            $ctr_aa = 0;

            for($i = 0; $i < (strlen($s)-1); $i++){
                if(substr($s,$i,2) == "aa"){
                    $ctr_aa++ ;
                }
            }

            return $ctr_aa;
        }

        echo test("bbaaccaag");
        echo test("jjkiaaasew"."<br>");
        echo test("JSaaakoiaa"."<br>");
    ?>
</body>
</html>