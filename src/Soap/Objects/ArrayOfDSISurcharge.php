<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfDSISurcharge implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DSISurcharge[] $DSISurcharge
     */
    protected $DSISurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DSISurcharge[]
     */
    public function getDSISurcharge()
    {
      return $this->DSISurcharge;
    }

    /**
     * @param DSISurcharge[] $DSISurcharge
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfDSISurcharge
     */
    public function setDSISurcharge(array $DSISurcharge = null)
    {
      $this->DSISurcharge = $DSISurcharge;
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
      return isset($this->DSISurcharge[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DSISurcharge
     */
    public function offsetGet($offset)
    {
      return $this->DSISurcharge[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DSISurcharge $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DSISurcharge[] = $value;
      } else {
        $this->DSISurcharge[$offset] = $value;
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
      unset($this->DSISurcharge[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DSISurcharge Return the current element
     */
    public function current()
    {
      return current($this->DSISurcharge);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DSISurcharge);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DSISurcharge);
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
      reset($this->DSISurcharge);
    }

    /**
     * Countable implementation
     *
     * @return DSISurcharge Return count of elements
     */
    public function count()
    {
      return count($this->DSISurcharge);
    }

}
