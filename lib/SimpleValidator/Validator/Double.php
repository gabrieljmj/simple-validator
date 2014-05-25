<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class Double extends AbstractElementOfChain{
        protected function realValidation(){
            $this->exceptionMsg = sprintf( '%s must be double', $this->param );

            if( !is_double( $this->param ) ){
                return false;
            }

            return true;
        }
    }