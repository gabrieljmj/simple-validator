<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Boolean extends \AbstractElementOfChain{
        public function realValidation(){
            if( !is_bool( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid boolean', $this->param ) );
            }
        }
    }