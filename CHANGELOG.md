# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2020-08-16
### Add
- `SerializeJson.php` add file with class for serialization into JSON format
- `SerializeYaml.php` add file with class for serialization into YAML format    
- `SerializeXml.php` add file with class for serialization into XML format    
- Add exceptions in new classes   

### Edit
- `composer.json` update require dependencies
- `CHANGELOG.md` file
- `README.md` file

### Remove
- `SerializeClass.php` remove old serialize class file

## [1.0.1] - 2020-08-16
### Edit
- `composer.json` remove unused scripts
- `CHANGELOG.md` file
- `README.md` file
- `LICENSE` file

### Remove
- `/bin` removes unused directory



## [1.0.0] - 2020-08-16
### Added
- `src/` catalog for source code
- `tests/` catalog for test cases
- `.gitignore` file with basic files and directories to exclude them from Git
- `.php_cs` with CS rules for PHP-CS-Fixer tool
- `composer.json` witch depend on PHP >=7.1 and PHPUnit, PHP-CS-Fixer as dev
- `phpunit.xml.dist` file with basic configuration for PHPUnit test framework
- `CHANGELOG.md` file
- `README.md` file
- `LICENSE` file
