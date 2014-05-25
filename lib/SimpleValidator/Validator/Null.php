<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class Null extends AbstractElementOfChain{
        protected function realValidation(){
            $param = trim( $this->param );
            $this->exceptionMsg = sprintf( '%s must be null', $this->param );
            
            if( !empty( $param ) || $param !== '' || $param !== ' ' || !is_null( $param ) ){
                return false;
            }

            return true;
        }
    }