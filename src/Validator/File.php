<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class File extends \AbstractElementOfChain{
        protected function realValidation(){
            if( is_file( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid file', $this->param ) );
            }
        }
    }