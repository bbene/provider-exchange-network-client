<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class ArrayOfAnnouncement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Announcement[] $Announcement
     */
    protected $Announcement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Announcement[]
     */
    public function getAnnouncement()
    {
      return $this->Announcement;
    }

    /**
     * @param Announcement[] $Announcement
     * @return \ProviderExchangeNetwork\Soap\Objects\ArrayOfAnnouncement
     */
    public function setAnnouncement(array $Announcement = null)
    {
      $this->Announcement = $Announcement;
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
      return isset($this->Announcement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Announcement
     */
    public function offsetGet($offset)
    {
      return $this->Announcement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Announcement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Announcement[] = $value;
      } else {
        $this->Announcement[$offset] = $value;
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
      unset($this->Announcement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Announcement Return the current element
     */
    public function current()
    {
      return current($this->Announcement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Announcement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Announcement);
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
      reset($this->Announcement);
    }

    /**
     * Countable implementation
     *
     * @return Announcement Return count of elements
     */
    public function count()
    {
      return count($this->Announcement);
    }

}
