<?php
    /**
     * @author Gabriel Jacinto <gamjj74@hotmail.com>
     * @link http://github.com/gabrieljmj/simple-validator
    */
    
    namespace SimpleValidator\Validator;

    use SimpleValidator\AbstractElementOfChain;

    class Cpf extends AbstractElementOfChain
    {
        protected function realValidation()
        {
            $this->exceptionMsg = sprintf('%s must be a valid CPF', $this->param);

            return $this->cpfValidate( $this->param);
        }
        
        private function cpfValidate($cpf)
        {
        	$cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);
        	if (
                strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' 
                || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' 
                || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999'
            ) {
        		return false;
        	} else {
        		for ($t = 9; $t < 11; $t++) {
        			for ($d = 0, $c = 0; $c < $t; $c++) {
        				$d += $cpf{$c} * (($t + 1) - $c);
        			}
        			$d = ((10 * $d) % 11) % 10;
        			if ($cpf{$c} != $d) {
        				return false;
        			}
        		}

        		return true;
        	}
        }
    }