<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class MaximumLength extends \AbstractElementOfChain{
        private $maximumLength;
        
        public function __construct( $maximum ){
            $this->maximumLength = ( int ) $maximum;
        }
        
        protected function realValidation(){
            if( strlen( $this->param ) > $this->maximumLength ){
                throw new InvalidArgumentException( $this, sprintf( '%s is bigger that maximum length', $this->param ) );
            }
        }
    }