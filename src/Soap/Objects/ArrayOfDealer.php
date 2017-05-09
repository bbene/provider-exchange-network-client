<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfDealer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Dealer[] $Dealer
     */
    protected $Dealer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Dealer[]
     */
    public function getDealer()
    {
      return $this->Dealer;
    }

    /**
     * @param Dealer[] $Dealer
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfDealer
     */
    public function setDealer(array $Dealer = null)
    {
      $this->Dealer = $Dealer;
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
      return isset($this->Dealer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Dealer
     */
    public function offsetGet($offset)
    {
      return $this->Dealer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Dealer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Dealer[] = $value;
      } else {
        $this->Dealer[$offset] = $value;
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
      unset($this->Dealer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Dealer Return the current element
     */
    public function current()
    {
      return current($this->Dealer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Dealer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Dealer);
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
      reset($this->Dealer);
    }

    /**
     * Countable implementation
     *
     * @return Dealer Return count of elements
     */
    public function count()
    {
      return count($this->Dealer);
    }

}
