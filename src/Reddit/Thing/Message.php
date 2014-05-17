<?php
/**
 * Message object for factory
 *
 * PHP version 5.5
 *
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 SolutionBlender
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category   Message
 * @package    Message
 * @author     Henry Smith <henry@henrysmith.org>
 * @author     Alex Hughes <alex@solutionblender.ca>
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    GIT: h2s/reddit-api-client
 * @link       https://github.com/h2s/reddit-api-client
 * @since      File available since Release 5/17/2014
 * @deprecated File deprecated not yet
 */

namespace Reddit\Thing;

/**
 * Message class
 *
 * For the factory!
 *
 * @category Message
 * @package  Message
 * @author   Alex Hughes <alex@solutionblender.ca>
 * @license  http://opensource.org/licenses/MIT  MIT License
 * @link     https://github.com/h2s/reddit-api-client
 */
class Message implements \ArrayAccess
{
    /**
     * The status of foo's universe
     *
     * Potential values are 'good', 'fair', 'poor' and 'unknown'.
     *
     * @index string
     */
    protected $contents = array();
       /**
       * Required array functions
	   *
	   * @param string $index the string to quote 
	   *
	   * @return bool
    */
    public function offsetExists($index)
    {
        return isset($this->contents[$index]);
    }
     /**
     * Required array functions
    *
	   * @param string $index the string to quote 
	   *
	   * @return bool
     */
    public function offsetGet($index)
    {
        if ($this->offsetExists($index)) {
            return $this->contents[$index];
        }

        return false;
    }
     /**
     * Required array functions
	   *
	   * @param string $index the string to quote 
	   * @param string $value therpt o derp
	   *
	   * @return bool
     */
    public function offsetSet($index, $value)
    {
        if ($index) {
            $this->contents[$index] = $value;
        } else {
            $this->contents[] = $value;
        }

        return true;

    }
     /**
     * Required array functions
  	 * 
	   * @param string $index the string to quote 
	   *
	   * @return bool
     */
    public function offsetUnset($index)
    {
        unset($this->contents[$index]);

        return true;
    }
    /**
     * Required array functions
	   *
	   * @return bool
     */
   
    public function getContents()
    {
        return $this->contents;
    }
}
