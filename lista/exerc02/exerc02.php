<?php
 echo "<head>";
 echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
 echo "</head>";
 
 echo "<body>";  
    
    $cont = 1;
    $x = 0;
    $y = 0;
    $vetor = Array();
    
    echo "<div class='container' class='mx-auto' style='width: 200px;'>";
    echo "<ul class='list-group'>";
    while ($cont <= 10)
    {
        echo "<br>";
        $F = $x + $y;
        if($cont == 1)
        {
            $y = 1;
        }
        
        echo "<li class='list-group-item'> Fibonacci $cont º: $F</li>";

        $vetor[] = $F;

        $x = $y;
        $y = $F;
        
        $cont++;         
    }   
    echo "</ul>";
    echo "</div>";
    echo "<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'> </script>";
    echo "</body>"; 
?> 