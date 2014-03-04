<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class Object extends \AbstractElementOfChain{
        protected function realValidation(){
            if( is_object( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be an object', $this->param ) );
            }
        }
    }