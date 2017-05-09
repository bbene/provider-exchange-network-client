<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfSurcharged implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Surcharged[] $Surcharged
     */
    protected $Surcharged = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Surcharged[]
     */
    public function getSurcharged()
    {
      return $this->Surcharged;
    }

    /**
     * @param Surcharged[] $Surcharged
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfSurcharged
     */
    public function setSurcharged(array $Surcharged = null)
    {
      $this->Surcharged = $Surcharged;
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
      return isset($this->Surcharged[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Surcharged
     */
    public function offsetGet($offset)
    {
      return $this->Surcharged[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Surcharged $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Surcharged[] = $value;
      } else {
        $this->Surcharged[$offset] = $value;
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
      unset($this->Surcharged[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Surcharged Return the current element
     */
    public function current()
    {
      return current($this->Surcharged);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Surcharged);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Surcharged);
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
      reset($this->Surcharged);
    }

    /**
     * Countable implementation
     *
     * @return Surcharged Return count of elements
     */
    public function count()
    {
      return count($this->Surcharged);
    }

}
