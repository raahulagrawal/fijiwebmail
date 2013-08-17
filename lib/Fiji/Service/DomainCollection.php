<?php

namespace Fiji\Service;

/**
 * Domain Object Collection
 *
 * @link      http://www.fijiwebdesign.com/
 * @copyright Copyright (c) 2010-2020 Fiji Web Design. (http://www.fijiwebdesign.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Fiji_App
 */
 
use Fiji\Factory;

/**
 * A Collection of Domain Objects
 * Can be accessed like an array
 * 
 * @todo test ArrayAccess
 */
class DomainCollection implements \ArrayAccess, \Countable, \Iterator
{
    /**
     * Domain Object to fetch
     */
    protected $DomainObject;
    
    /**
     * List of objects in collection
     */
    protected $objects = array();
    
    /**
     * Current index
     */
    protected $currentIndex = 0;
    
    /**
     * Construct and set the service used to retrieve/store data
     * @param $Model {Fiji\Service\DomainObject} DomainObject Instance
     */
    public function __construct(DomainObject $DomainObject)
    {
        $this->DomainObject = $DomainObject;
    }
    
    /**
     * Set data to DomainObject collection
     * @param Array $data
     */
    public function setData(Array $data = array())
    {
        foreach($data as $value) {
            $object = clone($this->getDomainObject());
            $object->setData($value);
            $this->objects[] = $object;
        }
    }
    
    /**
     * Load data to DomainObject collection given the query
     * @var $query
     */
    public function find($query = null)
    {
        $this->setData($this->getService()->find($this->getDomainObject(), $query));
    }
    
    /**
     * Delete the Domain Objects from service
     */
    public function delete()
    {
        $this->getService()->delete($this);
    }
    
    /**
     * Save the Domain Objects to service
     */
    public function save()
    {
        $this->getService()->save($this);
    }
    
    /**
     * Return the DomainObject
     */
    public function getDomainObject()
    {
        return $this->DomainObject;
    }
    
    /**
     * Return the IDs of each Domain Object in Collection
     */
    public function getIds()
    {
        $ids = array();
        foreach($this->objects as $object) {
            $ids[] = $object->getId();
        }
        return $ids;
    }
    
    /**
     * ArrayAccess interface
     */
    public function offsetExists($i)
    {
        return isset($this->objects[$i]);
    }
    
    /**
     * ArrayAccess interface
     */
    public function offsetGet($i)
    {
        return isset($this->objects[$i]) ? $this->objects[$i] : null;
    }
    
    /**
     * ArrayAccess interface
     */
    public function offsetSet($i, $value)
    {
        return $this->objects[$i] = $value;
    }
    
    /**
     * ArrayAccess interface
     */
    public function offsetUnset($i)
    {
        return array_splice($this->objects, $i, 1, null);
    }
    
    /**
     * Retrieve the Service
     */
    public function getService()
    {
        return isset($this->Service) ? $this->Service : Factory::getService();
    }
    
    /**
     * Set the Service providing data
     */
    public function setService(\Fiji\Service\Service $Service)
    {
        $this->Service = $Service;
    }
    
    /**
     * Countable interface
     */
    public function count()
    {
        return count($this->objects);
    }
    
    /**
     * Iterator interface
     */
    public function current()
    {
        return $this->objects[$this->currentIndex];
    }
    
    /**
     * Iterator interface
     */
    public function next()
    {
        $this->currentIndex++;
        if ($this->valid()) {
            return $this->objects[$this->currentIndex];
        }
        return false;
        
    }
    
    /**
     * Iterator interface
     */
    public function key()
    {
        return $this->currentIndex;
    }
    
    /**
     * Iterator interface
     */
    public function valid()
    {
        return isset($this->objects[$this->currentIndex]);
    }
    
    /**
     * Iterator interface
     */
    public function rewind()
    {
        return $this->currentIndex = 0;
    }
    
}