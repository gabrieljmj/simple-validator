<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class Direactory extends AbstractElementOfChain{
        protected function realValidation(){
            $this->exceptionMsg = sprintf( '%s must be a directory', $this->param );

            if( !is_dir( $this->param ) ){
                return false;
            }

            return true;
        }
    }