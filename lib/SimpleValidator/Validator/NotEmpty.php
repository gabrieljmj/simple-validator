<?php
/**
 * @author Gabriel Jacinto <gamjj74@hotmail.com>
 * @link http://github.com/gabrieljmj/simple-validator
*/
    
namespace SimpleValidator\Validator;
    
use SimpleValidator\Exception\SimpleValidatorException;
use SimpleValidator\AbstractElementOfChain;
    
class NotEmpty extends AbstractElementOfChain
{
    protected function realValidation()
    {
        $this->exceptionMsg = 'String can\'t be empty';

        if (empty($this->param) || $this->param === '' || $this->param === ' ' || is_null($this->param)) {
            return false;
        }

        return true;
    }
}