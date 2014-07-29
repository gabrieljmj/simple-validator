<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class CallableType extends AbstractElementOfChain
    {
        protected function realValidation()
        {
            $this->exceptionMsg = sprintf('%s must be callable', $this->param);

            return is_callable($this->param);
        }
    }