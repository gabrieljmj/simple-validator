<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class Null extends \AbstractElementOfChain{
        protected function realValidation(){
            $this->param = trim( $this->param );
            
            if( !empty( $this->param ) || $this->param !== '' || $this->param !== ' ' || !is_null( $this->param ) ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be null', $this->param ) );
            }
        }
    }