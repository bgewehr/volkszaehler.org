<?php

namespace Volkszaehler\Model\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class VolkszaehlerModelChannelMeterProxy extends \Volkszaehler\Model\Channel\Meter implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister);
            unset($this->_identifier);
        }
    }

    
    public function getResolution()
    {
        $this->_load();
        return parent::getResolution();
    }

    public function setResolution($resolution)
    {
        $this->_load();
        return parent::setResolution($resolution);
    }

    public function getCost()
    {
        $this->_load();
        return parent::getCost();
    }

    public function setCost($cost)
    {
        $this->_load();
        return parent::setCost($cost);
    }

    public function getName()
    {
        $this->_load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->_load();
        return parent::setName($name);
    }

    public function getDescription()
    {
        $this->_load();
        return parent::getDescription();
    }

    public function setDescription($description)
    {
        $this->_load();
        return parent::setDescription($description);
    }

    public function getUnit()
    {
        $this->_load();
        return parent::getUnit();
    }

    public function addData(\Volkszaehler\Model\Data $data)
    {
        $this->_load();
        return parent::addData($data);
    }

    public function getInterpreter(\Doctrine\ORM\EntityManager $em)
    {
        $this->_load();
        return parent::getInterpreter($em);
    }

    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function getUuid()
    {
        $this->_load();
        return parent::getUuid();
    }


    public function __sleep()
    {
        if (!$this->__isInitialized__) {
            throw new \RuntimeException("Not fully loaded proxy can not be serialized.");
        }
        return array('name', 'description', 'indicator', 'data', 'id', 'uuid', 'resolution', 'cost');
    }
}