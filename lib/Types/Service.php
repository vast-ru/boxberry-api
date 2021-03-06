<?php

namespace Morfin60\BoxberryApi\Types;

/**
 * Class Service
 * @package Morfin60\BoxberryApi\Types
 */
class Service extends Base
{
    public $Name;
    public $Date;
    public $Sum;

    /**
     * Service constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->Name = $object->Name;
        $this->Date = $object->Date;
        $this->Sum = floatval($object->Sum);
    }
}
