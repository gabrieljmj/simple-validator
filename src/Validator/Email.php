<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Email extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !filter_var( $this->param, FILTER_VALIDATE_EMAIL ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid email', $this->param ) );
            }
        }
    }