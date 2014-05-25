<?php
    require_once '../autoload/autoload.php';

    //Validating a Email
    
    use SimpleValidator\Validator\Email;
    use SimpleValidator\Validator\NotEmpty;
    use SimpleValidator\Exception\SimpleValidatorException;
    
    $email = 'gamjj74@hotmail.com';
    
    $validator = new NotEmpty;
    $validator->setSucessor( new Email );
    
    try{
        $validator->validate( $email );
    }catch( SimpleValidatorException $e ){
        echo '<b>Error:</b> ' . $e->getMessage() . '<br /> <b>On test:</b> ' . $e->getInvalidParameterName();
    }