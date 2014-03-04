<?php
    require_once '../lib/simple-validator/AutoLoader/autoload.php';

    //Validating a Email
    
    use Validator\Email;
    use Validator\NotEmpty;
    
    $email = 'gamjj74@hotmail.com';
    
    $validator = new NotEmpty;
    $validator->setSucessor( new Email );
    
    try{
        $validator->validate( $email );
    }catch( Exception\InvalidArgumentException $e ){
        echo '<b>Error:</b> ' . $e->getMessage() . '<br /> <b>On test:</b> ' . $e->getInvalidParameterName();
    }