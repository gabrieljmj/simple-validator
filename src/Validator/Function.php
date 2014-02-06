<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Function extends \AbstractElementOfChain{
        public function realValidation(){
            if( !function_exists( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid function', $this->param ) );
            }
        }
    }