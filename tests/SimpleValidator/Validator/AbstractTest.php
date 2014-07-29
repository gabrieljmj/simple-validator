<?php
    namespace Test\SimpleValidator\Validator;

    use \PHPUnit_Framework_TestCase;

    class AbstractTest extends PHPUnit_Framework_TestCase implements TestInterface
    {
        protected $class;

        public function assertPreConditions()
        {
            $this->assertTrue( 
                class_exists($this->class),
                'Validator not found: ' . $this->class
            );
        }
    }