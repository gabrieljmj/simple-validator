<?php
/**
 * @author Gabriel Jacinto <gamjj74@hotmail.com>
 * @link http://github.com/gabrieljmj/simple-validator
*/
    
namespace SimpleValidator\Validator;
    
use SimpleValidator\AbstractElementOfChain;
    
class File extends AbstractElementOfChain
{
    protected function realValidation()
    {
        $this->exceptionMsg = sprintf('%s must be string', $this->param);

        return is_string($this->param);
    }
}