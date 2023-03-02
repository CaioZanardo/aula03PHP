<html>

<body>
    <h1>Exercicio 1</h1>
    
    <form action="desafioDistancia.php" method="POST">
        Velocidade: <input type="number" name="velo" />
        tempo: <input type="number" name="tempo" />
        <input type="submit" value="calcular" />
    </form>
    <?php
    function calcular($velo, $tempo)
    {
        $distancia = $velo * $tempo;
        return $distancia;
    }

    if (isset($_POST["velo"]) && isset($_POST["tempo"])) {
        $velo = $_POST["velo"];
        $tempo = $_POST["tempo"];
        $distancia = calcular($velo, $tempo);
    } else {
        echo "nenhum dado informado";
    }
    ?>
</body>

</html>
