<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Double extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_double( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be double', $this->param ) );
            }
        }
    }