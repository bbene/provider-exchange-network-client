<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfModel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Model[] $Model
     */
    protected $Model = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Model[]
     */
    public function getModel()
    {
      return $this->Model;
    }

    /**
     * @param Model[] $Model
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfModel
     */
    public function setModel(array $Model = null)
    {
      $this->Model = $Model;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Model[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Model
     */
    public function offsetGet($offset)
    {
      return $this->Model[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Model $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Model[] = $value;
      } else {
        $this->Model[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Model[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Model Return the current element
     */
    public function current()
    {
      return current($this->Model);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Model);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Model);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Model);
    }

    /**
     * Countable implementation
     *
     * @return Model Return count of elements
     */
    public function count()
    {
      return count($this->Model);
    }

}
