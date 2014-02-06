<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Arr extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_array( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be an array', $this->param ) );
            }
        }
    }