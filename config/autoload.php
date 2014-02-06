<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'APP_ROOT', realpath( __DIR__ . DS . '..' ) );
    define( 'SRC', APP_ROOT . DS . 'src' );

    spl_autoload_register( function( $class ){
        $file = SRC . DS . $class . '.php';

        if( !file_exists( $file ) ){ echo $file;
            throw new RuntimeException( 'Clas not found: ' . $class );
        }
        
        require_once $file;
    } );