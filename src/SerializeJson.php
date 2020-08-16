<?php

namespace Serialize;

class SerializeJson
{

    /**
     * SerializeClass constructor.
     */
    public function __construct()
    {

    }


    public function serilalize($classObject)
    {
        $this->validateSerializeData($classObject);
        return json_encode($classObject);
    }

    private function validateSerializeData($data){
        if(!is_object($data)) {
            throw new \Exception('The passed data is not an object. Check data type');
        }
    }

}