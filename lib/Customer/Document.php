<?php

namespace PagarMe\Sdk\Document;

class Document
{
    use \PagarMe\Sdk\Fillable;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $number;

    /**
     * @param array $arrayData
     */
    public function __construct($arrayData)
    {
        $this->fill($arrayData);
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}
