<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfCoverage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Coverage[] $Coverage
     */
    protected $Coverage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Coverage[]
     */
    public function getCoverage()
    {
      return $this->Coverage;
    }

    /**
     * @param Coverage[] $Coverage
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfCoverage
     */
    public function setCoverage(array $Coverage = null)
    {
      $this->Coverage = $Coverage;
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
      return isset($this->Coverage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Coverage
     */
    public function offsetGet($offset)
    {
      return $this->Coverage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Coverage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Coverage[] = $value;
      } else {
        $this->Coverage[$offset] = $value;
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
      unset($this->Coverage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Coverage Return the current element
     */
    public function current()
    {
      return current($this->Coverage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Coverage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Coverage);
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
      reset($this->Coverage);
    }

    /**
     * Countable implementation
     *
     * @return Coverage Return count of elements
     */
    public function count()
    {
      return count($this->Coverage);
    }

}
