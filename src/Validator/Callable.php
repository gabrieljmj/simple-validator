<?php
    namespace Validator;
    
    use Exception\InvalidArgumentException;
    
    class Callable extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_callable( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid callable', $this->param ) );
            }
        }
    }