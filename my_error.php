<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php

 

    try {   $uitkomst = 5 % 0;
        echo $uitkomst;
    } catch (DivisionByZeroError $exception){
        echo "Er is iets fout gegaan!";
            }
    ?>

</body>

</html>