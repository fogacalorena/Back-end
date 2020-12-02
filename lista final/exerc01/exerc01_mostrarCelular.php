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

    include_once ("exerc01_celular.php");

    $mostrar = array();

    echo "<div class='container'>";
    echo "<div class='card text-center text-white bg-dark ' >";
    echo "<div class='card-header'> CELULARES REGISTRADOS"; 

    echo "</div>";       
    echo "</div>";
    echo "<table class='table'>";
    echo "<tbody>";
    for ($i = 0; $i <= 1; $i++)
    {
        echo "<tr>";

        $aux = new Celular();
        $aux->cor = "Cor: ".rand(1000, 9000);
        $aux->marca = "Marca: ".rand(1000, 9000);
        $aux->modelo = "Modelo: ".rand(1000, 9000);

        $mostrar[] = $aux;
        echo "<td class=' list-group-item-success'> Informações do celular: $i"; echo"</td>";
        echo "<td class=' list-group-item-success'> {$mostrar[$i]->cor}"; echo "</td>";
        echo "<td class=' list-group-item-success'> {$mostrar[$i]->marca}"; echo " </td>";
        echo "<td class='list-group-item-success'> {$mostrar[$i]->modelo}"; echo " </td>";
        
        echo "</tr>"; 
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</body>";
?>