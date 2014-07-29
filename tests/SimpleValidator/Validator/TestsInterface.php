<?php
    namespace Test\SimpleValidator\Validator;

    interface TestsInterface
    {
        public function testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails();
        public function testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails();
        public function testIfExceptionsAreAllowedWithAValidParamDoesNotThrowsAnException();
        public function testIfExceptionsAreDisabledWithAValidParamReturnABooleanTrue();
    }