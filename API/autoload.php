<?php 
/**
 * 
 *   @param $models
 * 
 */

    function autoload($models){
        $diretorioBase = $_SERVER['DOCUMENT_ROOT'] . DS;
        $models = $diretorioBase . 'models' . DS . str_replace('\\', DS, $models) . '.php';
    if (file_exists($models) && !is_dir($models)) {
        include $models;
    }
    }

?>