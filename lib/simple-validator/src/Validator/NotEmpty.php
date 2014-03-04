<?php
    namespace Validator;
        
    use Exception\SimpleValidatorException;
    
    class NotEmpty extends \AbstractElementOfChain{
        protected function realValidation(){
            if( empty( $this->param ) || $this->param === '' || $this->param === ' ' || is_null( $this->param ) ){
                throw new SimpleValidatorException( $this, 'String can\'t be empty' );
            }
        }
    }