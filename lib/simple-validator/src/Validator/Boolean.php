<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Boolean extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_bool( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be boolean', $this->param ) );
            }
        }
    }