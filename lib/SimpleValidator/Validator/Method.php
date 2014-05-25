<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;
    
    use SimpleValidator\Exception\SimpleValidatorException;
    use SimpleValidator\AbstractElementOfChain;
    
    class Method extends AbstractElementOfChain{
        private $object;
        
        public function __construct( $object ){
            $this->object = $object;
        }
        
        protected function realValidation(){
            $this->exceptionMsg = sprintf( '%s must be a method', $this->param );

            if( !method_exists( $this->object, $this->param ) ){
                return false;
            }

            return true;
        }
    }