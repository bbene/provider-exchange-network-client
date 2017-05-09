<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfDSIProductInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DSIProductInfo[] $DSIProductInfo
     */
    protected $DSIProductInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DSIProductInfo[]
     */
    public function getDSIProductInfo()
    {
      return $this->DSIProductInfo;
    }

    /**
     * @param DSIProductInfo[] $DSIProductInfo
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfDSIProductInfo
     */
    public function setDSIProductInfo(array $DSIProductInfo = null)
    {
      $this->DSIProductInfo = $DSIProductInfo;
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
      return isset($this->DSIProductInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DSIProductInfo
     */
    public function offsetGet($offset)
    {
      return $this->DSIProductInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DSIProductInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DSIProductInfo[] = $value;
      } else {
        $this->DSIProductInfo[$offset] = $value;
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
      unset($this->DSIProductInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DSIProductInfo Return the current element
     */
    public function current()
    {
      return current($this->DSIProductInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DSIProductInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DSIProductInfo);
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
      reset($this->DSIProductInfo);
    }

    /**
     * Countable implementation
     *
     * @return DSIProductInfo Return count of elements
     */
    public function count()
    {
      return count($this->DSIProductInfo);
    }

}
