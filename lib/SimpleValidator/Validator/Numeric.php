<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class Numeric extends AbstractElementOfChain
    {
        protected function realValidation()
        {
            $this->exceptionMsg = sprintf('%s must be numeric', $this->param);

            return is_numeric($this->param);
        }
    }