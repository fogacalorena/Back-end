<?php
echo "<head>";
echo "<style>";
echo
    ".container 
    {
    width: 100vw;
    height: 50vh;
    display: flex;
    flex-direction: row;
    background-color: #DCDCDC;
    justify-content: center;
    align-items: center
    }";
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
    align-items: left;
    }";
echo
    ".body 
    {
    margin: 150px;
    background-color: #DCDCDC;
    
    }";
echo "</style>";
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";

echo "</head>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<body class ='body'>";

    echo "<div class='container'>";
        echo "<div class='box'>";               
            echo "<h1 class='text-center login-title'>INFORME:";
            echo "</h1>";
            echo "<div class='account-wall'>";
                echo "<form action='exerc05.php' class='form-signin' method='post'>";
                        echo "<input type='number' name='linha' class='form-control' id='l' placeholder='Nº de linhas:' required autofocus>";
                        echo "<h6>"; echo "</h6>";
                        echo "<input type='number' name='coluna' class='form-control' id='c' placeholder='Nº de colunas:' required>";
                        echo "<h6>"; echo "</h6>";
                        echo "<input type='text' name='texto' class='form-control' id='numero2' placeholder='Texto:' required>";
                        echo "<BR>";
                        echo "<input type='submit' value='Pronto!' class='btn btn-lg btn-dark btn-block'>";
                echo "</form>";
            echo "</div>";                    
        echo "</div>"; 
    echo "</div>";  
echo "</body>";

echo "<br>";

if (isset( $_POST["linha"] ))
{
    $a = $_POST["linha"];
    $b = $_POST["coluna"];
    $c = $_POST["texto"];
    echo "<div class='containerTabela'>";
        echo "<div class='card text-center text-white bg-success' >";
        echo "<div class='card-header'> <H1> Olá! abaixo está sua tabela</H1>"; echo "</div>";      
        echo "<div class='card-header'> Caso sua tabela possua várias colunas, utilize a barra de rolagem inferior da própria tabela para encontrá-las!";               echo "</div>";
           echo "<div class='card-footer text-muted' >";
            echo  "<a href='/Github/Back-end/lista/exerc05/exerc05.php' class='btn btn-dark btn-lg btn-block' type='submit' > Reiniciar";
            echo "</a>";
                echo "<div class='table-responsive'>";
                echo "<table class='table'>";
                echo "<tbody>";
        for ($i = 0; $i <= $a; $i++) #linhas
        {
            echo "<tr>";
         
                for ($x = 0; $x <= $b; $x++) #colunas
                {
                    echo "<td class='bg-success'> $c"; #texto na coluna
                    echo "</td>";
                }
           
            echo "</tr>";
        }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
}
else
{
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
            echo "<strong> Vamos lá!";
            echo "</strong> Preencha os campos!";
    echo "</div>";
}
echo "</body>";    
?>
