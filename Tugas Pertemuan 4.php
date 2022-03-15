<form method= "get">
<input type= "int" name= "nilai">
<input type= "submit">
</form> 
<?php
    $nilai = $_GET['nilai'];

    if ($nilai >= 80){
        echo "A";
    }
    else if ($nilai >= 70 and $nilai <= 79){
        echo "B";
    }
    else if ($nilai >= 60 and $nilai <= 69){
        echo "C";
    }
    else if ($nilai >= 50 and $nilai <= 59){
        echo "D";
    }
    else if ($nilai < 50){
        echo "E";
    }    
?>