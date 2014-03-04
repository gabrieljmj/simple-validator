Simple Validator
================

To simple validations in PHP.
##Validations
####Chain
The implementation will be in a chain, where you'll show what the next validation for that element.
####SimpleValidatorException
This is the exception that is thrown when one validation to fail

``SimpleValidatorException::getInvalidParameterName()``
Return what validation failure

####Validations list
* ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array
* * ``Arr`` Verify if element is an array

##Implemeting
```php
$url = 'http://example.com';

$validator = new NotEmpty; // verify if string is not empty
$validator->setSucessor( new Url ); // verify if string is an URL

try{
  $validator->validate( $url ); // realize all validations predefined
}catch( SimpleValidatorException $e ){
   echo '<b>Error:</b> ' . $e->getMessage() . '<br /> <b>On test:</b> ' . $e->getInvalidParameterName();
}
```
