<?php

// Pedir ao usuário que digite seu nome
echo "Digite seu nome: ";

// Ler o nome do usuário a partir da entrada do console
$nome = readline();

// Exibir uma mensagem de saudação
echo "Olá, " . $nome . "!";

// Pedir ao usuário que digite seu nome
echo "Digite seu nome: ";

// Ler o nome do usuário a partir da entrada do console
$nome = fgets(STDIN);

// Exibir uma mensagem de saudação
echo "Olá, " . $nome . "!";
