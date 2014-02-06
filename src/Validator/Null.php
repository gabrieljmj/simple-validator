<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Null extends \AbstractElementOfChain{
        public function realValidation(){
            $this->param = trim( $this->param );
            
            if( !empty( $this->param ) || $this->param !== '' || $this->param !== ' ' || !is_null( $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be null', $this->param ) );
            }
        }
    }