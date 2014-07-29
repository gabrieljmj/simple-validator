<?php
/**
 * @author Gabriel Jacinto <gamjj74@hotmail.com>
 * @link http://github.com/gabrieljmj/simple-validator
*/
    
namespace SimpleValidator\Validator;

use SimpleValidator\AbstractElementOfChain;
    
class Equal extends AbstractElementOfChain
{
    private $toComparate;
        
    public function __construct($toComparate)
    {
        $this->toComparate = $toComparate;
    }
        
    protected function realValidation()
    {
        $this->exceptionMsg = sprintf('%s must be equal %s', $this->param, $this->toComparate);

        if ($this->param == $this->toComparate) {
            return false;
        }

        return true;
    }
}