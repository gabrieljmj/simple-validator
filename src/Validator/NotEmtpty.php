<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class NotEmtpty extends \AbstractElementOfChain{
        public function realValidation(){
            if( empty( $this->param ) || $this->param === '' || $this->param === ' ' || is_null( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s can\'t be empty', $this->param ) );
            }
        }
    }