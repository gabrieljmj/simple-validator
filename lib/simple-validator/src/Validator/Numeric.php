<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Numeric extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_numeric( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be numeric', $this->param ) );
            }
        }
    }