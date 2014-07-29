<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Exception;

    use \UnexpectedValueException;
    use SimpleValidator\InterfaceValidator;

    class SimpleValidatorException extends UnexpectedValueException
    {
        protected $validator;

        public function __construct(InterfaceValidator $validator, $message)
        {
            parent::__construct($message);
            $this->validator = $validator;
        }
        
        public function getInvalidParameterName()
        {
            $validatorName = explode('\\', get_class($this->validator));
            $validatorName = end($validatorName);
            return $validatorName;
        }
    }