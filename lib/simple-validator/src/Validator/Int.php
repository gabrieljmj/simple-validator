<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Int extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_int( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be integer', $this->param ) );
            }
        }
    }