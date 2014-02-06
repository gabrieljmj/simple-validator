<?php
    namespace Validator;
        
    use Exception\InvalidArgumentException;
    
    class Method extends \AbstractElementOfChain{
        private $object;
        
        public function __construct( $object ){
            $this->object = $object;
        }
        
        public function realValidation(){
            if( !method_exists( $this->object, $this->param ) ){
                throw new InvalidArgumentException( $this, sprintf( '%s is an invalid method', $this->param ) );
            }
        }
    }