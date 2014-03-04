<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class Func extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !function_exists( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s is an invalid function', $this->param ) );
            }
        }
    }