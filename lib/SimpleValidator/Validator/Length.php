<?php
/**
 * @author Gabriel Jacinto <gamjj74@hotmail.com>
 * @link http://github.com/gabrieljmj/simple-validator
*/
    
namespace SimpleValidator\Validator;

use SimpleValidator\AbstractElementOfChain;
    
class Length extends AbstractElementOfChain
{
    private $length;
        
    public function __construct($length)
    {
        if (!is_int($length)) {
            throw new \InvalidArgumentException('Lenght must be an integer');
        }

        $this->length = $length;
    }
        
    protected function realValidation()
    {
        $this->exceptionMsg = sprintf('%s must have %s caracters', $this->param, $this->length);

        if (strlen($this->param) !== $this->length) {
            return false;
        }

        return true;
    }
}