<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Callable extends \AbstractElementOfChain{
        protected function realValidation(){
            if( !is_callable( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be callable', $this->param ) );
            }
        }
    }