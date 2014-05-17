<?php
namespace Reddit\Thing;

class Message implements \ArrayAccess
{
    protected $contents = array();
 
    public function offsetExists($index) {
        return isset($this->contents[$index]);
    }
 
    public function offsetGet($index) {
        if($this->offsetExists($index)) {
            return $this->contents[$index];
        }
        return false;
    }
 
    public function offsetSet($index, $value) {
        if($index) {
            $this->contents[$index] = $value;
        } else {
            $this->contents[] = $value;
        }
        return true;
 
    }
 
    public function offsetUnset($index) {
        unset($this->contents[$index]);
        return true;
    }
 
    public function getContents() {
        return $this->contents;
    }
}
