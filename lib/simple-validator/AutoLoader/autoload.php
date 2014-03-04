<?php
    define( 'DS', DIRECTORY_SEPARATOR );

    spl_autoload_register( function( $class ){
        $file = realpath( '..' . DS . 'src' . DS ) . $class . '.php';

        if( !file_exists( $file ) ){ echo $file;
            throw new RuntimeException( 'Class not found: ' . $class );
        }
        
        require_once $file;
    } );