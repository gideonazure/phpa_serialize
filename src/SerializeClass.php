<?php

use Symfony\Component\Yaml\Yaml;

class SerializeClass
{

    private $format;
    private $yaml;
    private $xml;

    /**
     * SerializeClass constructor.
     */
    public function __construct($serializeFormat)
    {
        $this->format = $serializeFormat;
        $this->yaml = new Yaml();
        $this->xml = new SimpleXMLElement('<class/>');
    }


    public function serilalize($classObject){
        if(is_object($classObject)) {
            $format = mb_strtolower($this->format);

            switch ($format) {
                case 'json':
                    return $this->toJSON($classObject);
                    break;
                case 'xml':
                    return $this->toXML($classObject);
                    break;
                case 'yaml':
                    return $this->toYAML($classObject);
                    break;
                default:
                    return 'Wrong format for serialize. Please select one from: JSON, YAML, XML';
                    break;
            }
        } else {
            return 'The passed data is not an object. Check data type';
        }
    }


    private function toJSON($object){
        return json_encode($object);
    }


    private function toYAML($object){
        $yaml = $this->yaml;
        $array = $this->objectToArray($object);

        return $yaml->dump($array, 2, 4, Yaml::DUMP_OBJECT_AS_MAP);
    }

    private function toXML($object){
        foreach($object as $key => $item){
            if(!is_array($item)){
                $this->xml->addChild($key, $item);
            } else {
                foreach($item as $chkey => $chitem){
                    $this->xml->addChild($key, $chitem);
                }
            }
        }

        return $this->xml->asXML();
    }

    private function objectToArray($object){
        return json_decode(json_encode($object), true);
    }


    /*
    private function toFILE($file, $string){
        file_put_contents($file, $string);
    }
    */




}