<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class Arr extends AbstractElementOfChain
    {
        protected function realValidation()
        {
            $this->exceptionMsg = sprintf('%s must be an array', $this->param);

            return is_array($this->param);
        }
    }