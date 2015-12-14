<?php
    spl_autoload_register ('autoload');

    function autoload ($className) {
        $fileName = /* __DIR__ . "/" . */ $className . '.php';
        if(file_exists($fileName))  
        {
            include $fileName;
        }
    }
?>