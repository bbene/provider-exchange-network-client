<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfLender implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Lender[] $Lender
     */
    protected $Lender = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Lender[]
     */
    public function getLender()
    {
      return $this->Lender;
    }

    /**
     * @param Lender[] $Lender
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfLender
     */
    public function setLender(array $Lender = null)
    {
      $this->Lender = $Lender;
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
      return isset($this->Lender[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Lender
     */
    public function offsetGet($offset)
    {
      return $this->Lender[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Lender $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Lender[] = $value;
      } else {
        $this->Lender[$offset] = $value;
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
      unset($this->Lender[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Lender Return the current element
     */
    public function current()
    {
      return current($this->Lender);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Lender);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Lender);
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
      reset($this->Lender);
    }

    /**
     * Countable implementation
     *
     * @return Lender Return count of elements
     */
    public function count()
    {
      return count($this->Lender);
    }

}
