<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;
    
    use SimpleValidator\AbstractElementOfChain;
    
    class Url extends AbstractElementOfChain{
        protected function realValidation(){
            $this->exceptionMsg = sprintf( '%s must be an URL', print_r( $this->param, true ) );
            
            if( !filter_var( $this->param, FILTER_VALIDATE_URL ) ){
                return true;
            }

            return false;
        }
    }