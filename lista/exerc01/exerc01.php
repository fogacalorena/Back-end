<?php
echo "<head>";
echo "<style>";
echo
    ".containerTabela 
    {
    width: 80vw;
    height: 50vh;
    display: static;
    flex-direction: row;
    background-color: #DCDCDC;
    justify-content: center;
    align-items: center
    }";
echo
    ".box 
    {
    width: 300px;
    height: 300px;
    background-color: #DCDCDC;
    }";
echo
    ".body 
    {
    margin: 100px;
    background-color: #DCDCDC;
    color: white;
    }";
echo "</style>";
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";

echo "</head>";
echo "<body class ='body'>";

 $cont = 0;

    echo "<div class='containerTabela'>";
        echo "<div class='card text-center text-white bg-success ' >";
            echo "<div class='card-header'> NÚMEROS PARES ENTRE 0 E 100"; echo "</div>";
        echo "</div>";
        echo "<table class='table'>";
            echo "<tbody>";
            for ($i = 0; $i <= 1000; $i++) #linhas
            {
                if ($cont % 10 == 0)
                {
                echo "<tr>"; 
                }
                if ($i % 2 == 0) 
                {   
                    echo "<td class='bg-success'> $i";  echo "</td>";
                    $cont = $cont + 1;
                }
                if ($cont % 10 == 0)
                {
                echo "</tr>"; 
                }
            }
            echo "</tbody>";
        echo "</table>";
    echo "</div>";
   
    echo "</body>";
    
?> 