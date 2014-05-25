<?php
    ( !defined( 'DS' ) ) ? define( 'DS', DIRECTORY_SEPARATOR ) : null;

    spl_autoload_register( function( $class ){
        $file = realpath( '..' . DS ) . DS . 'lib' . DS . $class . '.php';

        if( !file_exists( $file ) ){ echo $file;
            throw new RuntimeException( 'Class not found: ' . $class );
        }
        
        require_once $file;
    } );