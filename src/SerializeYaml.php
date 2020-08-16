<?php

namespace Serialize;

use Symfony\Component\Yaml\Yaml;

class SerializeYaml
{

    private $yaml;

    /**
     * SerializeClass constructor.
     */
    public function __construct()
    {
        $this->yaml = new Yaml();
    }


    public function serilalize($classObject){
        $this->validateSerializeData($classObject);

        $yaml = $this->yaml;
        $array = $this->objectToArray($classObject);

        return $yaml->dump($array, 2, 4, Yaml::DUMP_OBJECT_AS_MAP);
    }


    private function objectToArray($object){
        return json_decode(json_encode($object), true);
    }


    private function validateSerializeData($data){
        if(!is_object($data)) {
            throw new \Exception('The passed data is not an object. Check data type');
        }
    }
}