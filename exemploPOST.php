<html>
    <!-- Exemplo Aula DIGITAL EXPERIENCE PLATAFORM - BACKEND -->
    <body>
        <form action = "exemploPOST.php" method="POST">
            Nome: <input type = "text" name = "t_nome"/>
            Idade: <input type = "text" name = "t_idade"/>
            <input type="submit"/>
        </form>
        <h1> Dados informados:</h1>
        <?php
            if( isset($_POST["t_name"]) || isset($_POST["t_idade"]) ){
            echo "Olá " . $_POST['t_nome']. "<br/>";
            echo "Você tem " . $_POST['t_idade']."anos.";
            }else{
                echo "Nenhum dado informado";
            }
        ?>
    </body>
</html>