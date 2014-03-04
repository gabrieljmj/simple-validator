<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class File extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_string( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be string', $this->param ) );
            }
        }
    }