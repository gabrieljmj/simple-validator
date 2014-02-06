<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Func extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !function_exists( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid function', $this->param ) );
            }
        }
    }