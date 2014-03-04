<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Boolean extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_bool( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be boolean', $this->param ) );
            }
        }
    }