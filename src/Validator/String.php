<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class File extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_string( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be string', $this->param ) );
            }
        }
    }