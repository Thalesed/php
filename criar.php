<?php

$conexao = mysqli_connect("localhost:3333", "root", "root", "prova");

$exec = mysqli_query($conexao, "INSERT INTO aluno (matricula, nome) VALUES ('{$_POST['matricula']}', '{$_POST['nome']}')");

header('Location:  /');

