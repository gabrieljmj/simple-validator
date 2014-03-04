<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Direactory extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_dir( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be a directory', $this->param ) );
            }
        }
    }