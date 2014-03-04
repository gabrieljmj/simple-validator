<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class File extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_file( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be a file', $this->param ) );
            }
        }
    }