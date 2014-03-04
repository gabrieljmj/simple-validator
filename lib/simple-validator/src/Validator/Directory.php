<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Direactory extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_dir( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be a directory', $this->param ) );
            }
        }
    }