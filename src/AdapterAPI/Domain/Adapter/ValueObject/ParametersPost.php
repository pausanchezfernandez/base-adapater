<?php

namespace AdapterAPI\Domain\Adapter\ValueObject;

class ParametersPost
{
    /* @var string */
    private $parameter;



    public function __construct(string $parameter)
    {
        $this->guardParameterIsNotEmpty($parameter);
        $this->guardParameterIsJSON($parameter);
        $this->parameter = $parameter;
    }

    public function getValue()
    {
        return $this->parameter;
    }

    public function getArray()
    {
        return json_decode($this->parameter);
    }


    public function guardParameterIsNotEmpty($parameter)
    {
        if(empty($parameter)){
            throw new EmptyParameterClient();
        }
    }

    public function guardParameterIsJSON($parameter)
    {
        $ob = json_decode($parameter);
        if($ob === null) {
            throw new ParameterIsNotJson();
        }
    }

}