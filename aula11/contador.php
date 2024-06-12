<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php 
        $i = isset($_GET['inicio'])?$_GET['inicio']:0;
        $f = isset($_GET['final'])?$_GET['final']:0;
        $in = isset($_GET['incremento'])?$_GET['incremento']:1;

        if ($f > $i) {
            while ($i <= $f) {
                echo "$i ";
                $i += $in;
            }
        } else {
            while ($i >= $f) {
                echo "$i ";
                $i -= $in;
            }
        }
    ?>
    <form action="contador.html">
        <input type="submit" class="botao" value="Voltar">
    </form>
</div>
</body>
</html>