<?php
echo "<head>";
echo "<style>";
echo
    ".container 
    {
    width: 100vw;
    height: 100vh;
    display: relative;
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
    margin: 110px;
    background-color: #DCDCDC;
    color: white;
    }";
echo "</style>";
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";

echo "</head>";
echo "<body class ='body'>";

$a = $_POST["N1"];
$b = $_POST["N2"];
$cont = 0;

if ($a == $b) #são iguais
{
    echo "<div class='container'>";
        echo "<div class='box'>";
            echo "<div class='card text-center text-white bg-danger mb-3' >";
                echo "<div class='card-body'>";
                    echo  "<h5 class='card-title'>ERRO!";
                    echo "</h5>";
                    echo  "<p class='card-text'>Valores iguais não são aceitos, insira valores diferentes!";
                    echo  "</p>";
                echo "</div>";
                echo "<div class='card-footer text-muted' >";
                    echo  "<a href='/Github/Back-end/lista/exerc04/exerc04_entrada.html' class='btn btn-dark btn-lg btn-block' type='submit' > Voltar";
                    echo "</a>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
} else #analisa quem é o maior
{
    if ($a > $b) #a é o maior
    {
        
        echo "<div class='container'>";
        echo "<div class='card text-center text-white bg-success ' >";
        echo "<div class='card-header'> Olá! abaixo estão os números entre o $b e o $a"; echo "</div>";
        echo "<div class='card-footer text-muted' >";
        echo  "<a href='/Github/Back-end/lista/exerc04/exerc04_entrada.html' class='btn btn-dark btn-lg btn-block' type='submit' > Reiniciar";
        echo "</a>";
        echo "</div>";
        echo "<table class='table'>";
        echo "<tbody>";
        $div = $a / 10;
        for ($i = 0; $i <= $div; $i++) #linhas
        {
            echo "<tr>";
            if ($i == 0) {
                for ($x = $b; $x <= $a; $x++) {
                    $cont = $cont + 1;
                    if ($cont == 11) break;
                    echo "<td class='bg-success'> $x";
                    echo "</td>";
                }
            } else {
                for ($x = $x; $x <= $a; $x++) {
                    $cont = $cont + 1;
                    if ($cont == 11) break;
                    echo "<td class='bg-success'> $x";
                    echo "</td>";
                }
            }
            echo "</tr>";
            $cont = 0;
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else #b é o maior
    {
    echo "<div class='container'>";
    echo "<div class='card text-center text-white bg-success ' >";
    echo "<div class='card-header'> Olá! abaixo estão os números entre o $a e o $b"; echo "</div>";
    echo "<div class='card-footer text-muted' >";
    echo  "<a href='/Github/Back-end/lista/exerc04/exerc04_entrada.html' class='btn btn-dark btn-lg btn-block' type='submit' > Reiniciar";
    echo "</a>";
    echo "</div>";
    echo "<table class='table'>";
    echo "<tbody>";
    $div = $b / 10;
    for ($i = 0; $i <= $div; $i++) #linhas
    {
        echo "<tr>";
        if ($i == 0) {
            for ($x = $a; $x <= $b; $x++) {
                $cont = $cont + 1;
                if ($cont == 11) break;
                echo "<td class='bg-success'> $x";
                echo "</td>";
            }
        } else {
            for ($x = $x; $x <= $b; $x++) {
                $cont = $cont + 1;
                if ($cont == 11) break;
                echo "<td class='bg-success'> $x";
                echo "</td>";
            }
        }
        echo "</tr>";
        $cont = 0;
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    }
}
echo "</body>";
?>