<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Numeric extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_numeric( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be numeric', $this->param ) );
            }
        }
    }