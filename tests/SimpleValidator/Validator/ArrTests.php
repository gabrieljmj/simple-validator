<?php
	namespace Test\SimpleValidator\Validator;

	use SimpleValidator\Validator\Arr;
	use \PHPUnit_Framework_TestCase;

	class ArrTests extends PHPUnit_Framework_TestCase{
		public function assertPreConditions(){
			$class = 'SimpleValidator\Validator\Arr';

			$this->assertTrue( 
				class_exists( $class ),
				'Class not found: ' . $class
			);
		}

		/**
		 * @expectedException SimpleValidator\Exception\SimpleValidatorException
		*/
		public function testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails(){
			$falseArr = 'This is not an array';
			$validator = new Arr();
			$validator->validate( $falseArr, true );
		}

		public function testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails(){
			$falseArr = 'This is not an array';
			$validator = new Arr();
			$this->assertFalse( 
				$validator->validate( $arr ), 
				'If param is not an array, when thw exceptions are disabled, must return boolean false' 
			);
		}

		/**
		 * @depends testIfTheExceptionIsActivatedValidationThrowsAnExceptionWhenItFails
		*/
		public function testIfExceptionsAreAllowedWithAValidArrayDoesNotThrowsAnException(){
			$arr = array( 1, 2, 3 );
			$validator = new Arr();
			$validator->validate( $arr, true );
		}

		/**
		 * @depends testIfExceptionsAreDisabledValidationReturnsBooleanWhenItFails
		*/
		public function testIfExceptionsAreDisabledWithAValidArrayReturnABooleanTrue(){
			$arr = array( 1, 2, 3 );
			$validator = new Arr();
			$this->assertTrue( ($validator->validate( $arr ) );
		}
	}