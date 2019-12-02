<?php

require_once '../src/class.devlag.php';

$id = empty($_GET['id']) ? 'NL' : $_GET['id'];

$devlag = new Devlag($id);
$devlag->parse();
