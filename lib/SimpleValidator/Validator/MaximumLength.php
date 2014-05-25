<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class MaximumLength extends AbstractElementOfChain{
        private $maximumLength;
        
        public function __construct( $maximum ){
            $this->maximumLength = ( int ) $maximum;
        }
        
        protected function realValidation(){
            $this->exceptionMsg = sprintf( '%s is bigger that maximum length', $this->param );

            if( strlen( $this->param ) > $this->maximumLength ){
                return false;
            }

            return true;
        }
    }