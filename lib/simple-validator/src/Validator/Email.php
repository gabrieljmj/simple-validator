<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class Email extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !filter_var( $this->param, FILTER_VALIDATE_EMAIL ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be an email', $this->param ) );
            }
        }
    }