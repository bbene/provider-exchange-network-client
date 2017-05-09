<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfRatingMethod implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RatingMethod[] $RatingMethod
     */
    protected $RatingMethod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RatingMethod[]
     */
    public function getRatingMethod()
    {
      return $this->RatingMethod;
    }

    /**
     * @param RatingMethod[] $RatingMethod
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfRatingMethod
     */
    public function setRatingMethod(array $RatingMethod = null)
    {
      $this->RatingMethod = $RatingMethod;
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
      return isset($this->RatingMethod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RatingMethod
     */
    public function offsetGet($offset)
    {
      return $this->RatingMethod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RatingMethod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RatingMethod[] = $value;
      } else {
        $this->RatingMethod[$offset] = $value;
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
      unset($this->RatingMethod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RatingMethod Return the current element
     */
    public function current()
    {
      return current($this->RatingMethod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RatingMethod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RatingMethod);
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
      reset($this->RatingMethod);
    }

    /**
     * Countable implementation
     *
     * @return RatingMethod Return count of elements
     */
    public function count()
    {
      return count($this->RatingMethod);
    }

}
