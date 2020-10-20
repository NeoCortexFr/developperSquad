<?php

namespace DevSquad\Controllers;

class CoreController
{
    public function show($templateFile, $viewVars = [])
    {
        global $router;
        
        $viewVars['baseUri'] = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['BASE_URI'];

        extract($viewVars);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $templateFile . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}