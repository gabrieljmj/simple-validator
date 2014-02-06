<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Object extends \AbstractElementOfChain{
        protected function realValidation(){
            if( is_object( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid object', $this->param ) );
            }
        }
    }