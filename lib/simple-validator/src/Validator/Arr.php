<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Arr extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_array( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be an array', $this->param ) );
            }
        }
    }