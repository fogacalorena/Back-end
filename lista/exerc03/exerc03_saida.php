<?php
    echo "<head>";
    echo "<style>";
    echo 
    ".container 
    {
    width: 100vw;
    height: 100vh;
    display: flex;
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
    margin: 0px;
    background-color: #DCDCDC;
    }";            
    echo "</style>";
    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
  
    echo "</head>";
    echo "<body class ='body'>";

     
    $a = $_POST["login"];
    $b = $_POST["password"];

    if($a == "socomobesteira")
    {
        if($b == "diabetesnasalturas")
        {
            echo "<div class='container'>";
                echo "<div class='box'>";
                    echo "<div class='card text-center text-white bg-success mb-3' >";
                        echo "<div class='card-header'> Olá! $a";
                           echo "</div>";
                                echo "<div class='card-body'>";
                                    echo  "<h5 class='card-title'>ACESSO APROVADO"; echo "</h5>";
                                    echo  "<p class='card-text'> Agradecemos seu acesso! Em breve mais funcionalidades estarão disponíveis."; echo  "</p>";
                                    echo "</div>";
                            echo "<div class='card-footer text-muted' >";
                            echo  "<a href='/Github/Back-end/lista/exerc03/exerc03_entrada.html' class='btn btn-dark btn-lg btn-block' type='submit' > Sair"; echo"</a>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";            
        }        
    }
    else
    {
        echo "<div class='container'>";
            echo "<div class='box'>";
                echo "<div class='card text-center text-white bg-danger mb-3' >";
                    echo "<div class='card-header'> Olá! $a";
                           echo "</div>";
                                echo "<div class='card-body'>";
                                    echo  "<h5 class='card-title'>ACESSO NEGADO"; echo "</h5>";
                                    echo  "<p class='card-text'> Infelizmente, as informações inseridas não coincidem com as registradas em nossa base, tente novamente!"; echo  "</p>";
                                    echo "</div>";
                            echo "<div class='card-footer text-muted' >";
                            echo  "<a href='/Github/Back-end/lista/exerc03/exerc03_entrada.html' class='btn btn-dark btn-lg btn-block' type='submit' > Voltar"; echo"</a>";
                        echo "</div>";
                    echo "</div>";
            echo "</div>";
        echo "</div>";   
    }
    echo "</body>";
?>