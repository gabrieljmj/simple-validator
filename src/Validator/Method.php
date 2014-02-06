<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Method extends \AbstractElementOfChain{
        private $object;
        
        public function __construct( $object ){
            $this->object = $object;
        }
        
        protected function realValidation(){
            if( !method_exists( $this->object, $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s must be a method', $this->param ) );
            }
        }
    }