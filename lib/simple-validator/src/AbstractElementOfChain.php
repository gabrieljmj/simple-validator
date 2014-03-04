<?php
    abstract class AbstractElementOfChain implements \InterfaceValidator{
        public function setSucessor( AbstractElementOfChain $validator ){
            $this->sucessor = $validator;
        }
        
        public function hasSucessor(){
            return isset( $this->sucessor );
        }
        
        public function validate( $param ){
            $this->param = $param;
            
            $this->realValidation();
            
            if( $this->hasSucessor() ){
                $this->sucessor->validate( $param );
            }
        }
        
        abstract protected function realValidation();
    }