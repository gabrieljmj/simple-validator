<?php
    namespace Exception;

    class SimpleValidatorException extends \UnexpectedValueException{
        public function __construct( \InterfaceValidator $validator, $message ){
            parent::__construct( $message );
            $this->validator = $validator;
        }
        
        public function getInvalidParameterName(){
            $validatorName = explode( '\\', get_class( $this->validator ) );
            $validatorName = end( $validatorName );
            return $validatorName;
        }
    }