<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Length extends \AbstractElementOfChain{
        private $length;
        
        public function __construct( $length ){
            $this->lenght = ( int ) $lenght;
        }
        
        protected function realValidation(){
            if( strlen( $this->param ) !== $this->length ){
                throw new SimpleValidatorException( $this, sprintf( '%s must have %s caracters', $this->param, $this->length ) );
            }
        }
    }