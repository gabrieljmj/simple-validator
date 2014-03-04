<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Float extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_float( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be float', $this->param ) );
            }
        }
    }