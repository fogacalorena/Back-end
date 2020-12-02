<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Exercicío 2</title>
        <style>
            .container 
            {
            width: 100vw;
            height: 80vh;
            display: flex;
            flex-direction: row;
            background-color: #DCDCDC;
            justify-content: center;
            align-items: center
            }
            .box 
            {
            width: 300px;
            height: 350px;
            background-color: #DCDCDC;
            }
            body 
            {
            margin: 0px;
            background-color: #DCDCDC;
            }            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="box">            
                <h1 class="text-center login-title">ANIMAL</h1>
                <h2 class="text-center login-title">DE ESTIMAÇÃO</h2> 
                <div class="account-wall">
                    <form action="exerc02_inserirAnimal.php" class="form-signin" method="POST">
                        <input type="text" name="nome" class="form-control" id="N" placeholder="Nome:" required autofocus>
                        <h6></h6>
                        <input type="text" name="raca" class="form-control" id="R" placeholder="Raça:" required>
                        <h6></h6>
                        <input type="number" name="idade" class="form-control" id="I" placeholder="Idade:" required>
                        <BR>
                        <input type="submit" value="Pronto!" class="btn btn-lg btn-dark btn-block" />
                    </form>
                </div>           
            
        
    
    <?php
        include_once ("exerc02_animal.php");

        $aux = array();
        $cont = 0;

        if(isset($_POST["nome"]))
        {
            
            $a = new Animal();
            $a->nome = $_POST["nome"];
            $a->raca = $_POST["raca"];
            $a->idade = $_POST["idade"];

            $aux[] = $a;
            echo "<h1>";
            echo "</h1>";
            echo "<div class='alert alert-success' role='alert'>";
            echo "<h4 class='alert-heading'>Sucesso!</h4>";
            echo "<p>Seu animal de estimação foi cadastrado, abaixo estão as informações cadastradas!</p>";
            echo "<hr>";
            echo "<p class='mb-0'>Nome: {$aux[0]->nome}, Raça: {$aux[0]->raca} e Idade: {$aux[0]->idade}"; 
            echo "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }
        else
        {
            echo ".";
        } 
    ?>
    </body>
</html>