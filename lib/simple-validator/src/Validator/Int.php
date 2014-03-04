<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class Int extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_int( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be integer', $this->param ) );
            }
        }
    }