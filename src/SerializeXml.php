<?php

namespace Serialize;

use SimpleXMLElement;

class SerializeXml
{
    private $xml;

    /**
     * SerializeClass constructor.
     */
    public function __construct()
    {
        $this->xml = new SimpleXMLElement('<class/>');
    }


    public function serilalize($classObject){
        $this->validateSerializeData($classObject);

        foreach ($classObject as $key => $item) {
            if (!is_array($item)) {
                $this->xml->addChild($key, $item);
            } else {
                foreach ($item as $chkey => $chitem) {
                    $this->xml->addChild($key, $chitem);
                }
            }
        }

        return $this->xml->asXML();
    }


    private function validateSerializeData($data){
        if(!is_object($data)) {
            throw new \Exception('The passed data is not an object. Check data type');
        }
    }
}