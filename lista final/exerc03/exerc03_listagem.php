<?php
    echo "<head>";
    echo "<style>";
    echo
        ".container 
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
        align-items: left;
        }";
    echo
        ".body 
        {
        margin: 100px;
        background-color: #DCDCDC;
        
        }";
    echo "</style>";
    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo "</head>";
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<body class='body'>";
    session_start();
    include_once ("exerc03_animal.php");
    echo "<div class='container'>";
    echo "<div class='card text-center text-white bg-dark ' >";
    echo "<div class='card-header'> Animais de estimação cadastrados"; 
    echo  "<a href='./exerc03_inserirAnimal.php' class='btn btn-dark btn-md btn-block' type='submit' > Voltar";
    echo "</div>";       
    echo "</div>";
    echo "<table class='table'>";
    echo "<tbody>";
    foreach($_SESSION["animalSession"] as $animal)
    {
        echo "<tr>";
        echo "<td class='list-group-item list-group-item-success'> $animal </td>";
        echo "</tr>"; 
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</body>";

?>