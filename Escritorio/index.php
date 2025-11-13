<?php
require_once "classes/Escritorio.php";

$escritorio = new Escritorio();

$gaveta1 = new Gaveta();
$gaveta1->adicionarItem(new Documento("Contrato", "Contrato do cliente X", "2024-05-10"));
$gaveta1->adicionarItem(new Objeto("Caneta", "Caneta azul", 0.02));
$gaveta1->adicionarItem(new Objeto("Borracha", 0.10));

$gaveta2 = new Gaveta();
$gaveta2->adicionarItem(new Pasta("Projetos", "Pasta dos projetos", "TI", "Consultoria", "Projetos Academicos"));

$armario1 = new Armario();
$armario1->adicionarGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta2);

$escritorio->adicionarArmario($armario1);

// Exibe auditoria
$escritorio->auditoria();
