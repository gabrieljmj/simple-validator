<?php
    namespace Test\SimpleValidator\Validator;

    use SimpleValidator\Validator\Boolean;
    use Test\SimpleValidator\Validator\AbstractTest;
    use \PHPUnit_Framework_TestCase;

    class BooleanTests extends AbstractTest
    {
        /**
         * @expectedException SimpleValidator\Exception\SimpleValidatorException
        */
        public function testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails()
        {
            $falseBool = 'This is not a boolean';
            $validator = new Boolean();
            $validator->validate($falseBool, true);
        }

        public function testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails()
        {
            $falseBool = 'This is not a boolean';
            $validator = new Boolean();
            $this->assertFalse( 
                $validator->validate($falseBool), 
                'If param is not a boolean, when thw exceptions are disabled, must return boolean false' 
            );
        }

        /**
         * @depends testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails
        */
        public function testIfExceptionsAreAllowedWithAValidParamDoesNotThrowsAnException()
        {
            $bool = true;
            $validator = new Boolean();
            $validator->validate($bool, true);
        }

        /**
         * @depends testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails
        */
        public function testIfExceptionsAreDisabledWithAValidParamReturnABooleanTrue()
        {
            $bool = true;
            $validator = new Boolean();
            $this->assertTrue($validator->validate($bool));
        }
    }