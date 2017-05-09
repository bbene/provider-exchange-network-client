<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfDeductible implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Deductible[] $Deductible
     */
    protected $Deductible = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Deductible[]
     */
    public function getDeductible()
    {
      return $this->Deductible;
    }

    /**
     * @param Deductible[] $Deductible
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfDeductible
     */
    public function setDeductible(array $Deductible = null)
    {
      $this->Deductible = $Deductible;
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
      return isset($this->Deductible[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Deductible
     */
    public function offsetGet($offset)
    {
      return $this->Deductible[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Deductible $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Deductible[] = $value;
      } else {
        $this->Deductible[$offset] = $value;
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
      unset($this->Deductible[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Deductible Return the current element
     */
    public function current()
    {
      return current($this->Deductible);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Deductible);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Deductible);
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
      reset($this->Deductible);
    }

    /**
     * Countable implementation
     *
     * @return Deductible Return count of elements
     */
    public function count()
    {
      return count($this->Deductible);
    }

}
