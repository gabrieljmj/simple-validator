<?php
    namespace Validator;
    
    use Exception\SimpleValidatorException;
    
    class Equal extends \AbstractElementOfChain{
        private $toComparate;
        
        public function __construct( $toComparate ){
            $this->toComparate = $toComparate;
        }
        
        protected function realValidation(){
            if( $this->param == $toComparate ){
                throw new SimpleValidatorException( $this, sprintf( '%s must be equal %s', $this->param, $this->toComparate ) );
            }
        }
    }