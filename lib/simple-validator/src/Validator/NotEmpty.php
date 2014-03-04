<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class NotEmpty extends \AbstractElementOfChain{
        protected function realValidation(){
            if( empty( $this->param ) || $this->param === '' || $this->param === ' ' || is_null( $this->param ) ){
                throw new InvalidArgumentException( $this, 'String can\'t be empty' );
            }
        }
    }