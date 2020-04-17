<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    if ($user == 'aluno' && $pass == 'unit')
    {
        echo 'Login realizado com sucesso!';
    } 
    else 
    {
        echo 'Login incorreto!';
    }

}
