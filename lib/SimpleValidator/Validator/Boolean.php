<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
        
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class Boolean extends AbstractElementOfChain
    {
        protected function realValidation()
        {
            $this->exceptionMsg = sprintf('%s must be boolean', $this->param);

            return is_bool( $this->param);
        }
    }