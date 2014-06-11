Simple Validator
================
[![Total Downloads](https://poser.pugx.org/gabrieljmj/simple-validator/downloads.png)](https://packagist.org/packages/gabrieljmj/simple-validator) [![Latest Unstable Version](https://poser.pugx.org/gabrieljmj/simple-validator/v/unstable.png)](https://packagist.org/packages/gabrieljmj/simple-validator) [![License](https://poser.pugx.org/gabrieljmj/simple-validator/license.png)](https://packagist.org/packages/gabrieljmj/simple-validator)

To simple validations in PHP.
##Autoload
####Via composer
```json
{
    "psr-4": {
        "SimpleValidator\\": "vendor/gabrieljmj/simple-validator/lib/SimpleValidator/"
    }
}
```
####Autoload file
```php
require_once SIMPLE_VALIDATOR_DIR . DIRECTORY_SEPARATOR . 'autoload' . DIRECTORY_SEPARATOR . 'autoload.php'
```
##Validations
####Chain
The implementation will be in a chain, where you'll show what the next validation for that element.
####SimpleValidatorException
This is the exception that is thrown when one validation to fail and the exception are enabled.

``SimpleValidatorException::getInvalidParameterName()``
Return what validation failure

####Validations list
* ``Arr`` Verify if element is an array
* ``Boolean`` Verify if element is a boolean
* ``Callable`` Verify if element is a callable
* ``Cpf`` Verify if element is a Cpf
* ``Directory`` Verify if element is a directory
* ``Double`` Verify if element is a duble
* ``Email`` Verify if element is an email
* ``Equal`` Verify if element is equal to another
* ``File`` Verify if element is a file
* ``Float`` Verify if element is a float
* ``Func`` Verify if element is a function
* ``Int`` Verify if element is an integer
* ``Lenght`` Verify if element is the specified size
* ``MaximumLenght`` Verify if element have the maximum specified size
* ``Method`` Verify if element is a class's method
* ``MinimumLenght`` Verify if element have the minimum specified size
* ``NotEmpty`` Verify if element is not empty
* ``Null`` Verify if element is null
* ``Numeric`` Verify if element is numeric
* ``Object`` Verify if element is an object
* ``String`` Verify if element is a string
* ``Url`` Verify if element is an URL

##Implemeting
####Enabled exception
```php
use SimpleValidator\Validator\NotEmpty;
use SimpleValidator\Validator\Url;
use SimpleValidator\Exception\SimpleValidatorException;

//...

$url = 'http://example.com';

$validator = new NotEmpty; // verify if string is not empty
$validator->setSucessor( new Url ); // verify if string is an URL

try{
  $validator->validate( $url, true ); // realize all validations predefined
}catch( SimpleValidatorException $e ){
   echo '<b>Error:</b> ' . $e->getMessage() . '<br /> <b>On test:</b> ' . $e->getInvalidParameterName();
}
```
####Disabled exception
```php
use SimpleValidator\Validator\NotEmpty;
use SimpleValidator\Validator\Url;

//...

$url = 'http://example.com';

$validator = new NotEmpty; // verify if string is not empty
$validator->setSucessor( new Url ); // verify if string is an URL

if( $validator->validate( $url ) ){ // realize all validations predefined
    //Success
}{
    //Fail
}
```
