<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;
    
    class MinimumLength extends AbstractElementOfChain
    {
        private $minimumLength;

        public function __construct($minimum)
        {
            $this->minimumLength = (int) $minimum;
        }
        
        protected function realValidation()
        {
            $this->exceptionMsg = sprintf('%s is smaller that minimum length', $this->param);

            if (strlen($this->param) < $this->minimumLength) {
                return false;
            }

            return true;
        }
    }