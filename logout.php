<?php

session_start();
session_destroy();

header("Location: index.php");

// GERAR BOTÃO PARA SAIR