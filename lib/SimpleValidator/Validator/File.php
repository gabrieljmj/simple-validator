<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class File extends AbstractElementOfChain{
        protected function realValidation(){
            $this->exceptionMsg = sprintf( '%s must be a file', $this->param );

            if( !is_file( $this->param ) ){
                return false;
            }

            return true;
        }
    }