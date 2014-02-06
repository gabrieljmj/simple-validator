<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Float extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_float( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be float', $this->param ) );
            }
        }
    }