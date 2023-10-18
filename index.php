<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php 

$conexao = mysqli_connect("localhost:3333", "root", "root", "prova");


$exec = mysqli_query($conexao, "SELECT * FROM aluno;");

if ($exec->num_rows > 0) {
    echo '<div class="bloco">';
    echo '<div class="titulo"> Nome <span class="matri">Matricula</span> </div>';
    echo "<div>----------------------------------------</div>";
    while ($row = $exec->fetch_assoc()) {
        echo "<div>";
        echo '<span>' . $row['nome'] . "</span>";
        echo '<span class="matri">' . $row['matricula'] . "</span>";
        echo "<div>";
    }
    mysqli_data_seek($exec, 0);
   
    echo "</div>";
}


mysqli_close($conexao);

?>

</body>
</html>