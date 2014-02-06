<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class MinimumLength extends \AbstractElementOfChain{
        public function __construct( $maximum ){
            $this->maximumLength = ( int ) $maximum;
        }
        
        public function realValidation(){
            if( strlen( $this->param ) < $this->maximumLength ){
                throw new InvalidArgumentException( $this, sprintf( '%s is bigger that maximum length', $this->param ) );
            }
        }
    }