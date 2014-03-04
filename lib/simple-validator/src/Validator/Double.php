<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Double extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_double( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be double', $this->param ) );
            }
        }
    }