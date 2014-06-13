<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */

    namespace SimpleValidator;

    use SimpleValidator\InterfaceValidator;
    use SimpleValidator\Exception\SimpleValidatorException;

    abstract class AbstractElementOfChain implements InterfaceValidator{
        protected $exceptionMsg;
        protected $params;

        public function setSucessor( AbstractElementOfChain $validator ){
            $this->sucessor = $validator;
        }
        
        public function hasSucessor(){
            return isset( $this->sucessor );
        }
        
        public function validate( $param, $exception = false ){
            $this->param = $param;
            
            if( $exception ){
                if( !$this->realValidation() ){
                    throw new SimpleValidatorException( $this, $this->exceptionMsg );
                }
            }else{
                $valid = $this->realValidation() ? true : false;
            }

            if( $this->hasSucessor() ){
                $valid = $this->sucessor->validate( $param, $exception );
            }

            return $valid;
        }
        
        abstract protected function realValidation();
    }