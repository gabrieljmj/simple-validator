<?php
    namespace Test\SimpleValidator\Validator;

    use SimpleValidator\Validator\Arr;
    use Test\SimpleValidator\Validator\AbstractTest;
    use \PHPUnit_Framework_TestCase;

    class ArrTests extends AbstractTest
    {
        protected $class = 'SimpleValidator\Validator\Arr';

        /**
         * @expectedException SimpleValidator\Exception\SimpleValidatorException
        */
        public function testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails()
        {
            $falseArr = 'This is not an array';
            $validator = new Arr();
            $validator->validate($falseArr, true);
        }

        public function testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails()
        {
            $falseArr = 'This is not an array';
            $validator = new Arr();
            $this->assertFalse( 
                $validator->validate($falseArr), 
                'If param is not an array, when thw exceptions are disabled, must return boolean false' 
            );
        }

        /**
         * @depends testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails
        */
        public function testIfExceptionsAreAllowedWithAValidParamDoesNotThrowsAnException()
        {
            $arr = array(1, 2, 3);
            $validator = new Arr();
            $validator->validate($arr, true);
        }

        /**
         * @depends testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails
        */
        public function testIfExceptionsAreDisabledWithAValidParamReturnABooleanTrue()
        {
            $arr = array(1, 2, 3);
            $validator = new Arr();
            $this->assertTrue($validator->validate($arr));
        }
    }