<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfLevel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Level[] $Level
     */
    protected $Level = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Level[]
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param Level[] $Level
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfLevel
     */
    public function setLevel(array $Level = null)
    {
      $this->Level = $Level;
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
      return isset($this->Level[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Level
     */
    public function offsetGet($offset)
    {
      return $this->Level[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Level $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Level[] = $value;
      } else {
        $this->Level[$offset] = $value;
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
      unset($this->Level[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Level Return the current element
     */
    public function current()
    {
      return current($this->Level);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Level);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Level);
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
      reset($this->Level);
    }

    /**
     * Countable implementation
     *
     * @return Level Return count of elements
     */
    public function count()
    {
      return count($this->Level);
    }

}
