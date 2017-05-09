<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfRateBookCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RateBookCode[] $RateBookCode
     */
    protected $RateBookCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RateBookCode[]
     */
    public function getRateBookCode()
    {
      return $this->RateBookCode;
    }

    /**
     * @param RateBookCode[] $RateBookCode
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfRateBookCode
     */
    public function setRateBookCode(array $RateBookCode = null)
    {
      $this->RateBookCode = $RateBookCode;
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
      return isset($this->RateBookCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RateBookCode
     */
    public function offsetGet($offset)
    {
      return $this->RateBookCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RateBookCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RateBookCode[] = $value;
      } else {
        $this->RateBookCode[$offset] = $value;
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
      unset($this->RateBookCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RateBookCode Return the current element
     */
    public function current()
    {
      return current($this->RateBookCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RateBookCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RateBookCode);
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
      reset($this->RateBookCode);
    }

    /**
     * Countable implementation
     *
     * @return RateBookCode Return count of elements
     */
    public function count()
    {
      return count($this->RateBookCode);
    }

}
