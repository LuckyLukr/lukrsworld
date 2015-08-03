<?php
require_once 'twig/Autoloader.php';
Twig_Autoloader::register(true);

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.html');

echo $template->render(array('the' => 'variables', 'go' => 'here'));