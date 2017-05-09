<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfRedemption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Redemption[] $Redemption
     */
    protected $Redemption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Redemption[]
     */
    public function getRedemption()
    {
      return $this->Redemption;
    }

    /**
     * @param Redemption[] $Redemption
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfRedemption
     */
    public function setRedemption(array $Redemption = null)
    {
      $this->Redemption = $Redemption;
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
      return isset($this->Redemption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Redemption
     */
    public function offsetGet($offset)
    {
      return $this->Redemption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Redemption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Redemption[] = $value;
      } else {
        $this->Redemption[$offset] = $value;
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
      unset($this->Redemption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Redemption Return the current element
     */
    public function current()
    {
      return current($this->Redemption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Redemption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Redemption);
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
      reset($this->Redemption);
    }

    /**
     * Countable implementation
     *
     * @return Redemption Return count of elements
     */
    public function count()
    {
      return count($this->Redemption);
    }

}
