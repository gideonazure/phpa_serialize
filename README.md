Class Serializer
===============

This project based on a default structure for PHP projects and help to serialize any class into JSON, YAML or XML formats.  



## Installation

Use the composer [package](https://packagist.org/packages/gideonazure/class_serializer) to install class serializer.

```bash
composer require phpa/class_serializer
```


## Usage

```php
// require class to your project
require_once __DIR__ . '/../src/SerializeClass.php';

// create instance of a class
// with specifying the format of the final data as a class property

# for JSON output data
$JSON = new SerializeClass('JSON'); 

# for YAML output data
$YAML = new SerializeClass('YAML'); 

# for XML output data
$XML = new SerializeClass('XML'); // XML output data



// and then call  "serialize" method of instance 
// with passing data object

# return class object in JSON format
$JSON->serilalize(/* class object */);

# return class object in YAML format
$YAML->serilalize(/* class object */);

# return class object in XML format
$XML->serilalize(/* class object */);
```

## Demo
For demo use and check the functionality - run the file "SerializeTester.php" from the "/tests" folder

```bash
php SerializeTester.php
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.



## License
[MIT](https://choosealicense.com/licenses/mit/)