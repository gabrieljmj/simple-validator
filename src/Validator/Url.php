<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Url extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !filter_var( $this->param, FILTER_VALIDATE_URL ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be an URL', $this->param ) );
            }
        }
    }