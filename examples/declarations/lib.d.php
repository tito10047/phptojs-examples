<?php
/*! *****************************************************************************
Copyright (c) Microsoft Corporation. All rights reserved.
Licensed under the Apache License, Version 2.0 (the "License"); you may not use
this file except in compliance with the License. You may obtain a copy of the
License at http://www.apache.org/licenses/LICENSE-2.0

THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
MERCHANTABLITY OR NON-INFRINGEMENT.

See the Apache Version 2.0 License for specific language governing permissions
and limitations under the License.
***************************************************************************** */

/// <reference no-default-lib="true"/>
/////////////////////////////
/// ECMAScript APIs
/////////////////////////////

namespace {
	/**
	 * @const number;
	 */
	const NaN=null;
}
namespace {
	/**
	 * @const number;
	 */
	const Infinity=null;
}

/**
* Evaluates JavaScript code and executes it.
* @param x A String value that contains valid JavaScript code.
*/
namespace {
	/**
	 * @param string $x
	 * @return mixed
	 */
	function eval_($x){}
}

/**
* Converts A string to an integer.
* @param s A string to convert into a number.
* @param radix A value between 2 and 36 that specifies the base of the number in numString.
* If this argument is not supplied, strings with a prefix of '0x' are considered hexadecimal.
* All other strings are considered decimal.
*/
namespace {
	/**
	 * @param string $s
	 * @param number $radix
	 * @return number
	 */
	function parseInt($s,$radix){}
}

/**
* Converts a string to a floating-point number.
* @param string A string that contains a floating-point number.
*/
namespace {
	/**
	 * @param string $string
	 * @return number
	 */
	function parseFloat($string){}
}

/**
* Returns a Boolean value that indicates whether a value is the reserved value NaN (not a number).
* @param number A numeric value.
*/
namespace {
	/**
	 * @param number $number
	 * @return boolean
	 */
	function isNaN($number){}
}

/**
* Determines whether a supplied number is finite.
* @param number Any numeric value.
*/
namespace {
	/**
	 * @param number $number
	 * @return boolean
	 */
	function isFinite($number){}
}

/**
* Gets the unencoded version of an encoded Uniform Resource Identifier (URI).
* @param encodedURI A value representing an encoded URI.
*/
namespace {
	/**
	 * @param string $encodedURI
	 * @return string
	 */
	function decodeURI($encodedURI){}
}

/**
* Gets the unencoded version of an encoded component of a Uniform Resource Identifier (URI).
* @param encodedURIComponent A value representing an encoded URI component.
*/
namespace {
	/**
	 * @param string $encodedURIComponent
	 * @return string
	 */
	function decodeURIComponent($encodedURIComponent){}
}

/**
* Encodes a text string as a valid Uniform Resource Identifier (URI)
* @param uri A value representing an encoded URI.
*/
namespace {
	/**
	 * @param string $uri
	 * @return string
	 */
	function encodeURI($uri){}
}

/**
* Encodes a text string as a valid component of a Uniform Resource Identifier (URI).
* @param uriComponent A value representing an encoded URI component.
*/
namespace {
	/**
	 * @param string $uriComponent
	 * @return string
	 */
	function encodeURIComponent($uriComponent){}
}

namespace {
	/**
	 * @property boolean $configurable?
	 * @property boolean $enumerable?
	 * @property mixed $value?
	 * @property boolean $writable?
	 */
	interface PropertyDescriptor
	{
	
		/**
		 * mixed
		 */
		function get();
	
	
		/**
		 * @param mixed $v
		 * void
		 */
		function set($v);
	
	}
}

namespace {
	interface PropertyDescriptorMap
	{
	}
}

namespace {
	/**
	 * @property callable $constructor  The initial value of Object.prototype.constructor is the standard built-in Object constructor.
	 */
	interface Object
	{
	
		/**
		 *  Returns a string representation of an object.
		 * string
		 */
		function toString();
	
	
		/**
		 *  Returns a date converted to a string using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 *  Returns the primitive value of the specified object.
		 * Object
		 */
		function valueOf();
	
	
		/**
		 * Determines whether an object has a property with the specified name.
		 * @param string $v v A property name.
		 * boolean
		 */
		function hasOwnProperty($v);
	
	
		/**
		 * Determines whether an object exists in another object's prototype chain.
		 * @param Object $v v Another object whose prototype chain is to be checked.
		 * boolean
		 */
		function isPrototypeOf($v);
	
	
		/**
		 * Determines whether a specified property is enumerable.
		 * @param string $v v A property name.
		 * boolean
		 */
		function propertyIsEnumerable($v);
	
	}
}

namespace {
	/**
	 * @property Object $prototype  A reference to the prototype for a class of objects.
	 */
	interface ObjectConstructor
	{
	
		/**
		 * Returns the prototype of an object.
		 * @param mixed $o o The object that references the prototype.
		 * mixed
		 */
		function getPrototypeOf($o);
	
	
		/**
		 * Gets the own property descriptor of the specified object.
		 * An own property descriptor is one that is defined directly on the object and is not inherited from the object's prototype.
		 * @param mixed $o o Object that contains the property.
		 * @param string $p
		 * PropertyDescriptor
		 */
		function getOwnPropertyDescriptor($o, $p);
	
	
		/**
		 * Returns the names of the own properties of an object. The own properties of an object are those that are defined directly
		 * on that object, and are not inherited from the object's prototype. The properties of an object include both fields (objects) and functions.
		 * @param mixed $o o Object that contains the own properties.
		 * string[]
		 */
		function getOwnPropertyNames($o);
	
	
		/**
		 * Creates an object that has the specified prototype, and that optionally contains specified properties.
		 * @param mixed $o o Object to use as a prototype. May be null
		 * @param PropertyDescriptorMap $properties
		 * mixed
		 */
		function create($o, $properties);
	
	
		/**
		 * Adds a property to an object, or modifies attributes of an existing property.
		 * @param mixed $o o Object on which to add or modify the property. This can be a native JavaScript object (that is, a user-defined object or a built in object) or a DOM object.
		 * @param string $p
		 * @param PropertyDescriptor $attributes
		 * mixed
		 */
		function defineProperty($o, $p, $attributes);
	
	
		/**
		 * Adds one or more properties to an object, and/or modifies attributes of existing properties.
		 * @param mixed $o o Object on which to add or modify the properties. This can be a native JavaScript object or a DOM object.
		 * @param PropertyDescriptorMap $properties
		 * mixed
		 */
		function defineProperties($o, $properties);
	
	
		/**
		 * Prevents the modification of attributes of existing properties, and prevents the addition of new properties.
		 * @param \mixed $o o Object on which to lock the attributes.
		 * \mixed
		 */
		function seal($o);
	
	
		/**
		 * Prevents the modification of existing property attributes and values, and prevents the addition of new properties.
		 * @param \mixed $o o Object on which to lock the attributes.
		 * \mixed
		 */
		function freeze($o);
	
	
		/**
		 * Prevents the addition of new properties to an object.
		 * @param \mixed $o o Object to make non-extensible.
		 * \mixed
		 */
		function preventExtensions($o);
	
	
		/**
		 * Returns true if existing property attributes cannot be modified in an object and new properties cannot be added to the object.
		 * @param mixed $o o Object to test.
		 * boolean
		 */
		function isSealed($o);
	
	
		/**
		 * Returns true if existing property attributes and values cannot be modified in an object, and new properties cannot be added to the object.
		 * @param mixed $o o Object to test.
		 * boolean
		 */
		function isFrozen($o);
	
	
		/**
		 * Returns a value that indicates whether new properties can be added to an object.
		 * @param mixed $o o Object to test.
		 * boolean
		 */
		function isExtensible($o);
	
	
		/**
		 * Returns the names of the enumerable properties and methods of an object.
		 * @param mixed $o o Object that contains the properties and methods. This can be an object that you created or an existing Document Object Model (DOM) object.
		 * string[]
		 */
		function keys($o);
	
	}
}

/**
* Provides functionality common to all JavaScript objects.
*/
namespace {
	/**
	 * @const ObjectConstructor;
	 */
	const Object_=null;
}

/**
* Creates a new function.
*/
namespace {
	/**
	 * @property mixed $prototype
	 * @property number $length
	 * @property mixed $arguments
	 * @property callable $caller
	 */
	interface Function_
	{
	
		/**
		 * Calls the function, substituting the specified object for the this value of the function, and the specified array for the arguments of the function.
		 * @param mixed $thisArg thisArg The object to be used as the this object.
		 * @param mixed $argArray
		 * mixed
		 */
		function apply($thisArg, $argArray);
	
	
		/**
		 * Calls a method of an object, substituting another object for the current object.
		 * @param mixed $thisArg thisArg The object to be used as the current object.
		 * @param mixed[] ...$argArray
		 * mixed
		 */
		function call($thisArg, $argArray);
	
	
		/**
		 * For a given function, creates a bound function that has the same body as the original function.
		 * The this object of the bound function is associated with the specified object, and has the specified initial parameters.
		 * @param mixed $thisArg thisArg An object to which the this keyword can refer inside the new function.
		 * @param mixed[] ...$argArray
		 * mixed
		 */
		function bind($thisArg, $argArray);
	
	}
}

namespace {
	/**
	 * @property callable $prototype Creates a new function.
	 */
	interface FunctionConstructor
	{
	}
}

namespace {
	/**
	 * @const FunctionConstructor;
	 */
	const Function__=null;
}

namespace {
	/**
	 * @property number $length
	 * @property callable $callee
	 */
	interface IArguments
	{
	}
}

namespace {
	/**
	 * @property number $length  Returns the length of a String object.
	 */
	interface String_
	{
	
		/**
		 *  Returns a string representation of a string.
		 * string
		 */
		function toString();
	
	
		/**
		 * Returns the character at the specified index.
		 * @param number $pos pos The zero-based index of the desired character.
		 * string
		 */
		function charAt($pos);
	
	
		/**
		 * Returns the Unicode value of the character at the specified location.
		 * @param number $index index The zero-based index of the desired character. If there is no character at the specified index, NaN is returned.
		 * number
		 */
		function charCodeAt($index);
	
	
		/**
		 * Returns a string that contains the concatenation of two or more strings.
		 * @param string[] ...$strings strings The strings to append to the end of the string.
		 * string
		 */
		function concat($strings);
	
	
		/**
		 * Returns the position of the first occurrence of a substring.
		 * @param string $searchString searchString The substring to search for in the string
		 * @param number $position
		 * number
		 */
		function indexOf($searchString, $position);
	
	
		/**
		 * Returns the last occurrence of a substring in the string.
		 * @param string $searchString searchString The substring to search for.
		 * @param number $position
		 * number
		 */
		function lastIndexOf($searchString, $position);
	
	
		/**
		 * Determines whether two strings are equivalent in the current locale.
		 * @param string $that that String to compare to target string
		 * number
		 */
		function localeCompare($that);
	
	
		/**
		 * Matches a string with a regular expression, and returns an array containing the results of that search.
		 * @param string $regexp regexp A variable name or string literal containing the regular expression pattern and flags.
		 * RegExpMatchArray
		 */
		function match($regexp);
	
	
		/**
		 * Replaces text in a string, using a regular expression or search string.
		 * @param string $searchValue searchValue A string that represents the regular expression.
		 * @param string $replaceValue
		 * string
		 */
		function replace($searchValue, $replaceValue);
	
	
		/**
		 * Finds the first substring match in a regular expression search.
		 * @param string $regexp regexp The regular expression pattern and applicable flags.
		 * number
		 */
		function search($regexp);
	
	
		/**
		 * Returns a section of a string.
		 * If this value is not specified, the substring continues to the end of stringObj.
		 * @param number $start start The index to the beginning of the specified portion of stringObj.
		 * @param number $end
		 * string
		 */
		function slice($start, $end);
	
	
		/**
		 * Split a string into substrings using the specified separator and return them as an array.
		 * @param string $separator separator A string that identifies character or characters to use in separating the string. If omitted, a single-element array containing the entire string is returned.
		 * @param number $limit
		 * string[]
		 */
		function split($separator, $limit);
	
	
		/**
		 * Returns the substring at the specified location within a String object.
		 * If end is omitted, the characters from start through the end of the original string are returned.
		 * @param number $start start The zero-based index number indicating the beginning of the substring.
		 * @param number $end
		 * string
		 */
		function substring($start, $end);
	
	
		/**
		 *  Converts all the alphabetic characters in a string to lowercase.
		 * string
		 */
		function toLowerCase();
	
	
		/**
		 *  Converts all alphabetic characters to lowercase, taking into account the host environment's current locale.
		 * string
		 */
		function toLocaleLowerCase();
	
	
		/**
		 *  Converts all the alphabetic characters in a string to uppercase.
		 * string
		 */
		function toUpperCase();
	
	
		/**
		 *  Returns a string where all alphabetic characters have been converted to uppercase, taking into account the host environment's current locale.
		 * string
		 */
		function toLocaleUpperCase();
	
	
		/**
		 *  Removes the leading and trailing white space and line terminator characters from a string.
		 * string
		 */
		function trim();
	
	
		/**
		 * Gets a substring beginning at the specified location and having the specified length.
		 * @param number $from from The starting position of the desired substring. The index of the first character in the string is zero.
		 * @param number $length
		 * string
		 */
		function substr($from, $length);
	
	
		/**
		 *  Returns the primitive value of the specified object.
		 * string
		 */
		function valueOf();
	
	}
}

namespace {
	/**
	 * @property String $prototype
	 */
	interface StringConstructor
	{
	
		/**
		 * @param number[] ...$codes
		 * string
		 */
		function fromCharCode($codes);
	
	}
}

/**
* Allows manipulation and formatting of text strings and determination and location of substrings within strings.
*/
namespace {
	/**
	 * @const StringConstructor;
	 */
	const String_=null;
}

namespace {
	interface Boolean
	{
	
		/**
		 *  Returns the primitive value of the specified object.
		 * boolean
		 */
		function valueOf();
	
	}
}

namespace {
	/**
	 * @property Boolean $prototype
	 */
	interface BooleanConstructor
	{
	}
}

namespace {
	/**
	 * @const BooleanConstructor;
	 */
	const Boolean_=null;
}

namespace {
	interface Number
	{
	
		/**
		 * Returns a string representation of an object.
		 * @param number $radix radix Specifies a radix for converting numeric values to strings. This value is only used for numbers.
		 * string
		 */
		function toString($radix);
	
	
		/**
		 * Returns a string representing a number in fixed-point notation.
		 * @param number $fractionDigits fractionDigits Number of digits after the decimal point. Must be in the range 0 - 20, inclusive.
		 * string
		 */
		function toFixed($fractionDigits);
	
	
		/**
		 * Returns a string containing a number represented in exponential notation.
		 * @param number $fractionDigits fractionDigits Number of digits after the decimal point. Must be in the range 0 - 20, inclusive.
		 * string
		 */
		function toExponential($fractionDigits);
	
	
		/**
		 * Returns a string containing a number represented either in exponential or fixed-point notation with a specified number of digits.
		 * @param number $precision precision Number of significant digits. Must be in the range 1 - 21, inclusive.
		 * string
		 */
		function toPrecision($precision);
	
	
		/**
		 *  Returns the primitive value of the specified object.
		 * number
		 */
		function valueOf();
	
	}
}

namespace {
	/**
	 * @property Number $prototype
	 * @property number $MAX_VALUE  The largest number that can be represented in JavaScript. Equal to approximately 1.79E+308.
	 * @property number $MIN_VALUE  The closest number to zero that can be represented in JavaScript. Equal to approximately 5.00E-324.
	 * @property number $NaN A value that is not a number. In equality comparisons, NaN does not equal any value, including itself. To test whether a value is equivalent to NaN, use the isNaN function.
	 * @property number $NEGATIVE_INFINITY A value that is less than the largest negative number that can be represented in JavaScript. JavaScript displays NEGATIVE_INFINITY values as -infinity.
	 * @property number $POSITIVE_INFINITY A value greater than the largest number that can be represented in JavaScript. JavaScript displays POSITIVE_INFINITY values as infinity.
	 */
	interface NumberConstructor
	{
	}
}

/** An object that represents a number of any kind. All JavaScript numbers are 64-bit floating-point numbers. */
namespace {
	/**
	 * @const NumberConstructor;
	 */
	const Number_=null;
}

namespace {
	/**
	 * @property string[] $raw
	 */
	interface TemplateStringsArray extends Array_
	{
	}
}

namespace {
	/**
	 * @property number $E  The mathematical constant e. This is Euler's number, the base of natural logarithms.
	 * @property number $LN10  The natural logarithm of 10.
	 * @property number $LN2  The natural logarithm of 2.
	 * @property number $LOG2E  The base-2 logarithm of e.
	 * @property number $LOG10E  The base-10 logarithm of e.
	 * @property number $PI  Pi. This is the ratio of the circumference of a circle to its diameter.
	 * @property number $SQRT1_2  The square root of 0.5, or, equivalently, one divided by the square root of 2.
	 * @property number $SQRT2  The square root of 2.
	 */
	interface Math
	{
	
		/**
		 * Returns the absolute value of a number (the value without regard to whether it is positive or negative).
		 * For example, the absolute value of -5 is the same as the absolute value of 5.
		 * @param number $x x A numeric expression for which the absolute value is needed.
		 * number
		 */
		function abs($x);
	
	
		/**
		 * Returns the arc cosine (or inverse cosine) of a number.
		 * @param number $x x A numeric expression.
		 * number
		 */
		function acos($x);
	
	
		/**
		 * Returns the arcsine of a number.
		 * @param number $x x A numeric expression.
		 * number
		 */
		function asin($x);
	
	
		/**
		 * Returns the arctangent of a number.
		 * @param number $x x A numeric expression for which the arctangent is needed.
		 * number
		 */
		function atan($x);
	
	
		/**
		 * Returns the angle (in radians) from the X axis to a point.
		 * @param number $y y A numeric expression representing the cartesian y-coordinate.
		 * @param number $x
		 * number
		 */
		function atan2($y, $x);
	
	
		/**
		 * Returns the smallest number greater than or equal to its numeric argument.
		 * @param number $x x A numeric expression.
		 * number
		 */
		function ceil($x);
	
	
		/**
		 * Returns the cosine of a number.
		 * @param number $x x A numeric expression that contains an angle measured in radians.
		 * number
		 */
		function cos($x);
	
	
		/**
		 * Returns e (the base of natural logarithms) raised to a power.
		 * @param number $x x A numeric expression representing the power of e.
		 * number
		 */
		function exp($x);
	
	
		/**
		 * Returns the greatest number less than or equal to its numeric argument.
		 * @param number $x x A numeric expression.
		 * number
		 */
		function floor($x);
	
	
		/**
		 * Returns the natural logarithm (base e) of a number.
		 * @param number $x x A numeric expression.
		 * number
		 */
		function log($x);
	
	
		/**
		 * Returns the larger of a set of supplied numeric expressions.
		 * @param number[] ...$values values Numeric expressions to be evaluated.
		 * number
		 */
		function max($values);
	
	
		/**
		 * Returns the smaller of a set of supplied numeric expressions.
		 * @param number[] ...$values values Numeric expressions to be evaluated.
		 * number
		 */
		function min($values);
	
	
		/**
		 * Returns the value of a base expression taken to a specified power.
		 * @param number $x x The base value of the expression.
		 * @param number $y
		 * number
		 */
		function pow($x, $y);
	
	
		/**
		 *  Returns a pseudorandom number between 0 and 1.
		 * number
		 */
		function random();
	
	
		/**
		 * Returns a supplied numeric expression rounded to the nearest number.
		 * @param number $x x The value to be rounded to the nearest number.
		 * number
		 */
		function round($x);
	
	
		/**
		 * Returns the sine of a number.
		 * @param number $x x A numeric expression that contains an angle measured in radians.
		 * number
		 */
		function sin($x);
	
	
		/**
		 * Returns the square root of a number.
		 * @param number $x x A numeric expression.
		 * number
		 */
		function sqrt($x);
	
	
		/**
		 * Returns the tangent of a number.
		 * @param number $x x A numeric expression that contains an angle measured in radians.
		 * number
		 */
		function tan($x);
	
	}
}
/** An intrinsic object that provides basic mathematics functionality and constants. */
namespace {
	/**
	 * @const Math;
	 */
	const Math_=null;
}

/** Enables basic storage and retrieval of dates and times. */
namespace {
	interface Date
	{
	
		/**
		 *  Returns a string representation of a date. The format of the string depends on the locale.
		 * string
		 */
		function toString();
	
	
		/**
		 *  Returns a date as a string value.
		 * string
		 */
		function toDateString();
	
	
		/**
		 *  Returns a time as a string value.
		 * string
		 */
		function toTimeString();
	
	
		/**
		 *  Returns a value as a string value appropriate to the host environment's current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 *  Returns a date as a string value appropriate to the host environment's current locale.
		 * string
		 */
		function toLocaleDateString();
	
	
		/**
		 *  Returns a time as a string value appropriate to the host environment's current locale.
		 * string
		 */
		function toLocaleTimeString();
	
	
		/**
		 *  Returns the stored time value in milliseconds since midnight, January 1, 1970 UTC.
		 * number
		 */
		function valueOf();
	
	
		/**
		 *  Gets the time value in milliseconds.
		 * number
		 */
		function getTime();
	
	
		/**
		 *  Gets the year, using local time.
		 * number
		 */
		function getFullYear();
	
	
		/**
		 *  Gets the year using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCFullYear();
	
	
		/**
		 *  Gets the month, using local time.
		 * number
		 */
		function getMonth();
	
	
		/**
		 *  Gets the month of a Date object using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCMonth();
	
	
		/**
		 *  Gets the day-of-the-month, using local time.
		 * number
		 */
		function getDate();
	
	
		/**
		 *  Gets the day-of-the-month, using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCDate();
	
	
		/**
		 *  Gets the day of the week, using local time.
		 * number
		 */
		function getDay();
	
	
		/**
		 *  Gets the day of the week using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCDay();
	
	
		/**
		 *  Gets the hours in a date, using local time.
		 * number
		 */
		function getHours();
	
	
		/**
		 *  Gets the hours value in a Date object using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCHours();
	
	
		/**
		 *  Gets the minutes of a Date object, using local time.
		 * number
		 */
		function getMinutes();
	
	
		/**
		 *  Gets the minutes of a Date object using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCMinutes();
	
	
		/**
		 *  Gets the seconds of a Date object, using local time.
		 * number
		 */
		function getSeconds();
	
	
		/**
		 *  Gets the seconds of a Date object using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCSeconds();
	
	
		/**
		 *  Gets the milliseconds of a Date, using local time.
		 * number
		 */
		function getMilliseconds();
	
	
		/**
		 *  Gets the milliseconds of a Date object using Universal Coordinated Time (UTC).
		 * number
		 */
		function getUTCMilliseconds();
	
	
		/**
		 *  Gets the difference in minutes between the time on the local computer and Universal Coordinated Time (UTC).
		 * number
		 */
		function getTimezoneOffset();
	
	
		/**
		 * Sets the date and time value in the Date object.
		 * @param number $time time A numeric value representing the number of elapsed milliseconds since midnight, January 1, 1970 GMT.
		 * number
		 */
		function setTime($time);
	
	
		/**
		 * Sets the milliseconds value in the Date object using local time.
		 * @param number $ms ms A numeric value equal to the millisecond value.
		 * number
		 */
		function setMilliseconds($ms);
	
	
		/**
		 * Sets the milliseconds value in the Date object using Universal Coordinated Time (UTC).
		 * @param number $ms ms A numeric value equal to the millisecond value.
		 * number
		 */
		function setUTCMilliseconds($ms);
	
	
		/**
		 * Sets the seconds value in the Date object using local time.
		 * @param number $sec sec A numeric value equal to the seconds value.
		 * @param number $ms
		 * number
		 */
		function setSeconds($sec, $ms);
	
	
		/**
		 * Sets the seconds value in the Date object using Universal Coordinated Time (UTC).
		 * @param number $sec sec A numeric value equal to the seconds value.
		 * @param number $ms
		 * number
		 */
		function setUTCSeconds($sec, $ms);
	
	
		/**
		 * Sets the minutes value in the Date object using local time.
		 * @param number $min min A numeric value equal to the minutes value.
		 * @param number $sec
		 * @param number $ms
		 * number
		 */
		function setMinutes($min, $sec, $ms);
	
	
		/**
		 * Sets the minutes value in the Date object using Universal Coordinated Time (UTC).
		 * @param number $min min A numeric value equal to the minutes value.
		 * @param number $sec
		 * @param number $ms
		 * number
		 */
		function setUTCMinutes($min, $sec, $ms);
	
	
		/**
		 * Sets the hour value in the Date object using local time.
		 * @param number $hours hours A numeric value equal to the hours value.
		 * @param number $min
		 * @param number $sec
		 * @param number $ms
		 * number
		 */
		function setHours($hours, $min, $sec, $ms);
	
	
		/**
		 * Sets the hours value in the Date object using Universal Coordinated Time (UTC).
		 * @param number $hours hours A numeric value equal to the hours value.
		 * @param number $min
		 * @param number $sec
		 * @param number $ms
		 * number
		 */
		function setUTCHours($hours, $min, $sec, $ms);
	
	
		/**
		 * Sets the numeric day-of-the-month value of the Date object using local time.
		 * @param number $date date A numeric value equal to the day of the month.
		 * number
		 */
		function setDate($date);
	
	
		/**
		 * Sets the numeric day of the month in the Date object using Universal Coordinated Time (UTC).
		 * @param number $date date A numeric value equal to the day of the month.
		 * number
		 */
		function setUTCDate($date);
	
	
		/**
		 * Sets the month value in the Date object using local time.
		 * @param number $month month A numeric value equal to the month. The value for January is 0, and other month values follow consecutively.
		 * @param number $date
		 * number
		 */
		function setMonth($month, $date);
	
	
		/**
		 * Sets the month value in the Date object using Universal Coordinated Time (UTC).
		 * @param number $month month A numeric value equal to the month. The value for January is 0, and other month values follow consecutively.
		 * @param number $date
		 * number
		 */
		function setUTCMonth($month, $date);
	
	
		/**
		 * Sets the year of the Date object using local time.
		 * @param number $year year A numeric value for the year.
		 * @param number $month
		 * @param number $date
		 * number
		 */
		function setFullYear($year, $month, $date);
	
	
		/**
		 * Sets the year value in the Date object using Universal Coordinated Time (UTC).
		 * @param number $year year A numeric value equal to the year.
		 * @param number $month
		 * @param number $date
		 * number
		 */
		function setUTCFullYear($year, $month, $date);
	
	
		/**
		 *  Returns a date converted to a string using Universal Coordinated Time (UTC).
		 * string
		 */
		function toUTCString();
	
	
		/**
		 *  Returns a date as a string value in ISO format.
		 * string
		 */
		function toISOString();
	
	
		/**
		 *  Used by the JSON.stringify method to enable the transformation of an object's data for JavaScript Object Notation (JSON) serialization.
		 * @param mixed $key
		 * string
		 */
		function toJSON($key);
	
	}
}

namespace {
	/**
	 * @property Date $prototype
	 */
	interface DateConstructor
	{
	
		/**
		 * Parses a string containing a date, and returns the number of milliseconds between that date and midnight, January 1, 1970.
		 * @param string $s s A date string
		 * number
		 */
		function parse($s);
	
	
		/**
		 * Returns the number of milliseconds between midnight, January 1, 1970 Universal Coordinated Time (UTC) (or GMT) and the specified date.
		 * @param number $year year The full year designation is required for cross-century date accuracy. If year is between 0 and 99 is used, then year is assumed to be 1900 + year.
		 * @param number $month
		 * @param number $date
		 * @param number $hours
		 * @param number $minutes
		 * @param number $seconds
		 * @param number $ms
		 * number
		 */
		function UTC($year, $month, $date, $hours, $minutes, $seconds, $ms);
	
	
		/**
		 * number
		 */
		function now();
	
	}
}

namespace {
	/**
	 * @const DateConstructor;
	 */
	const Date_=null;
}

namespace {
	/**
	 * @property number $index?
	 * @property string $input?
	 */
	interface RegExpMatchArray extends Array_
	{
	}
}

namespace {
	/**
	 * @property number $index
	 * @property string $input
	 */
	interface RegExpExecArray extends Array_
	{
	}
}

namespace {
	/**
	 * @property string $source  Returns a copy of the text of the regular expression pattern. Read-only. The regExp argument is a Regular expression object. It can be a variable name or a literal.
	 * @property boolean $global  Returns a Boolean value indicating the state of the global flag (g) used with a regular expression. Default is false. Read-only.
	 * @property boolean $ignoreCase  Returns a Boolean value indicating the state of the ignoreCase flag (i) used with a regular expression. Default is false. Read-only.
	 * @property boolean $multiline  Returns a Boolean value indicating the state of the multiline flag (m) used with a regular expression. Default is false. Read-only.
	 * @property number $lastIndex
	 */
	interface RegExp
	{
	
		/**
		 * Executes a search on a string using a regular expression pattern, and returns an array containing the results of that search.
		 * @param string $string string The String object or string literal on which to perform the search.
		 * RegExpExecArray
		 */
		function exec($string);
	
	
		/**
		 * Returns a Boolean value that indicates whether or not a pattern exists in a searched string.
		 * @param string $string string String on which to perform the search.
		 * boolean
		 */
		function test($string);
	
	
		/**
		 * RegExp
		 */
		function compile();
	
	}
}

namespace {
	/**
	 * @property RegExp $prototype
	 * @property string $$1
	 * @property string $$2
	 * @property string $$3
	 * @property string $$4
	 * @property string $$5
	 * @property string $$6
	 * @property string $$7
	 * @property string $$8
	 * @property string $$9
	 * @property string $lastMatch
	 */
	interface RegExpConstructor
	{
	}
}

namespace {
	/**
	 * @const RegExpConstructor;
	 */
	const RegExp_=null;
}

namespace {
	/**
	 * @property string $name
	 * @property string $message
	 */
	interface Error
	{
	}
}

namespace {
	/**
	 * @property Error $prototype
	 */
	interface ErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const ErrorConstructor;
	 */
	const Error_=null;
}

namespace {
	interface EvalError extends Error
	{
	}
}

namespace {
	/**
	 * @property EvalError $prototype
	 */
	interface EvalErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const EvalErrorConstructor;
	 */
	const EvalError_=null;
}

namespace {
	interface RangeError extends Error
	{
	}
}

namespace {
	/**
	 * @property RangeError $prototype
	 */
	interface RangeErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const RangeErrorConstructor;
	 */
	const RangeError_=null;
}

namespace {
	interface ReferenceError extends Error
	{
	}
}

namespace {
	/**
	 * @property ReferenceError $prototype
	 */
	interface ReferenceErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const ReferenceErrorConstructor;
	 */
	const ReferenceError_=null;
}

namespace {
	interface SyntaxError extends Error
	{
	}
}

namespace {
	/**
	 * @property SyntaxError $prototype
	 */
	interface SyntaxErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const SyntaxErrorConstructor;
	 */
	const SyntaxError_=null;
}

namespace {
	interface TypeError extends Error
	{
	}
}

namespace {
	/**
	 * @property TypeError $prototype
	 */
	interface TypeErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const TypeErrorConstructor;
	 */
	const TypeError_=null;
}

namespace {
	interface URIError extends Error
	{
	}
}

namespace {
	/**
	 * @property URIError $prototype
	 */
	interface URIErrorConstructor
	{
	}
}

namespace {
	/**
	 * @const URIErrorConstructor;
	 */
	const URIError_=null;
}

namespace {
	interface JSON
	{
	
		/**
		 * Converts a JavaScript value to a JavaScript Object Notation (JSON) string.
		 * @param mixed $value value A JavaScript value, usually an object or array, to be converted.
		 * string
		 */
		function stringify($value);
	
	}
}
/**
* An intrinsic object that provides functions to convert JavaScript values to and from the JavaScript Object Notation (JSON) format.
*/
namespace {
	/**
	 * @const JSON;
	 */
	const JSON_=null;
}


/////////////////////////////
/// ECMAScript Array API (specially handled by compiler)
/////////////////////////////

namespace {
	/**
	 * @property number $length Gets or sets the length of the array. This is a number one higher than the highest element defined in an array.
	 */
	interface Array_
	{
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	
		/**
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Appends new elements to an array, and returns the new length of the array.
		 * @param \T[] ...$items items New elements of the Array.
		 * number
		 */
		function push($items);
	
	
		/**
		 * Removes the last element from an array and returns it.
		 * \T
		 */
		function pop();
	
	
		/**
		 * Combines two or more arrays.
		 * @param \mixed[] ...$items items Additional items to add to the end of array1.
		 * \T[]
		 */
		function concat($items);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * @param string $separator separator A string used to separate one element of an array from the next in the resulting String. If omitted, the array elements are separated with a comma.
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Reverses the elements in an Array.
		 * \T[]
		 */
		function reverse();
	
	
		/**
		 * Removes the first element from an array and returns it.
		 * \T
		 */
		function shift();
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * \T[]
		 */
		function slice($start, $end);
	
	
		/**
		 * Removes elements from an array and, if necessary, inserts new elements in their place, returning the deleted elements.
		 * @param number $start start The zero-based location in the array from which to start removing elements.
		 * \T[]
		 */
		function splice($start);
	
	
		/**
		 * Inserts new elements at the start of an array.
		 * @param \T[] ...$items items  Elements to insert at the start of the Array.
		 * number
		 */
		function unshift($items);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * @param \T $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Returns the index of the last occurrence of a specified value in an array.
		 * @param \T $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	}
}

namespace {
	/**
	 * @property \Array<any> $prototype
	 */
	interface ArrayConstructor
	{
	
		/**
		 * @param mixed $arg
		 * \argisArray<any>
		 */
		function isArray($arg);
	
	}
}

namespace {
	/**
	 * @const ArrayConstructor;
	 */
	const Array__=null;
}

namespace {
	/**
	 * @property boolean $enumerable?
	 * @property boolean $configurable?
	 * @property boolean $writable?
	 * @property \T $value?
	 */
	interface TypedPropertyDescriptor
	{
	}
}



namespace {
	interface PromiseLike
	{
	}
}

namespace {
	/**
	 * @property number $length
	 */
	interface ArrayLike
	{
	}
}


/**
* Represents a raw buffer of binary data, which is used to store data for the
* different typed arrays. ArrayBuffers cannot be read from or written to directly,
* but can be passed to a typed array or DataView Object to interpret the raw
* buffer as needed.
*/
namespace {
	/**
	 * @property number $byteLength Read-only. The length of the ArrayBuffer (in bytes).
	 */
	interface ArrayBuffer
	{
	
		/**
		 * Returns a section of an ArrayBuffer.
		 * @param number $begin
		 * @param number $end
		 * ArrayBuffer
		 */
		function slice($begin, $end);
	
	}
}

namespace {
	/**
	 * @property ArrayBuffer $prototype
	 */
	interface ArrayBufferConstructor
	{
	
		/**
		 * @param mixed $arg
		 * \argisArrayBufferView
		 */
		function isView($arg);
	
	}
}
namespace {
	/**
	 * @const ArrayBufferConstructor;
	 */
	const ArrayBuffer_=null;
}

namespace {
	/**
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 */
	interface ArrayBufferView
	{
	}
}

namespace {
	/**
	 * @property ArrayBuffer $buffer
	 * @property number $byteLength
	 * @property number $byteOffset
	 */
	interface DataView
	{
	
		/**
		 * Gets the Float32 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * @param boolean $littleEndian
		 * number
		 */
		function getFloat32($byteOffset, $littleEndian);
	
	
		/**
		 * Gets the Float64 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * @param boolean $littleEndian
		 * number
		 */
		function getFloat64($byteOffset, $littleEndian);
	
	
		/**
		 * Gets the Int8 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * number
		 */
		function getInt8($byteOffset);
	
	
		/**
		 * Gets the Int16 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * @param boolean $littleEndian
		 * number
		 */
		function getInt16($byteOffset, $littleEndian);
	
	
		/**
		 * Gets the Int32 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * @param boolean $littleEndian
		 * number
		 */
		function getInt32($byteOffset, $littleEndian);
	
	
		/**
		 * Gets the Uint8 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * number
		 */
		function getUint8($byteOffset);
	
	
		/**
		 * Gets the Uint16 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * @param boolean $littleEndian
		 * number
		 */
		function getUint16($byteOffset, $littleEndian);
	
	
		/**
		 * Gets the Uint32 value at the specified byte offset from the start of the view. There is
		 * no alignment constraint; multi-byte values may be fetched from any offset.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be retrieved.
		 * @param boolean $littleEndian
		 * number
		 */
		function getUint32($byteOffset, $littleEndian);
	
	
		/**
		 * Stores an Float32 value at the specified byte offset from the start of the view.
		 * otherwise a little-endian value should be written.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * @param boolean $littleEndian
		 * void
		 */
		function setFloat32($byteOffset, $value, $littleEndian);
	
	
		/**
		 * Stores an Float64 value at the specified byte offset from the start of the view.
		 * otherwise a little-endian value should be written.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * @param boolean $littleEndian
		 * void
		 */
		function setFloat64($byteOffset, $value, $littleEndian);
	
	
		/**
		 * Stores an Int8 value at the specified byte offset from the start of the view.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * void
		 */
		function setInt8($byteOffset, $value);
	
	
		/**
		 * Stores an Int16 value at the specified byte offset from the start of the view.
		 * otherwise a little-endian value should be written.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * @param boolean $littleEndian
		 * void
		 */
		function setInt16($byteOffset, $value, $littleEndian);
	
	
		/**
		 * Stores an Int32 value at the specified byte offset from the start of the view.
		 * otherwise a little-endian value should be written.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * @param boolean $littleEndian
		 * void
		 */
		function setInt32($byteOffset, $value, $littleEndian);
	
	
		/**
		 * Stores an Uint8 value at the specified byte offset from the start of the view.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * void
		 */
		function setUint8($byteOffset, $value);
	
	
		/**
		 * Stores an Uint16 value at the specified byte offset from the start of the view.
		 * otherwise a little-endian value should be written.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * @param boolean $littleEndian
		 * void
		 */
		function setUint16($byteOffset, $value, $littleEndian);
	
	
		/**
		 * Stores an Uint32 value at the specified byte offset from the start of the view.
		 * otherwise a little-endian value should be written.
		 * @param number $byteOffset byteOffset The place in the buffer at which the value should be set.
		 * @param number $value
		 * @param boolean $littleEndian
		 * void
		 */
		function setUint32($byteOffset, $value, $littleEndian);
	
	}
}

namespace {
	interface DataViewConstructor
	{
	}
}
namespace {
	/**
	 * @const DataViewConstructor;
	 */
	const DataView_=null;
}

/**
* A typed array of 8-bit integer values. The contents are initialized to 0. If the requested
* number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Int8Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Int8Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Int8Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Int8Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Int8Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Int8Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Int8Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}
namespace {
	/**
	 * @property Int8Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Int8ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Int8Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Int8ArrayConstructor;
	 */
	const Int8Array_=null;
}

/**
* A typed array of 8-bit unsigned integer values. The contents are initialized to 0. If the
* requested number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Uint8Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Uint8Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Uint8Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Uint8Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Uint8Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Uint8Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Uint8Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Uint8Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Uint8ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Uint8Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Uint8ArrayConstructor;
	 */
	const Uint8Array_=null;
}

/**
* A typed array of 8-bit unsigned integer (clamped) values. The contents are initialized to 0.
* If the requested number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Uint8ClampedArray
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Uint8ClampedArray
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Uint8ClampedArray
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Uint8ClampedArray
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Uint8ClampedArray
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Uint8ClampedArray view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Uint8ClampedArray
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Uint8ClampedArray $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Uint8ClampedArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Uint8ClampedArray
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Uint8ClampedArrayConstructor;
	 */
	const Uint8ClampedArray_=null;
}

/**
* A typed array of 16-bit signed integer values. The contents are initialized to 0. If the
* requested number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Int16Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Int16Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Int16Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Int16Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Int16Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Int16Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Int16Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Int16Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Int16ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Int16Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Int16ArrayConstructor;
	 */
	const Int16Array_=null;
}

/**
* A typed array of 16-bit unsigned integer values. The contents are initialized to 0. If the
* requested number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Uint16Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Uint16Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Uint16Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Uint16Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Uint16Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Uint16Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Uint16Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Uint16Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Uint16ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Uint16Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Uint16ArrayConstructor;
	 */
	const Uint16Array_=null;
}
/**
* A typed array of 32-bit signed integer values. The contents are initialized to 0. If the
* requested number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Int32Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Int32Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Int32Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Int32Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Int32Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Int32Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Int32Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Int32Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Int32ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Int32Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Int32ArrayConstructor;
	 */
	const Int32Array_=null;
}

/**
* A typed array of 32-bit unsigned integer values. The contents are initialized to 0. If the
* requested number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Uint32Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Uint32Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Uint32Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Uint32Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Uint32Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Uint32Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Uint32Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Uint32Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Uint32ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Uint32Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Uint32ArrayConstructor;
	 */
	const Uint32Array_=null;
}

/**
* A typed array of 32-bit float values. The contents are initialized to 0. If the requested number
* of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Float32Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Float32Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Float32Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Float32Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Float32Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Float32Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Float32Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Float32Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Float32ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Float32Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Float32ArrayConstructor;
	 */
	const Float32Array_=null;
}

/**
* A typed array of 64-bit float values. The contents are initialized to 0. If the requested
* number of bytes could not be allocated an exception is raised.
*/
namespace {
	/**
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 * @property ArrayBuffer $buffer The ArrayBuffer instance referenced by the array.
	 * @property number $byteLength The length in bytes of the array.
	 * @property number $byteOffset The offset in bytes of the array.
	 * @property number $length The length of the array.
	 */
	interface Float64Array
	{
	
		/**
		 * Returns the this object after copying a section of the array identified by start and end
		 * to the same array starting at position target
		 * length of the array.
		 * is treated as length+end.
		 * @param number $target target If target is negative, it is treated as length+target where length is the
		 * @param number $start
		 * @param number $end
		 * Float64Array
		 */
		function copyWithin($target, $start, $end);
	
	
		/**
		 * Returns the this object after filling the section identified by start and end with value
		 * length+start where length is the length of the array.
		 * length+end.
		 * @param number $value value value to fill array section with
		 * @param number $start
		 * @param number $end
		 * Float64Array
		 */
		function fill($value, $start, $end);
	
	
		/**
		 * Returns the index of the first occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function indexOf($searchElement, $fromIndex);
	
	
		/**
		 * Adds all the elements of an array separated by the specified separator string.
		 * resulting String. If omitted, the array elements are separated with a comma.
		 * @param string $separator separator A string used to separate one element of an array from the next in the
		 * string
		 */
		function join($separator);
	
	
		/**
		 * Returns the index of the last occurrence of a value in an array.
		 * search starts at index 0.
		 * @param number $searchElement searchElement The value to locate in the array.
		 * @param number $fromIndex
		 * number
		 */
		function lastIndexOf($searchElement, $fromIndex);
	
	
		/**
		 * Reverses the elements in an Array.
		 * Float64Array
		 */
		function reverse();
	
	
		/**
		 * Sets a value or an array of values.
		 * @param number $index index The index of the location to set.
		 * @param number $value
		 * void
		 */
		function set($index, $value);
	
	
		/**
		 * Returns a section of an array.
		 * @param number $start start The beginning of the specified portion of the array.
		 * @param number $end
		 * Float64Array
		 */
		function slice($start, $end);
	
	
		/**
		 * Gets a new Float64Array view of the ArrayBuffer store for this array, referencing the elements
		 * at begin, inclusive, up to end, exclusive.
		 * @param number $begin begin The index of the beginning of the array.
		 * @param number $end
		 * Float64Array
		 */
		function subarray($begin, $end);
	
	
		/**
		 * Converts a number to a string by using the current locale.
		 * string
		 */
		function toLocaleString();
	
	
		/**
		 * Returns a string representation of an array.
		 * string
		 */
		function toString();
	
	}
}

namespace {
	/**
	 * @property Float64Array $prototype
	 * @property number $BYTES_PER_ELEMENT The size in bytes of each element in the array.
	 */
	interface Float64ArrayConstructor
	{
	
		/**
		 * Returns a new array from a set of elements.
		 * @param number[] ...$items items A set of elements to include in the new array object.
		 * Float64Array
		 */
		function of($items);
	
	}
}
namespace {
	/**
	 * @const Float64ArrayConstructor;
	 */
	const Float64Array_=null;
}
/////////////////////////////
/// ECMAScript Internationalization API
/////////////////////////////

namespace Intl {
	/**
	 * @property string $usage?
	 * @property string $localeMatcher?
	 * @property boolean $numeric?
	 * @property string $caseFirst?
	 * @property string $sensitivity?
	 * @property boolean $ignorePunctuation?
	 */
	interface CollatorOptions
	{
	}

	/**
	 * @property string $locale
	 * @property string $usage
	 * @property string $sensitivity
	 * @property boolean $ignorePunctuation
	 * @property string $collation
	 * @property string $caseFirst
	 * @property boolean $numeric
	 */
	interface ResolvedCollatorOptions
	{
	}

	interface Collator
	{
	
		/**
		 * @param string $x
		 * @param string $y
		 * number
		 */
		function compare($x, $y);
	
	
		/**
		 * ResolvedCollatorOptions
		 */
		function resolvedOptions();
	
	}

	/**
	 * @property string $localeMatcher?
	 * @property string $style?
	 * @property string $currency?
	 * @property string $currencyDisplay?
	 * @property boolean $useGrouping?
	 * @property number $minimumIntegerDigits?
	 * @property number $minimumFractionDigits?
	 * @property number $maximumFractionDigits?
	 * @property number $minimumSignificantDigits?
	 * @property number $maximumSignificantDigits?
	 */
	interface NumberFormatOptions
	{
	}

	/**
	 * @property string $locale
	 * @property string $numberingSystem
	 * @property string $style
	 * @property string $currency?
	 * @property string $currencyDisplay?
	 * @property number $minimumIntegerDigits
	 * @property number $minimumFractionDigits
	 * @property number $maximumFractionDigits
	 * @property number $minimumSignificantDigits?
	 * @property number $maximumSignificantDigits?
	 * @property boolean $useGrouping
	 */
	interface ResolvedNumberFormatOptions
	{
	}

	interface NumberFormat
	{
	
		/**
		 * @param number $value
		 * string
		 */
		function format($value);
	
	
		/**
		 * ResolvedNumberFormatOptions
		 */
		function resolvedOptions();
	
	}

	/**
	 * @property string $localeMatcher?
	 * @property string $weekday?
	 * @property string $era?
	 * @property string $year?
	 * @property string $month?
	 * @property string $day?
	 * @property string $hour?
	 * @property string $minute?
	 * @property string $second?
	 * @property string $timeZoneName?
	 * @property string $formatMatcher?
	 * @property boolean $hour12?
	 * @property string $timeZone?
	 */
	interface DateTimeFormatOptions
	{
	}

	/**
	 * @property string $locale
	 * @property string $calendar
	 * @property string $numberingSystem
	 * @property string $timeZone
	 * @property boolean $hour12?
	 * @property string $weekday?
	 * @property string $era?
	 * @property string $year?
	 * @property string $month?
	 * @property string $day?
	 * @property string $hour?
	 * @property string $minute?
	 * @property string $second?
	 * @property string $timeZoneName?
	 */
	interface ResolvedDateTimeFormatOptions
	{
	}

	interface DateTimeFormat
	{
	
		/**
		 * @param \Date|number $date
		 * string
		 */
		function format($date);
	
	
		/**
		 * ResolvedDateTimeFormatOptions
		 */
		function resolvedOptions();
	
	}
}

namespace {
	interface String__
	{
	
		/**
		 * Determines whether two strings are equivalent in the current locale.
		 * @param string $that that String to compare to target string
		 * @param string[] $locales
		 * @param \Intl\CollatorOptions $options
		 * number
		 */
		function localeCompare($that, $locales, $options);
	
	}
}

namespace {
	interface Number__
	{
	
		/**
		 * Converts a number to a string by using the current or specified locale.
		 * @param string[] $locales locales An array of locale strings that contain one or more language or locale tags. If you include more than one locale string, list them in descending order of priority so that the first entry is the preferred locale. If you omit this parameter, the default locale of the JavaScript runtime is used.
		 * @param \Intl\NumberFormatOptions $options
		 * string
		 */
		function toLocaleString($locales, $options);
	
	}
}

namespace {
	interface Date__
	{
	
		/**
		 * Converts a date and time to a string by using the current or specified locale.
		 * @param string[] $locales locales An array of locale strings that contain one or more language or locale tags. If you include more than one locale string, list them in descending order of priority so that the first entry is the preferred locale. If you omit this parameter, the default locale of the JavaScript runtime is used.
		 * @param \Intl\DateTimeFormatOptions $options
		 * string
		 */
		function toLocaleString($locales, $options);
	
	
		/**
		 * Converts a date to a string by using the current or specified locale.
		 * @param string[] $locales locales An array of locale strings that contain one or more language or locale tags. If you include more than one locale string, list them in descending order of priority so that the first entry is the preferred locale. If you omit this parameter, the default locale of the JavaScript runtime is used.
		 * @param \Intl\DateTimeFormatOptions $options
		 * string
		 */
		function toLocaleDateString($locales, $options);
	
	
		/**
		 * Converts a time to a string by using the current or specified locale.
		 * @param string[] $locale locale Locale tag. If you omit this parameter, the default locale of the JavaScript runtime is used.
		 * @param \Intl\DateTimeFormatOptions $options
		 * string
		 */
		function toLocaleTimeString($locale, $options);
	
	}
}


/////////////////////////////
/// IE DOM APIs
/////////////////////////////

namespace {
	/**
	 * @property string $name?
	 */
	interface Algorithm
	{
	}
}

namespace {
	/**
	 * @property string $attributeName?
	 * @property string $attributeValue?
	 */
	interface AriaRequestEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property string $data?
	 * @property string $dataType?
	 */
	interface ClipboardEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property string $commandName?
	 * @property string $detail?
	 */
	interface CommandEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property string $data?
	 */
	interface CompositionEventInit extends UIEventInit
	{
	}
}

namespace {
	/**
	 * @property string[] $arrayOfDomainStrings?
	 */
	interface ConfirmSiteSpecificExceptionsInformation extends ExceptionInformation
	{
	}
}

namespace {
	/**
	 * @property mixed $detail?
	 */
	interface CustomEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property number $x?
	 * @property number $y?
	 * @property number $z?
	 */
	interface DeviceAccelerationDict
	{
	}
}

namespace {
	/**
	 * @property number $alpha?
	 * @property number $beta?
	 * @property number $gamma?
	 */
	interface DeviceRotationRateDict
	{
	}
}

namespace {
	/**
	 * @property boolean $bubbles?
	 * @property boolean $cancelable?
	 */
	interface EventInit
	{
	}
}

namespace {
	/**
	 * @property string $domain?
	 */
	interface ExceptionInformation
	{
	}
}

namespace {
	/**
	 * @property EventTarget $relatedTarget?
	 */
	interface FocusEventInit extends UIEventInit
	{
	}
}

namespace {
	/**
	 * @property string $oldURL?
	 */
	interface HashChangeEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property string $name?
	 */
	interface KeyAlgorithm
	{
	}
}

namespace {
	/**
	 * @property string $key?
	 * @property number $location?
	 * @property boolean $repeat?
	 */
	interface KeyboardEventInit extends SharedKeyboardAndMouseEventInit
	{
	}
}

namespace {
	/**
	 * @property number $screenX?
	 * @property number $screenY?
	 * @property number $clientX?
	 * @property number $clientY?
	 * @property number $button?
	 * @property number $buttons?
	 * @property EventTarget $relatedTarget?
	 */
	interface MouseEventInit extends SharedKeyboardAndMouseEventInit
	{
	}
}

namespace {
	/**
	 * @property number $contentX?
	 * @property number $contentY?
	 * @property string $viewportX?
	 * @property string $viewportY?
	 * @property number $scaleFactor?
	 * @property string $animate?
	 */
	interface MsZoomToOptions
	{
	}
}

namespace {
	/**
	 * @property boolean $childList?
	 * @property boolean $attributes?
	 * @property boolean $characterData?
	 * @property boolean $subtree?
	 * @property boolean $attributeOldValue?
	 * @property boolean $characterDataOldValue?
	 * @property string[] $attributeFilter?
	 */
	interface MutationObserverInit
	{
	}
}

namespace {
	/**
	 * @property boolean $oneTimeOnly?
	 */
	interface ObjectURLOptions
	{
	}
}

namespace {
	/**
	 * @property number $pointerId?
	 * @property number $width?
	 * @property number $height?
	 * @property number $pressure?
	 * @property number $tiltX?
	 * @property number $tiltY?
	 * @property string $pointerType?
	 * @property boolean $isPrimary?
	 */
	interface PointerEventInit extends MouseEventInit
	{
	}
}

namespace {
	/**
	 * @property boolean $enableHighAccuracy?
	 * @property number $timeout?
	 * @property number $maximumAge?
	 */
	interface PositionOptions
	{
	}
}

namespace {
	/**
	 * @property boolean $ctrlKey?
	 * @property boolean $shiftKey?
	 * @property boolean $altKey?
	 * @property boolean $metaKey?
	 * @property boolean $keyModifierStateAltGraph?
	 * @property boolean $keyModifierStateCapsLock?
	 * @property boolean $keyModifierStateFn?
	 * @property boolean $keyModifierStateFnLock?
	 * @property boolean $keyModifierStateHyper?
	 * @property boolean $keyModifierStateNumLock?
	 * @property boolean $keyModifierStateOS?
	 * @property boolean $keyModifierStateScrollLock?
	 * @property boolean $keyModifierStateSuper?
	 * @property boolean $keyModifierStateSymbol?
	 * @property boolean $keyModifierStateSymbolLock?
	 */
	interface SharedKeyboardAndMouseEventInit extends UIEventInit
	{
	}
}

namespace {
	/**
	 * @property string $siteName?
	 * @property string $explanationString?
	 * @property string $detailURI?
	 */
	interface StoreExceptionsInformation extends ExceptionInformation
	{
	}
}

namespace {
	/**
	 * @property string[] $arrayOfDomainStrings?
	 */
	interface StoreSiteSpecificExceptionsInformation extends StoreExceptionsInformation
	{
	}
}

namespace {
	/**
	 * @property Window $view?
	 * @property number $detail?
	 */
	interface UIEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property boolean $alpha?
	 * @property boolean $depth?
	 * @property boolean $stencil?
	 * @property boolean $antialias?
	 * @property boolean $premultipliedAlpha?
	 * @property boolean $preserveDrawingBuffer?
	 */
	interface WebGLContextAttributes
	{
	}
}

namespace {
	/**
	 * @property string $statusMessage?
	 */
	interface WebGLContextEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property number $deltaX?
	 * @property number $deltaY?
	 * @property number $deltaZ?
	 * @property number $deltaMode?
	 */
	interface WheelEventInit extends MouseEventInit
	{
	}
}

namespace {
	interface EventListener
	{
	}
}

namespace {
	/**
	 * @property number $VERTEX_ATTRIB_ARRAY_DIVISOR_ANGLE
	 */
	interface ANGLE_instanced_arrays
	{
	
		/**
		 * @param number $mode
		 * @param number $first
		 * @param number $count
		 * @param number $primcount
		 * void
		 */
		function drawArraysInstancedANGLE($mode, $first, $count, $primcount);
	
	
		/**
		 * @param number $mode
		 * @param number $count
		 * @param number $type
		 * @param number $offset
		 * @param number $primcount
		 * void
		 */
		function drawElementsInstancedANGLE($mode, $count, $type, $offset, $primcount);
	
	
		/**
		 * @param number $index
		 * @param number $divisor
		 * void
		 */
		function vertexAttribDivisorANGLE($index, $divisor);
	
	}
}

namespace {
		class ANGLE_instanced_arrays_
		{
			/** @var ANGLE_instanced_arrays */
			public $prototype;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_DIVISOR_ANGLE;
		
		}
}

namespace {
	/**
	 * @property number $fftSize
	 * @property number $frequencyBinCount
	 * @property number $maxDecibels
	 * @property number $minDecibels
	 * @property number $smoothingTimeConstant
	 */
	interface AnalyserNode extends AudioNode
	{
	
		/**
		 * @param Uint8Array $array
		 * void
		 */
		function getByteFrequencyData($array);
	
	
		/**
		 * @param Uint8Array $array
		 * void
		 */
		function getByteTimeDomainData($array);
	
	
		/**
		 * @param Float32Array $array
		 * void
		 */
		function getFloatFrequencyData($array);
	
	
		/**
		 * @param Float32Array $array
		 * void
		 */
		function getFloatTimeDomainData($array);
	
	}
}

namespace {
		class AnalyserNode_
		{
			/** @var AnalyserNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $animationName
	 * @property number $elapsedTime
	 */
	interface AnimationEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param string $animationNameArg
		 * @param number $elapsedTimeArg
		 * void
		 */
		function initAnimationEvent($typeArg, $canBubbleArg, $cancelableArg, $animationNameArg, $elapsedTimeArg);
	
	}
}

namespace {
		class AnimationEvent_
		{
			/** @var AnimationEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $status
	 * @property number $CHECKING
	 * @property number $DOWNLOADING
	 * @property number $IDLE
	 * @property number $OBSOLETE
	 * @property number $UNCACHED
	 * @property number $UPDATEREADY
	 */
	interface ApplicationCache extends EventTarget
	{
	
		/**
		 * void
		 */
		function abort();
	
	
		/**
		 * void
		 */
		function swapCache();
	
	
		/**
		 * void
		 */
		function update();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class ApplicationCache_
		{
			/** @var ApplicationCache */
			public $prototype;
		
			/** @var number */
			public $CHECKING;
		
			/** @var number */
			public $DOWNLOADING;
		
			/** @var number */
			public $IDLE;
		
			/** @var number */
			public $OBSOLETE;
		
			/** @var number */
			public $UNCACHED;
		
			/** @var number */
			public $UPDATEREADY;
		
		}
}

namespace {
	/**
	 * @property string $attributeName
	 * @property string $attributeValue
	 */
	interface AriaRequestEvent extends Event
	{
	}
}

namespace {
		class AriaRequestEvent_
		{
			/** @var AriaRequestEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $name
	 * @property Element $ownerElement
	 * @property boolean $specified
	 * @property string $value
	 */
	interface Attr extends Node
	{
	}
}

namespace {
		class Attr_
		{
			/** @var Attr */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $duration
	 * @property number $length
	 * @property number $numberOfChannels
	 * @property number $sampleRate
	 */
	interface AudioBuffer
	{
	
		/**
		 * @param number $channel
		 * Float32Array
		 */
		function getChannelData($channel);
	
	}
}

namespace {
		class AudioBuffer_
		{
			/** @var AudioBuffer */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioBuffer $buffer
	 * @property boolean $loop
	 * @property number $loopEnd
	 * @property number $loopStart
	 * @property AudioParam $playbackRate
	 */
	interface AudioBufferSourceNode extends AudioNode
	{
	
		/**
		 * @param number $when
		 * @param number $offset
		 * @param number $duration
		 * void
		 */
		function start($when, $offset, $duration);
	
	
		/**
		 * @param number $when
		 * void
		 */
		function stop($when);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class AudioBufferSourceNode_
		{
			/** @var AudioBufferSourceNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $currentTime
	 * @property AudioDestinationNode $destination
	 * @property AudioListener $listener
	 * @property number $sampleRate
	 * @property string $state
	 */
	interface AudioContext extends EventTarget
	{
	
		/**
		 * AnalyserNode
		 */
		function createAnalyser();
	
	
		/**
		 * BiquadFilterNode
		 */
		function createBiquadFilter();
	
	
		/**
		 * @param number $numberOfChannels
		 * @param number $length
		 * @param number $sampleRate
		 * AudioBuffer
		 */
		function createBuffer($numberOfChannels, $length, $sampleRate);
	
	
		/**
		 * AudioBufferSourceNode
		 */
		function createBufferSource();
	
	
		/**
		 * @param number $numberOfInputs
		 * ChannelMergerNode
		 */
		function createChannelMerger($numberOfInputs);
	
	
		/**
		 * @param number $numberOfOutputs
		 * ChannelSplitterNode
		 */
		function createChannelSplitter($numberOfOutputs);
	
	
		/**
		 * ConvolverNode
		 */
		function createConvolver();
	
	
		/**
		 * @param number $maxDelayTime
		 * DelayNode
		 */
		function createDelay($maxDelayTime);
	
	
		/**
		 * DynamicsCompressorNode
		 */
		function createDynamicsCompressor();
	
	
		/**
		 * GainNode
		 */
		function createGain();
	
	
		/**
		 * @param HTMLMediaElement $mediaElement
		 * MediaElementAudioSourceNode
		 */
		function createMediaElementSource($mediaElement);
	
	
		/**
		 * OscillatorNode
		 */
		function createOscillator();
	
	
		/**
		 * PannerNode
		 */
		function createPanner();
	
	
		/**
		 * @param Float32Array $real
		 * @param Float32Array $imag
		 * PeriodicWave
		 */
		function createPeriodicWave($real, $imag);
	
	
		/**
		 * @param number $bufferSize
		 * @param number $numberOfInputChannels
		 * @param number $numberOfOutputChannels
		 * ScriptProcessorNode
		 */
		function createScriptProcessor($bufferSize, $numberOfInputChannels, $numberOfOutputChannels);
	
	
		/**
		 * StereoPannerNode
		 */
		function createStereoPanner();
	
	
		/**
		 * WaveShaperNode
		 */
		function createWaveShaper();
	
	
		/**
		 * @param ArrayBuffer $audioData
		 * @param DecodeSuccessCallback $successCallback
		 * @param DecodeErrorCallback $errorCallback
		 * void
		 */
		function decodeAudioData($audioData, $successCallback, $errorCallback);
	
	}
}

namespace {
		class AudioContext_
		{
			/** @var AudioContext */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $maxChannelCount
	 */
	interface AudioDestinationNode extends AudioNode
	{
	}
}

namespace {
		class AudioDestinationNode_
		{
			/** @var AudioDestinationNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $dopplerFactor
	 * @property number $speedOfSound
	 */
	interface AudioListener
	{
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * @param number $xUp
		 * @param number $yUp
		 * @param number $zUp
		 * void
		 */
		function setOrientation($x, $y, $z, $xUp, $yUp, $zUp);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function setPosition($x, $y, $z);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function setVelocity($x, $y, $z);
	
	}
}

namespace {
		class AudioListener_
		{
			/** @var AudioListener */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $channelCount
	 * @property string $channelCountMode
	 * @property string $channelInterpretation
	 * @property AudioContext $context
	 * @property number $numberOfInputs
	 * @property number $numberOfOutputs
	 */
	interface AudioNode extends EventTarget
	{
	
		/**
		 * @param AudioNode $destination
		 * @param number $output
		 * @param number $input
		 * void
		 */
		function connect($destination, $output, $input);
	
	
		/**
		 * @param number $output
		 * void
		 */
		function disconnect($output);
	
	}
}

namespace {
		class AudioNode_
		{
			/** @var AudioNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $defaultValue
	 * @property number $value
	 */
	interface AudioParam
	{
	
		/**
		 * @param number $startTime
		 * void
		 */
		function cancelScheduledValues($startTime);
	
	
		/**
		 * @param number $value
		 * @param number $endTime
		 * void
		 */
		function exponentialRampToValueAtTime($value, $endTime);
	
	
		/**
		 * @param number $value
		 * @param number $endTime
		 * void
		 */
		function linearRampToValueAtTime($value, $endTime);
	
	
		/**
		 * @param number $target
		 * @param number $startTime
		 * @param number $timeConstant
		 * void
		 */
		function setTargetAtTime($target, $startTime, $timeConstant);
	
	
		/**
		 * @param number $value
		 * @param number $startTime
		 * void
		 */
		function setValueAtTime($value, $startTime);
	
	
		/**
		 * @param Float32Array $values
		 * @param number $startTime
		 * @param number $duration
		 * void
		 */
		function setValueCurveAtTime($values, $startTime, $duration);
	
	}
}

namespace {
		class AudioParam_
		{
			/** @var AudioParam */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioBuffer $inputBuffer
	 * @property AudioBuffer $outputBuffer
	 * @property number $playbackTime
	 */
	interface AudioProcessingEvent extends Event
	{
	}
}

namespace {
		class AudioProcessingEvent_
		{
			/** @var AudioProcessingEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $enabled
	 * @property string $id
	 * @property string $kind
	 * @property string $label
	 * @property string $language
	 * @property SourceBuffer $sourceBuffer
	 */
	interface AudioTrack
	{
	}
}

namespace {
		class AudioTrack_
		{
			/** @var AudioTrack */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface AudioTrackList extends EventTarget
	{
	
		/**
		 * @param string $id
		 * AudioTrack
		 */
		function getTrackById($id);
	
	
		/**
		 * @param number $index
		 * AudioTrack
		 */
		function item($index);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class AudioTrackList_
		{
			/** @var AudioTrackList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $visible
	 */
	interface BarProp
	{
	}
}

namespace {
		class BarProp_
		{
			/** @var BarProp */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $returnValue
	 */
	interface BeforeUnloadEvent extends Event
	{
	}
}

namespace {
		class BeforeUnloadEvent_
		{
			/** @var BeforeUnloadEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioParam $Q
	 * @property AudioParam $detune
	 * @property AudioParam $frequency
	 * @property AudioParam $gain
	 * @property string $type
	 */
	interface BiquadFilterNode extends AudioNode
	{
	
		/**
		 * @param Float32Array $frequencyHz
		 * @param Float32Array $magResponse
		 * @param Float32Array $phaseResponse
		 * void
		 */
		function getFrequencyResponse($frequencyHz, $magResponse, $phaseResponse);
	
	}
}

namespace {
		class BiquadFilterNode_
		{
			/** @var BiquadFilterNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $size
	 * @property string $type
	 */
	interface Blob
	{
	
		/**
		 * void
		 */
		function msClose();
	
	
		/**
		 * mixed
		 */
		function msDetachStream();
	
	
		/**
		 * @param number $start
		 * @param number $end
		 * @param string $contentType
		 * Blob
		 */
		function slice($start, $end, $contentType);
	
	}
}

namespace {
		class Blob_
		{
			/** @var Blob */
			public $prototype;
		
		}
}

namespace {
	interface CDATASection extends Text
	{
	}
}

namespace {
		class CDATASection_
		{
			/** @var CDATASection */
			public $prototype;
		
		}
}

namespace {
	interface CSS
	{
	
		/**
		 * @param string $property
		 * @param string $value
		 * boolean
		 */
		function supports($property, $value);
	
	}
}
namespace {
	/**
	 * @const CSS;
	 */
	const CSS_=null;
}

namespace {
	/**
	 * @property string $conditionText
	 */
	interface CSSConditionRule extends CSSGroupingRule
	{
	}
}

namespace {
		class CSSConditionRule_
		{
			/** @var CSSConditionRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property CSSStyleDeclaration $style
	 */
	interface CSSFontFaceRule extends CSSRule
	{
	}
}

namespace {
		class CSSFontFaceRule_
		{
			/** @var CSSFontFaceRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property CSSRuleList $cssRules
	 */
	interface CSSGroupingRule extends CSSRule
	{
	
		/**
		 * @param number $index
		 * void
		 */
		function deleteRule($index);
	
	
		/**
		 * @param string $rule
		 * @param number $index
		 * number
		 */
		function insertRule($rule, $index);
	
	}
}

namespace {
		class CSSGroupingRule_
		{
			/** @var CSSGroupingRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $href
	 * @property MediaList $media
	 * @property CSSStyleSheet $styleSheet
	 */
	interface CSSImportRule extends CSSRule
	{
	}
}

namespace {
		class CSSImportRule_
		{
			/** @var CSSImportRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $keyText
	 * @property CSSStyleDeclaration $style
	 */
	interface CSSKeyframeRule extends CSSRule
	{
	}
}

namespace {
		class CSSKeyframeRule_
		{
			/** @var CSSKeyframeRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property CSSRuleList $cssRules
	 * @property string $name
	 */
	interface CSSKeyframesRule extends CSSRule
	{
	
		/**
		 * @param string $rule
		 * void
		 */
		function appendRule($rule);
	
	
		/**
		 * @param string $rule
		 * void
		 */
		function deleteRule($rule);
	
	
		/**
		 * @param string $rule
		 * CSSKeyframeRule
		 */
		function findRule($rule);
	
	}
}

namespace {
		class CSSKeyframesRule_
		{
			/** @var CSSKeyframesRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property MediaList $media
	 */
	interface CSSMediaRule extends CSSConditionRule
	{
	}
}

namespace {
		class CSSMediaRule_
		{
			/** @var CSSMediaRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $namespaceURI
	 * @property string $prefix
	 */
	interface CSSNamespaceRule extends CSSRule
	{
	}
}

namespace {
		class CSSNamespaceRule_
		{
			/** @var CSSNamespaceRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $pseudoClass
	 * @property string $selector
	 * @property string $selectorText
	 * @property CSSStyleDeclaration $style
	 */
	interface CSSPageRule extends CSSRule
	{
	}
}

namespace {
		class CSSPageRule_
		{
			/** @var CSSPageRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $cssText
	 * @property CSSRule $parentRule
	 * @property CSSStyleSheet $parentStyleSheet
	 * @property number $type
	 * @property number $CHARSET_RULE
	 * @property number $FONT_FACE_RULE
	 * @property number $IMPORT_RULE
	 * @property number $KEYFRAMES_RULE
	 * @property number $KEYFRAME_RULE
	 * @property number $MEDIA_RULE
	 * @property number $NAMESPACE_RULE
	 * @property number $PAGE_RULE
	 * @property number $STYLE_RULE
	 * @property number $SUPPORTS_RULE
	 * @property number $UNKNOWN_RULE
	 * @property number $VIEWPORT_RULE
	 */
	interface CSSRule
	{
	}
}

namespace {
		class CSSRule_
		{
			/** @var CSSRule */
			public $prototype;
		
			/** @var number */
			public $CHARSET_RULE;
		
			/** @var number */
			public $FONT_FACE_RULE;
		
			/** @var number */
			public $IMPORT_RULE;
		
			/** @var number */
			public $KEYFRAMES_RULE;
		
			/** @var number */
			public $KEYFRAME_RULE;
		
			/** @var number */
			public $MEDIA_RULE;
		
			/** @var number */
			public $NAMESPACE_RULE;
		
			/** @var number */
			public $PAGE_RULE;
		
			/** @var number */
			public $STYLE_RULE;
		
			/** @var number */
			public $SUPPORTS_RULE;
		
			/** @var number */
			public $UNKNOWN_RULE;
		
			/** @var number */
			public $VIEWPORT_RULE;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface CSSRuleList
	{
	
		/**
		 * @param number $index
		 * CSSRule
		 */
		function item($index);
	
	}
}

namespace {
		class CSSRuleList_
		{
			/** @var CSSRuleList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $alignContent
	 * @property string $alignItems
	 * @property string $alignSelf
	 * @property string $alignmentBaseline
	 * @property string $animation
	 * @property string $animationDelay
	 * @property string $animationDirection
	 * @property string $animationDuration
	 * @property string $animationFillMode
	 * @property string $animationIterationCount
	 * @property string $animationName
	 * @property string $animationPlayState
	 * @property string $animationTimingFunction
	 * @property string $backfaceVisibility
	 * @property string $background
	 * @property string $backgroundAttachment
	 * @property string $backgroundClip
	 * @property string $backgroundColor
	 * @property string $backgroundImage
	 * @property string $backgroundOrigin
	 * @property string $backgroundPosition
	 * @property string $backgroundPositionX
	 * @property string $backgroundPositionY
	 * @property string $backgroundRepeat
	 * @property string $backgroundSize
	 * @property string $baselineShift
	 * @property string $border
	 * @property string $borderBottom
	 * @property string $borderBottomColor
	 * @property string $borderBottomLeftRadius
	 * @property string $borderBottomRightRadius
	 * @property string $borderBottomStyle
	 * @property string $borderBottomWidth
	 * @property string $borderCollapse
	 * @property string $borderColor
	 * @property string $borderImage
	 * @property string $borderImageOutset
	 * @property string $borderImageRepeat
	 * @property string $borderImageSlice
	 * @property string $borderImageSource
	 * @property string $borderImageWidth
	 * @property string $borderLeft
	 * @property string $borderLeftColor
	 * @property string $borderLeftStyle
	 * @property string $borderLeftWidth
	 * @property string $borderRadius
	 * @property string $borderRight
	 * @property string $borderRightColor
	 * @property string $borderRightStyle
	 * @property string $borderRightWidth
	 * @property string $borderSpacing
	 * @property string $borderStyle
	 * @property string $borderTop
	 * @property string $borderTopColor
	 * @property string $borderTopLeftRadius
	 * @property string $borderTopRightRadius
	 * @property string $borderTopStyle
	 * @property string $borderTopWidth
	 * @property string $borderWidth
	 * @property string $bottom
	 * @property string $boxShadow
	 * @property string $boxSizing
	 * @property string $breakAfter
	 * @property string $breakBefore
	 * @property string $breakInside
	 * @property string $captionSide
	 * @property string $clear
	 * @property string $clip
	 * @property string $clipPath
	 * @property string $clipRule
	 * @property string $color
	 * @property string $colorInterpolationFilters
	 * @property mixed $columnCount
	 * @property string $columnFill
	 * @property mixed $columnGap
	 * @property string $columnRule
	 * @property mixed $columnRuleColor
	 * @property string $columnRuleStyle
	 * @property mixed $columnRuleWidth
	 * @property string $columnSpan
	 * @property mixed $columnWidth
	 * @property string $columns
	 * @property string $content
	 * @property string $counterIncrement
	 * @property string $counterReset
	 * @property string $cssFloat
	 * @property string $cssText
	 * @property string $cursor
	 * @property string $direction
	 * @property string $display
	 * @property string $dominantBaseline
	 * @property string $emptyCells
	 * @property string $enableBackground
	 * @property string $fill
	 * @property string $fillOpacity
	 * @property string $fillRule
	 * @property string $filter
	 * @property string $flex
	 * @property string $flexBasis
	 * @property string $flexDirection
	 * @property string $flexFlow
	 * @property string $flexGrow
	 * @property string $flexShrink
	 * @property string $flexWrap
	 * @property string $floodColor
	 * @property string $floodOpacity
	 * @property string $font
	 * @property string $fontFamily
	 * @property string $fontFeatureSettings
	 * @property string $fontSize
	 * @property string $fontSizeAdjust
	 * @property string $fontStretch
	 * @property string $fontStyle
	 * @property string $fontVariant
	 * @property string $fontWeight
	 * @property string $glyphOrientationHorizontal
	 * @property string $glyphOrientationVertical
	 * @property string $height
	 * @property string $imeMode
	 * @property string $justifyContent
	 * @property string $kerning
	 * @property string $left
	 * @property number $length
	 * @property string $letterSpacing
	 * @property string $lightingColor
	 * @property string $lineHeight
	 * @property string $listStyle
	 * @property string $listStyleImage
	 * @property string $listStylePosition
	 * @property string $listStyleType
	 * @property string $margin
	 * @property string $marginBottom
	 * @property string $marginLeft
	 * @property string $marginRight
	 * @property string $marginTop
	 * @property string $marker
	 * @property string $markerEnd
	 * @property string $markerMid
	 * @property string $markerStart
	 * @property string $mask
	 * @property string $maxHeight
	 * @property string $maxWidth
	 * @property string $minHeight
	 * @property string $minWidth
	 * @property string $msContentZoomChaining
	 * @property string $msContentZoomLimit
	 * @property mixed $msContentZoomLimitMax
	 * @property mixed $msContentZoomLimitMin
	 * @property string $msContentZoomSnap
	 * @property string $msContentZoomSnapPoints
	 * @property string $msContentZoomSnapType
	 * @property string $msContentZooming
	 * @property string $msFlowFrom
	 * @property string $msFlowInto
	 * @property string $msFontFeatureSettings
	 * @property mixed $msGridColumn
	 * @property string $msGridColumnAlign
	 * @property mixed $msGridColumnSpan
	 * @property string $msGridColumns
	 * @property mixed $msGridRow
	 * @property string $msGridRowAlign
	 * @property mixed $msGridRowSpan
	 * @property string $msGridRows
	 * @property string $msHighContrastAdjust
	 * @property string $msHyphenateLimitChars
	 * @property mixed $msHyphenateLimitLines
	 * @property mixed $msHyphenateLimitZone
	 * @property string $msHyphens
	 * @property string $msImeAlign
	 * @property string $msOverflowStyle
	 * @property string $msScrollChaining
	 * @property string $msScrollLimit
	 * @property mixed $msScrollLimitXMax
	 * @property mixed $msScrollLimitXMin
	 * @property mixed $msScrollLimitYMax
	 * @property mixed $msScrollLimitYMin
	 * @property string $msScrollRails
	 * @property string $msScrollSnapPointsX
	 * @property string $msScrollSnapPointsY
	 * @property string $msScrollSnapType
	 * @property string $msScrollSnapX
	 * @property string $msScrollSnapY
	 * @property string $msScrollTranslation
	 * @property string $msTextCombineHorizontal
	 * @property mixed $msTextSizeAdjust
	 * @property string $msTouchAction
	 * @property string $msTouchSelect
	 * @property string $msUserSelect
	 * @property string $msWrapFlow
	 * @property mixed $msWrapMargin
	 * @property string $msWrapThrough
	 * @property string $opacity
	 * @property string $order
	 * @property string $orphans
	 * @property string $outline
	 * @property string $outlineColor
	 * @property string $outlineStyle
	 * @property string $outlineWidth
	 * @property string $overflow
	 * @property string $overflowX
	 * @property string $overflowY
	 * @property string $padding
	 * @property string $paddingBottom
	 * @property string $paddingLeft
	 * @property string $paddingRight
	 * @property string $paddingTop
	 * @property string $pageBreakAfter
	 * @property string $pageBreakBefore
	 * @property string $pageBreakInside
	 * @property CSSRule $parentRule
	 * @property string $perspective
	 * @property string $perspectiveOrigin
	 * @property string $pointerEvents
	 * @property string $position
	 * @property string $quotes
	 * @property string $right
	 * @property string $rubyAlign
	 * @property string $rubyOverhang
	 * @property string $rubyPosition
	 * @property string $stopColor
	 * @property string $stopOpacity
	 * @property string $stroke
	 * @property string $strokeDasharray
	 * @property string $strokeDashoffset
	 * @property string $strokeLinecap
	 * @property string $strokeLinejoin
	 * @property string $strokeMiterlimit
	 * @property string $strokeOpacity
	 * @property string $strokeWidth
	 * @property string $tableLayout
	 * @property string $textAlign
	 * @property string $textAlignLast
	 * @property string $textAnchor
	 * @property string $textDecoration
	 * @property string $textFillColor
	 * @property string $textIndent
	 * @property string $textJustify
	 * @property string $textKashida
	 * @property string $textKashidaSpace
	 * @property string $textOverflow
	 * @property string $textShadow
	 * @property string $textTransform
	 * @property string $textUnderlinePosition
	 * @property string $top
	 * @property string $touchAction
	 * @property string $transform
	 * @property string $transformOrigin
	 * @property string $transformStyle
	 * @property string $transition
	 * @property string $transitionDelay
	 * @property string $transitionDuration
	 * @property string $transitionProperty
	 * @property string $transitionTimingFunction
	 * @property string $unicodeBidi
	 * @property string $verticalAlign
	 * @property string $visibility
	 * @property string $webkitAlignContent
	 * @property string $webkitAlignItems
	 * @property string $webkitAlignSelf
	 * @property string $webkitAnimation
	 * @property string $webkitAnimationDelay
	 * @property string $webkitAnimationDirection
	 * @property string $webkitAnimationDuration
	 * @property string $webkitAnimationFillMode
	 * @property string $webkitAnimationIterationCount
	 * @property string $webkitAnimationName
	 * @property string $webkitAnimationPlayState
	 * @property string $webkitAnimationTimingFunction
	 * @property string $webkitAppearance
	 * @property string $webkitBackfaceVisibility
	 * @property string $webkitBackground
	 * @property string $webkitBackgroundAttachment
	 * @property string $webkitBackgroundClip
	 * @property string $webkitBackgroundColor
	 * @property string $webkitBackgroundImage
	 * @property string $webkitBackgroundOrigin
	 * @property string $webkitBackgroundPosition
	 * @property string $webkitBackgroundPositionX
	 * @property string $webkitBackgroundPositionY
	 * @property string $webkitBackgroundRepeat
	 * @property string $webkitBackgroundSize
	 * @property string $webkitBorderBottomLeftRadius
	 * @property string $webkitBorderBottomRightRadius
	 * @property string $webkitBorderImage
	 * @property string $webkitBorderImageOutset
	 * @property string $webkitBorderImageRepeat
	 * @property string $webkitBorderImageSlice
	 * @property string $webkitBorderImageSource
	 * @property string $webkitBorderImageWidth
	 * @property string $webkitBorderRadius
	 * @property string $webkitBorderTopLeftRadius
	 * @property string $webkitBorderTopRightRadius
	 * @property string $webkitBoxAlign
	 * @property string $webkitBoxDirection
	 * @property string $webkitBoxFlex
	 * @property string $webkitBoxOrdinalGroup
	 * @property string $webkitBoxOrient
	 * @property string $webkitBoxPack
	 * @property string $webkitBoxSizing
	 * @property string $webkitColumnBreakAfter
	 * @property string $webkitColumnBreakBefore
	 * @property string $webkitColumnBreakInside
	 * @property mixed $webkitColumnCount
	 * @property mixed $webkitColumnGap
	 * @property string $webkitColumnRule
	 * @property mixed $webkitColumnRuleColor
	 * @property string $webkitColumnRuleStyle
	 * @property mixed $webkitColumnRuleWidth
	 * @property string $webkitColumnSpan
	 * @property mixed $webkitColumnWidth
	 * @property string $webkitColumns
	 * @property string $webkitFilter
	 * @property string $webkitFlex
	 * @property string $webkitFlexBasis
	 * @property string $webkitFlexDirection
	 * @property string $webkitFlexFlow
	 * @property string $webkitFlexGrow
	 * @property string $webkitFlexShrink
	 * @property string $webkitFlexWrap
	 * @property string $webkitJustifyContent
	 * @property string $webkitOrder
	 * @property string $webkitPerspective
	 * @property string $webkitPerspectiveOrigin
	 * @property string $webkitTapHighlightColor
	 * @property string $webkitTextFillColor
	 * @property mixed $webkitTextSizeAdjust
	 * @property string $webkitTransform
	 * @property string $webkitTransformOrigin
	 * @property string $webkitTransformStyle
	 * @property string $webkitTransition
	 * @property string $webkitTransitionDelay
	 * @property string $webkitTransitionDuration
	 * @property string $webkitTransitionProperty
	 * @property string $webkitTransitionTimingFunction
	 * @property string $webkitUserSelect
	 * @property string $webkitWritingMode
	 * @property string $whiteSpace
	 * @property string $widows
	 * @property string $width
	 * @property string $wordBreak
	 * @property string $wordSpacing
	 * @property string $wordWrap
	 * @property string $writingMode
	 * @property string $zIndex
	 * @property string $zoom
	 */
	interface CSSStyleDeclaration
	{
	
		/**
		 * @param string $propertyName
		 * string
		 */
		function getPropertyPriority($propertyName);
	
	
		/**
		 * @param string $propertyName
		 * string
		 */
		function getPropertyValue($propertyName);
	
	
		/**
		 * @param number $index
		 * string
		 */
		function item($index);
	
	
		/**
		 * @param string $propertyName
		 * string
		 */
		function removeProperty($propertyName);
	
	
		/**
		 * @param string $propertyName
		 * @param string $value
		 * @param string $priority
		 * void
		 */
		function setProperty($propertyName, $value, $priority);
	
	}
}

namespace {
		class CSSStyleDeclaration_
		{
			/** @var CSSStyleDeclaration */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $readOnly
	 * @property string $selectorText
	 * @property CSSStyleDeclaration $style
	 */
	interface CSSStyleRule extends CSSRule
	{
	}
}

namespace {
		class CSSStyleRule_
		{
			/** @var CSSStyleRule */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property CSSRuleList $cssRules
	 * @property string $cssText
	 * @property string $href
	 * @property string $id
	 * @property StyleSheetList $imports
	 * @property boolean $isAlternate
	 * @property boolean $isPrefAlternate
	 * @property CSSRule $ownerRule
	 * @property Element $owningElement
	 * @property StyleSheetPageList $pages
	 * @property boolean $readOnly
	 * @property CSSRuleList $rules
	 */
	interface CSSStyleSheet extends StyleSheet
	{
	
		/**
		 * @param string $bstrURL
		 * @param number $lIndex
		 * number
		 */
		function addImport($bstrURL, $lIndex);
	
	
		/**
		 * @param string $bstrSelector
		 * @param string $bstrStyle
		 * @param number $lIndex
		 * number
		 */
		function addPageRule($bstrSelector, $bstrStyle, $lIndex);
	
	
		/**
		 * @param string $bstrSelector
		 * @param string $bstrStyle
		 * @param number $lIndex
		 * number
		 */
		function addRule($bstrSelector, $bstrStyle, $lIndex);
	
	
		/**
		 * @param number $index
		 * void
		 */
		function deleteRule($index);
	
	
		/**
		 * @param string $rule
		 * @param number $index
		 * number
		 */
		function insertRule($rule, $index);
	
	
		/**
		 * @param number $lIndex
		 * void
		 */
		function removeImport($lIndex);
	
	
		/**
		 * @param number $lIndex
		 * void
		 */
		function removeRule($lIndex);
	
	}
}

namespace {
		class CSSStyleSheet_
		{
			/** @var CSSStyleSheet */
			public $prototype;
		
		}
}

namespace {
	interface CSSSupportsRule extends CSSConditionRule
	{
	}
}

namespace {
		class CSSSupportsRule_
		{
			/** @var CSSSupportsRule */
			public $prototype;
		
		}
}

namespace {
	interface CanvasGradient
	{
	
		/**
		 * @param number $offset
		 * @param string $color
		 * void
		 */
		function addColorStop($offset, $color);
	
	}
}

namespace {
		class CanvasGradient_
		{
			/** @var CanvasGradient */
			public $prototype;
		
		}
}

namespace {
	interface CanvasPattern
	{
	}
}

namespace {
		class CanvasPattern_
		{
			/** @var CanvasPattern */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property HTMLCanvasElement $canvas
	 * @property string|CanvasGradient|CanvasPattern $fillStyle
	 * @property string $font
	 * @property number $globalAlpha
	 * @property string $globalCompositeOperation
	 * @property string $lineCap
	 * @property number $lineDashOffset
	 * @property string $lineJoin
	 * @property number $lineWidth
	 * @property number $miterLimit
	 * @property string $msFillRule
	 * @property boolean $msImageSmoothingEnabled
	 * @property number $shadowBlur
	 * @property string $shadowColor
	 * @property number $shadowOffsetX
	 * @property number $shadowOffsetY
	 * @property string|CanvasGradient|CanvasPattern $strokeStyle
	 * @property string $textAlign
	 * @property string $textBaseline
	 */
	interface CanvasRenderingContext2D
	{
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $radius
		 * @param number $startAngle
		 * @param number $endAngle
		 * @param boolean $anticlockwise
		 * void
		 */
		function arc($x, $y, $radius, $startAngle, $endAngle, $anticlockwise);
	
	
		/**
		 * @param number $x1
		 * @param number $y1
		 * @param number $x2
		 * @param number $y2
		 * @param number $radius
		 * void
		 */
		function arcTo($x1, $y1, $x2, $y2, $radius);
	
	
		/**
		 * void
		 */
		function beginPath();
	
	
		/**
		 * @param number $cp1x
		 * @param number $cp1y
		 * @param number $cp2x
		 * @param number $cp2y
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function bezierCurveTo($cp1x, $cp1y, $cp2x, $cp2y, $x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $w
		 * @param number $h
		 * void
		 */
		function clearRect($x, $y, $w, $h);
	
	
		/**
		 * @param string $fillRule
		 * void
		 */
		function clip($fillRule);
	
	
		/**
		 * void
		 */
		function closePath();
	
	
		/**
		 * @param number|ImageData $imageDataOrSw
		 * @param number $sh
		 * ImageData
		 */
		function createImageData($imageDataOrSw, $sh);
	
	
		/**
		 * @param number $x0
		 * @param number $y0
		 * @param number $x1
		 * @param number $y1
		 * CanvasGradient
		 */
		function createLinearGradient($x0, $y0, $x1, $y1);
	
	
		/**
		 * @param HTMLImageElement|HTMLCanvasElement|HTMLVideoElement $image
		 * @param string $repetition
		 * CanvasPattern
		 */
		function createPattern($image, $repetition);
	
	
		/**
		 * @param number $x0
		 * @param number $y0
		 * @param number $r0
		 * @param number $x1
		 * @param number $y1
		 * @param number $r1
		 * CanvasGradient
		 */
		function createRadialGradient($x0, $y0, $r0, $x1, $y1, $r1);
	
	
		/**
		 * @param HTMLImageElement|HTMLCanvasElement|HTMLVideoElement $image
		 * @param number $offsetX
		 * @param number $offsetY
		 * @param number $width
		 * @param number $height
		 * @param number $canvasOffsetX
		 * @param number $canvasOffsetY
		 * @param number $canvasImageWidth
		 * @param number $canvasImageHeight
		 * void
		 */
		function drawImage($image, $offsetX, $offsetY, $width, $height, $canvasOffsetX, $canvasOffsetY, $canvasImageWidth, $canvasImageHeight);
	
	
		/**
		 * @param string $fillRule
		 * void
		 */
		function fill($fillRule);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $w
		 * @param number $h
		 * void
		 */
		function fillRect($x, $y, $w, $h);
	
	
		/**
		 * @param string $text
		 * @param number $x
		 * @param number $y
		 * @param number $maxWidth
		 * void
		 */
		function fillText($text, $x, $y, $maxWidth);
	
	
		/**
		 * @param number $sx
		 * @param number $sy
		 * @param number $sw
		 * @param number $sh
		 * ImageData
		 */
		function getImageData($sx, $sy, $sw, $sh);
	
	
		/**
		 * number[]
		 */
		function getLineDash();
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param string $fillRule
		 * boolean
		 */
		function isPointInPath($x, $y, $fillRule);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function lineTo($x, $y);
	
	
		/**
		 * @param string $text
		 * TextMetrics
		 */
		function measureText($text);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function moveTo($x, $y);
	
	
		/**
		 * @param ImageData $imagedata
		 * @param number $dx
		 * @param number $dy
		 * @param number $dirtyX
		 * @param number $dirtyY
		 * @param number $dirtyWidth
		 * @param number $dirtyHeight
		 * void
		 */
		function putImageData($imagedata, $dx, $dy, $dirtyX, $dirtyY, $dirtyWidth, $dirtyHeight);
	
	
		/**
		 * @param number $cpx
		 * @param number $cpy
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function quadraticCurveTo($cpx, $cpy, $x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $w
		 * @param number $h
		 * void
		 */
		function rect($x, $y, $w, $h);
	
	
		/**
		 * void
		 */
		function restore();
	
	
		/**
		 * @param number $angle
		 * void
		 */
		function rotate($angle);
	
	
		/**
		 * void
		 */
		function save();
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function scale($x, $y);
	
	
		/**
		 * @param number[] $segments
		 * void
		 */
		function setLineDash($segments);
	
	
		/**
		 * @param number $m11
		 * @param number $m12
		 * @param number $m21
		 * @param number $m22
		 * @param number $dx
		 * @param number $dy
		 * void
		 */
		function setTransform($m11, $m12, $m21, $m22, $dx, $dy);
	
	
		/**
		 * void
		 */
		function stroke();
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $w
		 * @param number $h
		 * void
		 */
		function strokeRect($x, $y, $w, $h);
	
	
		/**
		 * @param string $text
		 * @param number $x
		 * @param number $y
		 * @param number $maxWidth
		 * void
		 */
		function strokeText($text, $x, $y, $maxWidth);
	
	
		/**
		 * @param number $m11
		 * @param number $m12
		 * @param number $m21
		 * @param number $m22
		 * @param number $dx
		 * @param number $dy
		 * void
		 */
		function transform($m11, $m12, $m21, $m22, $dx, $dy);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function translate($x, $y);
	
	}
}

namespace {
		class CanvasRenderingContext2D_
		{
			/** @var CanvasRenderingContext2D */
			public $prototype;
		
		}
}

namespace {
	interface ChannelMergerNode extends AudioNode
	{
	}
}

namespace {
		class ChannelMergerNode_
		{
			/** @var ChannelMergerNode */
			public $prototype;
		
		}
}

namespace {
	interface ChannelSplitterNode extends AudioNode
	{
	}
}

namespace {
		class ChannelSplitterNode_
		{
			/** @var ChannelSplitterNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $data
	 * @property number $length
	 */
	interface CharacterData extends \Node, ChildNode
	{
	
		/**
		 * @param string $arg
		 * void
		 */
		function appendData($arg);
	
	
		/**
		 * @param number $offset
		 * @param number $count
		 * void
		 */
		function deleteData($offset, $count);
	
	
		/**
		 * @param number $offset
		 * @param string $arg
		 * void
		 */
		function insertData($offset, $arg);
	
	
		/**
		 * @param number $offset
		 * @param number $count
		 * @param string $arg
		 * void
		 */
		function replaceData($offset, $count, $arg);
	
	
		/**
		 * @param number $offset
		 * @param number $count
		 * string
		 */
		function substringData($offset, $count);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class CharacterData_
		{
			/** @var CharacterData */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $bottom
	 * @property number $height
	 * @property number $left
	 * @property number $right
	 * @property number $top
	 * @property number $width
	 */
	interface ClientRect
	{
	}
}

namespace {
		class ClientRect_
		{
			/** @var ClientRect */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface ClientRectList
	{
	
		/**
		 * @param number $index
		 * ClientRect
		 */
		function item($index);
	
	}
}

namespace {
		class ClientRectList_
		{
			/** @var ClientRectList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DataTransfer $clipboardData
	 */
	interface ClipboardEvent extends Event
	{
	}
}

namespace {
		class ClipboardEvent_
		{
			/** @var ClipboardEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $code
	 * @property string $reason
	 * @property boolean $wasClean
	 */
	interface CloseEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param boolean $wasCleanArg
		 * @param number $codeArg
		 * @param string $reasonArg
		 * void
		 */
		function initCloseEvent($typeArg, $canBubbleArg, $cancelableArg, $wasCleanArg, $codeArg, $reasonArg);
	
	}
}

namespace {
		class CloseEvent_
		{
			/** @var CloseEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $commandName
	 * @property string $detail
	 */
	interface CommandEvent extends Event
	{
	}
}

namespace {
		class CommandEvent_
		{
			/** @var CommandEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $text
	 */
	interface Comment extends CharacterData
	{
	}
}

namespace {
		class Comment_
		{
			/** @var Comment */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $data
	 * @property string $locale
	 */
	interface CompositionEvent extends UIEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param string $dataArg
		 * @param string $locale
		 * void
		 */
		function initCompositionEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $dataArg, $locale);
	
	}
}

namespace {
		class CompositionEvent_
		{
			/** @var CompositionEvent */
			public $prototype;
		
		}
}

namespace {
	interface Console
	{
	
		/**
		 * @param boolean $test
		 * @param string $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function assert($test, $message, $optionalParams);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param string $countTitle
		 * void
		 */
		function count($countTitle);
	
	
		/**
		 * @param string $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function debug($message, $optionalParams);
	
	
		/**
		 * @param mixed $value
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function dir($value, $optionalParams);
	
	
		/**
		 * @param mixed $value
		 * void
		 */
		function dirxml($value);
	
	
		/**
		 * @param mixed $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function error($message, $optionalParams);
	
	
		/**
		 * @param string $groupTitle
		 * void
		 */
		function group($groupTitle);
	
	
		/**
		 * @param string $groupTitle
		 * void
		 */
		function groupCollapsed($groupTitle);
	
	
		/**
		 * void
		 */
		function groupEnd();
	
	
		/**
		 * @param mixed $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function info($message, $optionalParams);
	
	
		/**
		 * @param mixed $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function log($message, $optionalParams);
	
	
		/**
		 * @param Element $element
		 * boolean
		 */
		function msIsIndependentlyComposed($element);
	
	
		/**
		 * @param string $reportName
		 * void
		 */
		function profile($reportName);
	
	
		/**
		 * void
		 */
		function profileEnd();
	
	
		/**
		 * @param Element $element
		 * void
		 */
		function select($element);
	
	
		/**
		 * @param string $timerName
		 * void
		 */
		function time($timerName);
	
	
		/**
		 * @param string $timerName
		 * void
		 */
		function timeEnd($timerName);
	
	
		/**
		 * @param mixed $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function trace($message, $optionalParams);
	
	
		/**
		 * @param mixed $message
		 * @param mixed[] ...$optionalParams
		 * void
		 */
		function warn($message, $optionalParams);
	
	}
}

namespace {
		class Console_
		{
			/** @var Console */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioBuffer $buffer
	 * @property boolean $normalize
	 */
	interface ConvolverNode extends AudioNode
	{
	}
}

namespace {
		class ConvolverNode_
		{
			/** @var ConvolverNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $accuracy
	 * @property number $altitude
	 * @property number $altitudeAccuracy
	 * @property number $heading
	 * @property number $latitude
	 * @property number $longitude
	 * @property number $speed
	 */
	interface Coordinates
	{
	}
}

namespace {
		class Coordinates_
		{
			/** @var Coordinates */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SubtleCrypto $subtle
	 */
	interface Crypto extends \Object, RandomSource
	{
	}
}

namespace {
		class Crypto_
		{
			/** @var Crypto */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property KeyAlgorithm $algorithm
	 * @property boolean $extractable
	 * @property string $type
	 * @property string[] $usages
	 */
	interface CryptoKey
	{
	}
}

namespace {
		class CryptoKey_
		{
			/** @var CryptoKey */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property CryptoKey $privateKey
	 * @property CryptoKey $publicKey
	 */
	interface CryptoKeyPair
	{
	}
}

namespace {
		class CryptoKeyPair_
		{
			/** @var CryptoKeyPair */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $detail
	 */
	interface CustomEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param mixed $detailArg
		 * void
		 */
		function initCustomEvent($typeArg, $canBubbleArg, $cancelableArg, $detailArg);
	
	}
}

namespace {
		class CustomEvent_
		{
			/** @var CustomEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $name
	 */
	interface DOMError
	{
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class DOMError_
		{
			/** @var DOMError */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $code
	 * @property string $message
	 * @property string $name
	 * @property number $ABORT_ERR
	 * @property number $DATA_CLONE_ERR
	 * @property number $DOMSTRING_SIZE_ERR
	 * @property number $HIERARCHY_REQUEST_ERR
	 * @property number $INDEX_SIZE_ERR
	 * @property number $INUSE_ATTRIBUTE_ERR
	 * @property number $INVALID_ACCESS_ERR
	 * @property number $INVALID_CHARACTER_ERR
	 * @property number $INVALID_MODIFICATION_ERR
	 * @property number $INVALID_NODE_TYPE_ERR
	 * @property number $INVALID_STATE_ERR
	 * @property number $NAMESPACE_ERR
	 * @property number $NETWORK_ERR
	 * @property number $NOT_FOUND_ERR
	 * @property number $NOT_SUPPORTED_ERR
	 * @property number $NO_DATA_ALLOWED_ERR
	 * @property number $NO_MODIFICATION_ALLOWED_ERR
	 * @property number $PARSE_ERR
	 * @property number $QUOTA_EXCEEDED_ERR
	 * @property number $SECURITY_ERR
	 * @property number $SERIALIZE_ERR
	 * @property number $SYNTAX_ERR
	 * @property number $TIMEOUT_ERR
	 * @property number $TYPE_MISMATCH_ERR
	 * @property number $URL_MISMATCH_ERR
	 * @property number $VALIDATION_ERR
	 * @property number $WRONG_DOCUMENT_ERR
	 */
	interface DOMException
	{
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class DOMException_
		{
			/** @var DOMException */
			public $prototype;
		
			/** @var number */
			public $ABORT_ERR;
		
			/** @var number */
			public $DATA_CLONE_ERR;
		
			/** @var number */
			public $DOMSTRING_SIZE_ERR;
		
			/** @var number */
			public $HIERARCHY_REQUEST_ERR;
		
			/** @var number */
			public $INDEX_SIZE_ERR;
		
			/** @var number */
			public $INUSE_ATTRIBUTE_ERR;
		
			/** @var number */
			public $INVALID_ACCESS_ERR;
		
			/** @var number */
			public $INVALID_CHARACTER_ERR;
		
			/** @var number */
			public $INVALID_MODIFICATION_ERR;
		
			/** @var number */
			public $INVALID_NODE_TYPE_ERR;
		
			/** @var number */
			public $INVALID_STATE_ERR;
		
			/** @var number */
			public $NAMESPACE_ERR;
		
			/** @var number */
			public $NETWORK_ERR;
		
			/** @var number */
			public $NOT_FOUND_ERR;
		
			/** @var number */
			public $NOT_SUPPORTED_ERR;
		
			/** @var number */
			public $NO_DATA_ALLOWED_ERR;
		
			/** @var number */
			public $NO_MODIFICATION_ALLOWED_ERR;
		
			/** @var number */
			public $PARSE_ERR;
		
			/** @var number */
			public $QUOTA_EXCEEDED_ERR;
		
			/** @var number */
			public $SECURITY_ERR;
		
			/** @var number */
			public $SERIALIZE_ERR;
		
			/** @var number */
			public $SYNTAX_ERR;
		
			/** @var number */
			public $TIMEOUT_ERR;
		
			/** @var number */
			public $TYPE_MISMATCH_ERR;
		
			/** @var number */
			public $URL_MISMATCH_ERR;
		
			/** @var number */
			public $VALIDATION_ERR;
		
			/** @var number */
			public $WRONG_DOCUMENT_ERR;
		
		}
}

namespace {
	interface DOMImplementation
	{
	
		/**
		 * @param string $namespaceURI
		 * @param string $qualifiedName
		 * @param DocumentType $doctype
		 * Document
		 */
		function createDocument($namespaceURI, $qualifiedName, $doctype);
	
	
		/**
		 * @param string $qualifiedName
		 * @param string $publicId
		 * @param string $systemId
		 * DocumentType
		 */
		function createDocumentType($qualifiedName, $publicId, $systemId);
	
	
		/**
		 * @param string $title
		 * Document
		 */
		function createHTMLDocument($title);
	
	
		/**
		 * @param string $feature
		 * @param string $version
		 * boolean
		 */
		function hasFeature($feature, $version);
	
	}
}

namespace {
		class DOMImplementation_
		{
			/** @var DOMImplementation */
			public $prototype;
		
		}
}

namespace {
	interface DOMParser
	{
	
		/**
		 * @param string $source
		 * @param string $mimeType
		 * Document
		 */
		function parseFromString($source, $mimeType);
	
	}
}

namespace {
		class DOMParser_
		{
			/** @var DOMParser */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $value
	 */
	interface DOMSettableTokenList extends DOMTokenList
	{
	}
}

namespace {
		class DOMSettableTokenList_
		{
			/** @var DOMSettableTokenList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface DOMStringList
	{
	
		/**
		 * @param string $str
		 * boolean
		 */
		function contains($str);
	
	
		/**
		 * @param number $index
		 * string
		 */
		function item($index);
	
	}
}

namespace {
		class DOMStringList_
		{
			/** @var DOMStringList */
			public $prototype;
		
		}
}

namespace {
	interface DOMStringMap
	{
	}
}

namespace {
		class DOMStringMap_
		{
			/** @var DOMStringMap */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface DOMTokenList
	{
	
		/**
		 * @param string[] ...$token
		 * void
		 */
		function add($token);
	
	
		/**
		 * @param string $token
		 * boolean
		 */
		function contains($token);
	
	
		/**
		 * @param number $index
		 * string
		 */
		function item($index);
	
	
		/**
		 * @param string[] ...$token
		 * void
		 */
		function remove($token);
	
	
		/**
		 * string
		 */
		function toString();
	
	
		/**
		 * @param string $token
		 * @param boolean $force
		 * boolean
		 */
		function toggle($token, $force);
	
	}
}

namespace {
		class DOMTokenList_
		{
			/** @var DOMTokenList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property ArrayBuffer $data
	 */
	interface DataCue extends TextTrackCue
	{
	}
}

namespace {
		class DataCue_
		{
			/** @var DataCue */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $dropEffect
	 * @property string $effectAllowed
	 * @property FileList $files
	 * @property DataTransferItemList $items
	 * @property DOMStringList $types
	 */
	interface DataTransfer
	{
	
		/**
		 * @param string $format
		 * boolean
		 */
		function clearData($format);
	
	
		/**
		 * @param string $format
		 * string
		 */
		function getData($format);
	
	
		/**
		 * @param string $format
		 * @param string $data
		 * boolean
		 */
		function setData($format, $data);
	
	}
}

namespace {
		class DataTransfer_
		{
			/** @var DataTransfer */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $kind
	 * @property string $type
	 */
	interface DataTransferItem
	{
	
		/**
		 * File
		 */
		function getAsFile();
	
	
		/**
		 * @param FunctionStringCallback $_callback
		 * void
		 */
		function getAsString($_callback);
	
	}
}

namespace {
		class DataTransferItem_
		{
			/** @var DataTransferItem */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface DataTransferItemList
	{
	
		/**
		 * @param File $data
		 * DataTransferItem
		 */
		function add($data);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param number $index
		 * DataTransferItem
		 */
		function item($index);
	
	
		/**
		 * @param number $index
		 * void
		 */
		function remove($index);
	
	}
}

namespace {
		class DataTransferItemList_
		{
			/** @var DataTransferItemList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $id
	 * @property string $type
	 * @property string $uri
	 */
	interface DeferredPermissionRequest
	{
	
		/**
		 * void
		 */
		function allow();
	
	
		/**
		 * void
		 */
		function deny();
	
	}
}

namespace {
		class DeferredPermissionRequest_
		{
			/** @var DeferredPermissionRequest */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioParam $delayTime
	 */
	interface DelayNode extends AudioNode
	{
	}
}

namespace {
		class DelayNode_
		{
			/** @var DelayNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 * @property number $z
	 */
	interface DeviceAcceleration
	{
	}
}

namespace {
		class DeviceAcceleration_
		{
			/** @var DeviceAcceleration */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DeviceAcceleration $acceleration
	 * @property DeviceAcceleration $accelerationIncludingGravity
	 * @property number $interval
	 * @property DeviceRotationRate $rotationRate
	 */
	interface DeviceMotionEvent extends Event
	{
	
		/**
		 * @param string $type
		 * @param boolean $bubbles
		 * @param boolean $cancelable
		 * @param DeviceAccelerationDict $acceleration
		 * @param DeviceAccelerationDict $accelerationIncludingGravity
		 * @param DeviceRotationRateDict $rotationRate
		 * @param number $interval
		 * void
		 */
		function initDeviceMotionEvent($type, $bubbles, $cancelable, $acceleration, $accelerationIncludingGravity, $rotationRate, $interval);
	
	}
}

namespace {
		class DeviceMotionEvent_
		{
			/** @var DeviceMotionEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $absolute
	 * @property number $alpha
	 * @property number $beta
	 * @property number $gamma
	 */
	interface DeviceOrientationEvent extends Event
	{
	
		/**
		 * @param string $type
		 * @param boolean $bubbles
		 * @param boolean $cancelable
		 * @param number $alpha
		 * @param number $beta
		 * @param number $gamma
		 * @param boolean $absolute
		 * void
		 */
		function initDeviceOrientationEvent($type, $bubbles, $cancelable, $alpha, $beta, $gamma, $absolute);
	
	}
}

namespace {
		class DeviceOrientationEvent_
		{
			/** @var DeviceOrientationEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $alpha
	 * @property number $beta
	 * @property number $gamma
	 */
	interface DeviceRotationRate
	{
	}
}

namespace {
		class DeviceRotationRate_
		{
			/** @var DeviceRotationRate */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $URL Sets or gets the URL for the current document.
	 * @property string $URLUnencoded Gets the URL for the document, stripped of any character encoding.
	 * @property Element $activeElement Gets the object that has the focus when the parent document has focus.
	 * @property string $alinkColor Sets or gets the color of all active links in the document.
	 * @property HTMLCollection $all Returns a reference to the collection of elements contained by the object.
	 * @property HTMLCollection $anchors Retrieves a collection of all a objects that have a name and/or id property. Objects in this collection are in HTML source order.
	 * @property HTMLCollection $applets Retrieves a collection of all applet objects in the document.
	 * @property string $bgColor Deprecated. Sets or retrieves a value that indicates the background color behind the object.
	 * @property HTMLElement $body Specifies the beginning and end of the document body.
	 * @property string $characterSet
	 * @property string $charset Gets or sets the character set used to encode the object.
	 * @property string $compatMode Gets a value that indicates whether standards-compliant mode is switched on for the object.
	 * @property string $cookie
	 * @property string $defaultCharset Gets the default character set from the current regional language settings.
	 * @property Window $defaultView
	 * @property string $designMode Sets or gets a value that indicates whether the document can be edited.
	 * @property string $dir Sets or retrieves a value that indicates the reading order of the object.
	 * @property DocumentType $doctype Gets an object representing the document type declaration associated with the current document.
	 * @property HTMLElement $documentElement Gets a reference to the root node of the document.
	 * @property string $domain Sets or gets the security domain of the document.
	 * @property HTMLCollection $embeds Retrieves a collection of all embed objects in the document.
	 * @property string $fgColor Sets or gets the foreground (text) color of the document.
	 * @property HTMLCollection $forms Retrieves a collection, in source order, of all form objects in the document.
	 * @property Element $fullscreenElement
	 * @property boolean $fullscreenEnabled
	 * @property HTMLHeadElement $head
	 * @property boolean $hidden
	 * @property HTMLCollection $images Retrieves a collection, in source order, of img objects in the document.
	 * @property DOMImplementation $implementation Gets the implementation object of the current document.
	 * @property string $inputEncoding Returns the character encoding used to create the webpage that is loaded into the document object.
	 * @property string $lastModified Gets the date that the page was last modified, if the page supplies one.
	 * @property string $linkColor Sets or gets the color of the document links.
	 * @property HTMLCollection $links Retrieves a collection of all a objects that specify the href property and all area objects in the document.
	 * @property Location $location Contains information about the current URL.
	 * @property string $media
	 * @property boolean $msCSSOMElementFloatMetrics
	 * @property boolean $msCapsLockWarningOff
	 * @property boolean $msHidden
	 * @property string $msVisibilityState
	 * @property HTMLCollection $plugins Occurs when playback stops because the next frame of a video resource is not available.
	 * @property Element $pointerLockElement
	 * @property string $readyState Retrieves a value that indicates the current state of the object.
	 * @property string $referrer Gets the URL of the location that referred the user to the current page.
	 * @property SVGSVGElement $rootElement Gets the root svg element in the document hierarchy.
	 * @property HTMLCollection $scripts Retrieves a collection of all script objects in the document.
	 * @property string $security
	 * @property StyleSheetList $styleSheets Retrieves a collection of styleSheet objects representing the style sheets that correspond to each instance of a link or style object in the document.
	 * @property string $title Contains the title of the document.
	 * @property string $visibilityState
	 * @property string $vlinkColor Sets or gets the color of the links that the user has visited.
	 * @property Element $webkitCurrentFullScreenElement
	 * @property Element $webkitFullscreenElement
	 * @property boolean $webkitFullscreenEnabled
	 * @property boolean $webkitIsFullScreen
	 * @property string $xmlEncoding
	 * @property boolean $xmlStandalone
	 * @property string $xmlVersion Gets or sets the version attribute specified in the declaration of an XML document.
	 * @property HTMLScriptElement $currentScript
	 */
	interface Document extends \Node, GlobalEventHandlers, NodeSelector, DocumentEvent
	{
	
		/**
		 * @param Node $source
		 * Node
		 */
		function adoptNode($source);
	
	
		/**
		 * void
		 */
		function captureEvents();
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * Closes an output stream and forces the sent data to display.
		 * void
		 */
		function close();
	
	
		/**
		 * Creates an attribute object with a specified name.
		 * @param string $name name String that sets the attribute object's name.
		 * Attr
		 */
		function createAttribute($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $qualifiedName
		 * Attr
		 */
		function createAttributeNS($namespaceURI, $qualifiedName);
	
	
		/**
		 * @param string $data
		 * CDATASection
		 */
		function createCDATASection($data);
	
	
		/**
		 * Creates a comment object with the specified data.
		 * @param string $data data Sets the comment object's data.
		 * Comment
		 */
		function createComment($data);
	
	
		/**
		 * Creates a new document.
		 * DocumentFragment
		 */
		function createDocumentFragment();
	
	
		/**
		 * Creates an instance of the element for the specified tag.
		 * @param \"a" $tagName tagName The name of an element.
		 * HTMLAnchorElement
		 */
		function createElement($tagName);
	
	
		/**
		 * @param \"http $namespaceURI
		 * @param \"a" $qualifiedName
		 * SVGAElement
		 */
		function createElementNS($namespaceURI, $qualifiedName);
	
	
		/**
		 * @param string $expression
		 * @param XPathNSResolver $resolver
		 * XPathExpression
		 */
		function createExpression($expression, $resolver);
	
	
		/**
		 * @param Node $nodeResolver
		 * XPathNSResolver
		 */
		function createNSResolver($nodeResolver);
	
	
		/**
		 * Creates a NodeIterator object that you can use to traverse filtered lists of nodes or elements in a document.
		 * @param Node $root root The root element or node to start traversing on.
		 * @param number $whatToShow
		 * @param NodeFilter $filter
		 * @param boolean $entityReferenceExpansion
		 * NodeIterator
		 */
		function createNodeIterator($root, $whatToShow, $filter, $entityReferenceExpansion);
	
	
		/**
		 * @param string $target
		 * @param string $data
		 * ProcessingInstruction
		 */
		function createProcessingInstruction($target, $data);
	
	
		/**
		 * Returns an empty range object that has both of its boundary points positioned at the beginning of the document.
		 * Range
		 */
		function createRange();
	
	
		/**
		 * Creates a text string from the specified value.
		 * @param string $data data String that specifies the nodeValue property of the text node.
		 * Text
		 */
		function createTextNode($data);
	
	
		/**
		 * @param mixed $view
		 * @param EventTarget $target
		 * @param number $identifier
		 * @param number $pageX
		 * @param number $pageY
		 * @param number $screenX
		 * @param number $screenY
		 * Touch
		 */
		function createTouch($view, $target, $identifier, $pageX, $pageY, $screenX, $screenY);
	
	
		/**
		 * @param Touch[] ...$touches
		 * TouchList
		 */
		function createTouchList($touches);
	
	
		/**
		 * Creates a TreeWalker object that you can use to traverse filtered lists of nodes or elements in a document.
		 * @param Node $root root The root element or node to start traversing on.
		 * @param number $whatToShow
		 * @param NodeFilter $filter
		 * @param boolean $entityReferenceExpansion
		 * TreeWalker
		 */
		function createTreeWalker($root, $whatToShow, $filter, $entityReferenceExpansion);
	
	
		/**
		 * Returns the element for the specified x coordinate and the specified y coordinate.
		 * @param number $x x The x-offset
		 * @param number $y
		 * Element
		 */
		function elementFromPoint($x, $y);
	
	
		/**
		 * @param string $expression
		 * @param Node $contextNode
		 * @param XPathNSResolver $resolver
		 * @param number $type
		 * @param XPathResult $result
		 * XPathResult
		 */
		function evaluate($expression, $contextNode, $resolver, $type, $result);
	
	
		/**
		 * Executes a command on the current document, current selection, or the given range.
		 * @param string $commandId commandId String that specifies the command to execute. This command can be any of the command identifiers that can be executed in script.
		 * @param boolean $showUI
		 * @param mixed $value
		 * boolean
		 */
		function execCommand($commandId, $showUI, $value);
	
	
		/**
		 * Displays help information for the given command identifier.
		 * @param string $commandId commandId Displays help information for the given command identifier.
		 * boolean
		 */
		function execCommandShowHelp($commandId);
	
	
		/**
		 * void
		 */
		function exitFullscreen();
	
	
		/**
		 * void
		 */
		function exitPointerLock();
	
	
		/**
		 * Causes the element to receive the focus and executes the code specified by the onfocus event.
		 * void
		 */
		function focus();
	
	
		/**
		 * Returns a reference to the first object with the specified value of the ID or NAME attribute.
		 * @param string $elementId elementId String that specifies the ID value. Case-insensitive.
		 * HTMLElement
		 */
		function getElementById($elementId);
	
	
		/**
		 * @param string $classNames
		 * \NodeListOf<Element>
		 */
		function getElementsByClassName($classNames);
	
	
		/**
		 * Gets a collection of objects based on the value of the NAME or ID attribute.
		 * @param string $elementName elementName Gets a collection of objects based on the value of the NAME or ID attribute.
		 * \NodeListOf<Element>
		 */
		function getElementsByName($elementName);
	
	
		/**
		 * Retrieves a collection of objects based on the specified element name.
		 * @param \"a" $tagname name Specifies the name of an element.
		 * \NodeListOf<HTMLAnchorElement>
		 */
		function getElementsByTagName($tagname);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * \NodeListOf<Element>
		 */
		function getElementsByTagNameNS($namespaceURI, $localName);
	
	
		/**
		 * Returns an object representing the current selection of the document that is loaded into the object displaying a webpage.
		 * Selection
		 */
		function getSelection();
	
	
		/**
		 * Gets a value indicating whether the object currently has focus.
		 * boolean
		 */
		function hasFocus();
	
	
		/**
		 * @param Node $importedNode
		 * @param boolean $deep
		 * Node
		 */
		function importNode($importedNode, $deep);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * NodeList
		 */
		function msElementsFromPoint($x, $y);
	
	
		/**
		 * @param number $left
		 * @param number $top
		 * @param number $width
		 * @param number $height
		 * NodeList
		 */
		function msElementsFromRect($left, $top, $width, $height);
	
	
		/**
		 * Opens a new window and loads a document specified by a given URL. Also, opens a new window that uses the url parameter and the name parameter to collect the output of the write method and the writeln method.
		 * @param string $url url Specifies a MIME type for the document.
		 * @param string $name
		 * @param string $features
		 * @param boolean $replace
		 * Document
		 */
		function open($url, $name, $features, $replace);
	
	
		/**
		 * Returns a Boolean value that indicates whether a specified command can be successfully executed using execCommand, given the current state of the document.
		 * @param string $commandId commandId Specifies a command identifier.
		 * boolean
		 */
		function queryCommandEnabled($commandId);
	
	
		/**
		 * Returns a Boolean value that indicates whether the specified command is in the indeterminate state.
		 * @param string $commandId commandId String that specifies a command identifier.
		 * boolean
		 */
		function queryCommandIndeterm($commandId);
	
	
		/**
		 * Returns a Boolean value that indicates the current state of the command.
		 * @param string $commandId commandId String that specifies a command identifier.
		 * boolean
		 */
		function queryCommandState($commandId);
	
	
		/**
		 * Returns a Boolean value that indicates whether the current command is supported on the current range.
		 * @param string $commandId commandId Specifies a command identifier.
		 * boolean
		 */
		function queryCommandSupported($commandId);
	
	
		/**
		 * Retrieves the string associated with a command.
		 * @param string $commandId commandId String that contains the identifier of a command. This can be any command identifier given in the list of Command Identifiers.
		 * string
		 */
		function queryCommandText($commandId);
	
	
		/**
		 * Returns the current value of the document, range, or current selection for the given command.
		 * @param string $commandId commandId String that specifies a command identifier.
		 * string
		 */
		function queryCommandValue($commandId);
	
	
		/**
		 * void
		 */
		function releaseEvents();
	
	
		/**
		 * Allows updating the print settings for the page.
		 * void
		 */
		function updateSettings();
	
	
		/**
		 * void
		 */
		function webkitCancelFullScreen();
	
	
		/**
		 * void
		 */
		function webkitExitFullscreen();
	
	
		/**
		 * Writes one or more HTML expressions to a document in the specified window.
		 * @param string[] ...$content content Specifies the text and HTML tags to write.
		 * void
		 */
		function write($content);
	
	
		/**
		 * Writes one or more HTML expressions, followed by a carriage return, to a document in the specified window.
		 * @param string[] ...$content content The text and HTML tags to write.
		 * void
		 */
		function writeln($content);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class Document_
		{
			/** @var Document */
			public $prototype;
		
		}
}

namespace {
	interface DocumentFragment extends \Node, NodeSelector
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class DocumentFragment_
		{
			/** @var DocumentFragment */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property NamedNodeMap $entities
	 * @property string $internalSubset
	 * @property string $name
	 * @property NamedNodeMap $notations
	 * @property string $publicId
	 * @property string $systemId
	 */
	interface DocumentType extends \Node, ChildNode
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class DocumentType_
		{
			/** @var DocumentType */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DataTransfer $dataTransfer
	 */
	interface DragEvent extends MouseEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param boolean $ctrlKeyArg
		 * @param boolean $altKeyArg
		 * @param boolean $shiftKeyArg
		 * @param boolean $metaKeyArg
		 * @param number $buttonArg
		 * @param EventTarget $relatedTargetArg
		 * @param DataTransfer $dataTransferArg
		 * void
		 */
		function initDragEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $ctrlKeyArg, $altKeyArg, $shiftKeyArg, $metaKeyArg, $buttonArg, $relatedTargetArg, $dataTransferArg);
	
	
		/**
		 * @param File $file
		 * @param string $targetType
		 * @param string $targetURL
		 * void
		 */
		function msConvertURL($file, $targetType, $targetURL);
	
	}
}

namespace {
		class DragEvent_
		{
			/** @var DragEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioParam $attack
	 * @property AudioParam $knee
	 * @property AudioParam $ratio
	 * @property AudioParam $reduction
	 * @property AudioParam $release
	 * @property AudioParam $threshold
	 */
	interface DynamicsCompressorNode extends AudioNode
	{
	}
}

namespace {
		class DynamicsCompressorNode_
		{
			/** @var DynamicsCompressorNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $MAX_TEXTURE_MAX_ANISOTROPY_EXT
	 * @property number $TEXTURE_MAX_ANISOTROPY_EXT
	 */
	interface EXT_texture_filter_anisotropic
	{
	}
}

namespace {
		class EXT_texture_filter_anisotropic_
		{
			/** @var EXT_texture_filter_anisotropic */
			public $prototype;
		
			/** @var number */
			public $MAX_TEXTURE_MAX_ANISOTROPY_EXT;
		
			/** @var number */
			public $TEXTURE_MAX_ANISOTROPY_EXT;
		
		}
}

namespace {
	/**
	 * @property DOMTokenList $classList
	 * @property number $clientHeight
	 * @property number $clientLeft
	 * @property number $clientTop
	 * @property number $clientWidth
	 * @property number $msContentZoomFactor
	 * @property string $msRegionOverflow
	 * @property number $scrollHeight
	 * @property number $scrollLeft
	 * @property number $scrollTop
	 * @property number $scrollWidth
	 * @property string $tagName
	 * @property string $id
	 * @property string $className
	 * @property string $innerHTML
	 */
	interface Element extends \Node, GlobalEventHandlers, ElementTraversal, NodeSelector, ChildNode
	{
	
		/**
		 * @param string $name
		 * string
		 */
		function getAttribute($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * string
		 */
		function getAttributeNS($namespaceURI, $localName);
	
	
		/**
		 * @param string $name
		 * Attr
		 */
		function getAttributeNode($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * Attr
		 */
		function getAttributeNodeNS($namespaceURI, $localName);
	
	
		/**
		 * ClientRect
		 */
		function getBoundingClientRect();
	
	
		/**
		 * ClientRectList
		 */
		function getClientRects();
	
	
		/**
		 * @param \"a" $name
		 * \NodeListOf<HTMLAnchorElement>
		 */
		function getElementsByTagName($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * \NodeListOf<Element>
		 */
		function getElementsByTagNameNS($namespaceURI, $localName);
	
	
		/**
		 * @param string $name
		 * boolean
		 */
		function hasAttribute($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * boolean
		 */
		function hasAttributeNS($namespaceURI, $localName);
	
	
		/**
		 * MSRangeCollection
		 */
		function msGetRegionContent();
	
	
		/**
		 * ClientRect
		 */
		function msGetUntransformedBounds();
	
	
		/**
		 * @param string $selectors
		 * boolean
		 */
		function msMatchesSelector($selectors);
	
	
		/**
		 * @param number $pointerId
		 * void
		 */
		function msReleasePointerCapture($pointerId);
	
	
		/**
		 * @param number $pointerId
		 * void
		 */
		function msSetPointerCapture($pointerId);
	
	
		/**
		 * @param MsZoomToOptions $args
		 * void
		 */
		function msZoomTo($args);
	
	
		/**
		 * @param number $pointerId
		 * void
		 */
		function releasePointerCapture($pointerId);
	
	
		/**
		 * @param string $name
		 * void
		 */
		function removeAttribute($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * void
		 */
		function removeAttributeNS($namespaceURI, $localName);
	
	
		/**
		 * @param Attr $oldAttr
		 * Attr
		 */
		function removeAttributeNode($oldAttr);
	
	
		/**
		 * void
		 */
		function requestFullscreen();
	
	
		/**
		 * void
		 */
		function requestPointerLock();
	
	
		/**
		 * @param string $name
		 * @param string $value
		 * void
		 */
		function setAttribute($name, $value);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $qualifiedName
		 * @param string $value
		 * void
		 */
		function setAttributeNS($namespaceURI, $qualifiedName, $value);
	
	
		/**
		 * @param Attr $newAttr
		 * Attr
		 */
		function setAttributeNode($newAttr);
	
	
		/**
		 * @param Attr $newAttr
		 * Attr
		 */
		function setAttributeNodeNS($newAttr);
	
	
		/**
		 * @param number $pointerId
		 * void
		 */
		function setPointerCapture($pointerId);
	
	
		/**
		 * @param string $selectors
		 * boolean
		 */
		function webkitMatchesSelector($selectors);
	
	
		/**
		 * void
		 */
		function webkitRequestFullScreen();
	
	
		/**
		 * @param string $classNames
		 * \NodeListOf<Element>
		 */
		function getElementsByClassName($classNames);
	
	
		/**
		 * @param string $selector
		 * boolean
		 */
		function matches($selector);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class Element_
		{
			/** @var Element */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $colno
	 * @property mixed $error
	 * @property string $filename
	 * @property number $lineno
	 * @property string $message
	 */
	interface ErrorEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param string $messageArg
		 * @param string $filenameArg
		 * @param number $linenoArg
		 * void
		 */
		function initErrorEvent($typeArg, $canBubbleArg, $cancelableArg, $messageArg, $filenameArg, $linenoArg);
	
	}
}

namespace {
		class ErrorEvent_
		{
			/** @var ErrorEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $bubbles
	 * @property boolean $cancelBubble
	 * @property boolean $cancelable
	 * @property EventTarget $currentTarget
	 * @property boolean $defaultPrevented
	 * @property number $eventPhase
	 * @property boolean $isTrusted
	 * @property boolean $returnValue
	 * @property Element $srcElement
	 * @property EventTarget $target
	 * @property number $timeStamp
	 * @property string $type
	 * @property number $AT_TARGET
	 * @property number $BUBBLING_PHASE
	 * @property number $CAPTURING_PHASE
	 */
	interface Event
	{
	
		/**
		 * @param string $eventTypeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * void
		 */
		function initEvent($eventTypeArg, $canBubbleArg, $cancelableArg);
	
	
		/**
		 * void
		 */
		function preventDefault();
	
	
		/**
		 * void
		 */
		function stopImmediatePropagation();
	
	
		/**
		 * void
		 */
		function stopPropagation();
	
	}
}

namespace {
		class Event_
		{
			/** @var Event */
			public $prototype;
		
			/** @var number */
			public $AT_TARGET;
		
			/** @var number */
			public $BUBBLING_PHASE;
		
			/** @var number */
			public $CAPTURING_PHASE;
		
		}
}

namespace {
	interface EventTarget
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	
		/**
		 * @param Event $evt
		 * boolean
		 */
		function dispatchEvent($evt);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function removeEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class EventTarget_
		{
			/** @var EventTarget */
			public $prototype;
		
		}
}

namespace {
	interface External
	{
	}
}

namespace {
		class External_
		{
			/** @var External */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $lastModifiedDate
	 * @property string $name
	 */
	interface File extends Blob
	{
	}
}

namespace {
		class File_
		{
			/** @var File */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface FileList
	{
	
		/**
		 * @param number $index
		 * File
		 */
		function item($index);
	
	}
}

namespace {
		class FileList_
		{
			/** @var FileList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DOMError $error
	 */
	interface FileReader extends \EventTarget, MSBaseReader
	{
	
		/**
		 * @param Blob $blob
		 * void
		 */
		function readAsArrayBuffer($blob);
	
	
		/**
		 * @param Blob $blob
		 * void
		 */
		function readAsBinaryString($blob);
	
	
		/**
		 * @param Blob $blob
		 * void
		 */
		function readAsDataURL($blob);
	
	
		/**
		 * @param Blob $blob
		 * @param string $encoding
		 * void
		 */
		function readAsText($blob, $encoding);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class FileReader_
		{
			/** @var FileReader */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property EventTarget $relatedTarget
	 */
	interface FocusEvent extends UIEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param EventTarget $relatedTargetArg
		 * void
		 */
		function initFocusEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $relatedTargetArg);
	
	}
}

namespace {
		class FocusEvent_
		{
			/** @var FocusEvent */
			public $prototype;
		
		}
}

namespace {
	interface FormData
	{
	
		/**
		 * @param mixed $name
		 * @param mixed $value
		 * @param string $blobName
		 * void
		 */
		function append($name, $value, $blobName);
	
	}
}

namespace {
		class FormData_
		{
			/** @var FormData */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioParam $gain
	 */
	interface GainNode extends AudioNode
	{
	}
}

namespace {
		class GainNode_
		{
			/** @var GainNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number[] $axes
	 * @property GamepadButton[] $buttons
	 * @property boolean $connected
	 * @property string $id
	 * @property number $index
	 * @property string $mapping
	 * @property number $timestamp
	 */
	interface Gamepad
	{
	}
}

namespace {
		class Gamepad_
		{
			/** @var Gamepad */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $pressed
	 * @property number $value
	 */
	interface GamepadButton
	{
	}
}

namespace {
		class GamepadButton_
		{
			/** @var GamepadButton */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Gamepad $gamepad
	 */
	interface GamepadEvent extends Event
	{
	}
}

namespace {
		class GamepadEvent_
		{
			/** @var GamepadEvent */
			public $prototype;
		
		}
}

namespace {
	interface Geolocation
	{
	
		/**
		 * @param number $watchId
		 * void
		 */
		function clearWatch($watchId);
	
	
		/**
		 * @param PositionCallback $successCallback
		 * @param PositionErrorCallback $errorCallback
		 * @param PositionOptions $options
		 * void
		 */
		function getCurrentPosition($successCallback, $errorCallback, $options);
	
	
		/**
		 * @param PositionCallback $successCallback
		 * @param PositionErrorCallback $errorCallback
		 * @param PositionOptions $options
		 * number
		 */
		function watchPosition($successCallback, $errorCallback, $options);
	
	}
}

namespace {
		class Geolocation_
		{
			/** @var Geolocation */
			public $prototype;
		
		}
}

namespace {
	interface HTMLAllCollection extends HTMLCollection
	{
	
		/**
		 * @param string $name
		 * Element
		 */
		function namedItem($name);
	
	}
}

namespace {
		class HTMLAllCollection_
		{
			/** @var HTMLAllCollection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $Methods
	 * @property string $charset Sets or retrieves the character set used to encode the object.
	 * @property string $coords Sets or retrieves the coordinates of the object.
	 * @property string $hash Contains the anchor portion of the URL including the hash sign (#).
	 * @property string $host Contains the hostname and port values of the URL.
	 * @property string $hostname Contains the hostname of a URL.
	 * @property string $href Sets or retrieves a destination URL or an anchor point.
	 * @property string $hreflang Sets or retrieves the language code of the object.
	 * @property string $mimeType
	 * @property string $name Sets or retrieves the shape of the object.
	 * @property string $nameProp
	 * @property string $pathname Contains the pathname of the URL.
	 * @property string $port Sets or retrieves the port number associated with a URL.
	 * @property string $protocol Contains the protocol of the URL.
	 * @property string $protocolLong
	 * @property string $rel Sets or retrieves the relationship between the object and the destination of the link.
	 * @property string $rev Sets or retrieves the relationship between the object and the destination of the link.
	 * @property string $search Sets or retrieves the substring of the href property that follows the question mark.
	 * @property string $shape Sets or retrieves the shape of the object.
	 * @property string $target Sets or retrieves the window or frame at which to target content.
	 * @property string $text Retrieves or sets the text of the object as a string.
	 * @property string $type
	 * @property string $urn
	 */
	interface HTMLAnchorElement extends HTMLElement
	{
	
		/**
		 * Returns a string representation of an object.
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class HTMLAnchorElement_
		{
			/** @var HTMLAnchorElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $BaseHref Retrieves a string of the URL where the object tag can be found. This is often the href of the document that the object is in, or the value set by a base element.
	 * @property string $align
	 * @property string $alt Sets or retrieves a text alternative to the graphic.
	 * @property string $altHtml Gets or sets the optional alternative HTML script to execute if the object fails to load.
	 * @property string $archive Sets or retrieves a character string that can be used to implement your own archive functionality for the object.
	 * @property string $border
	 * @property string $code
	 * @property string $codeBase Sets or retrieves the URL of the component.
	 * @property string $codeType Sets or retrieves the Internet media type for the code associated with the object.
	 * @property Document $contentDocument Address of a pointer to the document this page or frame contains. If there is no document, then null will be returned.
	 * @property string $data Sets or retrieves the URL that references the data of the object.
	 * @property boolean $declare Sets or retrieves a character string that can be used to implement your own declare functionality for the object.
	 * @property HTMLFormElement $form
	 * @property string $height Sets or retrieves the height of the object.
	 * @property number $hspace
	 * @property string $name Sets or retrieves the shape of the object.
	 * @property string $object
	 * @property string $standby Sets or retrieves a message to be displayed while an object is loading.
	 * @property string $type Returns the content type of the object.
	 * @property string $useMap Sets or retrieves the URL, often with a bookmark extension (#name), to use as a client-side image map.
	 * @property number $vspace
	 * @property number $width
	 */
	interface HTMLAppletElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLAppletElement_
		{
			/** @var HTMLAppletElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $alt Sets or retrieves a text alternative to the graphic.
	 * @property string $coords Sets or retrieves the coordinates of the object.
	 * @property string $hash Sets or retrieves the subsection of the href property that follows the number sign (#).
	 * @property string $host Sets or retrieves the hostname and port number of the location or URL.
	 * @property string $hostname Sets or retrieves the host name part of the location or URL.
	 * @property string $href Sets or retrieves a destination URL or an anchor point.
	 * @property boolean $noHref Sets or gets whether clicks in this region cause action.
	 * @property string $pathname Sets or retrieves the file name or path specified by the object.
	 * @property string $port Sets or retrieves the port number associated with a URL.
	 * @property string $protocol Sets or retrieves the protocol portion of a URL.
	 * @property string $rel
	 * @property string $search Sets or retrieves the substring of the href property that follows the question mark.
	 * @property string $shape Sets or retrieves the shape of the object.
	 * @property string $target Sets or retrieves the window or frame at which to target content.
	 */
	interface HTMLAreaElement extends HTMLElement
	{
	
		/**
		 * Returns a string representation of an object.
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class HTMLAreaElement_
		{
			/** @var HTMLAreaElement */
			public $prototype;
		
		}
}

namespace {
	interface HTMLAreasCollection extends HTMLCollection
	{
	
		/**
		 * Adds an element to the areas, controlRange, or options collection.
		 * @param HTMLElement $element
		 * @param HTMLElement|number $before
		 * void
		 */
		function add($element, $before);
	
	
		/**
		 * Removes an element from the collection.
		 * @param number $index
		 * void
		 */
		function remove($index);
	
	}
}

namespace {
		class HTMLAreasCollection_
		{
			/** @var HTMLAreasCollection */
			public $prototype;
		
		}
}

namespace {
	interface HTMLAudioElement extends HTMLMediaElement
	{
	}
}

namespace {
		class HTMLAudioElement_
		{
			/** @var HTMLAudioElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $clear Sets or retrieves the side on which floating objects are not to be positioned when any IHTMLBlockElement is inserted into the document.
	 */
	interface HTMLBRElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLBRElement_
		{
			/** @var HTMLBRElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $href Gets or sets the baseline URL on which relative links are based.
	 * @property string $target Sets or retrieves the window or frame at which to target content.
	 */
	interface HTMLBaseElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLBaseElement_
		{
			/** @var HTMLBaseElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $face Sets or retrieves the current typeface family.
	 * @property number $size Sets or retrieves the font size of the object.
	 */
	interface HTMLBaseFontElement extends \HTMLElement, DOML2DeprecatedColorProperty
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLBaseFontElement_
		{
			/** @var HTMLBaseFontElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $cite Sets or retrieves reference information about the object.
	 * @property string $clear
	 * @property number $width Sets or retrieves the width of the object.
	 */
	interface HTMLBlockElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLBlockElement_
		{
			/** @var HTMLBlockElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $aLink
	 * @property string $background
	 * @property mixed $bgColor
	 * @property string $bgProperties
	 * @property mixed $link
	 * @property boolean $noWrap
	 * @property mixed $text
	 * @property mixed $vLink
	 */
	interface HTMLBodyElement extends HTMLElement
	{
	
		/**
		 * TextRange
		 */
		function createTextRange();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLBodyElement_
		{
			/** @var HTMLBodyElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $autofocus Provides a way to direct a user to a specific field when a document loads. This can provide both direction and convenience for a user, reducing the need to click or tab to a field when a page opens. This attribute is true when present on an element, and false when missing.
	 * @property boolean $disabled
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property string $formAction Overrides the action attribute (where the data on a form is sent) on the parent form element.
	 * @property string $formEnctype Used to override the encoding (formEnctype attribute) specified on the form element.
	 * @property string $formMethod Overrides the submit method attribute previously specified on a form element.
	 * @property string $formNoValidate Overrides any validation or required attributes on a form or form elements to allow it to be submitted without validation. This can be used to create a "save draft"-type submit option.
	 * @property string $formTarget Overrides the target attribute on a form element.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property mixed $status
	 * @property string $type Gets the classification and default behavior of the button.
	 * @property string $validationMessage Returns the error message that would be displayed if the user submits the form, or an empty string if no error message. It also triggers the standard error message, such as "this is a required field". The result is that the user sees validation messages without actually submitting.
	 * @property ValidityState $validity Returns a  ValidityState object that represents the validity states of an element.
	 * @property string $value Sets or retrieves the default or selected value of the control.
	 * @property boolean $willValidate Returns whether an element will successfully validate based on forms validation rules and constraints.
	 */
	interface HTMLButtonElement extends HTMLElement
	{
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Creates a TextRange object for the element.
		 * TextRange
		 */
		function createTextRange();
	
	
		/**
		 * Sets a custom error message that is displayed when a form is submitted.
		 * @param string $error error Sets a custom error message that is displayed when a form is submitted.
		 * void
		 */
		function setCustomValidity($error);
	
	}
}

namespace {
		class HTMLButtonElement_
		{
			/** @var HTMLButtonElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $height Gets or sets the height of a canvas element on a document.
	 * @property number $width Gets or sets the width of a canvas element on a document.
	 */
	interface HTMLCanvasElement extends HTMLElement
	{
	
		/**
		 * Returns an object that provides methods and properties for drawing and manipulating images and graphics on a canvas element in a document. A context object includes information about colors, line widths, fonts, and other graphic parameters that can be drawn on a canvas.
		 * @param \"2d" $contextId contextId The identifier (ID) of the type of canvas to create. Internet Explorer 9 and Internet Explorer 10 support only a 2-D context using canvas.getContext("2d"); IE11 Preview also supports 3-D or WebGL context using canvas.getContext("experimental-webgl");
		 * CanvasRenderingContext2D
		 */
		function getContext($contextId);
	
	
		/**
		 * Returns a blob object encoded as a Portable Network Graphics (PNG) format from a canvas image or drawing.
		 * Blob
		 */
		function msToBlob();
	
	
		/**
		 * Returns the content of the current canvas as an image that you can use as a source for another canvas or an HTML element.
		 * @param string $type type The standard MIME type for the image format to return. If you do not specify this parameter, the default value is a PNG format image.
		 * @param mixed[] ...$args
		 * string
		 */
		function toDataURL($type, $args);
	
	
		/**
		 * Blob
		 */
		function toBlob();
	
	}
}

namespace {
		class HTMLCanvasElement_
		{
			/** @var HTMLCanvasElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length Sets or retrieves the number of objects in a collection.
	 */
	interface HTMLCollection
	{
	
		/**
		 * Retrieves an object from various collections.
		 * @param mixed $nameOrIndex
		 * @param mixed $optionalIndex
		 * Element
		 */
		function item($nameOrIndex, $optionalIndex);
	
	
		/**
		 * Retrieves a select object or an object from an options collection.
		 * @param string $name
		 * Element
		 */
		function namedItem($name);
	
	}
}

namespace {
		class HTMLCollection_
		{
			/** @var HTMLCollection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $noWrap Sets or retrieves whether the browser automatically performs wordwrap.
	 */
	interface HTMLDDElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLDDElement_
		{
			/** @var HTMLDDElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $compact
	 */
	interface HTMLDListElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLDListElement_
		{
			/** @var HTMLDListElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $noWrap Sets or retrieves whether the browser automatically performs wordwrap.
	 */
	interface HTMLDTElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLDTElement_
		{
			/** @var HTMLDTElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property HTMLCollection $options
	 */
	interface HTMLDataListElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLDataListElement_
		{
			/** @var HTMLDataListElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $compact
	 */
	interface HTMLDirectoryElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLDirectoryElement_
		{
			/** @var HTMLDirectoryElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property boolean $noWrap Sets or retrieves whether the browser automatically performs wordwrap.
	 */
	interface HTMLDivElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLDivElement_
		{
			/** @var HTMLDivElement */
			public $prototype;
		
		}
}

namespace {
	interface HTMLDocument extends Document
	{
	}
}

namespace {
		class HTMLDocument_
		{
			/** @var HTMLDocument */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $accessKey
	 * @property HTMLCollection $children
	 * @property string $contentEditable
	 * @property DOMStringMap $dataset
	 * @property string $dir
	 * @property boolean $draggable
	 * @property boolean $hidden
	 * @property boolean $hideFocus
	 * @property string $innerHTML
	 * @property string $innerText
	 * @property boolean $isContentEditable
	 * @property string $lang
	 * @property number $offsetHeight
	 * @property number $offsetLeft
	 * @property Element $offsetParent
	 * @property number $offsetTop
	 * @property number $offsetWidth
	 * @property string $outerHTML
	 * @property string $outerText
	 * @property boolean $spellcheck
	 * @property CSSStyleDeclaration $style
	 * @property number $tabIndex
	 * @property string $title
	 */
	interface HTMLElement extends Element
	{
	
		/**
		 * void
		 */
		function blur();
	
	
		/**
		 * void
		 */
		function click();
	
	
		/**
		 * boolean
		 */
		function dragDrop();
	
	
		/**
		 * void
		 */
		function focus();
	
	
		/**
		 * @param string $position
		 * @param Element $insertedElement
		 * Element
		 */
		function insertAdjacentElement($position, $insertedElement);
	
	
		/**
		 * @param string $where
		 * @param string $html
		 * void
		 */
		function insertAdjacentHTML($where, $html);
	
	
		/**
		 * @param string $where
		 * @param string $text
		 * void
		 */
		function insertAdjacentText($where, $text);
	
	
		/**
		 * MSInputMethodContext
		 */
		function msGetInputContext();
	
	
		/**
		 * @param boolean $top
		 * void
		 */
		function scrollIntoView($top);
	
	
		/**
		 * void
		 */
		function setActive();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLElement_
		{
			/** @var HTMLElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $height Sets or retrieves the height of the object.
	 * @property mixed $hidden
	 * @property boolean $msPlayToDisabled Gets or sets whether the DLNA PlayTo device is available.
	 * @property string $msPlayToPreferredSourceUri Gets or sets the path to the preferred media source. This enables the Play To target device to stream the media content, which can be DRM protected, from a different location, such as a cloud media server.
	 * @property boolean $msPlayToPrimary Gets or sets the primary DLNA PlayTo device.
	 * @property mixed $msPlayToSource Gets the source associated with the media element for use by the PlayToManager.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property string $palette Retrieves the palette used for the embedded document.
	 * @property string $pluginspage Retrieves the URL of the plug-in used to view an embedded document.
	 * @property string $readyState
	 * @property string $src Sets or retrieves a URL to be loaded by the object.
	 * @property string $units Sets or retrieves the height and width units of the embed object.
	 * @property string $width Sets or retrieves the width of the object.
	 */
	interface HTMLEmbedElement extends \HTMLElement, GetSVGDocument
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLEmbedElement_
		{
			/** @var HTMLEmbedElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property boolean $disabled
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property string $validationMessage Returns the error message that would be displayed if the user submits the form, or an empty string if no error message. It also triggers the standard error message, such as "this is a required field". The result is that the user sees validation messages without actually submitting.
	 * @property ValidityState $validity Returns a  ValidityState object that represents the validity states of an element.
	 * @property boolean $willValidate Returns whether an element will successfully validate based on forms validation rules and constraints.
	 */
	interface HTMLFieldSetElement extends HTMLElement
	{
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Sets a custom error message that is displayed when a form is submitted.
		 * @param string $error error Sets a custom error message that is displayed when a form is submitted.
		 * void
		 */
		function setCustomValidity($error);
	
	}
}

namespace {
		class HTMLFieldSetElement_
		{
			/** @var HTMLFieldSetElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $face Sets or retrieves the current typeface family.
	 */
	interface HTMLFontElement extends \HTMLElement, DOML2DeprecatedColorProperty, DOML2DeprecatedSizeProperty
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLFontElement_
		{
			/** @var HTMLFontElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $acceptCharset Sets or retrieves a list of character encodings for input data that must be accepted by the server processing the form.
	 * @property string $action Sets or retrieves the URL to which the form content is sent for processing.
	 * @property string $autocomplete Specifies whether autocomplete is applied to an editable text field.
	 * @property HTMLCollection $elements Retrieves a collection, in source order, of all controls in a given form.
	 * @property string $encoding Sets or retrieves the MIME encoding for the form.
	 * @property string $enctype Sets or retrieves the encoding type for the form.
	 * @property number $length Sets or retrieves the number of objects in a collection.
	 * @property string $method Sets or retrieves how to send the form data to the server.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property boolean $noValidate Designates a form that is not validated when submitted.
	 * @property string $target Sets or retrieves the window or frame at which to target content.
	 */
	interface HTMLFormElement extends HTMLElement
	{
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Retrieves a form object or an object from an elements collection.
		 * @param mixed $name name Variant of type Number or String that specifies the object or collection to retrieve. If this parameter is a Number, it is the zero-based index of the object. If this parameter is a string, all objects with matching name or id properties are retrieved, and a collection is returned if more than one match is made.
		 * @param mixed $index
		 * mixed
		 */
		function item($name, $index);
	
	
		/**
		 * Retrieves a form object or an object from an elements collection.
		 * @param string $name
		 * mixed
		 */
		function namedItem($name);
	
	
		/**
		 * Fires when the user resets a form.
		 * void
		 */
		function reset();
	
	
		/**
		 * Fires when a FORM is about to be submitted.
		 * void
		 */
		function submit();
	
	}
}

namespace {
		class HTMLFormElement_
		{
			/** @var HTMLFormElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $border Specifies the properties of a border drawn around an object.
	 * @property mixed $borderColor Sets or retrieves the border color of the object.
	 * @property Document $contentDocument Retrieves the document object of the page or frame.
	 * @property Window $contentWindow Retrieves the object of the specified.
	 * @property string $frameBorder Sets or retrieves whether to display a border for the frame.
	 * @property mixed $frameSpacing Sets or retrieves the amount of additional space between the frames.
	 * @property string|number $height Sets or retrieves the height of the object.
	 * @property string $longDesc Sets or retrieves a URI to a long description of the object.
	 * @property string $marginHeight Sets or retrieves the top and bottom margin heights before displaying the text in a frame.
	 * @property string $marginWidth Sets or retrieves the left and right margin widths before displaying the text in a frame.
	 * @property string $name Sets or retrieves the frame name.
	 * @property boolean $noResize Sets or retrieves whether the user can resize the frame.
	 * @property string $scrolling Sets or retrieves whether the frame can be scrolled.
	 * @property mixed $security Sets the value indicating whether the source file of a frame or iframe has specific security restrictions applied.
	 * @property string $src Sets or retrieves a URL to be loaded by the object.
	 * @property string|number $width Sets or retrieves the width of the object.
	 */
	interface HTMLFrameElement extends \HTMLElement, GetSVGDocument
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLFrameElement_
		{
			/** @var HTMLFrameElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $border
	 * @property mixed $borderColor Sets or retrieves the border color of the object.
	 * @property string $cols Sets or retrieves the frame widths of the object.
	 * @property string $frameBorder Sets or retrieves whether to display a border for the frame.
	 * @property mixed $frameSpacing Sets or retrieves the amount of additional space between the frames.
	 * @property string $name
	 * @property string $rows Sets or retrieves the frame heights of the object.
	 */
	interface HTMLFrameSetElement extends HTMLElement
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLFrameSetElement_
		{
			/** @var HTMLFrameSetElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property boolean $noShade Sets or retrieves whether the horizontal rule is drawn with 3-D shading.
	 * @property number $width Sets or retrieves the width of the object.
	 */
	interface HTMLHRElement extends \HTMLElement, DOML2DeprecatedColorProperty, DOML2DeprecatedSizeProperty
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLHRElement_
		{
			/** @var HTMLHRElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $profile
	 */
	interface HTMLHeadElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLHeadElement_
		{
			/** @var HTMLHeadElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves a value that indicates the table alignment.
	 * @property string $clear
	 */
	interface HTMLHeadingElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLHeadingElement_
		{
			/** @var HTMLHeadingElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $version Sets or retrieves the DTD version that governs the current document.
	 */
	interface HTMLHtmlElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLHtmlElement_
		{
			/** @var HTMLHtmlElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property boolean $allowFullscreen
	 * @property string $border Specifies the properties of a border drawn around an object.
	 * @property Document $contentDocument Retrieves the document object of the page or frame.
	 * @property Window $contentWindow Retrieves the object of the specified.
	 * @property string $frameBorder Sets or retrieves whether to display a border for the frame.
	 * @property mixed $frameSpacing Sets or retrieves the amount of additional space between the frames.
	 * @property string $height Sets or retrieves the height of the object.
	 * @property number $hspace Sets or retrieves the horizontal margin for the object.
	 * @property string $longDesc Sets or retrieves a URI to a long description of the object.
	 * @property string $marginHeight Sets or retrieves the top and bottom margin heights before displaying the text in a frame.
	 * @property string $marginWidth Sets or retrieves the left and right margin widths before displaying the text in a frame.
	 * @property string $name Sets or retrieves the frame name.
	 * @property boolean $noResize Sets or retrieves whether the user can resize the frame.
	 * @property DOMSettableTokenList $sandbox Raised when the object has been completely received from the server.
	 * @property string $scrolling Sets or retrieves whether the frame can be scrolled.
	 * @property mixed $security Sets the value indicating whether the source file of a frame or iframe has specific security restrictions applied.
	 * @property string $src Sets or retrieves a URL to be loaded by the object.
	 * @property number $vspace Sets or retrieves the vertical margin for the object.
	 * @property string $width Sets or retrieves the width of the object.
	 */
	interface HTMLIFrameElement extends \HTMLElement, GetSVGDocument
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLIFrameElement_
		{
			/** @var HTMLIFrameElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property string $alt Sets or retrieves a text alternative to the graphic.
	 * @property string $border Specifies the properties of a border drawn around an object.
	 * @property boolean $complete Retrieves whether the object is fully loaded.
	 * @property string $crossOrigin
	 * @property string $currentSrc
	 * @property number $height Sets or retrieves the height of the object.
	 * @property number $hspace Sets or retrieves the width of the border to draw around the object.
	 * @property boolean $isMap Sets or retrieves whether the image is a server-side image map.
	 * @property string $longDesc Sets or retrieves a Uniform Resource Identifier (URI) to a long description of the object.
	 * @property boolean $msPlayToDisabled Gets or sets whether the DLNA PlayTo device is available.
	 * @property string $msPlayToPreferredSourceUri
	 * @property boolean $msPlayToPrimary Gets or sets the primary DLNA PlayTo device.
	 * @property mixed $msPlayToSource Gets the source associated with the media element for use by the PlayToManager.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property number $naturalHeight The original height of the image resource before sizing.
	 * @property number $naturalWidth The original width of the image resource before sizing.
	 * @property string $src The address or URL of the a media resource that is to be considered.
	 * @property string $srcset
	 * @property string $useMap Sets or retrieves the URL, often with a bookmark extension (#name), to use as a client-side image map.
	 * @property number $vspace Sets or retrieves the vertical margin for the object.
	 * @property number $width Sets or retrieves the width of the object.
	 * @property number $x
	 * @property number $y
	 */
	interface HTMLImageElement extends HTMLElement
	{
	
		/**
		 * mixed
		 */
		function msGetAsCastingSource();
	
	}
}

namespace {
		class HTMLImageElement_
		{
			/** @var HTMLImageElement */
			public $prototype;
		
		
			/**
			 * HTMLImageElement
			 */
			public function create()
			{
			}
		
		}
}

namespace {
	/**
	 * @property string $accept Sets or retrieves a comma-separated list of content types.
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property string $alt Sets or retrieves a text alternative to the graphic.
	 * @property string $autocomplete Specifies whether autocomplete is applied to an editable text field.
	 * @property boolean $autofocus Provides a way to direct a user to a specific field when a document loads. This can provide both direction and convenience for a user, reducing the need to click or tab to a field when a page opens. This attribute is true when present on an element, and false when missing.
	 * @property string $border Sets or retrieves the width of the border to draw around the object.
	 * @property boolean $checked Sets or retrieves the state of the check box or radio button.
	 * @property boolean $complete Retrieves whether the object is fully loaded.
	 * @property boolean $defaultChecked Sets or retrieves the state of the check box or radio button.
	 * @property string $defaultValue Sets or retrieves the initial contents of the object.
	 * @property boolean $disabled
	 * @property FileList $files Returns a FileList object on a file type input object.
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property string $formAction Overrides the action attribute (where the data on a form is sent) on the parent form element.
	 * @property string $formEnctype Used to override the encoding (formEnctype attribute) specified on the form element.
	 * @property string $formMethod Overrides the submit method attribute previously specified on a form element.
	 * @property string $formNoValidate Overrides any validation or required attributes on a form or form elements to allow it to be submitted without validation. This can be used to create a "save draft"-type submit option.
	 * @property string $formTarget Overrides the target attribute on a form element.
	 * @property string $height Sets or retrieves the height of the object.
	 * @property number $hspace Sets or retrieves the width of the border to draw around the object.
	 * @property boolean $indeterminate
	 * @property HTMLElement $list Specifies the ID of a pre-defined datalist of options for an input element.
	 * @property string $max Defines the maximum acceptable value for an input element with type="number".When used with the min and step attributes, lets you control the range and increment (such as only even numbers) that the user can enter into an input field.
	 * @property number $maxLength Sets or retrieves the maximum number of characters that the user can enter in a text control.
	 * @property string $min Defines the minimum acceptable value for an input element with type="number". When used with the max and step attributes, lets you control the range and increment (such as even numbers only) that the user can enter into an input field.
	 * @property boolean $multiple Sets or retrieves the Boolean value indicating whether multiple items can be selected from a list.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property string $pattern Gets or sets a string containing a regular expression that the user's input must match.
	 * @property string $placeholder Gets or sets a text string that is displayed in an input field as a hint or prompt to users as the format or type of information they need to enter.The text appears in an input field until the user puts focus on the field.
	 * @property boolean $readOnly
	 * @property boolean $required When present, marks an element that can't be submitted without a value.
	 * @property number $selectionEnd Gets or sets the end position or offset of a text selection.
	 * @property number $selectionStart Gets or sets the starting position or offset of a text selection.
	 * @property number $size
	 * @property string $src The address or URL of the a media resource that is to be considered.
	 * @property boolean $status
	 * @property string $step Defines an increment or jump between values that you want to allow the user to enter. When used with the max and min attributes, lets you control the range and increment (for example, allow only even numbers) that the user can enter into an input field.
	 * @property string $type Returns the content type of the object.
	 * @property string $useMap Sets or retrieves the URL, often with a bookmark extension (#name), to use as a client-side image map.
	 * @property string $validationMessage Returns the error message that would be displayed if the user submits the form, or an empty string if no error message. It also triggers the standard error message, such as "this is a required field". The result is that the user sees validation messages without actually submitting.
	 * @property ValidityState $validity Returns a  ValidityState object that represents the validity states of an element.
	 * @property string $value Returns the value of the data at the cursor's current position.
	 * @property Date $valueAsDate
	 * @property number $valueAsNumber Returns the input field value as a number.
	 * @property number $vspace Sets or retrieves the vertical margin for the object.
	 * @property string $width Sets or retrieves the width of the object.
	 * @property boolean $willValidate Returns whether an element will successfully validate based on forms validation rules and constraints.
	 */
	interface HTMLInputElement extends HTMLElement
	{
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Creates a TextRange object for the element.
		 * TextRange
		 */
		function createTextRange();
	
	
		/**
		 * Makes the selection equal to the current object.
		 * void
		 */
		function select();
	
	
		/**
		 * Sets a custom error message that is displayed when a form is submitted.
		 * @param string $error error Sets a custom error message that is displayed when a form is submitted.
		 * void
		 */
		function setCustomValidity($error);
	
	
		/**
		 * Sets the start and end positions of a selection in a text field.
		 * @param number $start start The offset into the text field for the start of the selection.
		 * @param number $end
		 * void
		 */
		function setSelectionRange($start, $end);
	
	
		/**
		 * Decrements a range input control's value by the value given by the Step attribute. If the optional parameter is used, it will decrement the input control's step value multiplied by the parameter's value.
		 * @param number $n n Value to decrement the value by.
		 * void
		 */
		function stepDown($n);
	
	
		/**
		 * Increments a range input control's value by the value given by the Step attribute. If the optional parameter is used, will increment the input control's value by that value.
		 * @param number $n n Value to increment the value by.
		 * void
		 */
		function stepUp($n);
	
	}
}

namespace {
		class HTMLInputElement_
		{
			/** @var HTMLInputElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $action Sets or retrieves the URL to which the form content is sent for processing.
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property string $prompt
	 */
	interface HTMLIsIndexElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLIsIndexElement_
		{
			/** @var HTMLIsIndexElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $type
	 * @property number $value Sets or retrieves the value of a list item.
	 */
	interface HTMLLIElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLLIElement_
		{
			/** @var HTMLLIElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property string $htmlFor Sets or retrieves the object to which the given label object is assigned.
	 */
	interface HTMLLabelElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLLabelElement_
		{
			/** @var HTMLLabelElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Retrieves a reference to the form that the object is embedded in.
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 */
	interface HTMLLegendElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLLegendElement_
		{
			/** @var HTMLLegendElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $charset Sets or retrieves the character set used to encode the object.
	 * @property boolean $disabled
	 * @property string $href Sets or retrieves a destination URL or an anchor point.
	 * @property string $hreflang Sets or retrieves the language code of the object.
	 * @property string $media Sets or retrieves the media type.
	 * @property string $rel Sets or retrieves the relationship between the object and the destination of the link.
	 * @property string $rev Sets or retrieves the relationship between the object and the destination of the link.
	 * @property string $target Sets or retrieves the window or frame at which to target content.
	 * @property string $type Sets or retrieves the MIME type of the object.
	 */
	interface HTMLLinkElement extends \HTMLElement, LinkStyle
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLLinkElement_
		{
			/** @var HTMLLinkElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property HTMLAreasCollection $areas Retrieves a collection of the area objects defined for the given map object.
	 * @property string $name Sets or retrieves the name of the object.
	 */
	interface HTMLMapElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLMapElement_
		{
			/** @var HTMLMapElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $behavior
	 * @property mixed $bgColor
	 * @property string $direction
	 * @property string $height
	 * @property number $hspace
	 * @property number $loop
	 * @property number $scrollAmount
	 * @property number $scrollDelay
	 * @property boolean $trueSpeed
	 * @property number $vspace
	 * @property string $width
	 */
	interface HTMLMarqueeElement extends HTMLElement
	{
	
		/**
		 * void
		 */
		function start();
	
	
		/**
		 * void
		 */
		function stop();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLMarqueeElement_
		{
			/** @var HTMLMarqueeElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioTrackList $audioTracks Returns an AudioTrackList object with the audio tracks for a given video element.
	 * @property boolean $autoplay Gets or sets a value that indicates whether to start playing the media automatically.
	 * @property TimeRanges $buffered Gets a collection of buffered time ranges.
	 * @property boolean $controls Gets or sets a flag that indicates whether the client provides a set of controls for the media (in case the developer does not include controls for the player).
	 * @property string $currentSrc Gets the address or URL of the current media resource that is selected by IHTMLMediaElement.
	 * @property number $currentTime Gets or sets the current playback position, in seconds.
	 * @property boolean $defaultMuted
	 * @property number $defaultPlaybackRate Gets or sets the default playback rate when the user is not using fast forward or reverse for a video or audio resource.
	 * @property number $duration Returns the duration in seconds of the current media resource. A NaN value is returned if duration is not available, or Infinity if the media resource is streaming.
	 * @property boolean $ended Gets information about whether the playback has ended or not.
	 * @property MediaError $error Returns an object representing the current error state of the audio or video element.
	 * @property boolean $loop Gets or sets a flag to specify whether playback should restart after it completes.
	 * @property string $msAudioCategory Specifies the purpose of the audio or video media, such as background audio or alerts.
	 * @property string $msAudioDeviceType Specifies the output device id that the audio will be sent to.
	 * @property MSGraphicsTrust $msGraphicsTrustStatus
	 * @property MSMediaKeys $msKeys Gets the MSMediaKeys object, which is used for decrypting media data, that is associated with this media element.
	 * @property boolean $msPlayToDisabled Gets or sets whether the DLNA PlayTo device is available.
	 * @property string $msPlayToPreferredSourceUri Gets or sets the path to the preferred media source. This enables the Play To target device to stream the media content, which can be DRM protected, from a different location, such as a cloud media server.
	 * @property boolean $msPlayToPrimary Gets or sets the primary DLNA PlayTo device.
	 * @property mixed $msPlayToSource Gets the source associated with the media element for use by the PlayToManager.
	 * @property boolean $msRealTime Specifies whether or not to enable low-latency playback on the media element.
	 * @property boolean $muted Gets or sets a flag that indicates whether the audio (either audio or the audio track on video media) is muted.
	 * @property number $networkState Gets the current network activity for the element.
	 * @property boolean $paused Gets a flag that specifies whether playback is paused.
	 * @property number $playbackRate Gets or sets the current rate of speed for the media resource to play. This speed is expressed as a multiple of the normal speed of the media resource.
	 * @property TimeRanges $played Gets TimeRanges for the current media resource that has been played.
	 * @property string $preload Gets or sets the current playback position, in seconds.
	 * @property number $readyState
	 * @property TimeRanges $seekable Returns a TimeRanges object that represents the ranges of the current media resource that can be seeked.
	 * @property boolean $seeking Gets a flag that indicates whether the the client is currently moving to a new playback position in the media resource.
	 * @property string $src The address or URL of the a media resource that is to be considered.
	 * @property TextTrackList $textTracks
	 * @property VideoTrackList $videoTracks
	 * @property number $volume Gets or sets the volume level for audio portions of the media element.
	 * @property number $HAVE_CURRENT_DATA
	 * @property number $HAVE_ENOUGH_DATA
	 * @property number $HAVE_FUTURE_DATA
	 * @property number $HAVE_METADATA
	 * @property number $HAVE_NOTHING
	 * @property number $NETWORK_EMPTY
	 * @property number $NETWORK_IDLE
	 * @property number $NETWORK_LOADING
	 * @property number $NETWORK_NO_SOURCE
	 */
	interface HTMLMediaElement extends HTMLElement
	{
	
		/**
		 * @param string $kind
		 * @param string $label
		 * @param string $language
		 * TextTrack
		 */
		function addTextTrack($kind, $label, $language);
	
	
		/**
		 * Returns a string that specifies whether the client can play a given media resource type.
		 * @param string $type
		 * string
		 */
		function canPlayType($type);
	
	
		/**
		 * Fires immediately after the client loads the object.
		 * void
		 */
		function load();
	
	
		/**
		 * Clears all effects from the media pipeline.
		 * void
		 */
		function msClearEffects();
	
	
		/**
		 * mixed
		 */
		function msGetAsCastingSource();
	
	
		/**
		 * Inserts the specified audio effect into media pipeline.
		 * @param string $activatableClassId
		 * @param boolean $effectRequired
		 * @param mixed $config
		 * void
		 */
		function msInsertAudioEffect($activatableClassId, $effectRequired, $config);
	
	
		/**
		 * @param MSMediaKeys $mediaKeys
		 * void
		 */
		function msSetMediaKeys($mediaKeys);
	
	
		/**
		 * Specifies the media protection manager for a given media pipeline.
		 * @param mixed $mediaProtectionManager
		 * void
		 */
		function msSetMediaProtectionManager($mediaProtectionManager);
	
	
		/**
		 * Pauses the current playback and sets paused to TRUE. This can be used to test whether the media is playing or paused. You can also use the pause or play events to tell whether the media is playing or not.
		 * void
		 */
		function pause();
	
	
		/**
		 * Loads and starts playback of a media resource.
		 * void
		 */
		function play();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLMediaElement_
		{
			/** @var HTMLMediaElement */
			public $prototype;
		
			/** @var number */
			public $HAVE_CURRENT_DATA;
		
			/** @var number */
			public $HAVE_ENOUGH_DATA;
		
			/** @var number */
			public $HAVE_FUTURE_DATA;
		
			/** @var number */
			public $HAVE_METADATA;
		
			/** @var number */
			public $HAVE_NOTHING;
		
			/** @var number */
			public $NETWORK_EMPTY;
		
			/** @var number */
			public $NETWORK_IDLE;
		
			/** @var number */
			public $NETWORK_LOADING;
		
			/** @var number */
			public $NETWORK_NO_SOURCE;
		
		}
}

namespace {
	/**
	 * @property boolean $compact
	 * @property string $type
	 */
	interface HTMLMenuElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLMenuElement_
		{
			/** @var HTMLMenuElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $charset Sets or retrieves the character set used to encode the object.
	 * @property string $content Gets or sets meta-information to associate with httpEquiv or name.
	 * @property string $httpEquiv Gets or sets information used to bind the value of a content attribute of a meta element to an HTTP response header.
	 * @property string $name Sets or retrieves the value specified in the content attribute of the meta object.
	 * @property string $scheme Sets or retrieves a scheme to be used in interpreting the value of a property specified for the object.
	 * @property string $url Sets or retrieves the URL property that will be loaded after the specified time has elapsed.
	 */
	interface HTMLMetaElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLMetaElement_
		{
			/** @var HTMLMetaElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $cite Sets or retrieves reference information about the object.
	 * @property string $dateTime Sets or retrieves the date and time of a modification to the object.
	 */
	interface HTMLModElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLModElement_
		{
			/** @var HTMLModElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $n
	 */
	interface HTMLNextIdElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLNextIdElement_
		{
			/** @var HTMLNextIdElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $compact
	 * @property number $start The starting number.
	 * @property string $type
	 */
	interface HTMLOListElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLOListElement_
		{
			/** @var HTMLOListElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $BaseHref Retrieves a string of the URL where the object tag can be found. This is often the href of the document that the object is in, or the value set by a base element.
	 * @property string $align
	 * @property string $alt Sets or retrieves a text alternative to the graphic.
	 * @property string $altHtml Gets or sets the optional alternative HTML script to execute if the object fails to load.
	 * @property string $archive Sets or retrieves a character string that can be used to implement your own archive functionality for the object.
	 * @property string $border
	 * @property string $code Sets or retrieves the URL of the file containing the compiled Java class.
	 * @property string $codeBase Sets or retrieves the URL of the component.
	 * @property string $codeType Sets or retrieves the Internet media type for the code associated with the object.
	 * @property Document $contentDocument Retrieves the document object of the page or frame.
	 * @property string $data Sets or retrieves the URL that references the data of the object.
	 * @property boolean $declare
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property string $height Sets or retrieves the height of the object.
	 * @property number $hspace
	 * @property boolean $msPlayToDisabled Gets or sets whether the DLNA PlayTo device is available.
	 * @property string $msPlayToPreferredSourceUri Gets or sets the path to the preferred media source. This enables the Play To target device to stream the media content, which can be DRM protected, from a different location, such as a cloud media server.
	 * @property boolean $msPlayToPrimary Gets or sets the primary DLNA PlayTo device.
	 * @property mixed $msPlayToSource Gets the source associated with the media element for use by the PlayToManager.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property mixed $object Retrieves the contained object.
	 * @property number $readyState
	 * @property string $standby Sets or retrieves a message to be displayed while an object is loading.
	 * @property string $type Sets or retrieves the MIME type of the object.
	 * @property string $useMap Sets or retrieves the URL, often with a bookmark extension (#name), to use as a client-side image map.
	 * @property string $validationMessage Returns the error message that would be displayed if the user submits the form, or an empty string if no error message. It also triggers the standard error message, such as "this is a required field". The result is that the user sees validation messages without actually submitting.
	 * @property ValidityState $validity Returns a  ValidityState object that represents the validity states of an element.
	 * @property number $vspace
	 * @property string $width Sets or retrieves the width of the object.
	 * @property boolean $willValidate Returns whether an element will successfully validate based on forms validation rules and constraints.
	 */
	interface HTMLObjectElement extends \HTMLElement, GetSVGDocument
	{
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Sets a custom error message that is displayed when a form is submitted.
		 * @param string $error error Sets a custom error message that is displayed when a form is submitted.
		 * void
		 */
		function setCustomValidity($error);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLObjectElement_
		{
			/** @var HTMLObjectElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $defaultSelected Sets or retrieves the status of an option.
	 * @property boolean $disabled
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property number $index Sets or retrieves the ordinal position of an option in a list box.
	 * @property string $label Sets or retrieves a value that you can use to implement your own label functionality for the object.
	 * @property boolean $selected Sets or retrieves whether the option in the list box is the default item.
	 * @property string $text Sets or retrieves the text string specified by the option tag.
	 * @property string $value Sets or retrieves the value which is returned to the server when the form control is submitted.
	 */
	interface HTMLOptGroupElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLOptGroupElement_
		{
			/** @var HTMLOptGroupElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $defaultSelected Sets or retrieves the status of an option.
	 * @property boolean $disabled
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property number $index Sets or retrieves the ordinal position of an option in a list box.
	 * @property string $label Sets or retrieves a value that you can use to implement your own label functionality for the object.
	 * @property boolean $selected Sets or retrieves whether the option in the list box is the default item.
	 * @property string $text Sets or retrieves the text string specified by the option tag.
	 * @property string $value Sets or retrieves the value which is returned to the server when the form control is submitted.
	 */
	interface HTMLOptionElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLOptionElement_
		{
			/** @var HTMLOptionElement */
			public $prototype;
		
		
			/**
			 * HTMLOptionElement
			 */
			public function create()
			{
			}
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property string $clear
	 */
	interface HTMLParagraphElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLParagraphElement_
		{
			/** @var HTMLParagraphElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $name Sets or retrieves the name of an input parameter for an element.
	 * @property string $type Sets or retrieves the content type of the resource designated by the value attribute.
	 * @property string $value Sets or retrieves the value of an input parameter for an element.
	 * @property string $valueType Sets or retrieves the data type of the value attribute.
	 */
	interface HTMLParamElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLParamElement_
		{
			/** @var HTMLParamElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $cite Sets or retrieves reference information about the object.
	 * @property string $dateTime Sets or retrieves the date and time of a modification to the object.
	 */
	interface HTMLPhraseElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLPhraseElement_
		{
			/** @var HTMLPhraseElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $cite Indicates a citation by rendering text in italic type.
	 * @property string $clear
	 * @property number $width Sets or gets a value that you can use to implement your own width functionality for the object.
	 */
	interface HTMLPreElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLPreElement_
		{
			/** @var HTMLPreElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property number $max Defines the maximum, or "done" value for a progress element.
	 * @property number $position Returns the quotient of value/max when the value attribute is set (determinate progress bar), or -1 when the value attribute is missing (indeterminate progress bar).
	 * @property number $value Sets or gets the current value of a progress element. The value must be a non-negative number between 0 and the max value.
	 */
	interface HTMLProgressElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLProgressElement_
		{
			/** @var HTMLProgressElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $cite Sets or retrieves reference information about the object.
	 * @property string $dateTime Sets or retrieves the date and time of a modification to the object.
	 */
	interface HTMLQuoteElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLQuoteElement_
		{
			/** @var HTMLQuoteElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $async
	 * @property string $charset Sets or retrieves the character set used to encode the object.
	 * @property boolean $defer Sets or retrieves the status of the script.
	 * @property string $event Sets or retrieves the event for which the script is written.
	 * @property string $htmlFor Sets or retrieves the object that is bound to the event script.
	 * @property string $src Retrieves the URL to an external file that contains the source code or data.
	 * @property string $text Retrieves or sets the text of the object as a string.
	 * @property string $type Sets or retrieves the MIME type for the associated scripting engine.
	 */
	interface HTMLScriptElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLScriptElement_
		{
			/** @var HTMLScriptElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $autofocus Provides a way to direct a user to a specific field when a document loads. This can provide both direction and convenience for a user, reducing the need to click or tab to a field when a page opens. This attribute is true when present on an element, and false when missing.
	 * @property boolean $disabled
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property number $length Sets or retrieves the number of objects in a collection.
	 * @property boolean $multiple Sets or retrieves the Boolean value indicating whether multiple items can be selected from a list.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property HTMLCollection $options
	 * @property boolean $required When present, marks an element that can't be submitted without a value.
	 * @property number $selectedIndex Sets or retrieves the index of the selected option in a select object.
	 * @property number $size Sets or retrieves the number of rows in the list box.
	 * @property string $type Retrieves the type of select control based on the value of the MULTIPLE attribute.
	 * @property string $validationMessage Returns the error message that would be displayed if the user submits the form, or an empty string if no error message. It also triggers the standard error message, such as "this is a required field". The result is that the user sees validation messages without actually submitting.
	 * @property ValidityState $validity Returns a  ValidityState object that represents the validity states of an element.
	 * @property string $value Sets or retrieves the value which is returned to the server when the form control is submitted.
	 * @property boolean $willValidate Returns whether an element will successfully validate based on forms validation rules and constraints.
	 * @property HTMLCollection $selectedOptions
	 */
	interface HTMLSelectElement extends HTMLElement
	{
	
		/**
		 * Adds an element to the areas, controlRange, or options collection.
		 * @param HTMLElement $element element Variant of type Number that specifies the index position in the collection where the element is placed. If no value is given, the method places the element at the end of the collection.
		 * @param HTMLElement|number $before
		 * void
		 */
		function add($element, $before);
	
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Retrieves a select object or an object from an options collection.
		 * @param mixed $name name Variant of type Number or String that specifies the object or collection to retrieve. If this parameter is an integer, it is the zero-based index of the object. If this parameter is a string, all objects with matching name or id properties are retrieved, and a collection is returned if more than one match is made.
		 * @param mixed $index
		 * mixed
		 */
		function item($name, $index);
	
	
		/**
		 * Retrieves a select object or an object from an options collection.
		 * @param string $name namedItem A String that specifies the name or id property of the object to retrieve. A collection is returned if more than one match is made.
		 * mixed
		 */
		function namedItem($name);
	
	
		/**
		 * Removes an element from the collection.
		 * @param number $index index Number that specifies the zero-based index of the element to remove from the collection.
		 * void
		 */
		function remove($index=null);
	
	
		/**
		 * Sets a custom error message that is displayed when a form is submitted.
		 * @param string $error error Sets a custom error message that is displayed when a form is submitted.
		 * void
		 */
		function setCustomValidity($error);
	
	}
}

namespace {
		class HTMLSelectElement_
		{
			/** @var HTMLSelectElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $media Gets or sets the intended media type of the media source.
	 * @property string $msKeySystem
	 * @property string $src The address or URL of the a media resource that is to be considered.
	 * @property string $type Gets or sets the MIME type of a media resource.
	 */
	interface HTMLSourceElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLSourceElement_
		{
			/** @var HTMLSourceElement */
			public $prototype;
		
		}
}

namespace {
	interface HTMLSpanElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLSpanElement_
		{
			/** @var HTMLSpanElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $media Sets or retrieves the media type.
	 * @property string $type Retrieves the CSS language in which the style sheet is written.
	 */
	interface HTMLStyleElement extends \HTMLElement, LinkStyle
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLStyleElement_
		{
			/** @var HTMLStyleElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves the alignment of the caption or legend.
	 * @property string $vAlign Sets or retrieves whether the caption appears at the top or bottom of the table.
	 */
	interface HTMLTableCaptionElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLTableCaptionElement_
		{
			/** @var HTMLTableCaptionElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $abbr Sets or retrieves abbreviated text for the object.
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property string $axis Sets or retrieves a comma-delimited list of conceptual categories associated with the object.
	 * @property mixed $bgColor
	 * @property number $cellIndex Retrieves the position of the object in the cells collection of a row.
	 * @property number $colSpan Sets or retrieves the number columns in the table that the object should span.
	 * @property string $headers Sets or retrieves a list of header cells that provide information for the object.
	 * @property mixed $height Sets or retrieves the height of the object.
	 * @property boolean $noWrap Sets or retrieves whether the browser automatically performs wordwrap.
	 * @property number $rowSpan Sets or retrieves how many rows in a table the cell should span.
	 * @property string $scope Sets or retrieves the group of cells in a table to which the object's information applies.
	 * @property string $width Sets or retrieves the width of the object.
	 */
	interface HTMLTableCellElement extends \HTMLElement, HTMLTableAlignment
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLTableCellElement_
		{
			/** @var HTMLTableCellElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves the alignment of the object relative to the display or table.
	 * @property number $span Sets or retrieves the number of columns in the group.
	 * @property mixed $width Sets or retrieves the width of the object.
	 */
	interface HTMLTableColElement extends \HTMLElement, HTMLTableAlignment
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLTableColElement_
		{
			/** @var HTMLTableColElement */
			public $prototype;
		
		}
}

namespace {
	interface HTMLTableDataCellElement extends HTMLTableCellElement
	{
	}
}

namespace {
		class HTMLTableDataCellElement_
		{
			/** @var HTMLTableDataCellElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves a value that indicates the table alignment.
	 * @property mixed $bgColor
	 * @property string $border Sets or retrieves the width of the border to draw around the object.
	 * @property mixed $borderColor Sets or retrieves the border color of the object.
	 * @property HTMLTableCaptionElement $caption Retrieves the caption object of a table.
	 * @property string $cellPadding Sets or retrieves the amount of space between the border of the cell and the content of the cell.
	 * @property string $cellSpacing Sets or retrieves the amount of space between cells in a table.
	 * @property number $cols Sets or retrieves the number of columns in the table.
	 * @property string $frame Sets or retrieves the way the border frame around the table is displayed.
	 * @property mixed $height Sets or retrieves the height of the object.
	 * @property HTMLCollection $rows Sets or retrieves the number of horizontal rows contained in the object.
	 * @property string $rules Sets or retrieves which dividing lines (inner borders) are displayed.
	 * @property string $summary Sets or retrieves a description and/or structure of the object.
	 * @property HTMLCollection $tBodies Retrieves a collection of all tBody objects in the table. Objects in this collection are in source order.
	 * @property HTMLTableSectionElement $tFoot Retrieves the tFoot object of the table.
	 * @property HTMLTableSectionElement $tHead Retrieves the tHead object of the table.
	 * @property string $width Sets or retrieves the width of the object.
	 */
	interface HTMLTableElement extends HTMLElement
	{
	
		/**
		 * Creates an empty caption element in the table.
		 * HTMLTableCaptionElement
		 */
		function createCaption();
	
	
		/**
		 * Creates an empty tBody element in the table.
		 * HTMLTableSectionElement
		 */
		function createTBody();
	
	
		/**
		 * Creates an empty tFoot element in the table.
		 * HTMLTableSectionElement
		 */
		function createTFoot();
	
	
		/**
		 * Returns the tHead element object if successful, or null otherwise.
		 * HTMLTableSectionElement
		 */
		function createTHead();
	
	
		/**
		 * Deletes the caption element and its contents from the table.
		 * void
		 */
		function deleteCaption();
	
	
		/**
		 * Removes the specified row (tr) from the element and from the rows collection.
		 * @param number $index index Number that specifies the zero-based position in the rows collection of the row to remove.
		 * void
		 */
		function deleteRow($index);
	
	
		/**
		 * Deletes the tFoot element and its contents from the table.
		 * void
		 */
		function deleteTFoot();
	
	
		/**
		 * Deletes the tHead element and its contents from the table.
		 * void
		 */
		function deleteTHead();
	
	
		/**
		 * Creates a new row (tr) in the table, and adds the row to the rows collection.
		 * @param number $index index Number that specifies where to insert the row in the rows collection. The default value is -1, which appends the new row to the end of the rows collection.
		 * HTMLTableRowElement
		 */
		function insertRow($index);
	
	}
}

namespace {
		class HTMLTableElement_
		{
			/** @var HTMLTableElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $scope Sets or retrieves the group of cells in a table to which the object's information applies.
	 */
	interface HTMLTableHeaderCellElement extends HTMLTableCellElement
	{
	}
}

namespace {
		class HTMLTableHeaderCellElement_
		{
			/** @var HTMLTableHeaderCellElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves how the object is aligned with adjacent text.
	 * @property mixed $bgColor
	 * @property HTMLCollection $cells Retrieves a collection of all cells in the table row.
	 * @property mixed $height Sets or retrieves the height of the object.
	 * @property number $rowIndex Retrieves the position of the object in the rows collection for the table.
	 * @property number $sectionRowIndex Retrieves the position of the object in the collection.
	 */
	interface HTMLTableRowElement extends \HTMLElement, HTMLTableAlignment
	{
	
		/**
		 * Removes the specified cell from the table row, as well as from the cells collection.
		 * @param number $index index Number that specifies the zero-based position of the cell to remove from the table row. If no value is provided, the last cell in the cells collection is deleted.
		 * void
		 */
		function deleteCell($index);
	
	
		/**
		 * Creates a new cell in the table row, and adds the cell to the cells collection.
		 * @param number $index index Number that specifies where to insert the cell in the tr. The default value is -1, which appends the new cell to the end of the cells collection.
		 * HTMLTableCellElement
		 */
		function insertCell($index);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLTableRowElement_
		{
			/** @var HTMLTableRowElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $align Sets or retrieves a value that indicates the table alignment.
	 * @property HTMLCollection $rows Sets or retrieves the number of horizontal rows contained in the object.
	 */
	interface HTMLTableSectionElement extends \HTMLElement, HTMLTableAlignment
	{
	
		/**
		 * Removes the specified row (tr) from the element and from the rows collection.
		 * @param number $index index Number that specifies the zero-based position in the rows collection of the row to remove.
		 * void
		 */
		function deleteRow($index);
	
	
		/**
		 * Creates a new row (tr) in the table, and adds the row to the rows collection.
		 * @param number $index index Number that specifies where to insert the row in the rows collection. The default value is -1, which appends the new row to the end of the rows collection.
		 * HTMLTableRowElement
		 */
		function insertRow($index);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLTableSectionElement_
		{
			/** @var HTMLTableSectionElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $autofocus Provides a way to direct a user to a specific field when a document loads. This can provide both direction and convenience for a user, reducing the need to click or tab to a field when a page opens. This attribute is true when present on an element, and false when missing.
	 * @property number $cols Sets or retrieves the width of the object.
	 * @property string $defaultValue Sets or retrieves the initial contents of the object.
	 * @property boolean $disabled
	 * @property HTMLFormElement $form Retrieves a reference to the form that the object is embedded in.
	 * @property number $maxLength Sets or retrieves the maximum number of characters that the user can enter in a text control.
	 * @property string $name Sets or retrieves the name of the object.
	 * @property string $placeholder Gets or sets a text string that is displayed in an input field as a hint or prompt to users as the format or type of information they need to enter.The text appears in an input field until the user puts focus on the field.
	 * @property boolean $readOnly Sets or retrieves the value indicated whether the content of the object is read-only.
	 * @property boolean $required When present, marks an element that can't be submitted without a value.
	 * @property number $rows Sets or retrieves the number of horizontal rows contained in the object.
	 * @property number $selectionEnd Gets or sets the end position or offset of a text selection.
	 * @property number $selectionStart Gets or sets the starting position or offset of a text selection.
	 * @property mixed $status Sets or retrieves the value indicating whether the control is selected.
	 * @property string $type Retrieves the type of control.
	 * @property string $validationMessage Returns the error message that would be displayed if the user submits the form, or an empty string if no error message. It also triggers the standard error message, such as "this is a required field". The result is that the user sees validation messages without actually submitting.
	 * @property ValidityState $validity Returns a  ValidityState object that represents the validity states of an element.
	 * @property string $value Retrieves or sets the text in the entry field of the textArea element.
	 * @property boolean $willValidate Returns whether an element will successfully validate based on forms validation rules and constraints.
	 * @property string $wrap Sets or retrieves how to handle wordwrapping in the object.
	 */
	interface HTMLTextAreaElement extends HTMLElement
	{
	
		/**
		 * Returns whether a form will validate when it is submitted, without having to submit it.
		 * boolean
		 */
		function checkValidity();
	
	
		/**
		 * Creates a TextRange object for the element.
		 * TextRange
		 */
		function createTextRange();
	
	
		/**
		 * Highlights the input area of a form element.
		 * void
		 */
		function select();
	
	
		/**
		 * Sets a custom error message that is displayed when a form is submitted.
		 * @param string $error error Sets a custom error message that is displayed when a form is submitted.
		 * void
		 */
		function setCustomValidity($error);
	
	
		/**
		 * Sets the start and end positions of a selection in a text field.
		 * @param number $start start The offset into the text field for the start of the selection.
		 * @param number $end
		 * void
		 */
		function setSelectionRange($start, $end);
	
	}
}

namespace {
		class HTMLTextAreaElement_
		{
			/** @var HTMLTextAreaElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $text Retrieves or sets the text of the object as a string.
	 */
	interface HTMLTitleElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLTitleElement_
		{
			/** @var HTMLTitleElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $default
	 * @property string $kind
	 * @property string $label
	 * @property number $readyState
	 * @property string $src
	 * @property string $srclang
	 * @property TextTrack $track
	 * @property number $ERROR
	 * @property number $LOADED
	 * @property number $LOADING
	 * @property number $NONE
	 */
	interface HTMLTrackElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLTrackElement_
		{
			/** @var HTMLTrackElement */
			public $prototype;
		
			/** @var number */
			public $ERROR;
		
			/** @var number */
			public $LOADED;
		
			/** @var number */
			public $LOADING;
		
			/** @var number */
			public $NONE;
		
		}
}

namespace {
	/**
	 * @property boolean $compact
	 * @property string $type
	 */
	interface HTMLUListElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLUListElement_
		{
			/** @var HTMLUListElement */
			public $prototype;
		
		}
}

namespace {
	interface HTMLUnknownElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLUnknownElement_
		{
			/** @var HTMLUnknownElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $height Gets or sets the height of the video element.
	 * @property boolean $msHorizontalMirror
	 * @property boolean $msIsLayoutOptimalForPlayback
	 * @property boolean $msIsStereo3D
	 * @property string $msStereo3DPackingMode
	 * @property string $msStereo3DRenderMode
	 * @property boolean $msZoom
	 * @property string $poster Gets or sets a URL of an image to display, for example, like a movie poster. This can be a still frame from the video, or another image if no video data is available.
	 * @property number $videoHeight Gets the intrinsic height of a video in CSS pixels, or zero if the dimensions are not known.
	 * @property number $videoWidth Gets the intrinsic width of a video in CSS pixels, or zero if the dimensions are not known.
	 * @property boolean $webkitDisplayingFullscreen
	 * @property boolean $webkitSupportsFullscreen
	 * @property number $width Gets or sets the width of the video element.
	 */
	interface HTMLVideoElement extends HTMLMediaElement
	{
	
		/**
		 * VideoPlaybackQuality
		 */
		function getVideoPlaybackQuality();
	
	
		/**
		 * @param boolean $forward
		 * void
		 */
		function msFrameStep($forward);
	
	
		/**
		 * @param string $activatableClassId
		 * @param boolean $effectRequired
		 * @param mixed $config
		 * void
		 */
		function msInsertVideoEffect($activatableClassId, $effectRequired, $config);
	
	
		/**
		 * @param number $left
		 * @param number $top
		 * @param number $right
		 * @param number $bottom
		 * void
		 */
		function msSetVideoRectangle($left, $top, $right, $bottom);
	
	
		/**
		 * void
		 */
		function webkitEnterFullScreen();
	
	
		/**
		 * void
		 */
		function webkitExitFullScreen();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class HTMLVideoElement_
		{
			/** @var HTMLVideoElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $oldURL
	 */
	interface HashChangeEvent extends Event
	{
	}
}

namespace {
		class HashChangeEvent_
		{
			/** @var HashChangeEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 * @property mixed $state
	 */
	interface History
	{
	
		/**
		 * @param mixed $distance
		 * void
		 */
		function back($distance);
	
	
		/**
		 * @param mixed $distance
		 * void
		 */
		function forward($distance);
	
	
		/**
		 * @param mixed $delta
		 * void
		 */
		function go($delta);
	
	
		/**
		 * @param mixed $statedata
		 * @param string $title
		 * @param string $url
		 * void
		 */
		function pushState($statedata, $title, $url);
	
	
		/**
		 * @param mixed $statedata
		 * @param string $title
		 * @param string $url
		 * void
		 */
		function replaceState($statedata, $title, $url);
	
	}
}

namespace {
		class History_
		{
			/** @var History */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $direction
	 * @property mixed $key
	 * @property mixed $primaryKey
	 * @property mixed $source
	 * @property string $NEXT
	 * @property string $NEXT_NO_DUPLICATE
	 * @property string $PREV
	 * @property string $PREV_NO_DUPLICATE
	 */
	interface IDBCursor
	{
	
		/**
		 * @param number $count
		 * void
		 */
		function advance($count);
	
	
		/**
		 * @param mixed $key
		 * void
		 */
		function continue($key);
	
	
		/**
		 * IDBRequest
		 */
		function delete();
	
	
		/**
		 * @param mixed $value
		 * IDBRequest
		 */
		function update($value);
	
	}
}

namespace {
		class IDBCursor_
		{
			/** @var IDBCursor */
			public $prototype;
		
			/** @var string */
			public $NEXT;
		
			/** @var string */
			public $NEXT_NO_DUPLICATE;
		
			/** @var string */
			public $PREV;
		
			/** @var string */
			public $PREV_NO_DUPLICATE;
		
		}
}

namespace {
	/**
	 * @property mixed $value
	 */
	interface IDBCursorWithValue extends IDBCursor
	{
	}
}

namespace {
		class IDBCursorWithValue_
		{
			/** @var IDBCursorWithValue */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $name
	 * @property DOMStringList $objectStoreNames
	 * @property number $version
	 */
	interface IDBDatabase extends EventTarget
	{
	
		/**
		 * void
		 */
		function close();
	
	
		/**
		 * @param string $name
		 * @param IDBObjectStoreParameters $optionalParameters
		 * IDBObjectStore
		 */
		function createObjectStore($name, $optionalParameters);
	
	
		/**
		 * @param string $name
		 * void
		 */
		function deleteObjectStore($name);
	
	
		/**
		 * @param mixed $storeNames
		 * @param string $mode
		 * IDBTransaction
		 */
		function transaction($storeNames, $mode);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class IDBDatabase_
		{
			/** @var IDBDatabase */
			public $prototype;
		
		}
}

namespace {
	interface IDBFactory
	{
	
		/**
		 * @param mixed $first
		 * @param mixed $second
		 * number
		 */
		function cmp($first, $second);
	
	
		/**
		 * @param string $name
		 * IDBOpenDBRequest
		 */
		function deleteDatabase($name);
	
	
		/**
		 * @param string $name
		 * @param number $version
		 * IDBOpenDBRequest
		 */
		function open($name, $version);
	
	}
}

namespace {
		class IDBFactory_
		{
			/** @var IDBFactory */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string|string[] $keyPath
	 * @property string $name
	 * @property IDBObjectStore $objectStore
	 * @property boolean $unique
	 * @property boolean $multiEntry
	 */
	interface IDBIndex
	{
	
		/**
		 * @param mixed $key
		 * IDBRequest
		 */
		function count($key);
	
	
		/**
		 * @param mixed $key
		 * IDBRequest
		 */
		function get($key);
	
	
		/**
		 * @param mixed $key
		 * IDBRequest
		 */
		function getKey($key);
	
	
		/**
		 * @param IDBKeyRange $range
		 * @param string $direction
		 * IDBRequest
		 */
		function openCursor($range, $direction);
	
	
		/**
		 * @param IDBKeyRange $range
		 * @param string $direction
		 * IDBRequest
		 */
		function openKeyCursor($range, $direction);
	
	}
}

namespace {
		class IDBIndex_
		{
			/** @var IDBIndex */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $lower
	 * @property boolean $lowerOpen
	 * @property mixed $upper
	 * @property boolean $upperOpen
	 */
	interface IDBKeyRange
	{
	}
}

namespace {
		class IDBKeyRange_
		{
			/** @var IDBKeyRange */
			public $prototype;
		
		
			/**
			 * @param mixed $lower
			 * @param mixed $upper
			 * @param boolean $lowerOpen
			 * @param boolean $upperOpen
			 * IDBKeyRange
			 */
			public function bound($lower, $upper, $lowerOpen, $upperOpen)
			{
			}
		
		
			/**
			 * @param mixed $bound
			 * @param boolean $open
			 * IDBKeyRange
			 */
			public function lowerBound($bound, $open)
			{
			}
		
		
			/**
			 * @param mixed $value
			 * IDBKeyRange
			 */
			public function only($value)
			{
			}
		
		
			/**
			 * @param mixed $bound
			 * @param boolean $open
			 * IDBKeyRange
			 */
			public function upperBound($bound, $open)
			{
			}
		
		}
}

namespace {
	/**
	 * @property DOMStringList $indexNames
	 * @property string $keyPath
	 * @property string $name
	 * @property IDBTransaction $transaction
	 */
	interface IDBObjectStore
	{
	
		/**
		 * @param mixed $value
		 * @param mixed $key
		 * IDBRequest
		 */
		function add($value, $key);
	
	
		/**
		 * IDBRequest
		 */
		function clear();
	
	
		/**
		 * @param mixed $key
		 * IDBRequest
		 */
		function count($key);
	
	
		/**
		 * @param string $name
		 * @param string|string[] $keyPath
		 * @param IDBIndexParameters $optionalParameters
		 * IDBIndex
		 */
		function createIndex($name, $keyPath, $optionalParameters);
	
	
		/**
		 * @param mixed $key
		 * IDBRequest
		 */
		function delete($key);
	
	
		/**
		 * @param string $indexName
		 * void
		 */
		function deleteIndex($indexName);
	
	
		/**
		 * @param mixed $key
		 * IDBRequest
		 */
		function get($key);
	
	
		/**
		 * @param string $name
		 * IDBIndex
		 */
		function index($name);
	
	
		/**
		 * @param mixed $range
		 * @param string $direction
		 * IDBRequest
		 */
		function openCursor($range, $direction);
	
	
		/**
		 * @param mixed $value
		 * @param mixed $key
		 * IDBRequest
		 */
		function put($value, $key);
	
	}
}

namespace {
		class IDBObjectStore_
		{
			/** @var IDBObjectStore */
			public $prototype;
		
		}
}

namespace {
	interface IDBOpenDBRequest extends IDBRequest
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class IDBOpenDBRequest_
		{
			/** @var IDBOpenDBRequest */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DOMError $error
	 * @property string $readyState
	 * @property mixed $result
	 * @property mixed $source
	 * @property IDBTransaction $transaction
	 */
	interface IDBRequest extends EventTarget
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class IDBRequest_
		{
			/** @var IDBRequest */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property IDBDatabase $db
	 * @property DOMError $error
	 * @property string $mode
	 * @property string $READ_ONLY
	 * @property string $READ_WRITE
	 * @property string $VERSION_CHANGE
	 */
	interface IDBTransaction extends EventTarget
	{
	
		/**
		 * void
		 */
		function abort();
	
	
		/**
		 * @param string $name
		 * IDBObjectStore
		 */
		function objectStore($name);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class IDBTransaction_
		{
			/** @var IDBTransaction */
			public $prototype;
		
			/** @var string */
			public $READ_ONLY;
		
			/** @var string */
			public $READ_WRITE;
		
			/** @var string */
			public $VERSION_CHANGE;
		
		}
}

namespace {
	/**
	 * @property number $oldVersion
	 */
	interface IDBVersionChangeEvent extends Event
	{
	}
}

namespace {
		class IDBVersionChangeEvent_
		{
			/** @var IDBVersionChangeEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Uint8ClampedArray $data
	 * @property number $height
	 * @property number $width
	 */
	interface ImageData
	{
	}
}

namespace {
		class ImageData_
		{
			/** @var ImageData */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $altKey
	 * @property string $char
	 * @property number $charCode
	 * @property boolean $ctrlKey
	 * @property string $key
	 * @property number $keyCode
	 * @property string $locale
	 * @property number $location
	 * @property boolean $metaKey
	 * @property boolean $repeat
	 * @property boolean $shiftKey
	 * @property number $which
	 * @property number $DOM_KEY_LOCATION_JOYSTICK
	 * @property number $DOM_KEY_LOCATION_LEFT
	 * @property number $DOM_KEY_LOCATION_MOBILE
	 * @property number $DOM_KEY_LOCATION_NUMPAD
	 * @property number $DOM_KEY_LOCATION_RIGHT
	 * @property number $DOM_KEY_LOCATION_STANDARD
	 */
	interface KeyboardEvent extends UIEvent
	{
	
		/**
		 * @param string $keyArg
		 * boolean
		 */
		function getModifierState($keyArg);
	
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param string $keyArg
		 * @param number $locationArg
		 * @param string $modifiersListArg
		 * @param boolean $repeat
		 * @param string $locale
		 * void
		 */
		function initKeyboardEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $keyArg, $locationArg, $modifiersListArg, $repeat, $locale);
	
	}
}

namespace {
		class KeyboardEvent_
		{
			/** @var KeyboardEvent */
			public $prototype;
		
			/** @var number */
			public $DOM_KEY_LOCATION_JOYSTICK;
		
			/** @var number */
			public $DOM_KEY_LOCATION_LEFT;
		
			/** @var number */
			public $DOM_KEY_LOCATION_MOBILE;
		
			/** @var number */
			public $DOM_KEY_LOCATION_NUMPAD;
		
			/** @var number */
			public $DOM_KEY_LOCATION_RIGHT;
		
			/** @var number */
			public $DOM_KEY_LOCATION_STANDARD;
		
		}
}

namespace {
	/**
	 * @property string $hash
	 * @property string $host
	 * @property string $hostname
	 * @property string $href
	 * @property string $origin
	 * @property string $pathname
	 * @property string $port
	 * @property string $protocol
	 * @property string $search
	 */
	interface Location
	{
	
		/**
		 * @param string $url
		 * void
		 */
		function assign($url);
	
	
		/**
		 * @param boolean $forcedReload
		 * void
		 */
		function reload($forcedReload);
	
	
		/**
		 * @param string $url
		 * void
		 */
		function replace($url);
	
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class Location_
		{
			/** @var Location */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $executionTime
	 * @property boolean $stopPageScriptExecution
	 */
	interface LongRunningScriptDetectedEvent extends Event
	{
	}
}

namespace {
		class LongRunningScriptDetectedEvent_
		{
			/** @var LongRunningScriptDetectedEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $CURRENT
	 * @property string $HIGH
	 * @property string $IDLE
	 * @property string $NORMAL
	 */
	interface MSApp
	{
	
		/**
		 * MSAppAsyncOperation
		 */
		function clearTemporaryWebDataAsync();
	
	
		/**
		 * @param string $type
		 * @param mixed $seeker
		 * Blob
		 */
		function createBlobFromRandomAccessStream($type, $seeker);
	
	
		/**
		 * @param mixed $object
		 * mixed
		 */
		function createDataPackage($object);
	
	
		/**
		 * mixed
		 */
		function createDataPackageFromSelection();
	
	
		/**
		 * @param mixed $storageFile
		 * File
		 */
		function createFileFromStorageFile($storageFile);
	
	
		/**
		 * @param string $type
		 * @param mixed $inputStream
		 * MSStream
		 */
		function createStreamFromInputStream($type, $inputStream);
	
	
		/**
		 * @param MSExecAtPriorityFunctionCallback $asynchronousCallback
		 * @param string $priority
		 * @param mixed[] ...$args
		 * void
		 */
		function execAsyncAtPriority($asynchronousCallback, $priority, $args);
	
	
		/**
		 * @param MSExecAtPriorityFunctionCallback $synchronousCallback
		 * @param string $priority
		 * @param mixed[] ...$args
		 * mixed
		 */
		function execAtPriority($synchronousCallback, $priority, $args);
	
	
		/**
		 * string
		 */
		function getCurrentPriority();
	
	
		/**
		 * @param mixed $htmlDoc
		 * mixed
		 */
		function getHtmlPrintDocumentSourceAsync($htmlDoc);
	
	
		/**
		 * @param mixed $view
		 * mixed
		 */
		function getViewId($view);
	
	
		/**
		 * @param string $priority
		 * boolean
		 */
		function isTaskScheduledAtPriorityOrHigher($priority);
	
	
		/**
		 * @param boolean $enabled
		 * void
		 */
		function pageHandlesAllApplicationActivations($enabled);
	
	
		/**
		 * @param boolean $suppress
		 * void
		 */
		function suppressSubdownloadCredentialPrompts($suppress);
	
	
		/**
		 * @param mixed $exceptionObject
		 * void
		 */
		function terminateApp($exceptionObject);
	
	}
}
namespace {
	/**
	 * @const MSApp;
	 */
	const MSApp_=null;
}

namespace {
	/**
	 * @property DOMError $error
	 * @property number $readyState
	 * @property mixed $result
	 * @property number $COMPLETED
	 * @property number $ERROR
	 * @property number $STARTED
	 */
	interface MSAppAsyncOperation extends EventTarget
	{
	
		/**
		 * void
		 */
		function start();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class MSAppAsyncOperation_
		{
			/** @var MSAppAsyncOperation */
			public $prototype;
		
			/** @var number */
			public $COMPLETED;
		
			/** @var number */
			public $ERROR;
		
			/** @var number */
			public $STARTED;
		
		}
}

namespace {
	interface MSBlobBuilder
	{
	
		/**
		 * @param mixed $data
		 * @param string $endings
		 * void
		 */
		function append($data, $endings);
	
	
		/**
		 * @param string $contentType
		 * Blob
		 */
		function getBlob($contentType);
	
	}
}

namespace {
		class MSBlobBuilder_
		{
			/** @var MSBlobBuilder */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $a
	 * @property number $b
	 * @property number $c
	 * @property number $d
	 * @property number $e
	 * @property number $f
	 * @property number $m11
	 * @property number $m12
	 * @property number $m13
	 * @property number $m14
	 * @property number $m21
	 * @property number $m22
	 * @property number $m23
	 * @property number $m24
	 * @property number $m31
	 * @property number $m32
	 * @property number $m33
	 * @property number $m34
	 * @property number $m41
	 * @property number $m42
	 * @property number $m43
	 * @property number $m44
	 */
	interface MSCSSMatrix
	{
	
		/**
		 * MSCSSMatrix
		 */
		function inverse();
	
	
		/**
		 * @param MSCSSMatrix $secondMatrix
		 * MSCSSMatrix
		 */
		function multiply($secondMatrix);
	
	
		/**
		 * @param number $angleX
		 * @param number $angleY
		 * @param number $angleZ
		 * MSCSSMatrix
		 */
		function rotate($angleX, $angleY, $angleZ);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * @param number $angle
		 * MSCSSMatrix
		 */
		function rotateAxisAngle($x, $y, $z, $angle);
	
	
		/**
		 * @param number $scaleX
		 * @param number $scaleY
		 * @param number $scaleZ
		 * MSCSSMatrix
		 */
		function scale($scaleX, $scaleY, $scaleZ);
	
	
		/**
		 * @param string $value
		 * void
		 */
		function setMatrixValue($value);
	
	
		/**
		 * @param number $angle
		 * MSCSSMatrix
		 */
		function skewX($angle);
	
	
		/**
		 * @param number $angle
		 * MSCSSMatrix
		 */
		function skewY($angle);
	
	
		/**
		 * string
		 */
		function toString();
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * MSCSSMatrix
		 */
		function translate($x, $y, $z);
	
	}
}

namespace {
		class MSCSSMatrix_
		{
			/** @var MSCSSMatrix */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Element $target
	 */
	interface MSGesture
	{
	
		/**
		 * @param number $pointerId
		 * void
		 */
		function addPointer($pointerId);
	
	
		/**
		 * void
		 */
		function stop();
	
	}
}

namespace {
		class MSGesture_
		{
			/** @var MSGesture */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $clientX
	 * @property number $clientY
	 * @property number $expansion
	 * @property mixed $gestureObject
	 * @property number $hwTimestamp
	 * @property number $offsetX
	 * @property number $offsetY
	 * @property number $rotation
	 * @property number $scale
	 * @property number $screenX
	 * @property number $screenY
	 * @property number $translationX
	 * @property number $translationY
	 * @property number $velocityAngular
	 * @property number $velocityExpansion
	 * @property number $velocityX
	 * @property number $velocityY
	 * @property number $MSGESTURE_FLAG_BEGIN
	 * @property number $MSGESTURE_FLAG_CANCEL
	 * @property number $MSGESTURE_FLAG_END
	 * @property number $MSGESTURE_FLAG_INERTIA
	 * @property number $MSGESTURE_FLAG_NONE
	 */
	interface MSGestureEvent extends UIEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param number $offsetXArg
		 * @param number $offsetYArg
		 * @param number $translationXArg
		 * @param number $translationYArg
		 * @param number $scaleArg
		 * @param number $expansionArg
		 * @param number $rotationArg
		 * @param number $velocityXArg
		 * @param number $velocityYArg
		 * @param number $velocityExpansionArg
		 * @param number $velocityAngularArg
		 * @param number $hwTimestampArg
		 * void
		 */
		function initGestureEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $offsetXArg, $offsetYArg, $translationXArg, $translationYArg, $scaleArg, $expansionArg, $rotationArg, $velocityXArg, $velocityYArg, $velocityExpansionArg, $velocityAngularArg, $hwTimestampArg);
	
	}
}

namespace {
		class MSGestureEvent_
		{
			/** @var MSGestureEvent */
			public $prototype;
		
			/** @var number */
			public $MSGESTURE_FLAG_BEGIN;
		
			/** @var number */
			public $MSGESTURE_FLAG_CANCEL;
		
			/** @var number */
			public $MSGESTURE_FLAG_END;
		
			/** @var number */
			public $MSGESTURE_FLAG_INERTIA;
		
			/** @var number */
			public $MSGESTURE_FLAG_NONE;
		
		}
}

namespace {
	/**
	 * @property boolean $constrictionActive
	 * @property string $status
	 */
	interface MSGraphicsTrust
	{
	}
}

namespace {
		class MSGraphicsTrust_
		{
			/** @var MSGraphicsTrust */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $canGoBack
	 * @property boolean $canGoForward
	 * @property boolean $containsFullScreenElement
	 * @property string $documentTitle
	 * @property number $height
	 * @property MSWebViewSettings $settings
	 * @property string $src
	 * @property number $width
	 */
	interface MSHTMLWebViewElement extends HTMLElement
	{
	
		/**
		 * @param string $name
		 * @param mixed $applicationObject
		 * void
		 */
		function addWebAllowedObject($name, $applicationObject);
	
	
		/**
		 * @param string $contentIdentifier
		 * @param string $relativePath
		 * string
		 */
		function buildLocalStreamUri($contentIdentifier, $relativePath);
	
	
		/**
		 * MSWebViewAsyncOperation
		 */
		function capturePreviewToBlobAsync();
	
	
		/**
		 * MSWebViewAsyncOperation
		 */
		function captureSelectedContentToDataPackageAsync();
	
	
		/**
		 * @param number $id
		 * DeferredPermissionRequest
		 */
		function getDeferredPermissionRequestById($id);
	
	
		/**
		 * DeferredPermissionRequest[]
		 */
		function getDeferredPermissionRequests();
	
	
		/**
		 * void
		 */
		function goBack();
	
	
		/**
		 * void
		 */
		function goForward();
	
	
		/**
		 * @param string $scriptName
		 * @param mixed[] ...$args
		 * MSWebViewAsyncOperation
		 */
		function invokeScriptAsync($scriptName, $args);
	
	
		/**
		 * @param string $uri
		 * void
		 */
		function navigate($uri);
	
	
		/**
		 * @param string $source
		 * @param mixed $streamResolver
		 * void
		 */
		function navigateToLocalStreamUri($source, $streamResolver);
	
	
		/**
		 * @param string $contents
		 * void
		 */
		function navigateToString($contents);
	
	
		/**
		 * @param mixed $requestMessage
		 * void
		 */
		function navigateWithHttpRequestMessage($requestMessage);
	
	
		/**
		 * void
		 */
		function refresh();
	
	
		/**
		 * void
		 */
		function stop();
	
	}
}

namespace {
		class MSHTMLWebViewElement_
		{
			/** @var MSHTMLWebViewElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $compositionEndOffset
	 * @property number $compositionStartOffset
	 * @property HTMLElement $target
	 */
	interface MSInputMethodContext extends EventTarget
	{
	
		/**
		 * ClientRect
		 */
		function getCandidateWindowClientRect();
	
	
		/**
		 * string[]
		 */
		function getCompositionAlternatives();
	
	
		/**
		 * boolean
		 */
		function hasComposition();
	
	
		/**
		 * boolean
		 */
		function isCandidateWindowVisible();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class MSInputMethodContext_
		{
			/** @var MSInputMethodContext */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $currentState
	 * @property number $inertiaDestinationX
	 * @property number $inertiaDestinationY
	 * @property number $lastState
	 * @property number $MS_MANIPULATION_STATE_ACTIVE
	 * @property number $MS_MANIPULATION_STATE_CANCELLED
	 * @property number $MS_MANIPULATION_STATE_COMMITTED
	 * @property number $MS_MANIPULATION_STATE_DRAGGING
	 * @property number $MS_MANIPULATION_STATE_INERTIA
	 * @property number $MS_MANIPULATION_STATE_PRESELECT
	 * @property number $MS_MANIPULATION_STATE_SELECTING
	 * @property number $MS_MANIPULATION_STATE_STOPPED
	 */
	interface MSManipulationEvent extends UIEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $lastState
		 * @param number $currentState
		 * void
		 */
		function initMSManipulationEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $lastState, $currentState);
	
	}
}

namespace {
		class MSManipulationEvent_
		{
			/** @var MSManipulationEvent */
			public $prototype;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_ACTIVE;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_CANCELLED;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_COMMITTED;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_DRAGGING;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_INERTIA;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_PRESELECT;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_SELECTING;
		
			/** @var number */
			public $MS_MANIPULATION_STATE_STOPPED;
		
		}
}

namespace {
	/**
	 * @property number $code
	 * @property number $systemCode
	 * @property number $MS_MEDIA_KEYERR_CLIENT
	 * @property number $MS_MEDIA_KEYERR_DOMAIN
	 * @property number $MS_MEDIA_KEYERR_HARDWARECHANGE
	 * @property number $MS_MEDIA_KEYERR_OUTPUT
	 * @property number $MS_MEDIA_KEYERR_SERVICE
	 * @property number $MS_MEDIA_KEYERR_UNKNOWN
	 */
	interface MSMediaKeyError
	{
	}
}

namespace {
		class MSMediaKeyError_
		{
			/** @var MSMediaKeyError */
			public $prototype;
		
			/** @var number */
			public $MS_MEDIA_KEYERR_CLIENT;
		
			/** @var number */
			public $MS_MEDIA_KEYERR_DOMAIN;
		
			/** @var number */
			public $MS_MEDIA_KEYERR_HARDWARECHANGE;
		
			/** @var number */
			public $MS_MEDIA_KEYERR_OUTPUT;
		
			/** @var number */
			public $MS_MEDIA_KEYERR_SERVICE;
		
			/** @var number */
			public $MS_MEDIA_KEYERR_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property string $destinationURL
	 * @property Uint8Array $message
	 */
	interface MSMediaKeyMessageEvent extends Event
	{
	}
}

namespace {
		class MSMediaKeyMessageEvent_
		{
			/** @var MSMediaKeyMessageEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Uint8Array $initData
	 */
	interface MSMediaKeyNeededEvent extends Event
	{
	}
}

namespace {
		class MSMediaKeyNeededEvent_
		{
			/** @var MSMediaKeyNeededEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property MSMediaKeyError $error
	 * @property string $keySystem
	 * @property string $sessionId
	 */
	interface MSMediaKeySession extends EventTarget
	{
	
		/**
		 * void
		 */
		function close();
	
	
		/**
		 * @param Uint8Array $key
		 * void
		 */
		function update($key);
	
	}
}

namespace {
		class MSMediaKeySession_
		{
			/** @var MSMediaKeySession */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $keySystem
	 */
	interface MSMediaKeys
	{
	
		/**
		 * @param string $type
		 * @param Uint8Array $initData
		 * @param Uint8Array $cdmData
		 * MSMediaKeySession
		 */
		function createSession($type, $initData, $cdmData);
	
	}
}

namespace {
		class MSMediaKeys_
		{
			/** @var MSMediaKeys */
			public $prototype;
		
		
			/**
			 * @param string $keySystem
			 * @param string $type
			 * boolean
			 */
			public function isTypeSupported($keySystem, $type)
			{
			}
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface MSMimeTypesCollection
	{
	}
}

namespace {
		class MSMimeTypesCollection_
		{
			/** @var MSMimeTypesCollection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface MSPluginsCollection
	{
	
		/**
		 * @param boolean $reload
		 * void
		 */
		function refresh($reload);
	
	}
}

namespace {
		class MSPluginsCollection_
		{
			/** @var MSPluginsCollection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $currentPoint
	 * @property number $height
	 * @property number $hwTimestamp
	 * @property mixed $intermediatePoints
	 * @property boolean $isPrimary
	 * @property number $pointerId
	 * @property mixed $pointerType
	 * @property number $pressure
	 * @property number $rotation
	 * @property number $tiltX
	 * @property number $tiltY
	 * @property number $width
	 */
	interface MSPointerEvent extends MouseEvent
	{
	
		/**
		 * @param Element $element
		 * void
		 */
		function getCurrentPoint($element);
	
	
		/**
		 * @param Element $element
		 * void
		 */
		function getIntermediatePoints($element);
	
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param boolean $ctrlKeyArg
		 * @param boolean $altKeyArg
		 * @param boolean $shiftKeyArg
		 * @param boolean $metaKeyArg
		 * @param number $buttonArg
		 * @param EventTarget $relatedTargetArg
		 * @param number $offsetXArg
		 * @param number $offsetYArg
		 * @param number $widthArg
		 * @param number $heightArg
		 * @param number $pressure
		 * @param number $rotation
		 * @param number $tiltX
		 * @param number $tiltY
		 * @param number $pointerIdArg
		 * @param mixed $pointerType
		 * @param number $hwTimestampArg
		 * @param boolean $isPrimary
		 * void
		 */
		function initPointerEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $ctrlKeyArg, $altKeyArg, $shiftKeyArg, $metaKeyArg, $buttonArg, $relatedTargetArg, $offsetXArg, $offsetYArg, $widthArg, $heightArg, $pressure, $rotation, $tiltX, $tiltY, $pointerIdArg, $pointerType, $hwTimestampArg, $isPrimary);
	
	}
}

namespace {
		class MSPointerEvent_
		{
			/** @var MSPointerEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface MSRangeCollection
	{
	
		/**
		 * @param number $index
		 * Range
		 */
		function item($index);
	
	}
}

namespace {
		class MSRangeCollection_
		{
			/** @var MSRangeCollection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $actionURL
	 * @property number $buttonID
	 */
	interface MSSiteModeEvent extends Event
	{
	}
}

namespace {
		class MSSiteModeEvent_
		{
			/** @var MSSiteModeEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $type
	 */
	interface MSStream
	{
	
		/**
		 * void
		 */
		function msClose();
	
	
		/**
		 * mixed
		 */
		function msDetachStream();
	
	}
}

namespace {
		class MSStream_
		{
			/** @var MSStream */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DOMError $error
	 */
	interface MSStreamReader extends \EventTarget, MSBaseReader
	{
	
		/**
		 * @param MSStream $stream
		 * @param number $size
		 * void
		 */
		function readAsArrayBuffer($stream, $size);
	
	
		/**
		 * @param MSStream $stream
		 * @param number $size
		 * void
		 */
		function readAsBinaryString($stream, $size);
	
	
		/**
		 * @param MSStream $stream
		 * @param number $size
		 * void
		 */
		function readAsBlob($stream, $size);
	
	
		/**
		 * @param MSStream $stream
		 * @param number $size
		 * void
		 */
		function readAsDataURL($stream, $size);
	
	
		/**
		 * @param MSStream $stream
		 * @param string $encoding
		 * @param number $size
		 * void
		 */
		function readAsText($stream, $encoding, $size);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class MSStreamReader_
		{
			/** @var MSStreamReader */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property DOMError $error
	 * @property number $readyState
	 * @property mixed $result
	 * @property MSHTMLWebViewElement $target
	 * @property number $type
	 * @property number $COMPLETED
	 * @property number $ERROR
	 * @property number $STARTED
	 * @property number $TYPE_CAPTURE_PREVIEW_TO_RANDOM_ACCESS_STREAM
	 * @property number $TYPE_CREATE_DATA_PACKAGE_FROM_SELECTION
	 * @property number $TYPE_INVOKE_SCRIPT
	 */
	interface MSWebViewAsyncOperation extends EventTarget
	{
	
		/**
		 * void
		 */
		function start();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class MSWebViewAsyncOperation_
		{
			/** @var MSWebViewAsyncOperation */
			public $prototype;
		
			/** @var number */
			public $COMPLETED;
		
			/** @var number */
			public $ERROR;
		
			/** @var number */
			public $STARTED;
		
			/** @var number */
			public $TYPE_CAPTURE_PREVIEW_TO_RANDOM_ACCESS_STREAM;
		
			/** @var number */
			public $TYPE_CREATE_DATA_PACKAGE_FROM_SELECTION;
		
			/** @var number */
			public $TYPE_INVOKE_SCRIPT;
		
		}
}

namespace {
	/**
	 * @property boolean $isIndexedDBEnabled
	 * @property boolean $isJavaScriptEnabled
	 */
	interface MSWebViewSettings
	{
	}
}

namespace {
		class MSWebViewSettings_
		{
			/** @var MSWebViewSettings */
			public $prototype;
		
		}
}

namespace {
	interface MediaElementAudioSourceNode extends AudioNode
	{
	}
}

namespace {
		class MediaElementAudioSourceNode_
		{
			/** @var MediaElementAudioSourceNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $code
	 * @property number $msExtendedCode
	 * @property number $MEDIA_ERR_ABORTED
	 * @property number $MEDIA_ERR_DECODE
	 * @property number $MEDIA_ERR_NETWORK
	 * @property number $MEDIA_ERR_SRC_NOT_SUPPORTED
	 * @property number $MS_MEDIA_ERR_ENCRYPTED
	 */
	interface MediaError
	{
	}
}

namespace {
		class MediaError_
		{
			/** @var MediaError */
			public $prototype;
		
			/** @var number */
			public $MEDIA_ERR_ABORTED;
		
			/** @var number */
			public $MEDIA_ERR_DECODE;
		
			/** @var number */
			public $MEDIA_ERR_NETWORK;
		
			/** @var number */
			public $MEDIA_ERR_SRC_NOT_SUPPORTED;
		
			/** @var number */
			public $MS_MEDIA_ERR_ENCRYPTED;
		
		}
}

namespace {
	/**
	 * @property number $length
	 * @property string $mediaText
	 */
	interface MediaList
	{
	
		/**
		 * @param string $newMedium
		 * void
		 */
		function appendMedium($newMedium);
	
	
		/**
		 * @param string $oldMedium
		 * void
		 */
		function deleteMedium($oldMedium);
	
	
		/**
		 * @param number $index
		 * string
		 */
		function item($index);
	
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class MediaList_
		{
			/** @var MediaList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $matches
	 * @property string $media
	 */
	interface MediaQueryList
	{
	
		/**
		 * @param MediaQueryListListener $listener
		 * void
		 */
		function addListener($listener);
	
	
		/**
		 * @param MediaQueryListListener $listener
		 * void
		 */
		function removeListener($listener);
	
	}
}

namespace {
		class MediaQueryList_
		{
			/** @var MediaQueryList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SourceBufferList $activeSourceBuffers
	 * @property number $duration
	 * @property string $readyState
	 * @property SourceBufferList $sourceBuffers
	 */
	interface MediaSource extends EventTarget
	{
	
		/**
		 * @param string $type
		 * SourceBuffer
		 */
		function addSourceBuffer($type);
	
	
		/**
		 * @param number $error
		 * void
		 */
		function endOfStream($error);
	
	
		/**
		 * @param SourceBuffer $sourceBuffer
		 * void
		 */
		function removeSourceBuffer($sourceBuffer);
	
	}
}

namespace {
		class MediaSource_
		{
			/** @var MediaSource */
			public $prototype;
		
		
			/**
			 * @param string $type
			 * boolean
			 */
			public function isTypeSupported($type)
			{
			}
		
		}
}

namespace {
	/**
	 * @property MessagePort $port1
	 * @property MessagePort $port2
	 */
	interface MessageChannel
	{
	}
}

namespace {
		class MessageChannel_
		{
			/** @var MessageChannel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $data
	 * @property string $origin
	 * @property mixed $ports
	 * @property Window $source
	 */
	interface MessageEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param mixed $dataArg
		 * @param string $originArg
		 * @param string $lastEventIdArg
		 * @param Window $sourceArg
		 * void
		 */
		function initMessageEvent($typeArg, $canBubbleArg, $cancelableArg, $dataArg, $originArg, $lastEventIdArg, $sourceArg);
	
	}
}

namespace {
		class MessageEvent_
		{
			/** @var MessageEvent */
			public $prototype;
		
		}
}

namespace {
	interface MessagePort extends EventTarget
	{
	
		/**
		 * void
		 */
		function close();
	
	
		/**
		 * @param mixed $message
		 * @param mixed $ports
		 * void
		 */
		function postMessage($message, $ports);
	
	
		/**
		 * void
		 */
		function start();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class MessagePort_
		{
			/** @var MessagePort */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $description
	 * @property Plugin $enabledPlugin
	 * @property string $suffixes
	 * @property string $type
	 */
	interface MimeType
	{
	}
}

namespace {
		class MimeType_
		{
			/** @var MimeType */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface MimeTypeArray
	{
	
		/**
		 * @param number $index
		 * Plugin
		 */
		function item($index);
	
	
		/**
		 * @param string $type
		 * Plugin
		 */
		function namedItem($type);
	
	}
}

namespace {
		class MimeTypeArray_
		{
			/** @var MimeTypeArray */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $altKey
	 * @property number $button
	 * @property number $buttons
	 * @property number $clientX
	 * @property number $clientY
	 * @property boolean $ctrlKey
	 * @property Element $fromElement
	 * @property number $layerX
	 * @property number $layerY
	 * @property boolean $metaKey
	 * @property number $movementX
	 * @property number $movementY
	 * @property number $offsetX
	 * @property number $offsetY
	 * @property number $pageX
	 * @property number $pageY
	 * @property EventTarget $relatedTarget
	 * @property number $screenX
	 * @property number $screenY
	 * @property boolean $shiftKey
	 * @property Element $toElement
	 * @property number $which
	 * @property number $x
	 * @property number $y
	 */
	interface MouseEvent extends UIEvent
	{
	
		/**
		 * @param string $keyArg
		 * boolean
		 */
		function getModifierState($keyArg);
	
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param boolean $ctrlKeyArg
		 * @param boolean $altKeyArg
		 * @param boolean $shiftKeyArg
		 * @param boolean $metaKeyArg
		 * @param number $buttonArg
		 * @param EventTarget $relatedTargetArg
		 * void
		 */
		function initMouseEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $ctrlKeyArg, $altKeyArg, $shiftKeyArg, $metaKeyArg, $buttonArg, $relatedTargetArg);
	
	}
}

namespace {
		class MouseEvent_
		{
			/** @var MouseEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $wheelDelta
	 * @property number $wheelDeltaX
	 * @property number $wheelDeltaY
	 */
	interface MouseWheelEvent extends MouseEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param number $buttonArg
		 * @param EventTarget $relatedTargetArg
		 * @param string $modifiersListArg
		 * @param number $wheelDeltaArg
		 * void
		 */
		function initMouseWheelEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $buttonArg, $relatedTargetArg, $modifiersListArg, $wheelDeltaArg);
	
	}
}

namespace {
		class MouseWheelEvent_
		{
			/** @var MouseWheelEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $attrChange
	 * @property string $attrName
	 * @property string $prevValue
	 * @property Node $relatedNode
	 * @property number $ADDITION
	 * @property number $MODIFICATION
	 * @property number $REMOVAL
	 */
	interface MutationEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Node $relatedNodeArg
		 * @param string $prevValueArg
		 * @param string $newValueArg
		 * @param string $attrNameArg
		 * @param number $attrChangeArg
		 * void
		 */
		function initMutationEvent($typeArg, $canBubbleArg, $cancelableArg, $relatedNodeArg, $prevValueArg, $newValueArg, $attrNameArg, $attrChangeArg);
	
	}
}

namespace {
		class MutationEvent_
		{
			/** @var MutationEvent */
			public $prototype;
		
			/** @var number */
			public $ADDITION;
		
			/** @var number */
			public $MODIFICATION;
		
			/** @var number */
			public $REMOVAL;
		
		}
}

namespace {
	interface MutationObserver
	{
	
		/**
		 * void
		 */
		function disconnect();
	
	
		/**
		 * @param Node $target
		 * @param MutationObserverInit $options
		 * void
		 */
		function observe($target, $options);
	
	
		/**
		 * MutationRecord[]
		 */
		function takeRecords();
	
	}
}

namespace {
		class MutationObserver_
		{
			/** @var MutationObserver */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property NodeList $addedNodes
	 * @property string $attributeName
	 * @property string $attributeNamespace
	 * @property Node $nextSibling
	 * @property string $oldValue
	 * @property Node $previousSibling
	 * @property NodeList $removedNodes
	 * @property Node $target
	 * @property string $type
	 */
	interface MutationRecord
	{
	}
}

namespace {
		class MutationRecord_
		{
			/** @var MutationRecord */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface NamedNodeMap
	{
	
		/**
		 * @param string $name
		 * Attr
		 */
		function getNamedItem($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * Attr
		 */
		function getNamedItemNS($namespaceURI, $localName);
	
	
		/**
		 * @param number $index
		 * Attr
		 */
		function item($index);
	
	
		/**
		 * @param string $name
		 * Attr
		 */
		function removeNamedItem($name);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * Attr
		 */
		function removeNamedItemNS($namespaceURI, $localName);
	
	
		/**
		 * @param Attr $arg
		 * Attr
		 */
		function setNamedItem($arg);
	
	
		/**
		 * @param Attr $arg
		 * Attr
		 */
		function setNamedItemNS($arg);
	
	}
}

namespace {
		class NamedNodeMap_
		{
			/** @var NamedNodeMap */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $isSuccess
	 * @property number $webErrorStatus
	 */
	interface NavigationCompletedEvent extends NavigationEvent
	{
	}
}

namespace {
		class NavigationCompletedEvent_
		{
			/** @var NavigationCompletedEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $uri
	 */
	interface NavigationEvent extends Event
	{
	}
}

namespace {
		class NavigationEvent_
		{
			/** @var NavigationEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $referer
	 */
	interface NavigationEventWithReferrer extends NavigationEvent
	{
	}
}

namespace {
		class NavigationEventWithReferrer_
		{
			/** @var NavigationEventWithReferrer */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $appCodeName
	 * @property string $appMinorVersion
	 * @property string $browserLanguage
	 * @property number $connectionSpeed
	 * @property boolean $cookieEnabled
	 * @property string $cpuClass
	 * @property string $language
	 * @property number $maxTouchPoints
	 * @property MSMimeTypesCollection $mimeTypes
	 * @property boolean $msManipulationViewsEnabled
	 * @property number $msMaxTouchPoints
	 * @property boolean $msPointerEnabled
	 * @property MSPluginsCollection $plugins
	 * @property boolean $pointerEnabled
	 * @property string $systemLanguage
	 * @property string $userLanguage
	 * @property boolean $webdriver
	 */
	interface Navigator extends \Object, NavigatorID, NavigatorOnLine, NavigatorContentUtils, NavigatorStorageUtils, NavigatorGeolocation, MSNavigatorDoNotTrack, MSFileSaver
	{
	
		/**
		 * Gamepad[]
		 */
		function getGamepads();
	
	
		/**
		 * boolean
		 */
		function javaEnabled();
	
	
		/**
		 * @param string $uri
		 * @param MSLaunchUriCallback $successCallback
		 * @param MSLaunchUriCallback $noHandlerCallback
		 * void
		 */
		function msLaunchUri($uri, $successCallback, $noHandlerCallback);
	
	
		/**
		 * @param number|number[] $pattern
		 * boolean
		 */
		function vibrate($pattern);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class Navigator_
		{
			/** @var Navigator */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property NamedNodeMap $attributes
	 * @property string $baseURI
	 * @property NodeList $childNodes
	 * @property Node $firstChild
	 * @property Node $lastChild
	 * @property string $localName
	 * @property string $namespaceURI
	 * @property Node $nextSibling
	 * @property string $nodeName
	 * @property number $nodeType
	 * @property string $nodeValue
	 * @property Document $ownerDocument
	 * @property HTMLElement $parentElement
	 * @property Node $parentNode
	 * @property string $prefix
	 * @property Node $previousSibling
	 * @property string $textContent
	 * @property number $ATTRIBUTE_NODE
	 * @property number $CDATA_SECTION_NODE
	 * @property number $COMMENT_NODE
	 * @property number $DOCUMENT_FRAGMENT_NODE
	 * @property number $DOCUMENT_NODE
	 * @property number $DOCUMENT_POSITION_CONTAINED_BY
	 * @property number $DOCUMENT_POSITION_CONTAINS
	 * @property number $DOCUMENT_POSITION_DISCONNECTED
	 * @property number $DOCUMENT_POSITION_FOLLOWING
	 * @property number $DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC
	 * @property number $DOCUMENT_POSITION_PRECEDING
	 * @property number $DOCUMENT_TYPE_NODE
	 * @property number $ELEMENT_NODE
	 * @property number $ENTITY_NODE
	 * @property number $ENTITY_REFERENCE_NODE
	 * @property number $NOTATION_NODE
	 * @property number $PROCESSING_INSTRUCTION_NODE
	 * @property number $TEXT_NODE
	 */
	interface Node extends EventTarget
	{
	
		/**
		 * @param Node $newChild
		 * Node
		 */
		function appendChild($newChild);
	
	
		/**
		 * @param boolean $deep
		 * Node
		 */
		function cloneNode($deep);
	
	
		/**
		 * @param Node $other
		 * number
		 */
		function compareDocumentPosition($other);
	
	
		/**
		 * boolean
		 */
		function hasAttributes();
	
	
		/**
		 * boolean
		 */
		function hasChildNodes();
	
	
		/**
		 * @param Node $newChild
		 * @param Node $refChild
		 * Node
		 */
		function insertBefore($newChild, $refChild);
	
	
		/**
		 * @param string $namespaceURI
		 * boolean
		 */
		function isDefaultNamespace($namespaceURI);
	
	
		/**
		 * @param Node $arg
		 * boolean
		 */
		function isEqualNode($arg);
	
	
		/**
		 * @param Node $other
		 * boolean
		 */
		function isSameNode($other);
	
	
		/**
		 * @param string $prefix
		 * string
		 */
		function lookupNamespaceURI($prefix);
	
	
		/**
		 * @param string $namespaceURI
		 * string
		 */
		function lookupPrefix($namespaceURI);
	
	
		/**
		 * void
		 */
		function normalize();
	
	
		/**
		 * @param Node $oldChild
		 * Node
		 */
		function removeChild($oldChild);
	
	
		/**
		 * @param Node $newChild
		 * @param Node $oldChild
		 * Node
		 */
		function replaceChild($newChild, $oldChild);
	
	
		/**
		 * @param Node $node
		 * boolean
		 */
		function contains($node);
	
	}
}

namespace {
		class Node_
		{
			/** @var Node */
			public $prototype;
		
			/** @var number */
			public $ATTRIBUTE_NODE;
		
			/** @var number */
			public $CDATA_SECTION_NODE;
		
			/** @var number */
			public $COMMENT_NODE;
		
			/** @var number */
			public $DOCUMENT_FRAGMENT_NODE;
		
			/** @var number */
			public $DOCUMENT_NODE;
		
			/** @var number */
			public $DOCUMENT_POSITION_CONTAINED_BY;
		
			/** @var number */
			public $DOCUMENT_POSITION_CONTAINS;
		
			/** @var number */
			public $DOCUMENT_POSITION_DISCONNECTED;
		
			/** @var number */
			public $DOCUMENT_POSITION_FOLLOWING;
		
			/** @var number */
			public $DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC;
		
			/** @var number */
			public $DOCUMENT_POSITION_PRECEDING;
		
			/** @var number */
			public $DOCUMENT_TYPE_NODE;
		
			/** @var number */
			public $ELEMENT_NODE;
		
			/** @var number */
			public $ENTITY_NODE;
		
			/** @var number */
			public $ENTITY_REFERENCE_NODE;
		
			/** @var number */
			public $NOTATION_NODE;
		
			/** @var number */
			public $PROCESSING_INSTRUCTION_NODE;
		
			/** @var number */
			public $TEXT_NODE;
		
		}
}

namespace {
	interface NodeFilter
	{
	
		/**
		 * @param Node $n
		 * number
		 */
		function acceptNode($n);
	
	}
}

namespace {
		class NodeFilter_
		{
			/** @var number */
			public $FILTER_ACCEPT;
		
			/** @var number */
			public $FILTER_REJECT;
		
			/** @var number */
			public $FILTER_SKIP;
		
			/** @var number */
			public $SHOW_ALL;
		
			/** @var number */
			public $SHOW_ATTRIBUTE;
		
			/** @var number */
			public $SHOW_CDATA_SECTION;
		
			/** @var number */
			public $SHOW_COMMENT;
		
			/** @var number */
			public $SHOW_DOCUMENT;
		
			/** @var number */
			public $SHOW_DOCUMENT_FRAGMENT;
		
			/** @var number */
			public $SHOW_DOCUMENT_TYPE;
		
			/** @var number */
			public $SHOW_ELEMENT;
		
			/** @var number */
			public $SHOW_ENTITY;
		
			/** @var number */
			public $SHOW_ENTITY_REFERENCE;
		
			/** @var number */
			public $SHOW_NOTATION;
		
			/** @var number */
			public $SHOW_PROCESSING_INSTRUCTION;
		
			/** @var number */
			public $SHOW_TEXT;
		
		}
}

namespace {
	/**
	 * @property boolean $expandEntityReferences
	 * @property NodeFilter $filter
	 * @property Node $root
	 * @property number $whatToShow
	 */
	interface NodeIterator
	{
	
		/**
		 * void
		 */
		function detach();
	
	
		/**
		 * Node
		 */
		function nextNode();
	
	
		/**
		 * Node
		 */
		function previousNode();
	
	}
}

namespace {
		class NodeIterator_
		{
			/** @var NodeIterator */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface NodeList
	{
	
		/**
		 * @param number $index
		 * Node
		 */
		function item($index);
	
	}
}

namespace {
		class NodeList_
		{
			/** @var NodeList */
			public $prototype;
		
		}
}

namespace {
	interface OES_element_index_uint
	{
	}
}

namespace {
		class OES_element_index_uint_
		{
			/** @var OES_element_index_uint */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $FRAGMENT_SHADER_DERIVATIVE_HINT_OES
	 */
	interface OES_standard_derivatives
	{
	}
}

namespace {
		class OES_standard_derivatives_
		{
			/** @var OES_standard_derivatives */
			public $prototype;
		
			/** @var number */
			public $FRAGMENT_SHADER_DERIVATIVE_HINT_OES;
		
		}
}

namespace {
	interface OES_texture_float
	{
	}
}

namespace {
		class OES_texture_float_
		{
			/** @var OES_texture_float */
			public $prototype;
		
		}
}

namespace {
	interface OES_texture_float_linear
	{
	}
}

namespace {
		class OES_texture_float_linear_
		{
			/** @var OES_texture_float_linear */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioBuffer $renderedBuffer
	 */
	interface OfflineAudioCompletionEvent extends Event
	{
	}
}

namespace {
		class OfflineAudioCompletionEvent_
		{
			/** @var OfflineAudioCompletionEvent */
			public $prototype;
		
		}
}

namespace {
	interface OfflineAudioContext extends AudioContext
	{
	
		/**
		 * void
		 */
		function startRendering();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class OfflineAudioContext_
		{
			/** @var OfflineAudioContext */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioParam $detune
	 * @property AudioParam $frequency
	 * @property string $type
	 */
	interface OscillatorNode extends AudioNode
	{
	
		/**
		 * @param PeriodicWave $periodicWave
		 * void
		 */
		function setPeriodicWave($periodicWave);
	
	
		/**
		 * @param number $when
		 * void
		 */
		function start($when);
	
	
		/**
		 * @param number $when
		 * void
		 */
		function stop($when);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class OscillatorNode_
		{
			/** @var OscillatorNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $persisted
	 */
	interface PageTransitionEvent extends Event
	{
	}
}

namespace {
		class PageTransitionEvent_
		{
			/** @var PageTransitionEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $coneInnerAngle
	 * @property number $coneOuterAngle
	 * @property number $coneOuterGain
	 * @property string $distanceModel
	 * @property number $maxDistance
	 * @property string $panningModel
	 * @property number $refDistance
	 * @property number $rolloffFactor
	 */
	interface PannerNode extends AudioNode
	{
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function setOrientation($x, $y, $z);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function setPosition($x, $y, $z);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function setVelocity($x, $y, $z);
	
	}
}

namespace {
		class PannerNode_
		{
			/** @var PannerNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $activeNetworkRequestCount
	 * @property number $averageFrameTime
	 * @property number $averagePaintTime
	 * @property boolean $extraInformationEnabled
	 * @property boolean $independentRenderingEnabled
	 * @property string $irDisablingContentString
	 * @property boolean $irStatusAvailable
	 * @property number $maxCpuSpeed
	 * @property number $paintRequestsPerSecond
	 * @property number $performanceCounter
	 * @property number $performanceCounterFrequency
	 */
	interface PerfWidgetExternal
	{
	
		/**
		 * @param string $eventType
		 * @param callable $callback
		 * void
		 */
		function addEventListener($eventType, $callback);
	
	
		/**
		 * number
		 */
		function getMemoryUsage();
	
	
		/**
		 * number
		 */
		function getProcessCpuUsage();
	
	
		/**
		 * @param number $last
		 * mixed
		 */
		function getRecentCpuUsage($last);
	
	
		/**
		 * @param number $last
		 * mixed
		 */
		function getRecentFrames($last);
	
	
		/**
		 * @param number $last
		 * mixed
		 */
		function getRecentMemoryUsage($last);
	
	
		/**
		 * @param number $last
		 * mixed
		 */
		function getRecentPaintRequests($last);
	
	
		/**
		 * @param string $eventType
		 * @param callable $callback
		 * void
		 */
		function removeEventListener($eventType, $callback);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function repositionWindow($x, $y);
	
	
		/**
		 * @param number $width
		 * @param number $height
		 * void
		 */
		function resizeWindow($width, $height);
	
	}
}

namespace {
		class PerfWidgetExternal_
		{
			/** @var PerfWidgetExternal */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property PerformanceNavigation $navigation
	 * @property PerformanceTiming $timing
	 */
	interface Performance
	{
	
		/**
		 * @param string $markName
		 * void
		 */
		function clearMarks($markName);
	
	
		/**
		 * @param string $measureName
		 * void
		 */
		function clearMeasures($measureName);
	
	
		/**
		 * void
		 */
		function clearResourceTimings();
	
	
		/**
		 * mixed
		 */
		function getEntries();
	
	
		/**
		 * @param string $name
		 * @param string $entryType
		 * mixed
		 */
		function getEntriesByName($name, $entryType);
	
	
		/**
		 * @param string $entryType
		 * mixed
		 */
		function getEntriesByType($entryType);
	
	
		/**
		 * @param string $markName
		 * mixed
		 */
		function getMarks($markName);
	
	
		/**
		 * @param string $measureName
		 * mixed
		 */
		function getMeasures($measureName);
	
	
		/**
		 * @param string $markName
		 * void
		 */
		function mark($markName);
	
	
		/**
		 * @param string $measureName
		 * @param string $startMarkName
		 * @param string $endMarkName
		 * void
		 */
		function measure($measureName, $startMarkName, $endMarkName);
	
	
		/**
		 * number
		 */
		function now();
	
	
		/**
		 * @param number $maxSize
		 * void
		 */
		function setResourceTimingBufferSize($maxSize);
	
	
		/**
		 * mixed
		 */
		function toJSON();
	
	}
}

namespace {
		class Performance_
		{
			/** @var Performance */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $duration
	 * @property string $entryType
	 * @property string $name
	 * @property number $startTime
	 */
	interface PerformanceEntry
	{
	}
}

namespace {
		class PerformanceEntry_
		{
			/** @var PerformanceEntry */
			public $prototype;
		
		}
}

namespace {
	interface PerformanceMark extends PerformanceEntry
	{
	}
}

namespace {
		class PerformanceMark_
		{
			/** @var PerformanceMark */
			public $prototype;
		
		}
}

namespace {
	interface PerformanceMeasure extends PerformanceEntry
	{
	}
}

namespace {
		class PerformanceMeasure_
		{
			/** @var PerformanceMeasure */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $redirectCount
	 * @property number $type
	 * @property number $TYPE_BACK_FORWARD
	 * @property number $TYPE_NAVIGATE
	 * @property number $TYPE_RELOAD
	 * @property number $TYPE_RESERVED
	 */
	interface PerformanceNavigation
	{
	
		/**
		 * mixed
		 */
		function toJSON();
	
	}
}

namespace {
		class PerformanceNavigation_
		{
			/** @var PerformanceNavigation */
			public $prototype;
		
			/** @var number */
			public $TYPE_BACK_FORWARD;
		
			/** @var number */
			public $TYPE_NAVIGATE;
		
			/** @var number */
			public $TYPE_RELOAD;
		
			/** @var number */
			public $TYPE_RESERVED;
		
		}
}

namespace {
	/**
	 * @property number $connectEnd
	 * @property number $connectStart
	 * @property number $domComplete
	 * @property number $domContentLoadedEventEnd
	 * @property number $domContentLoadedEventStart
	 * @property number $domInteractive
	 * @property number $domLoading
	 * @property number $domainLookupEnd
	 * @property number $domainLookupStart
	 * @property number $fetchStart
	 * @property number $loadEventEnd
	 * @property number $loadEventStart
	 * @property number $navigationStart
	 * @property number $redirectCount
	 * @property number $redirectEnd
	 * @property number $redirectStart
	 * @property number $requestStart
	 * @property number $responseEnd
	 * @property number $responseStart
	 * @property string $type
	 * @property number $unloadEventEnd
	 * @property number $unloadEventStart
	 */
	interface PerformanceNavigationTiming extends PerformanceEntry
	{
	}
}

namespace {
		class PerformanceNavigationTiming_
		{
			/** @var PerformanceNavigationTiming */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $connectEnd
	 * @property number $connectStart
	 * @property number $domainLookupEnd
	 * @property number $domainLookupStart
	 * @property number $fetchStart
	 * @property string $initiatorType
	 * @property number $redirectEnd
	 * @property number $redirectStart
	 * @property number $requestStart
	 * @property number $responseEnd
	 * @property number $responseStart
	 */
	interface PerformanceResourceTiming extends PerformanceEntry
	{
	}
}

namespace {
		class PerformanceResourceTiming_
		{
			/** @var PerformanceResourceTiming */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $connectEnd
	 * @property number $connectStart
	 * @property number $domComplete
	 * @property number $domContentLoadedEventEnd
	 * @property number $domContentLoadedEventStart
	 * @property number $domInteractive
	 * @property number $domLoading
	 * @property number $domainLookupEnd
	 * @property number $domainLookupStart
	 * @property number $fetchStart
	 * @property number $loadEventEnd
	 * @property number $loadEventStart
	 * @property number $msFirstPaint
	 * @property number $navigationStart
	 * @property number $redirectEnd
	 * @property number $redirectStart
	 * @property number $requestStart
	 * @property number $responseEnd
	 * @property number $responseStart
	 * @property number $unloadEventEnd
	 * @property number $unloadEventStart
	 */
	interface PerformanceTiming
	{
	
		/**
		 * mixed
		 */
		function toJSON();
	
	}
}

namespace {
		class PerformanceTiming_
		{
			/** @var PerformanceTiming */
			public $prototype;
		
		}
}

namespace {
	interface PeriodicWave
	{
	}
}

namespace {
		class PeriodicWave_
		{
			/** @var PeriodicWave */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $state
	 */
	interface PermissionRequest extends DeferredPermissionRequest
	{
	
		/**
		 * void
		 */
		function defer();
	
	}
}

namespace {
		class PermissionRequest_
		{
			/** @var PermissionRequest */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property PermissionRequest $permissionRequest
	 */
	interface PermissionRequestedEvent extends Event
	{
	}
}

namespace {
		class PermissionRequestedEvent_
		{
			/** @var PermissionRequestedEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $description
	 * @property string $filename
	 * @property number $length
	 * @property string $name
	 * @property string $version
	 */
	interface Plugin
	{
	
		/**
		 * @param number $index
		 * MimeType
		 */
		function item($index);
	
	
		/**
		 * @param string $type
		 * MimeType
		 */
		function namedItem($type);
	
	}
}

namespace {
		class Plugin_
		{
			/** @var Plugin */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface PluginArray
	{
	
		/**
		 * @param number $index
		 * Plugin
		 */
		function item($index);
	
	
		/**
		 * @param string $name
		 * Plugin
		 */
		function namedItem($name);
	
	
		/**
		 * @param boolean $reload
		 * void
		 */
		function refresh($reload);
	
	}
}

namespace {
		class PluginArray_
		{
			/** @var PluginArray */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $currentPoint
	 * @property number $height
	 * @property number $hwTimestamp
	 * @property mixed $intermediatePoints
	 * @property boolean $isPrimary
	 * @property number $pointerId
	 * @property mixed $pointerType
	 * @property number $pressure
	 * @property number $rotation
	 * @property number $tiltX
	 * @property number $tiltY
	 * @property number $width
	 */
	interface PointerEvent extends MouseEvent
	{
	
		/**
		 * @param Element $element
		 * void
		 */
		function getCurrentPoint($element);
	
	
		/**
		 * @param Element $element
		 * void
		 */
		function getIntermediatePoints($element);
	
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param boolean $ctrlKeyArg
		 * @param boolean $altKeyArg
		 * @param boolean $shiftKeyArg
		 * @param boolean $metaKeyArg
		 * @param number $buttonArg
		 * @param EventTarget $relatedTargetArg
		 * @param number $offsetXArg
		 * @param number $offsetYArg
		 * @param number $widthArg
		 * @param number $heightArg
		 * @param number $pressure
		 * @param number $rotation
		 * @param number $tiltX
		 * @param number $tiltY
		 * @param number $pointerIdArg
		 * @param mixed $pointerType
		 * @param number $hwTimestampArg
		 * @param boolean $isPrimary
		 * void
		 */
		function initPointerEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $ctrlKeyArg, $altKeyArg, $shiftKeyArg, $metaKeyArg, $buttonArg, $relatedTargetArg, $offsetXArg, $offsetYArg, $widthArg, $heightArg, $pressure, $rotation, $tiltX, $tiltY, $pointerIdArg, $pointerType, $hwTimestampArg, $isPrimary);
	
	}
}

namespace {
		class PointerEvent_
		{
			/** @var PointerEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $state
	 */
	interface PopStateEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param mixed $stateArg
		 * void
		 */
		function initPopStateEvent($typeArg, $canBubbleArg, $cancelableArg, $stateArg);
	
	}
}

namespace {
		class PopStateEvent_
		{
			/** @var PopStateEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Coordinates $coords
	 * @property number $timestamp
	 */
	interface Position
	{
	}
}

namespace {
		class Position_
		{
			/** @var Position */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $code
	 * @property string $message
	 * @property number $PERMISSION_DENIED
	 * @property number $POSITION_UNAVAILABLE
	 * @property number $TIMEOUT
	 */
	interface PositionError
	{
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class PositionError_
		{
			/** @var PositionError */
			public $prototype;
		
			/** @var number */
			public $PERMISSION_DENIED;
		
			/** @var number */
			public $POSITION_UNAVAILABLE;
		
			/** @var number */
			public $TIMEOUT;
		
		}
}

namespace {
	/**
	 * @property string $target
	 */
	interface ProcessingInstruction extends CharacterData
	{
	}
}

namespace {
		class ProcessingInstruction_
		{
			/** @var ProcessingInstruction */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $lengthComputable
	 * @property number $loaded
	 * @property number $total
	 */
	interface ProgressEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param boolean $lengthComputableArg
		 * @param number $loadedArg
		 * @param number $totalArg
		 * void
		 */
		function initProgressEvent($typeArg, $canBubbleArg, $cancelableArg, $lengthComputableArg, $loadedArg, $totalArg);
	
	}
}

namespace {
		class ProgressEvent_
		{
			/** @var ProgressEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $collapsed
	 * @property Node $commonAncestorContainer
	 * @property Node $endContainer
	 * @property number $endOffset
	 * @property Node $startContainer
	 * @property number $startOffset
	 * @property number $END_TO_END
	 * @property number $END_TO_START
	 * @property number $START_TO_END
	 * @property number $START_TO_START
	 */
	interface Range
	{
	
		/**
		 * DocumentFragment
		 */
		function cloneContents();
	
	
		/**
		 * Range
		 */
		function cloneRange();
	
	
		/**
		 * @param boolean $toStart
		 * void
		 */
		function collapse($toStart);
	
	
		/**
		 * @param number $how
		 * @param Range $sourceRange
		 * number
		 */
		function compareBoundaryPoints($how, $sourceRange);
	
	
		/**
		 * @param string $fragment
		 * DocumentFragment
		 */
		function createContextualFragment($fragment);
	
	
		/**
		 * void
		 */
		function deleteContents();
	
	
		/**
		 * void
		 */
		function detach();
	
	
		/**
		 * @param string $Unit
		 * boolean
		 */
		function expand($Unit);
	
	
		/**
		 * DocumentFragment
		 */
		function extractContents();
	
	
		/**
		 * ClientRect
		 */
		function getBoundingClientRect();
	
	
		/**
		 * ClientRectList
		 */
		function getClientRects();
	
	
		/**
		 * @param Node $newNode
		 * void
		 */
		function insertNode($newNode);
	
	
		/**
		 * @param Node $refNode
		 * void
		 */
		function selectNode($refNode);
	
	
		/**
		 * @param Node $refNode
		 * void
		 */
		function selectNodeContents($refNode);
	
	
		/**
		 * @param Node $refNode
		 * @param number $offset
		 * void
		 */
		function setEnd($refNode, $offset);
	
	
		/**
		 * @param Node $refNode
		 * void
		 */
		function setEndAfter($refNode);
	
	
		/**
		 * @param Node $refNode
		 * void
		 */
		function setEndBefore($refNode);
	
	
		/**
		 * @param Node $refNode
		 * @param number $offset
		 * void
		 */
		function setStart($refNode, $offset);
	
	
		/**
		 * @param Node $refNode
		 * void
		 */
		function setStartAfter($refNode);
	
	
		/**
		 * @param Node $refNode
		 * void
		 */
		function setStartBefore($refNode);
	
	
		/**
		 * @param Node $newParent
		 * void
		 */
		function surroundContents($newParent);
	
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class Range_
		{
			/** @var Range */
			public $prototype;
		
			/** @var number */
			public $END_TO_END;
		
			/** @var number */
			public $END_TO_START;
		
			/** @var number */
			public $START_TO_END;
		
			/** @var number */
			public $START_TO_START;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $target
	 */
	interface SVGAElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGURIReference
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGAElement_
		{
			/** @var SVGAElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $unitType
	 * @property number $value
	 * @property string $valueAsString
	 * @property number $valueInSpecifiedUnits
	 * @property number $SVG_ANGLETYPE_DEG
	 * @property number $SVG_ANGLETYPE_GRAD
	 * @property number $SVG_ANGLETYPE_RAD
	 * @property number $SVG_ANGLETYPE_UNKNOWN
	 * @property number $SVG_ANGLETYPE_UNSPECIFIED
	 */
	interface SVGAngle
	{
	
		/**
		 * @param number $unitType
		 * void
		 */
		function convertToSpecifiedUnits($unitType);
	
	}
}

namespace {
		class SVGAngle_
		{
			/** @var SVGAngle */
			public $prototype;
		
			/** @var number */
			public $SVG_ANGLETYPE_DEG;
		
			/** @var number */
			public $SVG_ANGLETYPE_GRAD;
		
			/** @var number */
			public $SVG_ANGLETYPE_RAD;
		
			/** @var number */
			public $SVG_ANGLETYPE_UNKNOWN;
		
			/** @var number */
			public $SVG_ANGLETYPE_UNSPECIFIED;
		
		}
}

namespace {
	/**
	 * @property SVGAngle $animVal
	 * @property SVGAngle $baseVal
	 */
	interface SVGAnimatedAngle
	{
	}
}

namespace {
		class SVGAnimatedAngle_
		{
			/** @var SVGAnimatedAngle */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $animVal
	 * @property boolean $baseVal
	 */
	interface SVGAnimatedBoolean
	{
	}
}

namespace {
		class SVGAnimatedBoolean_
		{
			/** @var SVGAnimatedBoolean */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $animVal
	 * @property number $baseVal
	 */
	interface SVGAnimatedEnumeration
	{
	}
}

namespace {
		class SVGAnimatedEnumeration_
		{
			/** @var SVGAnimatedEnumeration */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $animVal
	 * @property number $baseVal
	 */
	interface SVGAnimatedInteger
	{
	}
}

namespace {
		class SVGAnimatedInteger_
		{
			/** @var SVGAnimatedInteger */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGLength $animVal
	 * @property SVGLength $baseVal
	 */
	interface SVGAnimatedLength
	{
	}
}

namespace {
		class SVGAnimatedLength_
		{
			/** @var SVGAnimatedLength */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGLengthList $animVal
	 * @property SVGLengthList $baseVal
	 */
	interface SVGAnimatedLengthList
	{
	}
}

namespace {
		class SVGAnimatedLengthList_
		{
			/** @var SVGAnimatedLengthList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $animVal
	 * @property number $baseVal
	 */
	interface SVGAnimatedNumber
	{
	}
}

namespace {
		class SVGAnimatedNumber_
		{
			/** @var SVGAnimatedNumber */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGNumberList $animVal
	 * @property SVGNumberList $baseVal
	 */
	interface SVGAnimatedNumberList
	{
	}
}

namespace {
		class SVGAnimatedNumberList_
		{
			/** @var SVGAnimatedNumberList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGPreserveAspectRatio $animVal
	 * @property SVGPreserveAspectRatio $baseVal
	 */
	interface SVGAnimatedPreserveAspectRatio
	{
	}
}

namespace {
		class SVGAnimatedPreserveAspectRatio_
		{
			/** @var SVGAnimatedPreserveAspectRatio */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGRect $animVal
	 * @property SVGRect $baseVal
	 */
	interface SVGAnimatedRect
	{
	}
}

namespace {
		class SVGAnimatedRect_
		{
			/** @var SVGAnimatedRect */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $animVal
	 * @property string $baseVal
	 */
	interface SVGAnimatedString
	{
	}
}

namespace {
		class SVGAnimatedString_
		{
			/** @var SVGAnimatedString */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGTransformList $animVal
	 * @property SVGTransformList $baseVal
	 */
	interface SVGAnimatedTransformList
	{
	}
}

namespace {
		class SVGAnimatedTransformList_
		{
			/** @var SVGAnimatedTransformList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $cx
	 * @property SVGAnimatedLength $cy
	 * @property SVGAnimatedLength $r
	 */
	interface SVGCircleElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGCircleElement_
		{
			/** @var SVGCircleElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedEnumeration $clipPathUnits
	 */
	interface SVGClipPathElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGUnitTypes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGClipPathElement_
		{
			/** @var SVGClipPathElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $amplitude
	 * @property SVGAnimatedNumber $exponent
	 * @property SVGAnimatedNumber $intercept
	 * @property SVGAnimatedNumber $offset
	 * @property SVGAnimatedNumber $slope
	 * @property SVGAnimatedNumberList $tableValues
	 * @property SVGAnimatedEnumeration $type
	 * @property number $SVG_FECOMPONENTTRANSFER_TYPE_DISCRETE
	 * @property number $SVG_FECOMPONENTTRANSFER_TYPE_GAMMA
	 * @property number $SVG_FECOMPONENTTRANSFER_TYPE_IDENTITY
	 * @property number $SVG_FECOMPONENTTRANSFER_TYPE_LINEAR
	 * @property number $SVG_FECOMPONENTTRANSFER_TYPE_TABLE
	 * @property number $SVG_FECOMPONENTTRANSFER_TYPE_UNKNOWN
	 */
	interface SVGComponentTransferFunctionElement extends SVGElement
	{
	}
}

namespace {
		class SVGComponentTransferFunctionElement_
		{
			/** @var SVGComponentTransferFunctionElement */
			public $prototype;
		
			/** @var number */
			public $SVG_FECOMPONENTTRANSFER_TYPE_DISCRETE;
		
			/** @var number */
			public $SVG_FECOMPONENTTRANSFER_TYPE_GAMMA;
		
			/** @var number */
			public $SVG_FECOMPONENTTRANSFER_TYPE_IDENTITY;
		
			/** @var number */
			public $SVG_FECOMPONENTTRANSFER_TYPE_LINEAR;
		
			/** @var number */
			public $SVG_FECOMPONENTTRANSFER_TYPE_TABLE;
		
			/** @var number */
			public $SVG_FECOMPONENTTRANSFER_TYPE_UNKNOWN;
		
		}
}

namespace {
	interface SVGDefsElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGDefsElement_
		{
			/** @var SVGDefsElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGDescElement extends \SVGElement, SVGStylable, SVGLangSpace
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGDescElement_
		{
			/** @var SVGDescElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $id
	 * @property SVGSVGElement $ownerSVGElement
	 * @property SVGElement $viewportElement
	 * @property string $xmlbase
	 * @property mixed $className
	 */
	interface SVGElement extends Element
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGElement_
		{
			/** @var SVGElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGElementInstanceList $childNodes
	 * @property SVGElement $correspondingElement
	 * @property SVGUseElement $correspondingUseElement
	 * @property SVGElementInstance $firstChild
	 * @property SVGElementInstance $lastChild
	 * @property SVGElementInstance $nextSibling
	 * @property SVGElementInstance $parentNode
	 * @property SVGElementInstance $previousSibling
	 */
	interface SVGElementInstance extends EventTarget
	{
	}
}

namespace {
		class SVGElementInstance_
		{
			/** @var SVGElementInstance */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface SVGElementInstanceList
	{
	
		/**
		 * @param number $index
		 * SVGElementInstance
		 */
		function item($index);
	
	}
}

namespace {
		class SVGElementInstanceList_
		{
			/** @var SVGElementInstanceList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $cx
	 * @property SVGAnimatedLength $cy
	 * @property SVGAnimatedLength $rx
	 * @property SVGAnimatedLength $ry
	 */
	interface SVGEllipseElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGEllipseElement_
		{
			/** @var SVGEllipseElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedString $in2
	 * @property SVGAnimatedEnumeration $mode
	 * @property number $SVG_FEBLEND_MODE_COLOR
	 * @property number $SVG_FEBLEND_MODE_COLOR_BURN
	 * @property number $SVG_FEBLEND_MODE_COLOR_DODGE
	 * @property number $SVG_FEBLEND_MODE_DARKEN
	 * @property number $SVG_FEBLEND_MODE_DIFFERENCE
	 * @property number $SVG_FEBLEND_MODE_EXCLUSION
	 * @property number $SVG_FEBLEND_MODE_HARD_LIGHT
	 * @property number $SVG_FEBLEND_MODE_HUE
	 * @property number $SVG_FEBLEND_MODE_LIGHTEN
	 * @property number $SVG_FEBLEND_MODE_LUMINOSITY
	 * @property number $SVG_FEBLEND_MODE_MULTIPLY
	 * @property number $SVG_FEBLEND_MODE_NORMAL
	 * @property number $SVG_FEBLEND_MODE_OVERLAY
	 * @property number $SVG_FEBLEND_MODE_SATURATION
	 * @property number $SVG_FEBLEND_MODE_SCREEN
	 * @property number $SVG_FEBLEND_MODE_SOFT_LIGHT
	 * @property number $SVG_FEBLEND_MODE_UNKNOWN
	 */
	interface SVGFEBlendElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEBlendElement_
		{
			/** @var SVGFEBlendElement */
			public $prototype;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_COLOR;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_COLOR_BURN;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_COLOR_DODGE;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_DARKEN;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_DIFFERENCE;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_EXCLUSION;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_HARD_LIGHT;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_HUE;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_LIGHTEN;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_LUMINOSITY;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_MULTIPLY;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_NORMAL;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_OVERLAY;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_SATURATION;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_SCREEN;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_SOFT_LIGHT;
		
			/** @var number */
			public $SVG_FEBLEND_MODE_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedEnumeration $type
	 * @property SVGAnimatedNumberList $values
	 * @property number $SVG_FECOLORMATRIX_TYPE_HUEROTATE
	 * @property number $SVG_FECOLORMATRIX_TYPE_LUMINANCETOALPHA
	 * @property number $SVG_FECOLORMATRIX_TYPE_MATRIX
	 * @property number $SVG_FECOLORMATRIX_TYPE_SATURATE
	 * @property number $SVG_FECOLORMATRIX_TYPE_UNKNOWN
	 */
	interface SVGFEColorMatrixElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEColorMatrixElement_
		{
			/** @var SVGFEColorMatrixElement */
			public $prototype;
		
			/** @var number */
			public $SVG_FECOLORMATRIX_TYPE_HUEROTATE;
		
			/** @var number */
			public $SVG_FECOLORMATRIX_TYPE_LUMINANCETOALPHA;
		
			/** @var number */
			public $SVG_FECOLORMATRIX_TYPE_MATRIX;
		
			/** @var number */
			public $SVG_FECOLORMATRIX_TYPE_SATURATE;
		
			/** @var number */
			public $SVG_FECOLORMATRIX_TYPE_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 */
	interface SVGFEComponentTransferElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEComponentTransferElement_
		{
			/** @var SVGFEComponentTransferElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedString $in2
	 * @property SVGAnimatedNumber $k1
	 * @property SVGAnimatedNumber $k2
	 * @property SVGAnimatedNumber $k3
	 * @property SVGAnimatedNumber $k4
	 * @property SVGAnimatedEnumeration $operator
	 * @property number $SVG_FECOMPOSITE_OPERATOR_ARITHMETIC
	 * @property number $SVG_FECOMPOSITE_OPERATOR_ATOP
	 * @property number $SVG_FECOMPOSITE_OPERATOR_IN
	 * @property number $SVG_FECOMPOSITE_OPERATOR_OUT
	 * @property number $SVG_FECOMPOSITE_OPERATOR_OVER
	 * @property number $SVG_FECOMPOSITE_OPERATOR_UNKNOWN
	 * @property number $SVG_FECOMPOSITE_OPERATOR_XOR
	 */
	interface SVGFECompositeElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFECompositeElement_
		{
			/** @var SVGFECompositeElement */
			public $prototype;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_ARITHMETIC;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_ATOP;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_IN;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_OUT;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_OVER;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_UNKNOWN;
		
			/** @var number */
			public $SVG_FECOMPOSITE_OPERATOR_XOR;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $bias
	 * @property SVGAnimatedNumber $divisor
	 * @property SVGAnimatedEnumeration $edgeMode
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedNumberList $kernelMatrix
	 * @property SVGAnimatedNumber $kernelUnitLengthX
	 * @property SVGAnimatedNumber $kernelUnitLengthY
	 * @property SVGAnimatedInteger $orderX
	 * @property SVGAnimatedInteger $orderY
	 * @property SVGAnimatedBoolean $preserveAlpha
	 * @property SVGAnimatedInteger $targetX
	 * @property SVGAnimatedInteger $targetY
	 * @property number $SVG_EDGEMODE_DUPLICATE
	 * @property number $SVG_EDGEMODE_NONE
	 * @property number $SVG_EDGEMODE_UNKNOWN
	 * @property number $SVG_EDGEMODE_WRAP
	 */
	interface SVGFEConvolveMatrixElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEConvolveMatrixElement_
		{
			/** @var SVGFEConvolveMatrixElement */
			public $prototype;
		
			/** @var number */
			public $SVG_EDGEMODE_DUPLICATE;
		
			/** @var number */
			public $SVG_EDGEMODE_NONE;
		
			/** @var number */
			public $SVG_EDGEMODE_UNKNOWN;
		
			/** @var number */
			public $SVG_EDGEMODE_WRAP;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $diffuseConstant
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedNumber $kernelUnitLengthX
	 * @property SVGAnimatedNumber $kernelUnitLengthY
	 * @property SVGAnimatedNumber $surfaceScale
	 */
	interface SVGFEDiffuseLightingElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEDiffuseLightingElement_
		{
			/** @var SVGFEDiffuseLightingElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedString $in2
	 * @property SVGAnimatedNumber $scale
	 * @property SVGAnimatedEnumeration $xChannelSelector
	 * @property SVGAnimatedEnumeration $yChannelSelector
	 * @property number $SVG_CHANNEL_A
	 * @property number $SVG_CHANNEL_B
	 * @property number $SVG_CHANNEL_G
	 * @property number $SVG_CHANNEL_R
	 * @property number $SVG_CHANNEL_UNKNOWN
	 */
	interface SVGFEDisplacementMapElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEDisplacementMapElement_
		{
			/** @var SVGFEDisplacementMapElement */
			public $prototype;
		
			/** @var number */
			public $SVG_CHANNEL_A;
		
			/** @var number */
			public $SVG_CHANNEL_B;
		
			/** @var number */
			public $SVG_CHANNEL_G;
		
			/** @var number */
			public $SVG_CHANNEL_R;
		
			/** @var number */
			public $SVG_CHANNEL_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $azimuth
	 * @property SVGAnimatedNumber $elevation
	 */
	interface SVGFEDistantLightElement extends SVGElement
	{
	}
}

namespace {
		class SVGFEDistantLightElement_
		{
			/** @var SVGFEDistantLightElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGFEFloodElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEFloodElement_
		{
			/** @var SVGFEFloodElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGFEFuncAElement extends SVGComponentTransferFunctionElement
	{
	}
}

namespace {
		class SVGFEFuncAElement_
		{
			/** @var SVGFEFuncAElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGFEFuncBElement extends SVGComponentTransferFunctionElement
	{
	}
}

namespace {
		class SVGFEFuncBElement_
		{
			/** @var SVGFEFuncBElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGFEFuncGElement extends SVGComponentTransferFunctionElement
	{
	}
}

namespace {
		class SVGFEFuncGElement_
		{
			/** @var SVGFEFuncGElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGFEFuncRElement extends SVGComponentTransferFunctionElement
	{
	}
}

namespace {
		class SVGFEFuncRElement_
		{
			/** @var SVGFEFuncRElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedNumber $stdDeviationX
	 * @property SVGAnimatedNumber $stdDeviationY
	 */
	interface SVGFEGaussianBlurElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param number $stdDeviationX
		 * @param number $stdDeviationY
		 * void
		 */
		function setStdDeviation($stdDeviationX, $stdDeviationY);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEGaussianBlurElement_
		{
			/** @var SVGFEGaussianBlurElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedPreserveAspectRatio $preserveAspectRatio
	 */
	interface SVGFEImageElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes, SVGLangSpace, SVGURIReference, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEImageElement_
		{
			/** @var SVGFEImageElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGFEMergeElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEMergeElement_
		{
			/** @var SVGFEMergeElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 */
	interface SVGFEMergeNodeElement extends SVGElement
	{
	}
}

namespace {
		class SVGFEMergeNodeElement_
		{
			/** @var SVGFEMergeNodeElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedEnumeration $operator
	 * @property SVGAnimatedNumber $radiusX
	 * @property SVGAnimatedNumber $radiusY
	 * @property number $SVG_MORPHOLOGY_OPERATOR_DILATE
	 * @property number $SVG_MORPHOLOGY_OPERATOR_ERODE
	 * @property number $SVG_MORPHOLOGY_OPERATOR_UNKNOWN
	 */
	interface SVGFEMorphologyElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEMorphologyElement_
		{
			/** @var SVGFEMorphologyElement */
			public $prototype;
		
			/** @var number */
			public $SVG_MORPHOLOGY_OPERATOR_DILATE;
		
			/** @var number */
			public $SVG_MORPHOLOGY_OPERATOR_ERODE;
		
			/** @var number */
			public $SVG_MORPHOLOGY_OPERATOR_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $dx
	 * @property SVGAnimatedNumber $dy
	 * @property SVGAnimatedString $in1
	 */
	interface SVGFEOffsetElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFEOffsetElement_
		{
			/** @var SVGFEOffsetElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $x
	 * @property SVGAnimatedNumber $y
	 * @property SVGAnimatedNumber $z
	 */
	interface SVGFEPointLightElement extends SVGElement
	{
	}
}

namespace {
		class SVGFEPointLightElement_
		{
			/** @var SVGFEPointLightElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 * @property SVGAnimatedNumber $kernelUnitLengthX
	 * @property SVGAnimatedNumber $kernelUnitLengthY
	 * @property SVGAnimatedNumber $specularConstant
	 * @property SVGAnimatedNumber $specularExponent
	 * @property SVGAnimatedNumber $surfaceScale
	 */
	interface SVGFESpecularLightingElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFESpecularLightingElement_
		{
			/** @var SVGFESpecularLightingElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $limitingConeAngle
	 * @property SVGAnimatedNumber $pointsAtX
	 * @property SVGAnimatedNumber $pointsAtY
	 * @property SVGAnimatedNumber $pointsAtZ
	 * @property SVGAnimatedNumber $specularExponent
	 * @property SVGAnimatedNumber $x
	 * @property SVGAnimatedNumber $y
	 * @property SVGAnimatedNumber $z
	 */
	interface SVGFESpotLightElement extends SVGElement
	{
	}
}

namespace {
		class SVGFESpotLightElement_
		{
			/** @var SVGFESpotLightElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedString $in1
	 */
	interface SVGFETileElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFETileElement_
		{
			/** @var SVGFETileElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $baseFrequencyX
	 * @property SVGAnimatedNumber $baseFrequencyY
	 * @property SVGAnimatedInteger $numOctaves
	 * @property SVGAnimatedNumber $seed
	 * @property SVGAnimatedEnumeration $stitchTiles
	 * @property SVGAnimatedEnumeration $type
	 * @property number $SVG_STITCHTYPE_NOSTITCH
	 * @property number $SVG_STITCHTYPE_STITCH
	 * @property number $SVG_STITCHTYPE_UNKNOWN
	 * @property number $SVG_TURBULENCE_TYPE_FRACTALNOISE
	 * @property number $SVG_TURBULENCE_TYPE_TURBULENCE
	 * @property number $SVG_TURBULENCE_TYPE_UNKNOWN
	 */
	interface SVGFETurbulenceElement extends \SVGElement, SVGFilterPrimitiveStandardAttributes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFETurbulenceElement_
		{
			/** @var SVGFETurbulenceElement */
			public $prototype;
		
			/** @var number */
			public $SVG_STITCHTYPE_NOSTITCH;
		
			/** @var number */
			public $SVG_STITCHTYPE_STITCH;
		
			/** @var number */
			public $SVG_STITCHTYPE_UNKNOWN;
		
			/** @var number */
			public $SVG_TURBULENCE_TYPE_FRACTALNOISE;
		
			/** @var number */
			public $SVG_TURBULENCE_TYPE_TURBULENCE;
		
			/** @var number */
			public $SVG_TURBULENCE_TYPE_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedInteger $filterResX
	 * @property SVGAnimatedInteger $filterResY
	 * @property SVGAnimatedEnumeration $filterUnits
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedEnumeration $primitiveUnits
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGFilterElement extends \SVGElement, SVGUnitTypes, SVGStylable, SVGLangSpace, SVGURIReference, SVGExternalResourcesRequired
	{
	
		/**
		 * @param number $filterResX
		 * @param number $filterResY
		 * void
		 */
		function setFilterRes($filterResX, $filterResY);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGFilterElement_
		{
			/** @var SVGFilterElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGForeignObjectElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGForeignObjectElement_
		{
			/** @var SVGForeignObjectElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGGElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGGElement_
		{
			/** @var SVGGElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedTransformList $gradientTransform
	 * @property SVGAnimatedEnumeration $gradientUnits
	 * @property SVGAnimatedEnumeration $spreadMethod
	 * @property number $SVG_SPREADMETHOD_PAD
	 * @property number $SVG_SPREADMETHOD_REFLECT
	 * @property number $SVG_SPREADMETHOD_REPEAT
	 * @property number $SVG_SPREADMETHOD_UNKNOWN
	 */
	interface SVGGradientElement extends \SVGElement, SVGStylable, SVGExternalResourcesRequired, SVGURIReference, SVGUnitTypes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGGradientElement_
		{
			/** @var SVGGradientElement */
			public $prototype;
		
			/** @var number */
			public $SVG_SPREADMETHOD_PAD;
		
			/** @var number */
			public $SVG_SPREADMETHOD_REFLECT;
		
			/** @var number */
			public $SVG_SPREADMETHOD_REPEAT;
		
			/** @var number */
			public $SVG_SPREADMETHOD_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedPreserveAspectRatio $preserveAspectRatio
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGImageElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGURIReference
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGImageElement_
		{
			/** @var SVGImageElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $unitType
	 * @property number $value
	 * @property string $valueAsString
	 * @property number $valueInSpecifiedUnits
	 * @property number $SVG_LENGTHTYPE_CM
	 * @property number $SVG_LENGTHTYPE_EMS
	 * @property number $SVG_LENGTHTYPE_EXS
	 * @property number $SVG_LENGTHTYPE_IN
	 * @property number $SVG_LENGTHTYPE_MM
	 * @property number $SVG_LENGTHTYPE_NUMBER
	 * @property number $SVG_LENGTHTYPE_PC
	 * @property number $SVG_LENGTHTYPE_PERCENTAGE
	 * @property number $SVG_LENGTHTYPE_PT
	 * @property number $SVG_LENGTHTYPE_PX
	 * @property number $SVG_LENGTHTYPE_UNKNOWN
	 */
	interface SVGLength
	{
	
		/**
		 * @param number $unitType
		 * void
		 */
		function convertToSpecifiedUnits($unitType);
	
	}
}

namespace {
		class SVGLength_
		{
			/** @var SVGLength */
			public $prototype;
		
			/** @var number */
			public $SVG_LENGTHTYPE_CM;
		
			/** @var number */
			public $SVG_LENGTHTYPE_EMS;
		
			/** @var number */
			public $SVG_LENGTHTYPE_EXS;
		
			/** @var number */
			public $SVG_LENGTHTYPE_IN;
		
			/** @var number */
			public $SVG_LENGTHTYPE_MM;
		
			/** @var number */
			public $SVG_LENGTHTYPE_NUMBER;
		
			/** @var number */
			public $SVG_LENGTHTYPE_PC;
		
			/** @var number */
			public $SVG_LENGTHTYPE_PERCENTAGE;
		
			/** @var number */
			public $SVG_LENGTHTYPE_PT;
		
			/** @var number */
			public $SVG_LENGTHTYPE_PX;
		
			/** @var number */
			public $SVG_LENGTHTYPE_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property number $numberOfItems
	 */
	interface SVGLengthList
	{
	
		/**
		 * @param SVGLength $newItem
		 * SVGLength
		 */
		function appendItem($newItem);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param number $index
		 * SVGLength
		 */
		function getItem($index);
	
	
		/**
		 * @param SVGLength $newItem
		 * SVGLength
		 */
		function initialize($newItem);
	
	
		/**
		 * @param SVGLength $newItem
		 * @param number $index
		 * SVGLength
		 */
		function insertItemBefore($newItem, $index);
	
	
		/**
		 * @param number $index
		 * SVGLength
		 */
		function removeItem($index);
	
	
		/**
		 * @param SVGLength $newItem
		 * @param number $index
		 * SVGLength
		 */
		function replaceItem($newItem, $index);
	
	}
}

namespace {
		class SVGLengthList_
		{
			/** @var SVGLengthList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $x1
	 * @property SVGAnimatedLength $x2
	 * @property SVGAnimatedLength $y1
	 * @property SVGAnimatedLength $y2
	 */
	interface SVGLineElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGLineElement_
		{
			/** @var SVGLineElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $x1
	 * @property SVGAnimatedLength $x2
	 * @property SVGAnimatedLength $y1
	 * @property SVGAnimatedLength $y2
	 */
	interface SVGLinearGradientElement extends SVGGradientElement
	{
	}
}

namespace {
		class SVGLinearGradientElement_
		{
			/** @var SVGLinearGradientElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $markerHeight
	 * @property SVGAnimatedEnumeration $markerUnits
	 * @property SVGAnimatedLength $markerWidth
	 * @property SVGAnimatedAngle $orientAngle
	 * @property SVGAnimatedEnumeration $orientType
	 * @property SVGAnimatedLength $refX
	 * @property SVGAnimatedLength $refY
	 * @property number $SVG_MARKERUNITS_STROKEWIDTH
	 * @property number $SVG_MARKERUNITS_UNKNOWN
	 * @property number $SVG_MARKERUNITS_USERSPACEONUSE
	 * @property number $SVG_MARKER_ORIENT_ANGLE
	 * @property number $SVG_MARKER_ORIENT_AUTO
	 * @property number $SVG_MARKER_ORIENT_UNKNOWN
	 */
	interface SVGMarkerElement extends \SVGElement, SVGStylable, SVGLangSpace, SVGExternalResourcesRequired, SVGFitToViewBox
	{
	
		/**
		 * @param SVGAngle $angle
		 * void
		 */
		function setOrientToAngle($angle);
	
	
		/**
		 * void
		 */
		function setOrientToAuto();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGMarkerElement_
		{
			/** @var SVGMarkerElement */
			public $prototype;
		
			/** @var number */
			public $SVG_MARKERUNITS_STROKEWIDTH;
		
			/** @var number */
			public $SVG_MARKERUNITS_UNKNOWN;
		
			/** @var number */
			public $SVG_MARKERUNITS_USERSPACEONUSE;
		
			/** @var number */
			public $SVG_MARKER_ORIENT_ANGLE;
		
			/** @var number */
			public $SVG_MARKER_ORIENT_AUTO;
		
			/** @var number */
			public $SVG_MARKER_ORIENT_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedEnumeration $maskContentUnits
	 * @property SVGAnimatedEnumeration $maskUnits
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGMaskElement extends \SVGElement, SVGStylable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGUnitTypes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGMaskElement_
		{
			/** @var SVGMaskElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $a
	 * @property number $b
	 * @property number $c
	 * @property number $d
	 * @property number $e
	 * @property number $f
	 */
	interface SVGMatrix
	{
	
		/**
		 * SVGMatrix
		 */
		function flipX();
	
	
		/**
		 * SVGMatrix
		 */
		function flipY();
	
	
		/**
		 * SVGMatrix
		 */
		function inverse();
	
	
		/**
		 * @param SVGMatrix $secondMatrix
		 * SVGMatrix
		 */
		function multiply($secondMatrix);
	
	
		/**
		 * @param number $angle
		 * SVGMatrix
		 */
		function rotate($angle);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGMatrix
		 */
		function rotateFromVector($x, $y);
	
	
		/**
		 * @param number $scaleFactor
		 * SVGMatrix
		 */
		function scale($scaleFactor);
	
	
		/**
		 * @param number $scaleFactorX
		 * @param number $scaleFactorY
		 * SVGMatrix
		 */
		function scaleNonUniform($scaleFactorX, $scaleFactorY);
	
	
		/**
		 * @param number $angle
		 * SVGMatrix
		 */
		function skewX($angle);
	
	
		/**
		 * @param number $angle
		 * SVGMatrix
		 */
		function skewY($angle);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGMatrix
		 */
		function translate($x, $y);
	
	}
}

namespace {
		class SVGMatrix_
		{
			/** @var SVGMatrix */
			public $prototype;
		
		}
}

namespace {
	interface SVGMetadataElement extends SVGElement
	{
	}
}

namespace {
		class SVGMetadataElement_
		{
			/** @var SVGMetadataElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $value
	 */
	interface SVGNumber
	{
	}
}

namespace {
		class SVGNumber_
		{
			/** @var SVGNumber */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $numberOfItems
	 */
	interface SVGNumberList
	{
	
		/**
		 * @param SVGNumber $newItem
		 * SVGNumber
		 */
		function appendItem($newItem);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param number $index
		 * SVGNumber
		 */
		function getItem($index);
	
	
		/**
		 * @param SVGNumber $newItem
		 * SVGNumber
		 */
		function initialize($newItem);
	
	
		/**
		 * @param SVGNumber $newItem
		 * @param number $index
		 * SVGNumber
		 */
		function insertItemBefore($newItem, $index);
	
	
		/**
		 * @param number $index
		 * SVGNumber
		 */
		function removeItem($index);
	
	
		/**
		 * @param SVGNumber $newItem
		 * @param number $index
		 * SVGNumber
		 */
		function replaceItem($newItem, $index);
	
	}
}

namespace {
		class SVGNumberList_
		{
			/** @var SVGNumberList */
			public $prototype;
		
		}
}

namespace {
	interface SVGPathElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGAnimatedPathData
	{
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $r1
		 * @param number $r2
		 * @param number $angle
		 * @param boolean $largeArcFlag
		 * @param boolean $sweepFlag
		 * SVGPathSegArcAbs
		 */
		function createSVGPathSegArcAbs($x, $y, $r1, $r2, $angle, $largeArcFlag, $sweepFlag);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $r1
		 * @param number $r2
		 * @param number $angle
		 * @param boolean $largeArcFlag
		 * @param boolean $sweepFlag
		 * SVGPathSegArcRel
		 */
		function createSVGPathSegArcRel($x, $y, $r1, $r2, $angle, $largeArcFlag, $sweepFlag);
	
	
		/**
		 * SVGPathSegClosePath
		 */
		function createSVGPathSegClosePath();
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $x1
		 * @param number $y1
		 * @param number $x2
		 * @param number $y2
		 * SVGPathSegCurvetoCubicAbs
		 */
		function createSVGPathSegCurvetoCubicAbs($x, $y, $x1, $y1, $x2, $y2);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $x1
		 * @param number $y1
		 * @param number $x2
		 * @param number $y2
		 * SVGPathSegCurvetoCubicRel
		 */
		function createSVGPathSegCurvetoCubicRel($x, $y, $x1, $y1, $x2, $y2);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $x2
		 * @param number $y2
		 * SVGPathSegCurvetoCubicSmoothAbs
		 */
		function createSVGPathSegCurvetoCubicSmoothAbs($x, $y, $x2, $y2);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $x2
		 * @param number $y2
		 * SVGPathSegCurvetoCubicSmoothRel
		 */
		function createSVGPathSegCurvetoCubicSmoothRel($x, $y, $x2, $y2);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $x1
		 * @param number $y1
		 * SVGPathSegCurvetoQuadraticAbs
		 */
		function createSVGPathSegCurvetoQuadraticAbs($x, $y, $x1, $y1);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $x1
		 * @param number $y1
		 * SVGPathSegCurvetoQuadraticRel
		 */
		function createSVGPathSegCurvetoQuadraticRel($x, $y, $x1, $y1);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGPathSegCurvetoQuadraticSmoothAbs
		 */
		function createSVGPathSegCurvetoQuadraticSmoothAbs($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGPathSegCurvetoQuadraticSmoothRel
		 */
		function createSVGPathSegCurvetoQuadraticSmoothRel($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGPathSegLinetoAbs
		 */
		function createSVGPathSegLinetoAbs($x, $y);
	
	
		/**
		 * @param number $x
		 * SVGPathSegLinetoHorizontalAbs
		 */
		function createSVGPathSegLinetoHorizontalAbs($x);
	
	
		/**
		 * @param number $x
		 * SVGPathSegLinetoHorizontalRel
		 */
		function createSVGPathSegLinetoHorizontalRel($x);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGPathSegLinetoRel
		 */
		function createSVGPathSegLinetoRel($x, $y);
	
	
		/**
		 * @param number $y
		 * SVGPathSegLinetoVerticalAbs
		 */
		function createSVGPathSegLinetoVerticalAbs($y);
	
	
		/**
		 * @param number $y
		 * SVGPathSegLinetoVerticalRel
		 */
		function createSVGPathSegLinetoVerticalRel($y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGPathSegMovetoAbs
		 */
		function createSVGPathSegMovetoAbs($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * SVGPathSegMovetoRel
		 */
		function createSVGPathSegMovetoRel($x, $y);
	
	
		/**
		 * @param number $distance
		 * number
		 */
		function getPathSegAtLength($distance);
	
	
		/**
		 * @param number $distance
		 * SVGPoint
		 */
		function getPointAtLength($distance);
	
	
		/**
		 * number
		 */
		function getTotalLength();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGPathElement_
		{
			/** @var SVGPathElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $pathSegType
	 * @property string $pathSegTypeAsLetter
	 * @property number $PATHSEG_ARC_ABS
	 * @property number $PATHSEG_ARC_REL
	 * @property number $PATHSEG_CLOSEPATH
	 * @property number $PATHSEG_CURVETO_CUBIC_ABS
	 * @property number $PATHSEG_CURVETO_CUBIC_REL
	 * @property number $PATHSEG_CURVETO_CUBIC_SMOOTH_ABS
	 * @property number $PATHSEG_CURVETO_CUBIC_SMOOTH_REL
	 * @property number $PATHSEG_CURVETO_QUADRATIC_ABS
	 * @property number $PATHSEG_CURVETO_QUADRATIC_REL
	 * @property number $PATHSEG_CURVETO_QUADRATIC_SMOOTH_ABS
	 * @property number $PATHSEG_CURVETO_QUADRATIC_SMOOTH_REL
	 * @property number $PATHSEG_LINETO_ABS
	 * @property number $PATHSEG_LINETO_HORIZONTAL_ABS
	 * @property number $PATHSEG_LINETO_HORIZONTAL_REL
	 * @property number $PATHSEG_LINETO_REL
	 * @property number $PATHSEG_LINETO_VERTICAL_ABS
	 * @property number $PATHSEG_LINETO_VERTICAL_REL
	 * @property number $PATHSEG_MOVETO_ABS
	 * @property number $PATHSEG_MOVETO_REL
	 * @property number $PATHSEG_UNKNOWN
	 */
	interface SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSeg_
		{
			/** @var SVGPathSeg */
			public $prototype;
		
			/** @var number */
			public $PATHSEG_ARC_ABS;
		
			/** @var number */
			public $PATHSEG_ARC_REL;
		
			/** @var number */
			public $PATHSEG_CLOSEPATH;
		
			/** @var number */
			public $PATHSEG_CURVETO_CUBIC_ABS;
		
			/** @var number */
			public $PATHSEG_CURVETO_CUBIC_REL;
		
			/** @var number */
			public $PATHSEG_CURVETO_CUBIC_SMOOTH_ABS;
		
			/** @var number */
			public $PATHSEG_CURVETO_CUBIC_SMOOTH_REL;
		
			/** @var number */
			public $PATHSEG_CURVETO_QUADRATIC_ABS;
		
			/** @var number */
			public $PATHSEG_CURVETO_QUADRATIC_REL;
		
			/** @var number */
			public $PATHSEG_CURVETO_QUADRATIC_SMOOTH_ABS;
		
			/** @var number */
			public $PATHSEG_CURVETO_QUADRATIC_SMOOTH_REL;
		
			/** @var number */
			public $PATHSEG_LINETO_ABS;
		
			/** @var number */
			public $PATHSEG_LINETO_HORIZONTAL_ABS;
		
			/** @var number */
			public $PATHSEG_LINETO_HORIZONTAL_REL;
		
			/** @var number */
			public $PATHSEG_LINETO_REL;
		
			/** @var number */
			public $PATHSEG_LINETO_VERTICAL_ABS;
		
			/** @var number */
			public $PATHSEG_LINETO_VERTICAL_REL;
		
			/** @var number */
			public $PATHSEG_MOVETO_ABS;
		
			/** @var number */
			public $PATHSEG_MOVETO_REL;
		
			/** @var number */
			public $PATHSEG_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property number $angle
	 * @property boolean $largeArcFlag
	 * @property number $r1
	 * @property number $r2
	 * @property boolean $sweepFlag
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegArcAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegArcAbs_
		{
			/** @var SVGPathSegArcAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $angle
	 * @property boolean $largeArcFlag
	 * @property number $r1
	 * @property number $r2
	 * @property boolean $sweepFlag
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegArcRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegArcRel_
		{
			/** @var SVGPathSegArcRel */
			public $prototype;
		
		}
}

namespace {
	interface SVGPathSegClosePath extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegClosePath_
		{
			/** @var SVGPathSegClosePath */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $x1
	 * @property number $x2
	 * @property number $y
	 * @property number $y1
	 * @property number $y2
	 */
	interface SVGPathSegCurvetoCubicAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoCubicAbs_
		{
			/** @var SVGPathSegCurvetoCubicAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $x1
	 * @property number $x2
	 * @property number $y
	 * @property number $y1
	 * @property number $y2
	 */
	interface SVGPathSegCurvetoCubicRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoCubicRel_
		{
			/** @var SVGPathSegCurvetoCubicRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $x2
	 * @property number $y
	 * @property number $y2
	 */
	interface SVGPathSegCurvetoCubicSmoothAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoCubicSmoothAbs_
		{
			/** @var SVGPathSegCurvetoCubicSmoothAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $x2
	 * @property number $y
	 * @property number $y2
	 */
	interface SVGPathSegCurvetoCubicSmoothRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoCubicSmoothRel_
		{
			/** @var SVGPathSegCurvetoCubicSmoothRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $x1
	 * @property number $y
	 * @property number $y1
	 */
	interface SVGPathSegCurvetoQuadraticAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoQuadraticAbs_
		{
			/** @var SVGPathSegCurvetoQuadraticAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $x1
	 * @property number $y
	 * @property number $y1
	 */
	interface SVGPathSegCurvetoQuadraticRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoQuadraticRel_
		{
			/** @var SVGPathSegCurvetoQuadraticRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegCurvetoQuadraticSmoothAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoQuadraticSmoothAbs_
		{
			/** @var SVGPathSegCurvetoQuadraticSmoothAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegCurvetoQuadraticSmoothRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegCurvetoQuadraticSmoothRel_
		{
			/** @var SVGPathSegCurvetoQuadraticSmoothRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegLinetoAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegLinetoAbs_
		{
			/** @var SVGPathSegLinetoAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 */
	interface SVGPathSegLinetoHorizontalAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegLinetoHorizontalAbs_
		{
			/** @var SVGPathSegLinetoHorizontalAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 */
	interface SVGPathSegLinetoHorizontalRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegLinetoHorizontalRel_
		{
			/** @var SVGPathSegLinetoHorizontalRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegLinetoRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegLinetoRel_
		{
			/** @var SVGPathSegLinetoRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $y
	 */
	interface SVGPathSegLinetoVerticalAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegLinetoVerticalAbs_
		{
			/** @var SVGPathSegLinetoVerticalAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $y
	 */
	interface SVGPathSegLinetoVerticalRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegLinetoVerticalRel_
		{
			/** @var SVGPathSegLinetoVerticalRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $numberOfItems
	 */
	interface SVGPathSegList
	{
	
		/**
		 * @param SVGPathSeg $newItem
		 * SVGPathSeg
		 */
		function appendItem($newItem);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param number $index
		 * SVGPathSeg
		 */
		function getItem($index);
	
	
		/**
		 * @param SVGPathSeg $newItem
		 * SVGPathSeg
		 */
		function initialize($newItem);
	
	
		/**
		 * @param SVGPathSeg $newItem
		 * @param number $index
		 * SVGPathSeg
		 */
		function insertItemBefore($newItem, $index);
	
	
		/**
		 * @param number $index
		 * SVGPathSeg
		 */
		function removeItem($index);
	
	
		/**
		 * @param SVGPathSeg $newItem
		 * @param number $index
		 * SVGPathSeg
		 */
		function replaceItem($newItem, $index);
	
	}
}

namespace {
		class SVGPathSegList_
		{
			/** @var SVGPathSegList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegMovetoAbs extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegMovetoAbs_
		{
			/** @var SVGPathSegMovetoAbs */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPathSegMovetoRel extends SVGPathSeg
	{
	}
}

namespace {
		class SVGPathSegMovetoRel_
		{
			/** @var SVGPathSegMovetoRel */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedEnumeration $patternContentUnits
	 * @property SVGAnimatedTransformList $patternTransform
	 * @property SVGAnimatedEnumeration $patternUnits
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGPatternElement extends \SVGElement, SVGStylable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGFitToViewBox, SVGURIReference, SVGUnitTypes
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGPatternElement_
		{
			/** @var SVGPatternElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface SVGPoint
	{
	
		/**
		 * @param SVGMatrix $matrix
		 * SVGPoint
		 */
		function matrixTransform($matrix);
	
	}
}

namespace {
		class SVGPoint_
		{
			/** @var SVGPoint */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $numberOfItems
	 */
	interface SVGPointList
	{
	
		/**
		 * @param SVGPoint $newItem
		 * SVGPoint
		 */
		function appendItem($newItem);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param number $index
		 * SVGPoint
		 */
		function getItem($index);
	
	
		/**
		 * @param SVGPoint $newItem
		 * SVGPoint
		 */
		function initialize($newItem);
	
	
		/**
		 * @param SVGPoint $newItem
		 * @param number $index
		 * SVGPoint
		 */
		function insertItemBefore($newItem, $index);
	
	
		/**
		 * @param number $index
		 * SVGPoint
		 */
		function removeItem($index);
	
	
		/**
		 * @param SVGPoint $newItem
		 * @param number $index
		 * SVGPoint
		 */
		function replaceItem($newItem, $index);
	
	}
}

namespace {
		class SVGPointList_
		{
			/** @var SVGPointList */
			public $prototype;
		
		}
}

namespace {
	interface SVGPolygonElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGAnimatedPoints
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGPolygonElement_
		{
			/** @var SVGPolygonElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGPolylineElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGAnimatedPoints
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGPolylineElement_
		{
			/** @var SVGPolylineElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $align
	 * @property number $meetOrSlice
	 * @property number $SVG_MEETORSLICE_MEET
	 * @property number $SVG_MEETORSLICE_SLICE
	 * @property number $SVG_MEETORSLICE_UNKNOWN
	 * @property number $SVG_PRESERVEASPECTRATIO_NONE
	 * @property number $SVG_PRESERVEASPECTRATIO_UNKNOWN
	 * @property number $SVG_PRESERVEASPECTRATIO_XMAXYMAX
	 * @property number $SVG_PRESERVEASPECTRATIO_XMAXYMID
	 * @property number $SVG_PRESERVEASPECTRATIO_XMAXYMIN
	 * @property number $SVG_PRESERVEASPECTRATIO_XMIDYMAX
	 * @property number $SVG_PRESERVEASPECTRATIO_XMIDYMID
	 * @property number $SVG_PRESERVEASPECTRATIO_XMIDYMIN
	 * @property number $SVG_PRESERVEASPECTRATIO_XMINYMAX
	 * @property number $SVG_PRESERVEASPECTRATIO_XMINYMID
	 * @property number $SVG_PRESERVEASPECTRATIO_XMINYMIN
	 */
	interface SVGPreserveAspectRatio
	{
	}
}

namespace {
		class SVGPreserveAspectRatio_
		{
			/** @var SVGPreserveAspectRatio */
			public $prototype;
		
			/** @var number */
			public $SVG_MEETORSLICE_MEET;
		
			/** @var number */
			public $SVG_MEETORSLICE_SLICE;
		
			/** @var number */
			public $SVG_MEETORSLICE_UNKNOWN;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_NONE;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_UNKNOWN;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMAXYMAX;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMAXYMID;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMAXYMIN;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMIDYMAX;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMIDYMID;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMIDYMIN;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMINYMAX;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMINYMID;
		
			/** @var number */
			public $SVG_PRESERVEASPECTRATIO_XMINYMIN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $cx
	 * @property SVGAnimatedLength $cy
	 * @property SVGAnimatedLength $fx
	 * @property SVGAnimatedLength $fy
	 * @property SVGAnimatedLength $r
	 */
	interface SVGRadialGradientElement extends SVGGradientElement
	{
	}
}

namespace {
		class SVGRadialGradientElement_
		{
			/** @var SVGRadialGradientElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $height
	 * @property number $width
	 * @property number $x
	 * @property number $y
	 */
	interface SVGRect
	{
	}
}

namespace {
		class SVGRect_
		{
			/** @var SVGRect */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedLength $rx
	 * @property SVGAnimatedLength $ry
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGRectElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGRectElement_
		{
			/** @var SVGRectElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $contentScriptType
	 * @property string $contentStyleType
	 * @property number $currentScale
	 * @property SVGPoint $currentTranslate
	 * @property SVGAnimatedLength $height
	 * @property number $pixelUnitToMillimeterX
	 * @property number $pixelUnitToMillimeterY
	 * @property number $screenPixelToMillimeterX
	 * @property number $screenPixelToMillimeterY
	 * @property SVGRect $viewport
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGSVGElement extends \SVGElement, DocumentEvent, SVGLocatable, SVGTests, SVGStylable, SVGLangSpace, SVGExternalResourcesRequired, SVGFitToViewBox, SVGZoomAndPan
	{
	
		/**
		 * @param SVGElement $element
		 * @param SVGRect $rect
		 * boolean
		 */
		function checkEnclosure($element, $rect);
	
	
		/**
		 * @param SVGElement $element
		 * @param SVGRect $rect
		 * boolean
		 */
		function checkIntersection($element, $rect);
	
	
		/**
		 * SVGAngle
		 */
		function createSVGAngle();
	
	
		/**
		 * SVGLength
		 */
		function createSVGLength();
	
	
		/**
		 * SVGMatrix
		 */
		function createSVGMatrix();
	
	
		/**
		 * SVGNumber
		 */
		function createSVGNumber();
	
	
		/**
		 * SVGPoint
		 */
		function createSVGPoint();
	
	
		/**
		 * SVGRect
		 */
		function createSVGRect();
	
	
		/**
		 * SVGTransform
		 */
		function createSVGTransform();
	
	
		/**
		 * @param SVGMatrix $matrix
		 * SVGTransform
		 */
		function createSVGTransformFromMatrix($matrix);
	
	
		/**
		 * void
		 */
		function deselectAll();
	
	
		/**
		 * void
		 */
		function forceRedraw();
	
	
		/**
		 * @param Element $elt
		 * @param string $pseudoElt
		 * CSSStyleDeclaration
		 */
		function getComputedStyle($elt, $pseudoElt);
	
	
		/**
		 * number
		 */
		function getCurrentTime();
	
	
		/**
		 * @param string $elementId
		 * Element
		 */
		function getElementById($elementId);
	
	
		/**
		 * @param SVGRect $rect
		 * @param SVGElement $referenceElement
		 * NodeList
		 */
		function getEnclosureList($rect, $referenceElement);
	
	
		/**
		 * @param SVGRect $rect
		 * @param SVGElement $referenceElement
		 * NodeList
		 */
		function getIntersectionList($rect, $referenceElement);
	
	
		/**
		 * void
		 */
		function pauseAnimations();
	
	
		/**
		 * @param number $seconds
		 * void
		 */
		function setCurrentTime($seconds);
	
	
		/**
		 * @param number $maxWaitMilliseconds
		 * number
		 */
		function suspendRedraw($maxWaitMilliseconds);
	
	
		/**
		 * void
		 */
		function unpauseAnimations();
	
	
		/**
		 * @param number $suspendHandleID
		 * void
		 */
		function unsuspendRedraw($suspendHandleID);
	
	
		/**
		 * void
		 */
		function unsuspendRedrawAll();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGSVGElement_
		{
			/** @var SVGSVGElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $type
	 */
	interface SVGScriptElement extends \SVGElement, SVGExternalResourcesRequired, SVGURIReference
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGScriptElement_
		{
			/** @var SVGScriptElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedNumber $offset
	 */
	interface SVGStopElement extends \SVGElement, SVGStylable
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGStopElement_
		{
			/** @var SVGStopElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $numberOfItems
	 */
	interface SVGStringList
	{
	
		/**
		 * @param string $newItem
		 * string
		 */
		function appendItem($newItem);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param number $index
		 * string
		 */
		function getItem($index);
	
	
		/**
		 * @param string $newItem
		 * string
		 */
		function initialize($newItem);
	
	
		/**
		 * @param string $newItem
		 * @param number $index
		 * string
		 */
		function insertItemBefore($newItem, $index);
	
	
		/**
		 * @param number $index
		 * string
		 */
		function removeItem($index);
	
	
		/**
		 * @param string $newItem
		 * @param number $index
		 * string
		 */
		function replaceItem($newItem, $index);
	
	}
}

namespace {
		class SVGStringList_
		{
			/** @var SVGStringList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $media
	 * @property string $title
	 * @property string $type
	 */
	interface SVGStyleElement extends \SVGElement, SVGLangSpace
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGStyleElement_
		{
			/** @var SVGStyleElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGSwitchElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGSwitchElement_
		{
			/** @var SVGSwitchElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGSymbolElement extends \SVGElement, SVGStylable, SVGLangSpace, SVGExternalResourcesRequired, SVGFitToViewBox
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGSymbolElement_
		{
			/** @var SVGSymbolElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGTSpanElement extends SVGTextPositioningElement
	{
	}
}

namespace {
		class SVGTSpanElement_
		{
			/** @var SVGTSpanElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedEnumeration $lengthAdjust
	 * @property SVGAnimatedLength $textLength
	 * @property number $LENGTHADJUST_SPACING
	 * @property number $LENGTHADJUST_SPACINGANDGLYPHS
	 * @property number $LENGTHADJUST_UNKNOWN
	 */
	interface SVGTextContentElement extends \SVGElement, SVGStylable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired
	{
	
		/**
		 * @param SVGPoint $point
		 * number
		 */
		function getCharNumAtPosition($point);
	
	
		/**
		 * number
		 */
		function getComputedTextLength();
	
	
		/**
		 * @param number $charnum
		 * SVGPoint
		 */
		function getEndPositionOfChar($charnum);
	
	
		/**
		 * @param number $charnum
		 * SVGRect
		 */
		function getExtentOfChar($charnum);
	
	
		/**
		 * number
		 */
		function getNumberOfChars();
	
	
		/**
		 * @param number $charnum
		 * number
		 */
		function getRotationOfChar($charnum);
	
	
		/**
		 * @param number $charnum
		 * SVGPoint
		 */
		function getStartPositionOfChar($charnum);
	
	
		/**
		 * @param number $charnum
		 * @param number $nchars
		 * number
		 */
		function getSubStringLength($charnum, $nchars);
	
	
		/**
		 * @param number $charnum
		 * @param number $nchars
		 * void
		 */
		function selectSubString($charnum, $nchars);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGTextContentElement_
		{
			/** @var SVGTextContentElement */
			public $prototype;
		
			/** @var number */
			public $LENGTHADJUST_SPACING;
		
			/** @var number */
			public $LENGTHADJUST_SPACINGANDGLYPHS;
		
			/** @var number */
			public $LENGTHADJUST_UNKNOWN;
		
		}
}

namespace {
	interface SVGTextElement extends \SVGTextPositioningElement, SVGTransformable
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGTextElement_
		{
			/** @var SVGTextElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedEnumeration $method
	 * @property SVGAnimatedEnumeration $spacing
	 * @property SVGAnimatedLength $startOffset
	 * @property number $TEXTPATH_METHODTYPE_ALIGN
	 * @property number $TEXTPATH_METHODTYPE_STRETCH
	 * @property number $TEXTPATH_METHODTYPE_UNKNOWN
	 * @property number $TEXTPATH_SPACINGTYPE_AUTO
	 * @property number $TEXTPATH_SPACINGTYPE_EXACT
	 * @property number $TEXTPATH_SPACINGTYPE_UNKNOWN
	 */
	interface SVGTextPathElement extends \SVGTextContentElement, SVGURIReference
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGTextPathElement_
		{
			/** @var SVGTextPathElement */
			public $prototype;
		
			/** @var number */
			public $TEXTPATH_METHODTYPE_ALIGN;
		
			/** @var number */
			public $TEXTPATH_METHODTYPE_STRETCH;
		
			/** @var number */
			public $TEXTPATH_METHODTYPE_UNKNOWN;
		
			/** @var number */
			public $TEXTPATH_SPACINGTYPE_AUTO;
		
			/** @var number */
			public $TEXTPATH_SPACINGTYPE_EXACT;
		
			/** @var number */
			public $TEXTPATH_SPACINGTYPE_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property SVGAnimatedLengthList $dx
	 * @property SVGAnimatedLengthList $dy
	 * @property SVGAnimatedNumberList $rotate
	 * @property SVGAnimatedLengthList $x
	 * @property SVGAnimatedLengthList $y
	 */
	interface SVGTextPositioningElement extends SVGTextContentElement
	{
	}
}

namespace {
		class SVGTextPositioningElement_
		{
			/** @var SVGTextPositioningElement */
			public $prototype;
		
		}
}

namespace {
	interface SVGTitleElement extends \SVGElement, SVGStylable, SVGLangSpace
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGTitleElement_
		{
			/** @var SVGTitleElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $angle
	 * @property SVGMatrix $matrix
	 * @property number $type
	 * @property number $SVG_TRANSFORM_MATRIX
	 * @property number $SVG_TRANSFORM_ROTATE
	 * @property number $SVG_TRANSFORM_SCALE
	 * @property number $SVG_TRANSFORM_SKEWX
	 * @property number $SVG_TRANSFORM_SKEWY
	 * @property number $SVG_TRANSFORM_TRANSLATE
	 * @property number $SVG_TRANSFORM_UNKNOWN
	 */
	interface SVGTransform
	{
	
		/**
		 * @param SVGMatrix $matrix
		 * void
		 */
		function setMatrix($matrix);
	
	
		/**
		 * @param number $angle
		 * @param number $cx
		 * @param number $cy
		 * void
		 */
		function setRotate($angle, $cx, $cy);
	
	
		/**
		 * @param number $sx
		 * @param number $sy
		 * void
		 */
		function setScale($sx, $sy);
	
	
		/**
		 * @param number $angle
		 * void
		 */
		function setSkewX($angle);
	
	
		/**
		 * @param number $angle
		 * void
		 */
		function setSkewY($angle);
	
	
		/**
		 * @param number $tx
		 * @param number $ty
		 * void
		 */
		function setTranslate($tx, $ty);
	
	}
}

namespace {
		class SVGTransform_
		{
			/** @var SVGTransform */
			public $prototype;
		
			/** @var number */
			public $SVG_TRANSFORM_MATRIX;
		
			/** @var number */
			public $SVG_TRANSFORM_ROTATE;
		
			/** @var number */
			public $SVG_TRANSFORM_SCALE;
		
			/** @var number */
			public $SVG_TRANSFORM_SKEWX;
		
			/** @var number */
			public $SVG_TRANSFORM_SKEWY;
		
			/** @var number */
			public $SVG_TRANSFORM_TRANSLATE;
		
			/** @var number */
			public $SVG_TRANSFORM_UNKNOWN;
		
		}
}

namespace {
	/**
	 * @property number $numberOfItems
	 */
	interface SVGTransformList
	{
	
		/**
		 * @param SVGTransform $newItem
		 * SVGTransform
		 */
		function appendItem($newItem);
	
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * SVGTransform
		 */
		function consolidate();
	
	
		/**
		 * @param SVGMatrix $matrix
		 * SVGTransform
		 */
		function createSVGTransformFromMatrix($matrix);
	
	
		/**
		 * @param number $index
		 * SVGTransform
		 */
		function getItem($index);
	
	
		/**
		 * @param SVGTransform $newItem
		 * SVGTransform
		 */
		function initialize($newItem);
	
	
		/**
		 * @param SVGTransform $newItem
		 * @param number $index
		 * SVGTransform
		 */
		function insertItemBefore($newItem, $index);
	
	
		/**
		 * @param number $index
		 * SVGTransform
		 */
		function removeItem($index);
	
	
		/**
		 * @param SVGTransform $newItem
		 * @param number $index
		 * SVGTransform
		 */
		function replaceItem($newItem, $index);
	
	}
}

namespace {
		class SVGTransformList_
		{
			/** @var SVGTransformList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $SVG_UNIT_TYPE_OBJECTBOUNDINGBOX
	 * @property number $SVG_UNIT_TYPE_UNKNOWN
	 * @property number $SVG_UNIT_TYPE_USERSPACEONUSE
	 */
	interface SVGUnitTypes
	{
	}
}
namespace {
	/**
	 * @const SVGUnitTypes;
	 */
	const SVGUnitTypes_=null;
}

namespace {
	/**
	 * @property SVGElementInstance $animatedInstanceRoot
	 * @property SVGAnimatedLength $height
	 * @property SVGElementInstance $instanceRoot
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGUseElement extends \SVGElement, SVGStylable, SVGTransformable, SVGTests, SVGLangSpace, SVGExternalResourcesRequired, SVGURIReference
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGUseElement_
		{
			/** @var SVGUseElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property SVGStringList $viewTarget
	 */
	interface SVGViewElement extends \SVGElement, SVGExternalResourcesRequired, SVGFitToViewBox, SVGZoomAndPan
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class SVGViewElement_
		{
			/** @var SVGViewElement */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $SVG_ZOOMANDPAN_DISABLE
	 * @property number $SVG_ZOOMANDPAN_MAGNIFY
	 * @property number $SVG_ZOOMANDPAN_UNKNOWN
	 */
	interface SVGZoomAndPan
	{
	}
}
namespace {
	/**
	 * @const SVGZoomAndPan;
	 */
	const SVGZoomAndPan_=null;
}

namespace {
	/**
	 * @property number $previousScale
	 * @property SVGPoint $previousTranslate
	 * @property SVGRect $zoomRectScreen
	 */
	interface SVGZoomEvent extends UIEvent
	{
	}
}

namespace {
		class SVGZoomEvent_
		{
			/** @var SVGZoomEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $availHeight
	 * @property number $availWidth
	 * @property number $bufferDepth
	 * @property number $colorDepth
	 * @property number $deviceXDPI
	 * @property number $deviceYDPI
	 * @property boolean $fontSmoothingEnabled
	 * @property number $height
	 * @property number $logicalXDPI
	 * @property number $logicalYDPI
	 * @property string $msOrientation
	 * @property number $pixelDepth
	 * @property number $systemXDPI
	 * @property number $systemYDPI
	 * @property number $width
	 */
	interface Screen extends EventTarget
	{
	
		/**
		 * @param string|string[] $orientations
		 * boolean
		 */
		function msLockOrientation($orientations);
	
	
		/**
		 * void
		 */
		function msUnlockOrientation();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class Screen_
		{
			/** @var Screen */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $callingUri
	 * @property string $value
	 */
	interface ScriptNotifyEvent extends Event
	{
	}
}

namespace {
		class ScriptNotifyEvent_
		{
			/** @var ScriptNotifyEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $bufferSize
	 */
	interface ScriptProcessorNode extends AudioNode
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class ScriptProcessorNode_
		{
			/** @var ScriptProcessorNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Node $anchorNode
	 * @property number $anchorOffset
	 * @property Node $focusNode
	 * @property number $focusOffset
	 * @property boolean $isCollapsed
	 * @property number $rangeCount
	 * @property string $type
	 */
	interface Selection
	{
	
		/**
		 * @param Range $range
		 * void
		 */
		function addRange($range);
	
	
		/**
		 * @param Node $parentNode
		 * @param number $offset
		 * void
		 */
		function collapse($parentNode, $offset);
	
	
		/**
		 * void
		 */
		function collapseToEnd();
	
	
		/**
		 * void
		 */
		function collapseToStart();
	
	
		/**
		 * @param Node $node
		 * @param boolean $partlyContained
		 * boolean
		 */
		function containsNode($node, $partlyContained);
	
	
		/**
		 * void
		 */
		function deleteFromDocument();
	
	
		/**
		 * void
		 */
		function empty();
	
	
		/**
		 * @param Node $newNode
		 * @param number $offset
		 * void
		 */
		function extend($newNode, $offset);
	
	
		/**
		 * @param number $index
		 * Range
		 */
		function getRangeAt($index);
	
	
		/**
		 * void
		 */
		function removeAllRanges();
	
	
		/**
		 * @param Range $range
		 * void
		 */
		function removeRange($range);
	
	
		/**
		 * @param Node $parentNode
		 * void
		 */
		function selectAllChildren($parentNode);
	
	
		/**
		 * @param Node $baseNode
		 * @param number $baseOffset
		 * @param Node $extentNode
		 * @param number $extentOffset
		 * void
		 */
		function setBaseAndExtent($baseNode, $baseOffset, $extentNode, $extentOffset);
	
	
		/**
		 * string
		 */
		function toString();
	
	}
}

namespace {
		class Selection_
		{
			/** @var Selection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $appendWindowEnd
	 * @property number $appendWindowStart
	 * @property AudioTrackList $audioTracks
	 * @property TimeRanges $buffered
	 * @property string $mode
	 * @property number $timestampOffset
	 * @property boolean $updating
	 * @property VideoTrackList $videoTracks
	 */
	interface SourceBuffer extends EventTarget
	{
	
		/**
		 * void
		 */
		function abort();
	
	
		/**
		 * @param ArrayBuffer|ArrayBufferView $data
		 * void
		 */
		function appendBuffer($data);
	
	
		/**
		 * @param MSStream $stream
		 * @param number $maxSize
		 * void
		 */
		function appendStream($stream, $maxSize);
	
	
		/**
		 * @param number $start
		 * @param number $end
		 * void
		 */
		function remove($start, $end);
	
	}
}

namespace {
		class SourceBuffer_
		{
			/** @var SourceBuffer */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface SourceBufferList extends EventTarget
	{
	
		/**
		 * @param number $index
		 * SourceBuffer
		 */
		function item($index);
	
	}
}

namespace {
		class SourceBufferList_
		{
			/** @var SourceBufferList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property AudioParam $pan
	 */
	interface StereoPannerNode extends AudioNode
	{
	}
}

namespace {
		class StereoPannerNode_
		{
			/** @var StereoPannerNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface Storage
	{
	
		/**
		 * void
		 */
		function clear();
	
	
		/**
		 * @param string $key
		 * mixed
		 */
		function getItem($key);
	
	
		/**
		 * @param number $index
		 * string
		 */
		function key($index);
	
	
		/**
		 * @param string $key
		 * void
		 */
		function removeItem($key);
	
	
		/**
		 * @param string $key
		 * @param string $data
		 * void
		 */
		function setItem($key, $data);
	
	}
}

namespace {
		class Storage_
		{
			/** @var Storage */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $url
	 * @property string $key?
	 * @property string $oldValue?
	 * @property Storage $storageArea?
	 */
	interface StorageEvent extends Event
	{
	}
}

namespace {
		class StorageEvent_
		{
			/** @var StorageEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $type
	 */
	interface StyleMedia
	{
	
		/**
		 * @param string $mediaquery
		 * boolean
		 */
		function matchMedium($mediaquery);
	
	}
}

namespace {
		class StyleMedia_
		{
			/** @var StyleMedia */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $disabled
	 * @property string $href
	 * @property MediaList $media
	 * @property Node $ownerNode
	 * @property StyleSheet $parentStyleSheet
	 * @property string $title
	 * @property string $type
	 */
	interface StyleSheet
	{
	}
}

namespace {
		class StyleSheet_
		{
			/** @var StyleSheet */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface StyleSheetList
	{
	
		/**
		 * @param number $index
		 * StyleSheet
		 */
		function item($index);
	
	}
}

namespace {
		class StyleSheetList_
		{
			/** @var StyleSheetList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface StyleSheetPageList
	{
	
		/**
		 * @param number $index
		 * CSSPageRule
		 */
		function item($index);
	
	}
}

namespace {
		class StyleSheetPageList_
		{
			/** @var StyleSheetPageList */
			public $prototype;
		
		}
}

namespace {
	interface SubtleCrypto
	{
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param CryptoKey $key
		 * @param ArrayBufferView $data
		 * mixed
		 */
		function decrypt($algorithm, $key, $data);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param CryptoKey $baseKey
		 * @param number $length
		 * mixed
		 */
		function deriveBits($algorithm, $baseKey, $length);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param CryptoKey $baseKey
		 * @param string|Algorithm $derivedKeyType
		 * @param boolean $extractable
		 * @param string[] $keyUsages
		 * mixed
		 */
		function deriveKey($algorithm, $baseKey, $derivedKeyType, $extractable, $keyUsages);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param ArrayBufferView $data
		 * mixed
		 */
		function digest($algorithm, $data);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param CryptoKey $key
		 * @param ArrayBufferView $data
		 * mixed
		 */
		function encrypt($algorithm, $key, $data);
	
	
		/**
		 * @param string $format
		 * @param CryptoKey $key
		 * mixed
		 */
		function exportKey($format, $key);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param boolean $extractable
		 * @param string[] $keyUsages
		 * mixed
		 */
		function generateKey($algorithm, $extractable, $keyUsages);
	
	
		/**
		 * @param string $format
		 * @param ArrayBufferView $keyData
		 * @param string|Algorithm $algorithm
		 * @param boolean $extractable
		 * @param string[] $keyUsages
		 * mixed
		 */
		function importKey($format, $keyData, $algorithm, $extractable, $keyUsages);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param CryptoKey $key
		 * @param ArrayBufferView $data
		 * mixed
		 */
		function sign($algorithm, $key, $data);
	
	
		/**
		 * @param string $format
		 * @param ArrayBufferView $wrappedKey
		 * @param CryptoKey $unwrappingKey
		 * @param string|Algorithm $unwrapAlgorithm
		 * @param string|Algorithm $unwrappedKeyAlgorithm
		 * @param boolean $extractable
		 * @param string[] $keyUsages
		 * mixed
		 */
		function unwrapKey($format, $wrappedKey, $unwrappingKey, $unwrapAlgorithm, $unwrappedKeyAlgorithm, $extractable, $keyUsages);
	
	
		/**
		 * @param string|Algorithm $algorithm
		 * @param CryptoKey $key
		 * @param ArrayBufferView $signature
		 * @param ArrayBufferView $data
		 * mixed
		 */
		function verify($algorithm, $key, $signature, $data);
	
	
		/**
		 * @param string $format
		 * @param CryptoKey $key
		 * @param CryptoKey $wrappingKey
		 * @param string|Algorithm $wrapAlgorithm
		 * mixed
		 */
		function wrapKey($format, $key, $wrappingKey, $wrapAlgorithm);
	
	}
}

namespace {
		class SubtleCrypto_
		{
			/** @var SubtleCrypto */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $wholeText
	 */
	interface Text extends CharacterData
	{
	
		/**
		 * @param string $content
		 * Text
		 */
		function replaceWholeText($content);
	
	
		/**
		 * @param number $offset
		 * Text
		 */
		function splitText($offset);
	
	}
}

namespace {
		class Text_
		{
			/** @var Text */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $data
	 * @property number $inputMethod
	 * @property string $locale
	 * @property number $DOM_INPUT_METHOD_DROP
	 * @property number $DOM_INPUT_METHOD_HANDWRITING
	 * @property number $DOM_INPUT_METHOD_IME
	 * @property number $DOM_INPUT_METHOD_KEYBOARD
	 * @property number $DOM_INPUT_METHOD_MULTIMODAL
	 * @property number $DOM_INPUT_METHOD_OPTION
	 * @property number $DOM_INPUT_METHOD_PASTE
	 * @property number $DOM_INPUT_METHOD_SCRIPT
	 * @property number $DOM_INPUT_METHOD_UNKNOWN
	 * @property number $DOM_INPUT_METHOD_VOICE
	 */
	interface TextEvent extends UIEvent
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param string $dataArg
		 * @param number $inputMethod
		 * @param string $locale
		 * void
		 */
		function initTextEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $dataArg, $inputMethod, $locale);
	
	}
}

namespace {
		class TextEvent_
		{
			/** @var TextEvent */
			public $prototype;
		
			/** @var number */
			public $DOM_INPUT_METHOD_DROP;
		
			/** @var number */
			public $DOM_INPUT_METHOD_HANDWRITING;
		
			/** @var number */
			public $DOM_INPUT_METHOD_IME;
		
			/** @var number */
			public $DOM_INPUT_METHOD_KEYBOARD;
		
			/** @var number */
			public $DOM_INPUT_METHOD_MULTIMODAL;
		
			/** @var number */
			public $DOM_INPUT_METHOD_OPTION;
		
			/** @var number */
			public $DOM_INPUT_METHOD_PASTE;
		
			/** @var number */
			public $DOM_INPUT_METHOD_SCRIPT;
		
			/** @var number */
			public $DOM_INPUT_METHOD_UNKNOWN;
		
			/** @var number */
			public $DOM_INPUT_METHOD_VOICE;
		
		}
}

namespace {
	/**
	 * @property number $width
	 */
	interface TextMetrics
	{
	}
}

namespace {
		class TextMetrics_
		{
			/** @var TextMetrics */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $boundingHeight
	 * @property number $boundingLeft
	 * @property number $boundingTop
	 * @property number $boundingWidth
	 * @property string $htmlText
	 * @property number $offsetLeft
	 * @property number $offsetTop
	 * @property string $text
	 */
	interface TextRange
	{
	
		/**
		 * @param boolean $start
		 * void
		 */
		function collapse($start);
	
	
		/**
		 * @param string $how
		 * @param TextRange $sourceRange
		 * number
		 */
		function compareEndPoints($how, $sourceRange);
	
	
		/**
		 * TextRange
		 */
		function duplicate();
	
	
		/**
		 * @param string $cmdID
		 * @param boolean $showUI
		 * @param mixed $value
		 * boolean
		 */
		function execCommand($cmdID, $showUI, $value);
	
	
		/**
		 * @param string $cmdID
		 * boolean
		 */
		function execCommandShowHelp($cmdID);
	
	
		/**
		 * @param string $Unit
		 * boolean
		 */
		function expand($Unit);
	
	
		/**
		 * @param string $string
		 * @param number $count
		 * @param number $flags
		 * boolean
		 */
		function findText($string, $count, $flags);
	
	
		/**
		 * string
		 */
		function getBookmark();
	
	
		/**
		 * ClientRect
		 */
		function getBoundingClientRect();
	
	
		/**
		 * ClientRectList
		 */
		function getClientRects();
	
	
		/**
		 * @param TextRange $range
		 * boolean
		 */
		function inRange($range);
	
	
		/**
		 * @param TextRange $range
		 * boolean
		 */
		function isEqual($range);
	
	
		/**
		 * @param string $unit
		 * @param number $count
		 * number
		 */
		function move($unit, $count);
	
	
		/**
		 * @param string $unit
		 * @param number $count
		 * number
		 */
		function moveEnd($unit, $count);
	
	
		/**
		 * @param string $unit
		 * @param number $count
		 * number
		 */
		function moveStart($unit, $count);
	
	
		/**
		 * @param string $bookmark
		 * boolean
		 */
		function moveToBookmark($bookmark);
	
	
		/**
		 * @param Element $element
		 * void
		 */
		function moveToElementText($element);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function moveToPoint($x, $y);
	
	
		/**
		 * Element
		 */
		function parentElement();
	
	
		/**
		 * @param string $html
		 * void
		 */
		function pasteHTML($html);
	
	
		/**
		 * @param string $cmdID
		 * boolean
		 */
		function queryCommandEnabled($cmdID);
	
	
		/**
		 * @param string $cmdID
		 * boolean
		 */
		function queryCommandIndeterm($cmdID);
	
	
		/**
		 * @param string $cmdID
		 * boolean
		 */
		function queryCommandState($cmdID);
	
	
		/**
		 * @param string $cmdID
		 * boolean
		 */
		function queryCommandSupported($cmdID);
	
	
		/**
		 * @param string $cmdID
		 * string
		 */
		function queryCommandText($cmdID);
	
	
		/**
		 * @param string $cmdID
		 * mixed
		 */
		function queryCommandValue($cmdID);
	
	
		/**
		 * @param boolean $fStart
		 * void
		 */
		function scrollIntoView($fStart);
	
	
		/**
		 * void
		 */
		function select();
	
	
		/**
		 * @param string $how
		 * @param TextRange $SourceRange
		 * void
		 */
		function setEndPoint($how, $SourceRange);
	
	}
}

namespace {
		class TextRange_
		{
			/** @var TextRange */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface TextRangeCollection
	{
	
		/**
		 * @param number $index
		 * TextRange
		 */
		function item($index);
	
	}
}

namespace {
		class TextRangeCollection_
		{
			/** @var TextRangeCollection */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property TextTrackCueList $activeCues
	 * @property TextTrackCueList $cues
	 * @property string $inBandMetadataTrackDispatchType
	 * @property string $kind
	 * @property string $label
	 * @property string $language
	 * @property mixed $mode
	 * @property number $readyState
	 * @property number $DISABLED
	 * @property number $ERROR
	 * @property number $HIDDEN
	 * @property number $LOADED
	 * @property number $LOADING
	 * @property number $NONE
	 * @property number $SHOWING
	 */
	interface TextTrack extends EventTarget
	{
	
		/**
		 * @param TextTrackCue $cue
		 * void
		 */
		function addCue($cue);
	
	
		/**
		 * @param TextTrackCue $cue
		 * void
		 */
		function removeCue($cue);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class TextTrack_
		{
			/** @var TextTrack */
			public $prototype;
		
			/** @var number */
			public $DISABLED;
		
			/** @var number */
			public $ERROR;
		
			/** @var number */
			public $HIDDEN;
		
			/** @var number */
			public $LOADED;
		
			/** @var number */
			public $LOADING;
		
			/** @var number */
			public $NONE;
		
			/** @var number */
			public $SHOWING;
		
		}
}

namespace {
	/**
	 * @property number $endTime
	 * @property string $id
	 * @property boolean $pauseOnExit
	 * @property number $startTime
	 * @property string $text
	 * @property TextTrack $track
	 */
	interface TextTrackCue extends EventTarget
	{
	
		/**
		 * DocumentFragment
		 */
		function getCueAsHTML();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class TextTrackCue_
		{
			/** @var TextTrackCue */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface TextTrackCueList
	{
	
		/**
		 * @param string $id
		 * TextTrackCue
		 */
		function getCueById($id);
	
	
		/**
		 * @param number $index
		 * TextTrackCue
		 */
		function item($index);
	
	}
}

namespace {
		class TextTrackCueList_
		{
			/** @var TextTrackCueList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface TextTrackList extends EventTarget
	{
	
		/**
		 * @param number $index
		 * TextTrack
		 */
		function item($index);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class TextTrackList_
		{
			/** @var TextTrackList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface TimeRanges
	{
	
		/**
		 * @param number $index
		 * number
		 */
		function end($index);
	
	
		/**
		 * @param number $index
		 * number
		 */
		function start($index);
	
	}
}

namespace {
		class TimeRanges_
		{
			/** @var TimeRanges */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $clientX
	 * @property number $clientY
	 * @property number $identifier
	 * @property number $pageX
	 * @property number $pageY
	 * @property number $screenX
	 * @property number $screenY
	 * @property EventTarget $target
	 */
	interface Touch
	{
	}
}

namespace {
		class Touch_
		{
			/** @var Touch */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $altKey
	 * @property TouchList $changedTouches
	 * @property boolean $ctrlKey
	 * @property boolean $metaKey
	 * @property boolean $shiftKey
	 * @property TouchList $targetTouches
	 * @property TouchList $touches
	 */
	interface TouchEvent extends UIEvent
	{
	}
}

namespace {
		class TouchEvent_
		{
			/** @var TouchEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 */
	interface TouchList
	{
	
		/**
		 * @param number $index
		 * Touch
		 */
		function item($index);
	
	}
}

namespace {
		class TouchList_
		{
			/** @var TouchList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property mixed $track
	 */
	interface TrackEvent extends Event
	{
	}
}

namespace {
		class TrackEvent_
		{
			/** @var TrackEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $elapsedTime
	 * @property string $propertyName
	 */
	interface TransitionEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param string $propertyNameArg
		 * @param number $elapsedTimeArg
		 * void
		 */
		function initTransitionEvent($typeArg, $canBubbleArg, $cancelableArg, $propertyNameArg, $elapsedTimeArg);
	
	}
}

namespace {
		class TransitionEvent_
		{
			/** @var TransitionEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property Node $currentNode
	 * @property boolean $expandEntityReferences
	 * @property NodeFilter $filter
	 * @property Node $root
	 * @property number $whatToShow
	 */
	interface TreeWalker
	{
	
		/**
		 * Node
		 */
		function firstChild();
	
	
		/**
		 * Node
		 */
		function lastChild();
	
	
		/**
		 * Node
		 */
		function nextNode();
	
	
		/**
		 * Node
		 */
		function nextSibling();
	
	
		/**
		 * Node
		 */
		function parentNode();
	
	
		/**
		 * Node
		 */
		function previousNode();
	
	
		/**
		 * Node
		 */
		function previousSibling();
	
	}
}

namespace {
		class TreeWalker_
		{
			/** @var TreeWalker */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $detail
	 * @property Window $view
	 */
	interface UIEvent extends Event
	{
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * void
		 */
		function initUIEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg);
	
	}
}

namespace {
		class UIEvent_
		{
			/** @var UIEvent */
			public $prototype;
		
		}
}

namespace {
	interface URL
	{
	
		/**
		 * @param mixed $object
		 * @param ObjectURLOptions $options
		 * string
		 */
		function createObjectURL($object, $options);
	
	
		/**
		 * @param string $url
		 * void
		 */
		function revokeObjectURL($url);
	
	}
}
namespace {
	/**
	 * @const URL;
	 */
	const URL_=null;
}

namespace {
	/**
	 * @property string $mediaType
	 */
	interface UnviewableContentIdentifiedEvent extends NavigationEventWithReferrer
	{
	}
}

namespace {
		class UnviewableContentIdentifiedEvent_
		{
			/** @var UnviewableContentIdentifiedEvent */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $badInput
	 * @property boolean $customError
	 * @property boolean $patternMismatch
	 * @property boolean $rangeOverflow
	 * @property boolean $rangeUnderflow
	 * @property boolean $stepMismatch
	 * @property boolean $tooLong
	 * @property boolean $typeMismatch
	 * @property boolean $valid
	 * @property boolean $valueMissing
	 */
	interface ValidityState
	{
	}
}

namespace {
		class ValidityState_
		{
			/** @var ValidityState */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $corruptedVideoFrames
	 * @property number $creationTime
	 * @property number $droppedVideoFrames
	 * @property number $totalFrameDelay
	 * @property number $totalVideoFrames
	 */
	interface VideoPlaybackQuality
	{
	}
}

namespace {
		class VideoPlaybackQuality_
		{
			/** @var VideoPlaybackQuality */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $id
	 * @property string $kind
	 * @property string $label
	 * @property string $language
	 * @property boolean $selected
	 * @property SourceBuffer $sourceBuffer
	 */
	interface VideoTrack
	{
	}
}

namespace {
		class VideoTrack_
		{
			/** @var VideoTrack */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $length
	 * @property number $selectedIndex
	 */
	interface VideoTrackList extends EventTarget
	{
	
		/**
		 * @param string $id
		 * VideoTrack
		 */
		function getTrackById($id);
	
	
		/**
		 * @param number $index
		 * VideoTrack
		 */
		function item($index);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class VideoTrackList_
		{
			/** @var VideoTrackList */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $COMPRESSED_RGBA_S3TC_DXT1_EXT
	 * @property number $COMPRESSED_RGBA_S3TC_DXT3_EXT
	 * @property number $COMPRESSED_RGBA_S3TC_DXT5_EXT
	 * @property number $COMPRESSED_RGB_S3TC_DXT1_EXT
	 */
	interface WEBGL_compressed_texture_s3tc
	{
	}
}

namespace {
		class WEBGL_compressed_texture_s3tc_
		{
			/** @var WEBGL_compressed_texture_s3tc */
			public $prototype;
		
			/** @var number */
			public $COMPRESSED_RGBA_S3TC_DXT1_EXT;
		
			/** @var number */
			public $COMPRESSED_RGBA_S3TC_DXT3_EXT;
		
			/** @var number */
			public $COMPRESSED_RGBA_S3TC_DXT5_EXT;
		
			/** @var number */
			public $COMPRESSED_RGB_S3TC_DXT1_EXT;
		
		}
}

namespace {
	/**
	 * @property number $UNMASKED_RENDERER_WEBGL
	 * @property number $UNMASKED_VENDOR_WEBGL
	 */
	interface WEBGL_debug_renderer_info
	{
	}
}

namespace {
		class WEBGL_debug_renderer_info_
		{
			/** @var WEBGL_debug_renderer_info */
			public $prototype;
		
			/** @var number */
			public $UNMASKED_RENDERER_WEBGL;
		
			/** @var number */
			public $UNMASKED_VENDOR_WEBGL;
		
		}
}

namespace {
	/**
	 * @property number $UNSIGNED_INT_24_8_WEBGL
	 */
	interface WEBGL_depth_texture
	{
	}
}

namespace {
		class WEBGL_depth_texture_
		{
			/** @var WEBGL_depth_texture */
			public $prototype;
		
			/** @var number */
			public $UNSIGNED_INT_24_8_WEBGL;
		
		}
}

namespace {
	/**
	 * @property Float32Array $curve
	 * @property string $oversample
	 */
	interface WaveShaperNode extends AudioNode
	{
	}
}

namespace {
		class WaveShaperNode_
		{
			/** @var WaveShaperNode */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $name
	 * @property number $size
	 * @property number $type
	 */
	interface WebGLActiveInfo
	{
	}
}

namespace {
		class WebGLActiveInfo_
		{
			/** @var WebGLActiveInfo */
			public $prototype;
		
		}
}

namespace {
	interface WebGLBuffer extends WebGLObject
	{
	}
}

namespace {
		class WebGLBuffer_
		{
			/** @var WebGLBuffer */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $statusMessage
	 */
	interface WebGLContextEvent extends Event
	{
	}
}

namespace {
		class WebGLContextEvent_
		{
			/** @var WebGLContextEvent */
			public $prototype;
		
		}
}

namespace {
	interface WebGLFramebuffer extends WebGLObject
	{
	}
}

namespace {
		class WebGLFramebuffer_
		{
			/** @var WebGLFramebuffer */
			public $prototype;
		
		}
}

namespace {
	interface WebGLObject
	{
	}
}

namespace {
		class WebGLObject_
		{
			/** @var WebGLObject */
			public $prototype;
		
		}
}

namespace {
	interface WebGLProgram extends WebGLObject
	{
	}
}

namespace {
		class WebGLProgram_
		{
			/** @var WebGLProgram */
			public $prototype;
		
		}
}

namespace {
	interface WebGLRenderbuffer extends WebGLObject
	{
	}
}

namespace {
		class WebGLRenderbuffer_
		{
			/** @var WebGLRenderbuffer */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property HTMLCanvasElement $canvas
	 * @property number $drawingBufferHeight
	 * @property number $drawingBufferWidth
	 * @property number $ACTIVE_ATTRIBUTES
	 * @property number $ACTIVE_TEXTURE
	 * @property number $ACTIVE_UNIFORMS
	 * @property number $ALIASED_LINE_WIDTH_RANGE
	 * @property number $ALIASED_POINT_SIZE_RANGE
	 * @property number $ALPHA
	 * @property number $ALPHA_BITS
	 * @property number $ALWAYS
	 * @property number $ARRAY_BUFFER
	 * @property number $ARRAY_BUFFER_BINDING
	 * @property number $ATTACHED_SHADERS
	 * @property number $BACK
	 * @property number $BLEND
	 * @property number $BLEND_COLOR
	 * @property number $BLEND_DST_ALPHA
	 * @property number $BLEND_DST_RGB
	 * @property number $BLEND_EQUATION
	 * @property number $BLEND_EQUATION_ALPHA
	 * @property number $BLEND_EQUATION_RGB
	 * @property number $BLEND_SRC_ALPHA
	 * @property number $BLEND_SRC_RGB
	 * @property number $BLUE_BITS
	 * @property number $BOOL
	 * @property number $BOOL_VEC2
	 * @property number $BOOL_VEC3
	 * @property number $BOOL_VEC4
	 * @property number $BROWSER_DEFAULT_WEBGL
	 * @property number $BUFFER_SIZE
	 * @property number $BUFFER_USAGE
	 * @property number $BYTE
	 * @property number $CCW
	 * @property number $CLAMP_TO_EDGE
	 * @property number $COLOR_ATTACHMENT0
	 * @property number $COLOR_BUFFER_BIT
	 * @property number $COLOR_CLEAR_VALUE
	 * @property number $COLOR_WRITEMASK
	 * @property number $COMPILE_STATUS
	 * @property number $COMPRESSED_TEXTURE_FORMATS
	 * @property number $CONSTANT_ALPHA
	 * @property number $CONSTANT_COLOR
	 * @property number $CONTEXT_LOST_WEBGL
	 * @property number $CULL_FACE
	 * @property number $CULL_FACE_MODE
	 * @property number $CURRENT_PROGRAM
	 * @property number $CURRENT_VERTEX_ATTRIB
	 * @property number $CW
	 * @property number $DECR
	 * @property number $DECR_WRAP
	 * @property number $DELETE_STATUS
	 * @property number $DEPTH_ATTACHMENT
	 * @property number $DEPTH_BITS
	 * @property number $DEPTH_BUFFER_BIT
	 * @property number $DEPTH_CLEAR_VALUE
	 * @property number $DEPTH_COMPONENT
	 * @property number $DEPTH_COMPONENT16
	 * @property number $DEPTH_FUNC
	 * @property number $DEPTH_RANGE
	 * @property number $DEPTH_STENCIL
	 * @property number $DEPTH_STENCIL_ATTACHMENT
	 * @property number $DEPTH_TEST
	 * @property number $DEPTH_WRITEMASK
	 * @property number $DITHER
	 * @property number $DONT_CARE
	 * @property number $DST_ALPHA
	 * @property number $DST_COLOR
	 * @property number $DYNAMIC_DRAW
	 * @property number $ELEMENT_ARRAY_BUFFER
	 * @property number $ELEMENT_ARRAY_BUFFER_BINDING
	 * @property number $EQUAL
	 * @property number $FASTEST
	 * @property number $FLOAT
	 * @property number $FLOAT_MAT2
	 * @property number $FLOAT_MAT3
	 * @property number $FLOAT_MAT4
	 * @property number $FLOAT_VEC2
	 * @property number $FLOAT_VEC3
	 * @property number $FLOAT_VEC4
	 * @property number $FRAGMENT_SHADER
	 * @property number $FRAMEBUFFER
	 * @property number $FRAMEBUFFER_ATTACHMENT_OBJECT_NAME
	 * @property number $FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE
	 * @property number $FRAMEBUFFER_ATTACHMENT_TEXTURE_CUBE_MAP_FACE
	 * @property number $FRAMEBUFFER_ATTACHMENT_TEXTURE_LEVEL
	 * @property number $FRAMEBUFFER_BINDING
	 * @property number $FRAMEBUFFER_COMPLETE
	 * @property number $FRAMEBUFFER_INCOMPLETE_ATTACHMENT
	 * @property number $FRAMEBUFFER_INCOMPLETE_DIMENSIONS
	 * @property number $FRAMEBUFFER_INCOMPLETE_MISSING_ATTACHMENT
	 * @property number $FRAMEBUFFER_UNSUPPORTED
	 * @property number $FRONT
	 * @property number $FRONT_AND_BACK
	 * @property number $FRONT_FACE
	 * @property number $FUNC_ADD
	 * @property number $FUNC_REVERSE_SUBTRACT
	 * @property number $FUNC_SUBTRACT
	 * @property number $GENERATE_MIPMAP_HINT
	 * @property number $GEQUAL
	 * @property number $GREATER
	 * @property number $GREEN_BITS
	 * @property number $HIGH_FLOAT
	 * @property number $HIGH_INT
	 * @property number $IMPLEMENTATION_COLOR_READ_FORMAT
	 * @property number $IMPLEMENTATION_COLOR_READ_TYPE
	 * @property number $INCR
	 * @property number $INCR_WRAP
	 * @property number $INT
	 * @property number $INT_VEC2
	 * @property number $INT_VEC3
	 * @property number $INT_VEC4
	 * @property number $INVALID_ENUM
	 * @property number $INVALID_FRAMEBUFFER_OPERATION
	 * @property number $INVALID_OPERATION
	 * @property number $INVALID_VALUE
	 * @property number $INVERT
	 * @property number $KEEP
	 * @property number $LEQUAL
	 * @property number $LESS
	 * @property number $LINEAR
	 * @property number $LINEAR_MIPMAP_LINEAR
	 * @property number $LINEAR_MIPMAP_NEAREST
	 * @property number $LINES
	 * @property number $LINE_LOOP
	 * @property number $LINE_STRIP
	 * @property number $LINE_WIDTH
	 * @property number $LINK_STATUS
	 * @property number $LOW_FLOAT
	 * @property number $LOW_INT
	 * @property number $LUMINANCE
	 * @property number $LUMINANCE_ALPHA
	 * @property number $MAX_COMBINED_TEXTURE_IMAGE_UNITS
	 * @property number $MAX_CUBE_MAP_TEXTURE_SIZE
	 * @property number $MAX_FRAGMENT_UNIFORM_VECTORS
	 * @property number $MAX_RENDERBUFFER_SIZE
	 * @property number $MAX_TEXTURE_IMAGE_UNITS
	 * @property number $MAX_TEXTURE_SIZE
	 * @property number $MAX_VARYING_VECTORS
	 * @property number $MAX_VERTEX_ATTRIBS
	 * @property number $MAX_VERTEX_TEXTURE_IMAGE_UNITS
	 * @property number $MAX_VERTEX_UNIFORM_VECTORS
	 * @property number $MAX_VIEWPORT_DIMS
	 * @property number $MEDIUM_FLOAT
	 * @property number $MEDIUM_INT
	 * @property number $MIRRORED_REPEAT
	 * @property number $NEAREST
	 * @property number $NEAREST_MIPMAP_LINEAR
	 * @property number $NEAREST_MIPMAP_NEAREST
	 * @property number $NEVER
	 * @property number $NICEST
	 * @property number $NONE
	 * @property number $NOTEQUAL
	 * @property number $NO_ERROR
	 * @property number $ONE
	 * @property number $ONE_MINUS_CONSTANT_ALPHA
	 * @property number $ONE_MINUS_CONSTANT_COLOR
	 * @property number $ONE_MINUS_DST_ALPHA
	 * @property number $ONE_MINUS_DST_COLOR
	 * @property number $ONE_MINUS_SRC_ALPHA
	 * @property number $ONE_MINUS_SRC_COLOR
	 * @property number $OUT_OF_MEMORY
	 * @property number $PACK_ALIGNMENT
	 * @property number $POINTS
	 * @property number $POLYGON_OFFSET_FACTOR
	 * @property number $POLYGON_OFFSET_FILL
	 * @property number $POLYGON_OFFSET_UNITS
	 * @property number $RED_BITS
	 * @property number $RENDERBUFFER
	 * @property number $RENDERBUFFER_ALPHA_SIZE
	 * @property number $RENDERBUFFER_BINDING
	 * @property number $RENDERBUFFER_BLUE_SIZE
	 * @property number $RENDERBUFFER_DEPTH_SIZE
	 * @property number $RENDERBUFFER_GREEN_SIZE
	 * @property number $RENDERBUFFER_HEIGHT
	 * @property number $RENDERBUFFER_INTERNAL_FORMAT
	 * @property number $RENDERBUFFER_RED_SIZE
	 * @property number $RENDERBUFFER_STENCIL_SIZE
	 * @property number $RENDERBUFFER_WIDTH
	 * @property number $RENDERER
	 * @property number $REPEAT
	 * @property number $REPLACE
	 * @property number $RGB
	 * @property number $RGB565
	 * @property number $RGB5_A1
	 * @property number $RGBA
	 * @property number $RGBA4
	 * @property number $SAMPLER_2D
	 * @property number $SAMPLER_CUBE
	 * @property number $SAMPLES
	 * @property number $SAMPLE_ALPHA_TO_COVERAGE
	 * @property number $SAMPLE_BUFFERS
	 * @property number $SAMPLE_COVERAGE
	 * @property number $SAMPLE_COVERAGE_INVERT
	 * @property number $SAMPLE_COVERAGE_VALUE
	 * @property number $SCISSOR_BOX
	 * @property number $SCISSOR_TEST
	 * @property number $SHADER_TYPE
	 * @property number $SHADING_LANGUAGE_VERSION
	 * @property number $SHORT
	 * @property number $SRC_ALPHA
	 * @property number $SRC_ALPHA_SATURATE
	 * @property number $SRC_COLOR
	 * @property number $STATIC_DRAW
	 * @property number $STENCIL_ATTACHMENT
	 * @property number $STENCIL_BACK_FAIL
	 * @property number $STENCIL_BACK_FUNC
	 * @property number $STENCIL_BACK_PASS_DEPTH_FAIL
	 * @property number $STENCIL_BACK_PASS_DEPTH_PASS
	 * @property number $STENCIL_BACK_REF
	 * @property number $STENCIL_BACK_VALUE_MASK
	 * @property number $STENCIL_BACK_WRITEMASK
	 * @property number $STENCIL_BITS
	 * @property number $STENCIL_BUFFER_BIT
	 * @property number $STENCIL_CLEAR_VALUE
	 * @property number $STENCIL_FAIL
	 * @property number $STENCIL_FUNC
	 * @property number $STENCIL_INDEX
	 * @property number $STENCIL_INDEX8
	 * @property number $STENCIL_PASS_DEPTH_FAIL
	 * @property number $STENCIL_PASS_DEPTH_PASS
	 * @property number $STENCIL_REF
	 * @property number $STENCIL_TEST
	 * @property number $STENCIL_VALUE_MASK
	 * @property number $STENCIL_WRITEMASK
	 * @property number $STREAM_DRAW
	 * @property number $SUBPIXEL_BITS
	 * @property number $TEXTURE
	 * @property number $TEXTURE0
	 * @property number $TEXTURE1
	 * @property number $TEXTURE10
	 * @property number $TEXTURE11
	 * @property number $TEXTURE12
	 * @property number $TEXTURE13
	 * @property number $TEXTURE14
	 * @property number $TEXTURE15
	 * @property number $TEXTURE16
	 * @property number $TEXTURE17
	 * @property number $TEXTURE18
	 * @property number $TEXTURE19
	 * @property number $TEXTURE2
	 * @property number $TEXTURE20
	 * @property number $TEXTURE21
	 * @property number $TEXTURE22
	 * @property number $TEXTURE23
	 * @property number $TEXTURE24
	 * @property number $TEXTURE25
	 * @property number $TEXTURE26
	 * @property number $TEXTURE27
	 * @property number $TEXTURE28
	 * @property number $TEXTURE29
	 * @property number $TEXTURE3
	 * @property number $TEXTURE30
	 * @property number $TEXTURE31
	 * @property number $TEXTURE4
	 * @property number $TEXTURE5
	 * @property number $TEXTURE6
	 * @property number $TEXTURE7
	 * @property number $TEXTURE8
	 * @property number $TEXTURE9
	 * @property number $TEXTURE_2D
	 * @property number $TEXTURE_BINDING_2D
	 * @property number $TEXTURE_BINDING_CUBE_MAP
	 * @property number $TEXTURE_CUBE_MAP
	 * @property number $TEXTURE_CUBE_MAP_NEGATIVE_X
	 * @property number $TEXTURE_CUBE_MAP_NEGATIVE_Y
	 * @property number $TEXTURE_CUBE_MAP_NEGATIVE_Z
	 * @property number $TEXTURE_CUBE_MAP_POSITIVE_X
	 * @property number $TEXTURE_CUBE_MAP_POSITIVE_Y
	 * @property number $TEXTURE_CUBE_MAP_POSITIVE_Z
	 * @property number $TEXTURE_MAG_FILTER
	 * @property number $TEXTURE_MIN_FILTER
	 * @property number $TEXTURE_WRAP_S
	 * @property number $TEXTURE_WRAP_T
	 * @property number $TRIANGLES
	 * @property number $TRIANGLE_FAN
	 * @property number $TRIANGLE_STRIP
	 * @property number $UNPACK_ALIGNMENT
	 * @property number $UNPACK_COLORSPACE_CONVERSION_WEBGL
	 * @property number $UNPACK_FLIP_Y_WEBGL
	 * @property number $UNPACK_PREMULTIPLY_ALPHA_WEBGL
	 * @property number $UNSIGNED_BYTE
	 * @property number $UNSIGNED_INT
	 * @property number $UNSIGNED_SHORT
	 * @property number $UNSIGNED_SHORT_4_4_4_4
	 * @property number $UNSIGNED_SHORT_5_5_5_1
	 * @property number $UNSIGNED_SHORT_5_6_5
	 * @property number $VALIDATE_STATUS
	 * @property number $VENDOR
	 * @property number $VERSION
	 * @property number $VERTEX_ATTRIB_ARRAY_BUFFER_BINDING
	 * @property number $VERTEX_ATTRIB_ARRAY_ENABLED
	 * @property number $VERTEX_ATTRIB_ARRAY_NORMALIZED
	 * @property number $VERTEX_ATTRIB_ARRAY_POINTER
	 * @property number $VERTEX_ATTRIB_ARRAY_SIZE
	 * @property number $VERTEX_ATTRIB_ARRAY_STRIDE
	 * @property number $VERTEX_ATTRIB_ARRAY_TYPE
	 * @property number $VERTEX_SHADER
	 * @property number $VIEWPORT
	 * @property number $ZERO
	 */
	interface WebGLRenderingContext
	{
	
		/**
		 * @param number $texture
		 * void
		 */
		function activeTexture($texture);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param WebGLShader $shader
		 * void
		 */
		function attachShader($program, $shader);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param number $index
		 * @param string $name
		 * void
		 */
		function bindAttribLocation($program, $index, $name);
	
	
		/**
		 * @param number $target
		 * @param WebGLBuffer $buffer
		 * void
		 */
		function bindBuffer($target, $buffer);
	
	
		/**
		 * @param number $target
		 * @param WebGLFramebuffer $framebuffer
		 * void
		 */
		function bindFramebuffer($target, $framebuffer);
	
	
		/**
		 * @param number $target
		 * @param WebGLRenderbuffer $renderbuffer
		 * void
		 */
		function bindRenderbuffer($target, $renderbuffer);
	
	
		/**
		 * @param number $target
		 * @param WebGLTexture $texture
		 * void
		 */
		function bindTexture($target, $texture);
	
	
		/**
		 * @param number $red
		 * @param number $green
		 * @param number $blue
		 * @param number $alpha
		 * void
		 */
		function blendColor($red, $green, $blue, $alpha);
	
	
		/**
		 * @param number $mode
		 * void
		 */
		function blendEquation($mode);
	
	
		/**
		 * @param number $modeRGB
		 * @param number $modeAlpha
		 * void
		 */
		function blendEquationSeparate($modeRGB, $modeAlpha);
	
	
		/**
		 * @param number $sfactor
		 * @param number $dfactor
		 * void
		 */
		function blendFunc($sfactor, $dfactor);
	
	
		/**
		 * @param number $srcRGB
		 * @param number $dstRGB
		 * @param number $srcAlpha
		 * @param number $dstAlpha
		 * void
		 */
		function blendFuncSeparate($srcRGB, $dstRGB, $srcAlpha, $dstAlpha);
	
	
		/**
		 * @param number $target
		 * @param number|ArrayBufferView|ArrayBuffer $size
		 * @param number $usage
		 * void
		 */
		function bufferData($target, $size, $usage);
	
	
		/**
		 * @param number $target
		 * @param number $offset
		 * @param ArrayBufferView|ArrayBuffer $data
		 * void
		 */
		function bufferSubData($target, $offset, $data);
	
	
		/**
		 * @param number $target
		 * number
		 */
		function checkFramebufferStatus($target);
	
	
		/**
		 * @param number $mask
		 * void
		 */
		function clear($mask);
	
	
		/**
		 * @param number $red
		 * @param number $green
		 * @param number $blue
		 * @param number $alpha
		 * void
		 */
		function clearColor($red, $green, $blue, $alpha);
	
	
		/**
		 * @param number $depth
		 * void
		 */
		function clearDepth($depth);
	
	
		/**
		 * @param number $s
		 * void
		 */
		function clearStencil($s);
	
	
		/**
		 * @param boolean $red
		 * @param boolean $green
		 * @param boolean $blue
		 * @param boolean $alpha
		 * void
		 */
		function colorMask($red, $green, $blue, $alpha);
	
	
		/**
		 * @param WebGLShader $shader
		 * void
		 */
		function compileShader($shader);
	
	
		/**
		 * @param number $target
		 * @param number $level
		 * @param number $internalformat
		 * @param number $width
		 * @param number $height
		 * @param number $border
		 * @param ArrayBufferView $data
		 * void
		 */
		function compressedTexImage2D($target, $level, $internalformat, $width, $height, $border, $data);
	
	
		/**
		 * @param number $target
		 * @param number $level
		 * @param number $xoffset
		 * @param number $yoffset
		 * @param number $width
		 * @param number $height
		 * @param number $format
		 * @param ArrayBufferView $data
		 * void
		 */
		function compressedTexSubImage2D($target, $level, $xoffset, $yoffset, $width, $height, $format, $data);
	
	
		/**
		 * @param number $target
		 * @param number $level
		 * @param number $internalformat
		 * @param number $x
		 * @param number $y
		 * @param number $width
		 * @param number $height
		 * @param number $border
		 * void
		 */
		function copyTexImage2D($target, $level, $internalformat, $x, $y, $width, $height, $border);
	
	
		/**
		 * @param number $target
		 * @param number $level
		 * @param number $xoffset
		 * @param number $yoffset
		 * @param number $x
		 * @param number $y
		 * @param number $width
		 * @param number $height
		 * void
		 */
		function copyTexSubImage2D($target, $level, $xoffset, $yoffset, $x, $y, $width, $height);
	
	
		/**
		 * WebGLBuffer
		 */
		function createBuffer();
	
	
		/**
		 * WebGLFramebuffer
		 */
		function createFramebuffer();
	
	
		/**
		 * WebGLProgram
		 */
		function createProgram();
	
	
		/**
		 * WebGLRenderbuffer
		 */
		function createRenderbuffer();
	
	
		/**
		 * @param number $type
		 * WebGLShader
		 */
		function createShader($type);
	
	
		/**
		 * WebGLTexture
		 */
		function createTexture();
	
	
		/**
		 * @param number $mode
		 * void
		 */
		function cullFace($mode);
	
	
		/**
		 * @param WebGLBuffer $buffer
		 * void
		 */
		function deleteBuffer($buffer);
	
	
		/**
		 * @param WebGLFramebuffer $framebuffer
		 * void
		 */
		function deleteFramebuffer($framebuffer);
	
	
		/**
		 * @param WebGLProgram $program
		 * void
		 */
		function deleteProgram($program);
	
	
		/**
		 * @param WebGLRenderbuffer $renderbuffer
		 * void
		 */
		function deleteRenderbuffer($renderbuffer);
	
	
		/**
		 * @param WebGLShader $shader
		 * void
		 */
		function deleteShader($shader);
	
	
		/**
		 * @param WebGLTexture $texture
		 * void
		 */
		function deleteTexture($texture);
	
	
		/**
		 * @param number $func
		 * void
		 */
		function depthFunc($func);
	
	
		/**
		 * @param boolean $flag
		 * void
		 */
		function depthMask($flag);
	
	
		/**
		 * @param number $zNear
		 * @param number $zFar
		 * void
		 */
		function depthRange($zNear, $zFar);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param WebGLShader $shader
		 * void
		 */
		function detachShader($program, $shader);
	
	
		/**
		 * @param number $cap
		 * void
		 */
		function disable($cap);
	
	
		/**
		 * @param number $index
		 * void
		 */
		function disableVertexAttribArray($index);
	
	
		/**
		 * @param number $mode
		 * @param number $first
		 * @param number $count
		 * void
		 */
		function drawArrays($mode, $first, $count);
	
	
		/**
		 * @param number $mode
		 * @param number $count
		 * @param number $type
		 * @param number $offset
		 * void
		 */
		function drawElements($mode, $count, $type, $offset);
	
	
		/**
		 * @param number $cap
		 * void
		 */
		function enable($cap);
	
	
		/**
		 * @param number $index
		 * void
		 */
		function enableVertexAttribArray($index);
	
	
		/**
		 * void
		 */
		function finish();
	
	
		/**
		 * void
		 */
		function flush();
	
	
		/**
		 * @param number $target
		 * @param number $attachment
		 * @param number $renderbuffertarget
		 * @param WebGLRenderbuffer $renderbuffer
		 * void
		 */
		function framebufferRenderbuffer($target, $attachment, $renderbuffertarget, $renderbuffer);
	
	
		/**
		 * @param number $target
		 * @param number $attachment
		 * @param number $textarget
		 * @param WebGLTexture $texture
		 * @param number $level
		 * void
		 */
		function framebufferTexture2D($target, $attachment, $textarget, $texture, $level);
	
	
		/**
		 * @param number $mode
		 * void
		 */
		function frontFace($mode);
	
	
		/**
		 * @param number $target
		 * void
		 */
		function generateMipmap($target);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param number $index
		 * WebGLActiveInfo
		 */
		function getActiveAttrib($program, $index);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param number $index
		 * WebGLActiveInfo
		 */
		function getActiveUniform($program, $index);
	
	
		/**
		 * @param WebGLProgram $program
		 * WebGLShader[]
		 */
		function getAttachedShaders($program);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param string $name
		 * number
		 */
		function getAttribLocation($program, $name);
	
	
		/**
		 * @param number $target
		 * @param number $pname
		 * mixed
		 */
		function getBufferParameter($target, $pname);
	
	
		/**
		 * WebGLContextAttributes
		 */
		function getContextAttributes();
	
	
		/**
		 * number
		 */
		function getError();
	
	
		/**
		 * @param string $name
		 * mixed
		 */
		function getExtension($name);
	
	
		/**
		 * @param number $target
		 * @param number $attachment
		 * @param number $pname
		 * mixed
		 */
		function getFramebufferAttachmentParameter($target, $attachment, $pname);
	
	
		/**
		 * @param number $pname
		 * mixed
		 */
		function getParameter($pname);
	
	
		/**
		 * @param WebGLProgram $program
		 * string
		 */
		function getProgramInfoLog($program);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param number $pname
		 * mixed
		 */
		function getProgramParameter($program, $pname);
	
	
		/**
		 * @param number $target
		 * @param number $pname
		 * mixed
		 */
		function getRenderbufferParameter($target, $pname);
	
	
		/**
		 * @param WebGLShader $shader
		 * string
		 */
		function getShaderInfoLog($shader);
	
	
		/**
		 * @param WebGLShader $shader
		 * @param number $pname
		 * mixed
		 */
		function getShaderParameter($shader, $pname);
	
	
		/**
		 * @param number $shadertype
		 * @param number $precisiontype
		 * WebGLShaderPrecisionFormat
		 */
		function getShaderPrecisionFormat($shadertype, $precisiontype);
	
	
		/**
		 * @param WebGLShader $shader
		 * string
		 */
		function getShaderSource($shader);
	
	
		/**
		 * string[]
		 */
		function getSupportedExtensions();
	
	
		/**
		 * @param number $target
		 * @param number $pname
		 * mixed
		 */
		function getTexParameter($target, $pname);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param WebGLUniformLocation $location
		 * mixed
		 */
		function getUniform($program, $location);
	
	
		/**
		 * @param WebGLProgram $program
		 * @param string $name
		 * WebGLUniformLocation
		 */
		function getUniformLocation($program, $name);
	
	
		/**
		 * @param number $index
		 * @param number $pname
		 * mixed
		 */
		function getVertexAttrib($index, $pname);
	
	
		/**
		 * @param number $index
		 * @param number $pname
		 * number
		 */
		function getVertexAttribOffset($index, $pname);
	
	
		/**
		 * @param number $target
		 * @param number $mode
		 * void
		 */
		function hint($target, $mode);
	
	
		/**
		 * @param WebGLBuffer $buffer
		 * boolean
		 */
		function isBuffer($buffer);
	
	
		/**
		 * boolean
		 */
		function isContextLost();
	
	
		/**
		 * @param number $cap
		 * boolean
		 */
		function isEnabled($cap);
	
	
		/**
		 * @param WebGLFramebuffer $framebuffer
		 * boolean
		 */
		function isFramebuffer($framebuffer);
	
	
		/**
		 * @param WebGLProgram $program
		 * boolean
		 */
		function isProgram($program);
	
	
		/**
		 * @param WebGLRenderbuffer $renderbuffer
		 * boolean
		 */
		function isRenderbuffer($renderbuffer);
	
	
		/**
		 * @param WebGLShader $shader
		 * boolean
		 */
		function isShader($shader);
	
	
		/**
		 * @param WebGLTexture $texture
		 * boolean
		 */
		function isTexture($texture);
	
	
		/**
		 * @param number $width
		 * void
		 */
		function lineWidth($width);
	
	
		/**
		 * @param WebGLProgram $program
		 * void
		 */
		function linkProgram($program);
	
	
		/**
		 * @param number $pname
		 * @param number $param
		 * void
		 */
		function pixelStorei($pname, $param);
	
	
		/**
		 * @param number $factor
		 * @param number $units
		 * void
		 */
		function polygonOffset($factor, $units);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $width
		 * @param number $height
		 * @param number $format
		 * @param number $type
		 * @param ArrayBufferView $pixels
		 * void
		 */
		function readPixels($x, $y, $width, $height, $format, $type, $pixels);
	
	
		/**
		 * @param number $target
		 * @param number $internalformat
		 * @param number $width
		 * @param number $height
		 * void
		 */
		function renderbufferStorage($target, $internalformat, $width, $height);
	
	
		/**
		 * @param number $value
		 * @param boolean $invert
		 * void
		 */
		function sampleCoverage($value, $invert);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $width
		 * @param number $height
		 * void
		 */
		function scissor($x, $y, $width, $height);
	
	
		/**
		 * @param WebGLShader $shader
		 * @param string $source
		 * void
		 */
		function shaderSource($shader, $source);
	
	
		/**
		 * @param number $func
		 * @param number $ref
		 * @param number $mask
		 * void
		 */
		function stencilFunc($func, $ref, $mask);
	
	
		/**
		 * @param number $face
		 * @param number $func
		 * @param number $ref
		 * @param number $mask
		 * void
		 */
		function stencilFuncSeparate($face, $func, $ref, $mask);
	
	
		/**
		 * @param number $mask
		 * void
		 */
		function stencilMask($mask);
	
	
		/**
		 * @param number $face
		 * @param number $mask
		 * void
		 */
		function stencilMaskSeparate($face, $mask);
	
	
		/**
		 * @param number $fail
		 * @param number $zfail
		 * @param number $zpass
		 * void
		 */
		function stencilOp($fail, $zfail, $zpass);
	
	
		/**
		 * @param number $face
		 * @param number $fail
		 * @param number $zfail
		 * @param number $zpass
		 * void
		 */
		function stencilOpSeparate($face, $fail, $zfail, $zpass);
	
	
		/**
		 * @param number $target
		 * @param number $level
		 * @param number $internalformat
		 * @param number $width
		 * @param number $height
		 * @param number $border
		 * @param number $format
		 * @param number $type
		 * @param ArrayBufferView $pixels
		 * void
		 */
		function texImage2D($target, $level, $internalformat, $width, $height, $border, $format, $type, $pixels);
	
	
		/**
		 * @param number $target
		 * @param number $pname
		 * @param number $param
		 * void
		 */
		function texParameterf($target, $pname, $param);
	
	
		/**
		 * @param number $target
		 * @param number $pname
		 * @param number $param
		 * void
		 */
		function texParameteri($target, $pname, $param);
	
	
		/**
		 * @param number $target
		 * @param number $level
		 * @param number $xoffset
		 * @param number $yoffset
		 * @param number $width
		 * @param number $height
		 * @param number $format
		 * @param number $type
		 * @param ArrayBufferView $pixels
		 * void
		 */
		function texSubImage2D($target, $level, $xoffset, $yoffset, $width, $height, $format, $type, $pixels);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * void
		 */
		function uniform1f($location, $x);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Float32Array $v
		 * void
		 */
		function uniform1fv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * void
		 */
		function uniform1i($location, $x);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Int32Array $v
		 * void
		 */
		function uniform1iv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function uniform2f($location, $x, $y);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Float32Array $v
		 * void
		 */
		function uniform2fv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function uniform2i($location, $x, $y);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Int32Array $v
		 * void
		 */
		function uniform2iv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function uniform3f($location, $x, $y, $z);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Float32Array $v
		 * void
		 */
		function uniform3fv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function uniform3i($location, $x, $y, $z);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Int32Array $v
		 * void
		 */
		function uniform3iv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * @param number $w
		 * void
		 */
		function uniform4f($location, $x, $y, $z, $w);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Float32Array $v
		 * void
		 */
		function uniform4fv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * @param number $w
		 * void
		 */
		function uniform4i($location, $x, $y, $z, $w);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param Int32Array $v
		 * void
		 */
		function uniform4iv($location, $v);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param boolean $transpose
		 * @param Float32Array $value
		 * void
		 */
		function uniformMatrix2fv($location, $transpose, $value);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param boolean $transpose
		 * @param Float32Array $value
		 * void
		 */
		function uniformMatrix3fv($location, $transpose, $value);
	
	
		/**
		 * @param WebGLUniformLocation $location
		 * @param boolean $transpose
		 * @param Float32Array $value
		 * void
		 */
		function uniformMatrix4fv($location, $transpose, $value);
	
	
		/**
		 * @param WebGLProgram $program
		 * void
		 */
		function useProgram($program);
	
	
		/**
		 * @param WebGLProgram $program
		 * void
		 */
		function validateProgram($program);
	
	
		/**
		 * @param number $indx
		 * @param number $x
		 * void
		 */
		function vertexAttrib1f($indx, $x);
	
	
		/**
		 * @param number $indx
		 * @param Float32Array $values
		 * void
		 */
		function vertexAttrib1fv($indx, $values);
	
	
		/**
		 * @param number $indx
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function vertexAttrib2f($indx, $x, $y);
	
	
		/**
		 * @param number $indx
		 * @param Float32Array $values
		 * void
		 */
		function vertexAttrib2fv($indx, $values);
	
	
		/**
		 * @param number $indx
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * void
		 */
		function vertexAttrib3f($indx, $x, $y, $z);
	
	
		/**
		 * @param number $indx
		 * @param Float32Array $values
		 * void
		 */
		function vertexAttrib3fv($indx, $values);
	
	
		/**
		 * @param number $indx
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * @param number $w
		 * void
		 */
		function vertexAttrib4f($indx, $x, $y, $z, $w);
	
	
		/**
		 * @param number $indx
		 * @param Float32Array $values
		 * void
		 */
		function vertexAttrib4fv($indx, $values);
	
	
		/**
		 * @param number $indx
		 * @param number $size
		 * @param number $type
		 * @param boolean $normalized
		 * @param number $stride
		 * @param number $offset
		 * void
		 */
		function vertexAttribPointer($indx, $size, $type, $normalized, $stride, $offset);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $width
		 * @param number $height
		 * void
		 */
		function viewport($x, $y, $width, $height);
	
	}
}

namespace {
		class WebGLRenderingContext_
		{
			/** @var WebGLRenderingContext */
			public $prototype;
		
			/** @var number */
			public $ACTIVE_ATTRIBUTES;
		
			/** @var number */
			public $ACTIVE_TEXTURE;
		
			/** @var number */
			public $ACTIVE_UNIFORMS;
		
			/** @var number */
			public $ALIASED_LINE_WIDTH_RANGE;
		
			/** @var number */
			public $ALIASED_POINT_SIZE_RANGE;
		
			/** @var number */
			public $ALPHA;
		
			/** @var number */
			public $ALPHA_BITS;
		
			/** @var number */
			public $ALWAYS;
		
			/** @var number */
			public $ARRAY_BUFFER;
		
			/** @var number */
			public $ARRAY_BUFFER_BINDING;
		
			/** @var number */
			public $ATTACHED_SHADERS;
		
			/** @var number */
			public $BACK;
		
			/** @var number */
			public $BLEND;
		
			/** @var number */
			public $BLEND_COLOR;
		
			/** @var number */
			public $BLEND_DST_ALPHA;
		
			/** @var number */
			public $BLEND_DST_RGB;
		
			/** @var number */
			public $BLEND_EQUATION;
		
			/** @var number */
			public $BLEND_EQUATION_ALPHA;
		
			/** @var number */
			public $BLEND_EQUATION_RGB;
		
			/** @var number */
			public $BLEND_SRC_ALPHA;
		
			/** @var number */
			public $BLEND_SRC_RGB;
		
			/** @var number */
			public $BLUE_BITS;
		
			/** @var number */
			public $BOOL;
		
			/** @var number */
			public $BOOL_VEC2;
		
			/** @var number */
			public $BOOL_VEC3;
		
			/** @var number */
			public $BOOL_VEC4;
		
			/** @var number */
			public $BROWSER_DEFAULT_WEBGL;
		
			/** @var number */
			public $BUFFER_SIZE;
		
			/** @var number */
			public $BUFFER_USAGE;
		
			/** @var number */
			public $BYTE;
		
			/** @var number */
			public $CCW;
		
			/** @var number */
			public $CLAMP_TO_EDGE;
		
			/** @var number */
			public $COLOR_ATTACHMENT0;
		
			/** @var number */
			public $COLOR_BUFFER_BIT;
		
			/** @var number */
			public $COLOR_CLEAR_VALUE;
		
			/** @var number */
			public $COLOR_WRITEMASK;
		
			/** @var number */
			public $COMPILE_STATUS;
		
			/** @var number */
			public $COMPRESSED_TEXTURE_FORMATS;
		
			/** @var number */
			public $CONSTANT_ALPHA;
		
			/** @var number */
			public $CONSTANT_COLOR;
		
			/** @var number */
			public $CONTEXT_LOST_WEBGL;
		
			/** @var number */
			public $CULL_FACE;
		
			/** @var number */
			public $CULL_FACE_MODE;
		
			/** @var number */
			public $CURRENT_PROGRAM;
		
			/** @var number */
			public $CURRENT_VERTEX_ATTRIB;
		
			/** @var number */
			public $CW;
		
			/** @var number */
			public $DECR;
		
			/** @var number */
			public $DECR_WRAP;
		
			/** @var number */
			public $DELETE_STATUS;
		
			/** @var number */
			public $DEPTH_ATTACHMENT;
		
			/** @var number */
			public $DEPTH_BITS;
		
			/** @var number */
			public $DEPTH_BUFFER_BIT;
		
			/** @var number */
			public $DEPTH_CLEAR_VALUE;
		
			/** @var number */
			public $DEPTH_COMPONENT;
		
			/** @var number */
			public $DEPTH_COMPONENT16;
		
			/** @var number */
			public $DEPTH_FUNC;
		
			/** @var number */
			public $DEPTH_RANGE;
		
			/** @var number */
			public $DEPTH_STENCIL;
		
			/** @var number */
			public $DEPTH_STENCIL_ATTACHMENT;
		
			/** @var number */
			public $DEPTH_TEST;
		
			/** @var number */
			public $DEPTH_WRITEMASK;
		
			/** @var number */
			public $DITHER;
		
			/** @var number */
			public $DONT_CARE;
		
			/** @var number */
			public $DST_ALPHA;
		
			/** @var number */
			public $DST_COLOR;
		
			/** @var number */
			public $DYNAMIC_DRAW;
		
			/** @var number */
			public $ELEMENT_ARRAY_BUFFER;
		
			/** @var number */
			public $ELEMENT_ARRAY_BUFFER_BINDING;
		
			/** @var number */
			public $EQUAL;
		
			/** @var number */
			public $FASTEST;
		
			/** @var number */
			public $FLOAT;
		
			/** @var number */
			public $FLOAT_MAT2;
		
			/** @var number */
			public $FLOAT_MAT3;
		
			/** @var number */
			public $FLOAT_MAT4;
		
			/** @var number */
			public $FLOAT_VEC2;
		
			/** @var number */
			public $FLOAT_VEC3;
		
			/** @var number */
			public $FLOAT_VEC4;
		
			/** @var number */
			public $FRAGMENT_SHADER;
		
			/** @var number */
			public $FRAMEBUFFER;
		
			/** @var number */
			public $FRAMEBUFFER_ATTACHMENT_OBJECT_NAME;
		
			/** @var number */
			public $FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE;
		
			/** @var number */
			public $FRAMEBUFFER_ATTACHMENT_TEXTURE_CUBE_MAP_FACE;
		
			/** @var number */
			public $FRAMEBUFFER_ATTACHMENT_TEXTURE_LEVEL;
		
			/** @var number */
			public $FRAMEBUFFER_BINDING;
		
			/** @var number */
			public $FRAMEBUFFER_COMPLETE;
		
			/** @var number */
			public $FRAMEBUFFER_INCOMPLETE_ATTACHMENT;
		
			/** @var number */
			public $FRAMEBUFFER_INCOMPLETE_DIMENSIONS;
		
			/** @var number */
			public $FRAMEBUFFER_INCOMPLETE_MISSING_ATTACHMENT;
		
			/** @var number */
			public $FRAMEBUFFER_UNSUPPORTED;
		
			/** @var number */
			public $FRONT;
		
			/** @var number */
			public $FRONT_AND_BACK;
		
			/** @var number */
			public $FRONT_FACE;
		
			/** @var number */
			public $FUNC_ADD;
		
			/** @var number */
			public $FUNC_REVERSE_SUBTRACT;
		
			/** @var number */
			public $FUNC_SUBTRACT;
		
			/** @var number */
			public $GENERATE_MIPMAP_HINT;
		
			/** @var number */
			public $GEQUAL;
		
			/** @var number */
			public $GREATER;
		
			/** @var number */
			public $GREEN_BITS;
		
			/** @var number */
			public $HIGH_FLOAT;
		
			/** @var number */
			public $HIGH_INT;
		
			/** @var number */
			public $IMPLEMENTATION_COLOR_READ_FORMAT;
		
			/** @var number */
			public $IMPLEMENTATION_COLOR_READ_TYPE;
		
			/** @var number */
			public $INCR;
		
			/** @var number */
			public $INCR_WRAP;
		
			/** @var number */
			public $INT;
		
			/** @var number */
			public $INT_VEC2;
		
			/** @var number */
			public $INT_VEC3;
		
			/** @var number */
			public $INT_VEC4;
		
			/** @var number */
			public $INVALID_ENUM;
		
			/** @var number */
			public $INVALID_FRAMEBUFFER_OPERATION;
		
			/** @var number */
			public $INVALID_OPERATION;
		
			/** @var number */
			public $INVALID_VALUE;
		
			/** @var number */
			public $INVERT;
		
			/** @var number */
			public $KEEP;
		
			/** @var number */
			public $LEQUAL;
		
			/** @var number */
			public $LESS;
		
			/** @var number */
			public $LINEAR;
		
			/** @var number */
			public $LINEAR_MIPMAP_LINEAR;
		
			/** @var number */
			public $LINEAR_MIPMAP_NEAREST;
		
			/** @var number */
			public $LINES;
		
			/** @var number */
			public $LINE_LOOP;
		
			/** @var number */
			public $LINE_STRIP;
		
			/** @var number */
			public $LINE_WIDTH;
		
			/** @var number */
			public $LINK_STATUS;
		
			/** @var number */
			public $LOW_FLOAT;
		
			/** @var number */
			public $LOW_INT;
		
			/** @var number */
			public $LUMINANCE;
		
			/** @var number */
			public $LUMINANCE_ALPHA;
		
			/** @var number */
			public $MAX_COMBINED_TEXTURE_IMAGE_UNITS;
		
			/** @var number */
			public $MAX_CUBE_MAP_TEXTURE_SIZE;
		
			/** @var number */
			public $MAX_FRAGMENT_UNIFORM_VECTORS;
		
			/** @var number */
			public $MAX_RENDERBUFFER_SIZE;
		
			/** @var number */
			public $MAX_TEXTURE_IMAGE_UNITS;
		
			/** @var number */
			public $MAX_TEXTURE_SIZE;
		
			/** @var number */
			public $MAX_VARYING_VECTORS;
		
			/** @var number */
			public $MAX_VERTEX_ATTRIBS;
		
			/** @var number */
			public $MAX_VERTEX_TEXTURE_IMAGE_UNITS;
		
			/** @var number */
			public $MAX_VERTEX_UNIFORM_VECTORS;
		
			/** @var number */
			public $MAX_VIEWPORT_DIMS;
		
			/** @var number */
			public $MEDIUM_FLOAT;
		
			/** @var number */
			public $MEDIUM_INT;
		
			/** @var number */
			public $MIRRORED_REPEAT;
		
			/** @var number */
			public $NEAREST;
		
			/** @var number */
			public $NEAREST_MIPMAP_LINEAR;
		
			/** @var number */
			public $NEAREST_MIPMAP_NEAREST;
		
			/** @var number */
			public $NEVER;
		
			/** @var number */
			public $NICEST;
		
			/** @var number */
			public $NONE;
		
			/** @var number */
			public $NOTEQUAL;
		
			/** @var number */
			public $NO_ERROR;
		
			/** @var number */
			public $ONE;
		
			/** @var number */
			public $ONE_MINUS_CONSTANT_ALPHA;
		
			/** @var number */
			public $ONE_MINUS_CONSTANT_COLOR;
		
			/** @var number */
			public $ONE_MINUS_DST_ALPHA;
		
			/** @var number */
			public $ONE_MINUS_DST_COLOR;
		
			/** @var number */
			public $ONE_MINUS_SRC_ALPHA;
		
			/** @var number */
			public $ONE_MINUS_SRC_COLOR;
		
			/** @var number */
			public $OUT_OF_MEMORY;
		
			/** @var number */
			public $PACK_ALIGNMENT;
		
			/** @var number */
			public $POINTS;
		
			/** @var number */
			public $POLYGON_OFFSET_FACTOR;
		
			/** @var number */
			public $POLYGON_OFFSET_FILL;
		
			/** @var number */
			public $POLYGON_OFFSET_UNITS;
		
			/** @var number */
			public $RED_BITS;
		
			/** @var number */
			public $RENDERBUFFER;
		
			/** @var number */
			public $RENDERBUFFER_ALPHA_SIZE;
		
			/** @var number */
			public $RENDERBUFFER_BINDING;
		
			/** @var number */
			public $RENDERBUFFER_BLUE_SIZE;
		
			/** @var number */
			public $RENDERBUFFER_DEPTH_SIZE;
		
			/** @var number */
			public $RENDERBUFFER_GREEN_SIZE;
		
			/** @var number */
			public $RENDERBUFFER_HEIGHT;
		
			/** @var number */
			public $RENDERBUFFER_INTERNAL_FORMAT;
		
			/** @var number */
			public $RENDERBUFFER_RED_SIZE;
		
			/** @var number */
			public $RENDERBUFFER_STENCIL_SIZE;
		
			/** @var number */
			public $RENDERBUFFER_WIDTH;
		
			/** @var number */
			public $RENDERER;
		
			/** @var number */
			public $REPEAT;
		
			/** @var number */
			public $REPLACE;
		
			/** @var number */
			public $RGB;
		
			/** @var number */
			public $RGB565;
		
			/** @var number */
			public $RGB5_A1;
		
			/** @var number */
			public $RGBA;
		
			/** @var number */
			public $RGBA4;
		
			/** @var number */
			public $SAMPLER_2D;
		
			/** @var number */
			public $SAMPLER_CUBE;
		
			/** @var number */
			public $SAMPLES;
		
			/** @var number */
			public $SAMPLE_ALPHA_TO_COVERAGE;
		
			/** @var number */
			public $SAMPLE_BUFFERS;
		
			/** @var number */
			public $SAMPLE_COVERAGE;
		
			/** @var number */
			public $SAMPLE_COVERAGE_INVERT;
		
			/** @var number */
			public $SAMPLE_COVERAGE_VALUE;
		
			/** @var number */
			public $SCISSOR_BOX;
		
			/** @var number */
			public $SCISSOR_TEST;
		
			/** @var number */
			public $SHADER_TYPE;
		
			/** @var number */
			public $SHADING_LANGUAGE_VERSION;
		
			/** @var number */
			public $SHORT;
		
			/** @var number */
			public $SRC_ALPHA;
		
			/** @var number */
			public $SRC_ALPHA_SATURATE;
		
			/** @var number */
			public $SRC_COLOR;
		
			/** @var number */
			public $STATIC_DRAW;
		
			/** @var number */
			public $STENCIL_ATTACHMENT;
		
			/** @var number */
			public $STENCIL_BACK_FAIL;
		
			/** @var number */
			public $STENCIL_BACK_FUNC;
		
			/** @var number */
			public $STENCIL_BACK_PASS_DEPTH_FAIL;
		
			/** @var number */
			public $STENCIL_BACK_PASS_DEPTH_PASS;
		
			/** @var number */
			public $STENCIL_BACK_REF;
		
			/** @var number */
			public $STENCIL_BACK_VALUE_MASK;
		
			/** @var number */
			public $STENCIL_BACK_WRITEMASK;
		
			/** @var number */
			public $STENCIL_BITS;
		
			/** @var number */
			public $STENCIL_BUFFER_BIT;
		
			/** @var number */
			public $STENCIL_CLEAR_VALUE;
		
			/** @var number */
			public $STENCIL_FAIL;
		
			/** @var number */
			public $STENCIL_FUNC;
		
			/** @var number */
			public $STENCIL_INDEX;
		
			/** @var number */
			public $STENCIL_INDEX8;
		
			/** @var number */
			public $STENCIL_PASS_DEPTH_FAIL;
		
			/** @var number */
			public $STENCIL_PASS_DEPTH_PASS;
		
			/** @var number */
			public $STENCIL_REF;
		
			/** @var number */
			public $STENCIL_TEST;
		
			/** @var number */
			public $STENCIL_VALUE_MASK;
		
			/** @var number */
			public $STENCIL_WRITEMASK;
		
			/** @var number */
			public $STREAM_DRAW;
		
			/** @var number */
			public $SUBPIXEL_BITS;
		
			/** @var number */
			public $TEXTURE;
		
			/** @var number */
			public $TEXTURE0;
		
			/** @var number */
			public $TEXTURE1;
		
			/** @var number */
			public $TEXTURE10;
		
			/** @var number */
			public $TEXTURE11;
		
			/** @var number */
			public $TEXTURE12;
		
			/** @var number */
			public $TEXTURE13;
		
			/** @var number */
			public $TEXTURE14;
		
			/** @var number */
			public $TEXTURE15;
		
			/** @var number */
			public $TEXTURE16;
		
			/** @var number */
			public $TEXTURE17;
		
			/** @var number */
			public $TEXTURE18;
		
			/** @var number */
			public $TEXTURE19;
		
			/** @var number */
			public $TEXTURE2;
		
			/** @var number */
			public $TEXTURE20;
		
			/** @var number */
			public $TEXTURE21;
		
			/** @var number */
			public $TEXTURE22;
		
			/** @var number */
			public $TEXTURE23;
		
			/** @var number */
			public $TEXTURE24;
		
			/** @var number */
			public $TEXTURE25;
		
			/** @var number */
			public $TEXTURE26;
		
			/** @var number */
			public $TEXTURE27;
		
			/** @var number */
			public $TEXTURE28;
		
			/** @var number */
			public $TEXTURE29;
		
			/** @var number */
			public $TEXTURE3;
		
			/** @var number */
			public $TEXTURE30;
		
			/** @var number */
			public $TEXTURE31;
		
			/** @var number */
			public $TEXTURE4;
		
			/** @var number */
			public $TEXTURE5;
		
			/** @var number */
			public $TEXTURE6;
		
			/** @var number */
			public $TEXTURE7;
		
			/** @var number */
			public $TEXTURE8;
		
			/** @var number */
			public $TEXTURE9;
		
			/** @var number */
			public $TEXTURE_2D;
		
			/** @var number */
			public $TEXTURE_BINDING_2D;
		
			/** @var number */
			public $TEXTURE_BINDING_CUBE_MAP;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP_NEGATIVE_X;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP_NEGATIVE_Y;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP_NEGATIVE_Z;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP_POSITIVE_X;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP_POSITIVE_Y;
		
			/** @var number */
			public $TEXTURE_CUBE_MAP_POSITIVE_Z;
		
			/** @var number */
			public $TEXTURE_MAG_FILTER;
		
			/** @var number */
			public $TEXTURE_MIN_FILTER;
		
			/** @var number */
			public $TEXTURE_WRAP_S;
		
			/** @var number */
			public $TEXTURE_WRAP_T;
		
			/** @var number */
			public $TRIANGLES;
		
			/** @var number */
			public $TRIANGLE_FAN;
		
			/** @var number */
			public $TRIANGLE_STRIP;
		
			/** @var number */
			public $UNPACK_ALIGNMENT;
		
			/** @var number */
			public $UNPACK_COLORSPACE_CONVERSION_WEBGL;
		
			/** @var number */
			public $UNPACK_FLIP_Y_WEBGL;
		
			/** @var number */
			public $UNPACK_PREMULTIPLY_ALPHA_WEBGL;
		
			/** @var number */
			public $UNSIGNED_BYTE;
		
			/** @var number */
			public $UNSIGNED_INT;
		
			/** @var number */
			public $UNSIGNED_SHORT;
		
			/** @var number */
			public $UNSIGNED_SHORT_4_4_4_4;
		
			/** @var number */
			public $UNSIGNED_SHORT_5_5_5_1;
		
			/** @var number */
			public $UNSIGNED_SHORT_5_6_5;
		
			/** @var number */
			public $VALIDATE_STATUS;
		
			/** @var number */
			public $VENDOR;
		
			/** @var number */
			public $VERSION;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_BUFFER_BINDING;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_ENABLED;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_NORMALIZED;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_POINTER;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_SIZE;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_STRIDE;
		
			/** @var number */
			public $VERTEX_ATTRIB_ARRAY_TYPE;
		
			/** @var number */
			public $VERTEX_SHADER;
		
			/** @var number */
			public $VIEWPORT;
		
			/** @var number */
			public $ZERO;
		
		}
}

namespace {
	interface WebGLShader extends WebGLObject
	{
	}
}

namespace {
		class WebGLShader_
		{
			/** @var WebGLShader */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $precision
	 * @property number $rangeMax
	 * @property number $rangeMin
	 */
	interface WebGLShaderPrecisionFormat
	{
	}
}

namespace {
		class WebGLShaderPrecisionFormat_
		{
			/** @var WebGLShaderPrecisionFormat */
			public $prototype;
		
		}
}

namespace {
	interface WebGLTexture extends WebGLObject
	{
	}
}

namespace {
		class WebGLTexture_
		{
			/** @var WebGLTexture */
			public $prototype;
		
		}
}

namespace {
	interface WebGLUniformLocation
	{
	}
}

namespace {
		class WebGLUniformLocation_
		{
			/** @var WebGLUniformLocation */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $a
	 * @property number $b
	 * @property number $c
	 * @property number $d
	 * @property number $e
	 * @property number $f
	 * @property number $m11
	 * @property number $m12
	 * @property number $m13
	 * @property number $m14
	 * @property number $m21
	 * @property number $m22
	 * @property number $m23
	 * @property number $m24
	 * @property number $m31
	 * @property number $m32
	 * @property number $m33
	 * @property number $m34
	 * @property number $m41
	 * @property number $m42
	 * @property number $m43
	 * @property number $m44
	 */
	interface WebKitCSSMatrix
	{
	
		/**
		 * WebKitCSSMatrix
		 */
		function inverse();
	
	
		/**
		 * @param WebKitCSSMatrix $secondMatrix
		 * WebKitCSSMatrix
		 */
		function multiply($secondMatrix);
	
	
		/**
		 * @param number $angleX
		 * @param number $angleY
		 * @param number $angleZ
		 * WebKitCSSMatrix
		 */
		function rotate($angleX, $angleY, $angleZ);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * @param number $angle
		 * WebKitCSSMatrix
		 */
		function rotateAxisAngle($x, $y, $z, $angle);
	
	
		/**
		 * @param number $scaleX
		 * @param number $scaleY
		 * @param number $scaleZ
		 * WebKitCSSMatrix
		 */
		function scale($scaleX, $scaleY, $scaleZ);
	
	
		/**
		 * @param string $value
		 * void
		 */
		function setMatrixValue($value);
	
	
		/**
		 * @param number $angle
		 * WebKitCSSMatrix
		 */
		function skewX($angle);
	
	
		/**
		 * @param number $angle
		 * WebKitCSSMatrix
		 */
		function skewY($angle);
	
	
		/**
		 * string
		 */
		function toString();
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * @param number $z
		 * WebKitCSSMatrix
		 */
		function translate($x, $y, $z);
	
	}
}

namespace {
		class WebKitCSSMatrix_
		{
			/** @var WebKitCSSMatrix */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property number $x
	 * @property number $y
	 */
	interface WebKitPoint
	{
	}
}

namespace {
		class WebKitPoint_
		{
			/** @var WebKitPoint */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $binaryType
	 * @property number $bufferedAmount
	 * @property string $extensions
	 * @property string $protocol
	 * @property number $readyState
	 * @property string $url
	 * @property number $CLOSED
	 * @property number $CLOSING
	 * @property number $CONNECTING
	 * @property number $OPEN
	 */
	interface WebSocket extends EventTarget
	{
	
		/**
		 * @param number $code
		 * @param string $reason
		 * void
		 */
		function close($code, $reason);
	
	
		/**
		 * @param mixed $data
		 * void
		 */
		function send($data);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class WebSocket_
		{
			/** @var WebSocket */
			public $prototype;
		
			/** @var number */
			public $CLOSED;
		
			/** @var number */
			public $CLOSING;
		
			/** @var number */
			public $CONNECTING;
		
			/** @var number */
			public $OPEN;
		
		}
}

namespace {
	/**
	 * @property number $deltaMode
	 * @property number $deltaX
	 * @property number $deltaY
	 * @property number $deltaZ
	 * @property number $DOM_DELTA_LINE
	 * @property number $DOM_DELTA_PAGE
	 * @property number $DOM_DELTA_PIXEL
	 */
	interface WheelEvent extends MouseEvent
	{
	
		/**
		 * @param Element $element
		 * void
		 */
		function getCurrentPoint($element);
	
	
		/**
		 * @param string $typeArg
		 * @param boolean $canBubbleArg
		 * @param boolean $cancelableArg
		 * @param Window $viewArg
		 * @param number $detailArg
		 * @param number $screenXArg
		 * @param number $screenYArg
		 * @param number $clientXArg
		 * @param number $clientYArg
		 * @param number $buttonArg
		 * @param EventTarget $relatedTargetArg
		 * @param string $modifiersListArg
		 * @param number $deltaXArg
		 * @param number $deltaYArg
		 * @param number $deltaZArg
		 * @param number $deltaMode
		 * void
		 */
		function initWheelEvent($typeArg, $canBubbleArg, $cancelableArg, $viewArg, $detailArg, $screenXArg, $screenYArg, $clientXArg, $clientYArg, $buttonArg, $relatedTargetArg, $modifiersListArg, $deltaXArg, $deltaYArg, $deltaZArg, $deltaMode);
	
	}
}

namespace {
		class WheelEvent_
		{
			/** @var WheelEvent */
			public $prototype;
		
			/** @var number */
			public $DOM_DELTA_LINE;
		
			/** @var number */
			public $DOM_DELTA_PAGE;
		
			/** @var number */
			public $DOM_DELTA_PIXEL;
		
		}
}

namespace {
	/**
	 * @property number $animationStartTime
	 * @property ApplicationCache $applicationCache
	 * @property Navigator $clientInformation
	 * @property boolean $closed
	 * @property Crypto $crypto
	 * @property string $defaultStatus
	 * @property number $devicePixelRatio
	 * @property string $doNotTrack
	 * @property Document $document
	 * @property Event $event
	 * @property External $external
	 * @property Element $frameElement
	 * @property Window $frames
	 * @property History $history
	 * @property number $innerHeight
	 * @property number $innerWidth
	 * @property number $length
	 * @property Location $location
	 * @property BarProp $locationbar
	 * @property BarProp $menubar
	 * @property number $msAnimationStartTime
	 * @property string $name
	 * @property Navigator $navigator
	 * @property string|boolean $offscreenBuffering
	 * @property ErrorEventHandler $onerror
	 * @property mixed $ontouchcancel
	 * @property mixed $ontouchend
	 * @property mixed $ontouchmove
	 * @property mixed $ontouchstart
	 * @property Window $opener
	 * @property string|number $orientation
	 * @property number $outerHeight
	 * @property number $outerWidth
	 * @property number $pageXOffset
	 * @property number $pageYOffset
	 * @property Window $parent
	 * @property Performance $performance
	 * @property BarProp $personalbar
	 * @property Screen $screen
	 * @property number $screenLeft
	 * @property number $screenTop
	 * @property number $screenX
	 * @property number $screenY
	 * @property number $scrollX
	 * @property number $scrollY
	 * @property BarProp $scrollbars
	 * @property Window $self
	 * @property string $status
	 * @property BarProp $statusbar
	 * @property StyleMedia $styleMedia
	 * @property BarProp $toolbar
	 * @property Window $top
	 * @property Window $window
	 * @property URL $URL
	 */
	interface Window extends \EventTarget, WindowTimers, WindowSessionStorage, WindowLocalStorage, WindowConsole, GlobalEventHandlers, IDBEnvironment, WindowBase64
	{
	
		/**
		 * @param mixed $message
		 * void
		 */
		function alert($message);
	
	
		/**
		 * void
		 */
		function blur();
	
	
		/**
		 * @param number $handle
		 * void
		 */
		function cancelAnimationFrame($handle);
	
	
		/**
		 * void
		 */
		function captureEvents();
	
	
		/**
		 * void
		 */
		function close();
	
	
		/**
		 * @param string $message
		 * boolean
		 */
		function confirm($message);
	
	
		/**
		 * void
		 */
		function focus();
	
	
		/**
		 * @param Element $elt
		 * @param string $pseudoElt
		 * CSSStyleDeclaration
		 */
		function getComputedStyle($elt, $pseudoElt);
	
	
		/**
		 * @param Element $elt
		 * @param string $pseudoElt
		 * CSSRuleList
		 */
		function getMatchedCSSRules($elt, $pseudoElt);
	
	
		/**
		 * Selection
		 */
		function getSelection();
	
	
		/**
		 * @param string $mediaQuery
		 * MediaQueryList
		 */
		function matchMedia($mediaQuery);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function moveBy($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function moveTo($x, $y);
	
	
		/**
		 * @param number $handle
		 * void
		 */
		function msCancelRequestAnimationFrame($handle);
	
	
		/**
		 * @param string $mediaQuery
		 * MediaQueryList
		 */
		function msMatchMedia($mediaQuery);
	
	
		/**
		 * @param FrameRequestCallback $callback
		 * number
		 */
		function msRequestAnimationFrame($callback);
	
	
		/**
		 * @param string $profilerMarkName
		 * void
		 */
		function msWriteProfilerMark($profilerMarkName);
	
	
		/**
		 * @param string $url
		 * @param string $target
		 * @param string $features
		 * @param boolean $replace
		 * Window
		 */
		function open($url, $target, $features, $replace);
	
	
		/**
		 * @param mixed $message
		 * @param string $targetOrigin
		 * @param mixed $ports
		 * void
		 */
		function postMessage($message, $targetOrigin, $ports);
	
	
		/**
		 * void
		 */
		function print();
	
	
		/**
		 * @param string $message
		 * @param string $_default
		 * string
		 */
		function prompt($message, $_default);
	
	
		/**
		 * void
		 */
		function releaseEvents();
	
	
		/**
		 * @param FrameRequestCallback $callback
		 * number
		 */
		function requestAnimationFrame($callback);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function resizeBy($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function resizeTo($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function scroll($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function scrollBy($x, $y);
	
	
		/**
		 * @param number $x
		 * @param number $y
		 * void
		 */
		function scrollTo($x, $y);
	
	
		/**
		 * @param Node $node
		 * @param WebKitPoint $pt
		 * WebKitPoint
		 */
		function webkitConvertPointFromNodeToPage($node, $pt);
	
	
		/**
		 * @param Node $node
		 * @param WebKitPoint $pt
		 * WebKitPoint
		 */
		function webkitConvertPointFromPageToNode($node, $pt);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class Window_
		{
			/** @var Window */
			public $prototype;
		
		}
}

namespace {
	interface Worker extends \EventTarget, AbstractWorker
	{
	
		/**
		 * @param mixed $message
		 * @param mixed $ports
		 * void
		 */
		function postMessage($message, $ports);
	
	
		/**
		 * void
		 */
		function terminate();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class Worker_
		{
			/** @var Worker */
			public $prototype;
		
		}
}

namespace {
	interface XMLDocument extends Document
	{
	}
}

namespace {
		class XMLDocument_
		{
			/** @var XMLDocument */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property string $msCaching
	 * @property number $readyState
	 * @property mixed $response
	 * @property mixed $responseBody
	 * @property string $responseText
	 * @property string $responseType
	 * @property mixed $responseXML
	 * @property number $status
	 * @property string $statusText
	 * @property number $timeout
	 * @property XMLHttpRequestUpload $upload
	 * @property boolean $withCredentials
	 * @property number $DONE
	 * @property number $HEADERS_RECEIVED
	 * @property number $LOADING
	 * @property number $OPENED
	 * @property number $UNSENT
	 */
	interface XMLHttpRequest extends \EventTarget, XMLHttpRequestEventTarget
	{
	
		/**
		 * void
		 */
		function abort();
	
	
		/**
		 * string
		 */
		function getAllResponseHeaders();
	
	
		/**
		 * @param string $header
		 * string
		 */
		function getResponseHeader($header);
	
	
		/**
		 * boolean
		 */
		function msCachingEnabled();
	
	
		/**
		 * @param string $method
		 * @param string $url
		 * @param boolean $async
		 * @param string $user
		 * @param string $password
		 * void
		 */
		function open($method, $url, $async, $user, $password);
	
	
		/**
		 * @param string $mime
		 * void
		 */
		function overrideMimeType($mime);
	
	
		/**
		 * @param Document $data
		 * void
		 */
		function send($data);
	
	
		/**
		 * @param string $header
		 * @param string $value
		 * void
		 */
		function setRequestHeader($header, $value);
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class XMLHttpRequest_
		{
			/** @var XMLHttpRequest */
			public $prototype;
		
			/** @var number */
			public $DONE;
		
			/** @var number */
			public $HEADERS_RECEIVED;
		
			/** @var number */
			public $LOADING;
		
			/** @var number */
			public $OPENED;
		
			/** @var number */
			public $UNSENT;
		
		
			/**
			 * XMLHttpRequest
			 */
			public function create()
			{
			}
		
		}
}

namespace {
	interface XMLHttpRequestUpload extends \EventTarget, XMLHttpRequestEventTarget
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
		class XMLHttpRequestUpload_
		{
			/** @var XMLHttpRequestUpload */
			public $prototype;
		
		}
}

namespace {
	interface XMLSerializer
	{
	
		/**
		 * @param Node $target
		 * string
		 */
		function serializeToString($target);
	
	}
}

namespace {
		class XMLSerializer_
		{
			/** @var XMLSerializer */
			public $prototype;
		
		}
}

namespace {
	interface XPathEvaluator
	{
	
		/**
		 * @param string $expression
		 * @param XPathNSResolver $resolver
		 * XPathExpression
		 */
		function createExpression($expression, $resolver);
	
	
		/**
		 * @param Node $nodeResolver
		 * XPathNSResolver
		 */
		function createNSResolver($nodeResolver);
	
	
		/**
		 * @param string $expression
		 * @param Node $contextNode
		 * @param XPathNSResolver $resolver
		 * @param number $type
		 * @param XPathResult $result
		 * XPathResult
		 */
		function evaluate($expression, $contextNode, $resolver, $type, $result);
	
	}
}

namespace {
		class XPathEvaluator_
		{
			/** @var XPathEvaluator */
			public $prototype;
		
		}
}

namespace {
	interface XPathExpression
	{
	
		/**
		 * @param Node $contextNode
		 * @param number $type
		 * @param XPathResult $result
		 * XPathExpression
		 */
		function evaluate($contextNode, $type, $result);
	
	}
}

namespace {
		class XPathExpression_
		{
			/** @var XPathExpression */
			public $prototype;
		
		}
}

namespace {
	interface XPathNSResolver
	{
	
		/**
		 * @param string $prefix
		 * string
		 */
		function lookupNamespaceURI($prefix);
	
	}
}

namespace {
		class XPathNSResolver_
		{
			/** @var XPathNSResolver */
			public $prototype;
		
		}
}

namespace {
	/**
	 * @property boolean $booleanValue
	 * @property boolean $invalidIteratorState
	 * @property number $numberValue
	 * @property number $resultType
	 * @property Node $singleNodeValue
	 * @property number $snapshotLength
	 * @property string $stringValue
	 * @property number $ANY_TYPE
	 * @property number $ANY_UNORDERED_NODE_TYPE
	 * @property number $BOOLEAN_TYPE
	 * @property number $FIRST_ORDERED_NODE_TYPE
	 * @property number $NUMBER_TYPE
	 * @property number $ORDERED_NODE_ITERATOR_TYPE
	 * @property number $ORDERED_NODE_SNAPSHOT_TYPE
	 * @property number $STRING_TYPE
	 * @property number $UNORDERED_NODE_ITERATOR_TYPE
	 * @property number $UNORDERED_NODE_SNAPSHOT_TYPE
	 */
	interface XPathResult
	{
	
		/**
		 * Node
		 */
		function iterateNext();
	
	
		/**
		 * @param number $index
		 * Node
		 */
		function snapshotItem($index);
	
	}
}

namespace {
		class XPathResult_
		{
			/** @var XPathResult */
			public $prototype;
		
			/** @var number */
			public $ANY_TYPE;
		
			/** @var number */
			public $ANY_UNORDERED_NODE_TYPE;
		
			/** @var number */
			public $BOOLEAN_TYPE;
		
			/** @var number */
			public $FIRST_ORDERED_NODE_TYPE;
		
			/** @var number */
			public $NUMBER_TYPE;
		
			/** @var number */
			public $ORDERED_NODE_ITERATOR_TYPE;
		
			/** @var number */
			public $ORDERED_NODE_SNAPSHOT_TYPE;
		
			/** @var number */
			public $STRING_TYPE;
		
			/** @var number */
			public $UNORDERED_NODE_ITERATOR_TYPE;
		
			/** @var number */
			public $UNORDERED_NODE_SNAPSHOT_TYPE;
		
		}
}

namespace {
	interface XSLTProcessor
	{
	
		/**
		 * void
		 */
		function clearParameters();
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * mixed
		 */
		function getParameter($namespaceURI, $localName);
	
	
		/**
		 * @param Node $style
		 * void
		 */
		function importStylesheet($style);
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * void
		 */
		function removeParameter($namespaceURI, $localName);
	
	
		/**
		 * void
		 */
		function reset();
	
	
		/**
		 * @param string $namespaceURI
		 * @param string $localName
		 * @param mixed $value
		 * void
		 */
		function setParameter($namespaceURI, $localName, $value);
	
	
		/**
		 * @param Node $source
		 * Document
		 */
		function transformToDocument($source);
	
	
		/**
		 * @param Node $source
		 * @param Document $document
		 * DocumentFragment
		 */
		function transformToFragment($source, $document);
	
	}
}

namespace {
		class XSLTProcessor_
		{
			/** @var XSLTProcessor */
			public $prototype;
		
		}
}

namespace {
	interface AbstractWorker
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
	interface ChildNode
	{
	
		/**
		 * void
		 */
		function remove($index=null);
	
	}
}

namespace {
	/**
	 * @property string $color
	 */
	interface DOML2DeprecatedColorProperty
	{
	}
}

namespace {
	/**
	 * @property number $size
	 */
	interface DOML2DeprecatedSizeProperty
	{
	}
}

namespace {
	interface DocumentEvent
	{
	
		/**
		 * @param \"AnimationEvent" $eventInterface
		 * AnimationEvent
		 */
		function createEvent($eventInterface);
	
	}
}

namespace {
	/**
	 * @property number $childElementCount
	 * @property Element $firstElementChild
	 * @property Element $lastElementChild
	 * @property Element $nextElementSibling
	 * @property Element $previousElementSibling
	 */
	interface ElementTraversal
	{
	}
}

namespace {
	interface GetSVGDocument
	{
	
		/**
		 * Document
		 */
		function getSVGDocument();
	
	}
}

namespace {
	interface GlobalEventHandlers
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
	/**
	 * @property string $ch Sets or retrieves a value that you can use to implement your own ch functionality for the object.
	 * @property string $chOff Sets or retrieves a value that you can use to implement your own chOff functionality for the object.
	 * @property string $vAlign Sets or retrieves how text and other content are vertically aligned within the object that contains them.
	 */
	interface HTMLTableAlignment
	{
	}
}

namespace {
	/**
	 * @property IDBFactory $indexedDB
	 * @property IDBFactory $msIndexedDB
	 */
	interface IDBEnvironment
	{
	}
}

namespace {
	/**
	 * @property StyleSheet $sheet
	 */
	interface LinkStyle
	{
	}
}

namespace {
	/**
	 * @property number $readyState
	 * @property mixed $result
	 * @property number $DONE
	 * @property number $EMPTY
	 * @property number $LOADING
	 */
	interface MSBaseReader
	{
	
		/**
		 * void
		 */
		function abort();
	
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
	interface MSFileSaver
	{
	
		/**
		 * @param mixed $blob
		 * @param string $defaultName
		 * boolean
		 */
		function msSaveBlob($blob, $defaultName);
	
	
		/**
		 * @param mixed $blob
		 * @param string $defaultName
		 * boolean
		 */
		function msSaveOrOpenBlob($blob, $defaultName);
	
	}
}

namespace {
	interface MSNavigatorDoNotTrack
	{
	
		/**
		 * @param ConfirmSiteSpecificExceptionsInformation $args
		 * boolean
		 */
		function confirmSiteSpecificTrackingException($args);
	
	
		/**
		 * @param ExceptionInformation $args
		 * boolean
		 */
		function confirmWebWideTrackingException($args);
	
	
		/**
		 * @param ExceptionInformation $args
		 * void
		 */
		function removeSiteSpecificTrackingException($args);
	
	
		/**
		 * @param ExceptionInformation $args
		 * void
		 */
		function removeWebWideTrackingException($args);
	
	
		/**
		 * @param StoreSiteSpecificExceptionsInformation $args
		 * void
		 */
		function storeSiteSpecificTrackingException($args);
	
	
		/**
		 * @param StoreExceptionsInformation $args
		 * void
		 */
		function storeWebWideTrackingException($args);
	
	}
}

namespace {
	interface NavigatorContentUtils
	{
	}
}

namespace {
	/**
	 * @property Geolocation $geolocation
	 */
	interface NavigatorGeolocation
	{
	}
}

namespace {
	/**
	 * @property string $appName
	 * @property string $appVersion
	 * @property string $platform
	 * @property string $product
	 * @property string $productSub
	 * @property string $userAgent
	 * @property string $vendor
	 * @property string $vendorSub
	 */
	interface NavigatorID
	{
	}
}

namespace {
	/**
	 * @property boolean $onLine
	 */
	interface NavigatorOnLine
	{
	}
}

namespace {
	interface NavigatorStorageUtils
	{
	}
}

namespace {
	interface NodeSelector
	{
	
		/**
		 * @param string $selectors
		 * Element
		 */
		function querySelector($selectors);
	
	
		/**
		 * @param string $selectors
		 * \NodeListOf<Element>
		 */
		function querySelectorAll($selectors);
	
	}
}

namespace {
	interface RandomSource
	{
	
		/**
		 * @param ArrayBufferView $array
		 * ArrayBufferView
		 */
		function getRandomValues($array);
	
	}
}

namespace {
	/**
	 * @property SVGPathSegList $pathSegList
	 */
	interface SVGAnimatedPathData
	{
	}
}

namespace {
	/**
	 * @property SVGPointList $animatedPoints
	 * @property SVGPointList $points
	 */
	interface SVGAnimatedPoints
	{
	}
}

namespace {
	/**
	 * @property SVGAnimatedBoolean $externalResourcesRequired
	 */
	interface SVGExternalResourcesRequired
	{
	}
}

namespace {
	/**
	 * @property SVGAnimatedLength $height
	 * @property SVGAnimatedString $result
	 * @property SVGAnimatedLength $width
	 * @property SVGAnimatedLength $x
	 * @property SVGAnimatedLength $y
	 */
	interface SVGFilterPrimitiveStandardAttributes extends SVGStylable
	{
	}
}

namespace {
	/**
	 * @property SVGAnimatedPreserveAspectRatio $preserveAspectRatio
	 * @property SVGAnimatedRect $viewBox
	 */
	interface SVGFitToViewBox
	{
	}
}

namespace {
	/**
	 * @property string $xmllang
	 * @property string $xmlspace
	 */
	interface SVGLangSpace
	{
	}
}

namespace {
	/**
	 * @property SVGElement $farthestViewportElement
	 * @property SVGElement $nearestViewportElement
	 */
	interface SVGLocatable
	{
	
		/**
		 * SVGRect
		 */
		function getBBox();
	
	
		/**
		 * SVGMatrix
		 */
		function getCTM();
	
	
		/**
		 * SVGMatrix
		 */
		function getScreenCTM();
	
	
		/**
		 * @param SVGElement $element
		 * SVGMatrix
		 */
		function getTransformToElement($element);
	
	}
}

namespace {
	/**
	 * @property mixed $className
	 * @property CSSStyleDeclaration $style
	 */
	interface SVGStylable
	{
	}
}

namespace {
	/**
	 * @property SVGStringList $requiredExtensions
	 * @property SVGStringList $requiredFeatures
	 * @property SVGStringList $systemLanguage
	 */
	interface SVGTests
	{
	
		/**
		 * @param string $extension
		 * boolean
		 */
		function hasExtension($extension);
	
	}
}

namespace {
	/**
	 * @property SVGAnimatedTransformList $transform
	 */
	interface SVGTransformable extends SVGLocatable
	{
	}
}

namespace {
	/**
	 * @property SVGAnimatedString $href
	 */
	interface SVGURIReference
	{
	}
}

namespace {
	interface WindowBase64
	{
	
		/**
		 * @param string $encodedString
		 * string
		 */
		function atob($encodedString);
	
	
		/**
		 * @param string $rawString
		 * string
		 */
		function btoa($rawString);
	
	}
}

namespace {
	/**
	 * @property Console $console
	 */
	interface WindowConsole
	{
	}
}

namespace {
	/**
	 * @property Storage $localStorage
	 */
	interface WindowLocalStorage
	{
	}
}

namespace {
	/**
	 * @property Storage $sessionStorage
	 */
	interface WindowSessionStorage
	{
	}
}

namespace {
	interface WindowTimers extends \Object, WindowTimersExtension
	{
	
		/**
		 * @param number $handle
		 * void
		 */
		function clearInterval($handle);
	
	
		/**
		 * @param number $handle
		 * void
		 */
		function clearTimeout($handle);
	
	
		/**
		 * @param mixed $handler
		 * @param mixed $timeout
		 * @param mixed[] ...$args
		 * number
		 */
		function setInterval($handler, $timeout, $args);
	
	
		/**
		 * @param mixed $handler
		 * @param mixed $timeout
		 * @param mixed[] ...$args
		 * number
		 */
		function setTimeout($handler, $timeout, $args);
	
	}
}

namespace {
	interface WindowTimersExtension
	{
	
		/**
		 * @param number $handle
		 * void
		 */
		function clearImmediate($handle);
	
	
		/**
		 * @param number $handle
		 * void
		 */
		function msClearImmediate($handle);
	
	
		/**
		 * @param mixed $expression
		 * @param mixed[] ...$args
		 * number
		 */
		function msSetImmediate($expression, $args);
	
	
		/**
		 * @param mixed $expression
		 * @param mixed[] ...$args
		 * number
		 */
		function setImmediate($expression, $args);
	
	}
}

namespace {
	interface XMLHttpRequestEventTarget
	{
	
		/**
		 * @param string $type
		 * @param \EventListenerOrEventListenerObject $listener
		 * @param boolean $useCapture
		 * void
		 */
		function addEventListener($type, $listener, $useCapture);
	
	}
}

namespace {
	/**
	 * @property string $key?
	 * @property string $oldValue?
	 * @property string $url
	 * @property Storage $storageArea?
	 */
	interface StorageEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property string|string[] $keyPath?
	 * @property boolean $autoIncrement?
	 */
	interface IDBObjectStoreParameters
	{
	}
}

namespace {
	/**
	 * @property boolean $unique?
	 * @property boolean $multiEntry?
	 */
	interface IDBIndexParameters
	{
	}
}

namespace {
	/**
	 * @property number $length
	 */
	interface NodeListOf extends NodeList
	{
	
		/**
		 * @param number $index
		 * \TNode
		 */
		function item($index);
	
	}
}

namespace {
	/**
	 * @property string $type?
	 * @property string $endings?
	 */
	interface BlobPropertyBag
	{
	}
}

namespace {
	/**
	 * @property string $type?
	 * @property number $lastModified?
	 */
	interface FilePropertyBag
	{
	}
}

namespace {
	interface EventListenerObject
	{
	
		/**
		 * @param Event $evt
		 * void
		 */
		function handleEvent($evt);
	
	}
}

namespace {
	/**
	 * @property mixed $data?
	 * @property string $origin?
	 * @property string $lastEventId?
	 * @property string $channel?
	 * @property mixed $source?
	 * @property MessagePort[] $ports?
	 */
	interface MessageEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property boolean $lengthComputable?
	 * @property number $loaded?
	 * @property number $total?
	 */
	interface ProgressEventInit extends EventInit
	{
	}
}

namespace {
	/**
	 * @property DocumentFragment $content
	 */
	interface HTMLTemplateElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLTemplateElement_
		{
			/** @var HTMLTemplateElement */
			public $prototype;
		
		}
}

namespace {
	interface HTMLPictureElement extends HTMLElement
	{
	}
}

namespace {
		class HTMLPictureElement_
		{
			/** @var HTMLPictureElement */
			public $prototype;
		
		}
}


namespace {
	interface ErrorEventHandler
	{
	}
}
namespace {
	interface PositionCallback
	{
	}
}
namespace {
	interface PositionErrorCallback
	{
	}
}
namespace {
	interface MediaQueryListListener
	{
	}
}
namespace {
	interface MSLaunchUriCallback
	{
	}
}
namespace {
	interface FrameRequestCallback
	{
	}
}
namespace {
	interface MSUnsafeFunctionCallback
	{
	}
}
namespace {
	interface MSExecAtPriorityFunctionCallback
	{
	}
}
namespace {
	interface MutationCallback
	{
	}
}
namespace {
	interface DecodeSuccessCallback
	{
	}
}
namespace {
	interface DecodeErrorCallback
	{
	}
}
namespace {
	interface FunctionStringCallback
	{
	}
}
namespace {
}
namespace {
}
namespace {
}
namespace {
	/**
	 * @const number;
	 */
	const animationStartTime=null;
}
namespace {
	/**
	 * @const ApplicationCache;
	 */
	const applicationCache__=null;
}
namespace {
	/**
	 * @const Navigator;
	 */
	const clientInformation=null;
}
namespace {
	/**
	 * @const boolean;
	 */
	const closed=null;
}
namespace {
	/**
	 * @const Crypto;
	 */
	const crypto__=null;
}
namespace {
	/**
	 * @const string;
	 */
	const defaultStatus=null;
}
namespace {
	/**
	 * @const number;
	 */
	const devicePixelRatio=null;
}
namespace {
	/**
	 * @const string;
	 */
	const doNotTrack=null;
}
namespace {
	/**
	 * @const Document;
	 */
	const document__=null;
}
namespace {
	/**
	 * @const Event;
	 */
	const event__=null;
}
namespace {
	/**
	 * @const External;
	 */
	const external__=null;
}
namespace {
	/**
	 * @const Element;
	 */
	const frameElement=null;
}
namespace {
	/**
	 * @const Window;
	 */
	const frames=null;
}
namespace {
	/**
	 * @const History;
	 */
	const history__=null;
}
namespace {
	/**
	 * @const number;
	 */
	const innerHeight=null;
}
namespace {
	/**
	 * @const number;
	 */
	const innerWidth=null;
}
namespace {
	/**
	 * @const number;
	 */
	const length=null;
}
namespace {
	/**
	 * @const Location;
	 */
	const location__=null;
}
namespace {
	/**
	 * @const BarProp;
	 */
	const locationbar=null;
}
namespace {
	/**
	 * @const BarProp;
	 */
	const menubar=null;
}
namespace {
	/**
	 * @const number;
	 */
	const msAnimationStartTime=null;
}
namespace {
	/**
	 * @const string;
	 */
	const name=null;
}
namespace {
	/**
	 * @const Navigator;
	 */
	const navigator__=null;
}
namespace {
	/**
	 * @const string | boolean;
	 */
	const offscreenBuffering=null;
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
	/**
	 * @const ErrorEventHandler;
	 */
	const onerror=null;
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
	/**
	 * @const any;
	 */
	const ontouchcancel=null;
}
namespace {
	/**
	 * @const any;
	 */
	const ontouchend=null;
}
namespace {
	/**
	 * @const any;
	 */
	const ontouchmove=null;
}
namespace {
	/**
	 * @const any;
	 */
	const ontouchstart=null;
}
namespace {
}
namespace {
}
namespace {
}
namespace {
	/**
	 * @const Window;
	 */
	const opener=null;
}
namespace {
	/**
	 * @const string | number;
	 */
	const orientation=null;
}
namespace {
	/**
	 * @const number;
	 */
	const outerHeight=null;
}
namespace {
	/**
	 * @const number;
	 */
	const outerWidth=null;
}
namespace {
	/**
	 * @const number;
	 */
	const pageXOffset=null;
}
namespace {
	/**
	 * @const number;
	 */
	const pageYOffset=null;
}
namespace {
	/**
	 * @const Window;
	 */
	const parent=null;
}
namespace {
	/**
	 * @const Performance;
	 */
	const performance__=null;
}
namespace {
	/**
	 * @const BarProp;
	 */
	const personalbar=null;
}
namespace {
	/**
	 * @const Screen;
	 */
	const screen__=null;
}
namespace {
	/**
	 * @const number;
	 */
	const screenLeft=null;
}
namespace {
	/**
	 * @const number;
	 */
	const screenTop=null;
}
namespace {
	/**
	 * @const number;
	 */
	const screenX=null;
}
namespace {
	/**
	 * @const number;
	 */
	const screenY=null;
}
namespace {
	/**
	 * @const number;
	 */
	const scrollX=null;
}
namespace {
	/**
	 * @const number;
	 */
	const scrollY=null;
}
namespace {
	/**
	 * @const BarProp;
	 */
	const scrollbars=null;
}
namespace {
	/**
	 * @const Window;
	 */
	const self=null;
}
namespace {
	/**
	 * @const string;
	 */
	const status=null;
}
namespace {
	/**
	 * @const BarProp;
	 */
	const statusbar=null;
}
namespace {
	/**
	 * @const StyleMedia;
	 */
	const styleMedia__=null;
}
namespace {
	/**
	 * @const BarProp;
	 */
	const toolbar=null;
}
namespace {
	/**
	 * @const Window;
	 */
	const top=null;
}
namespace {
	/**
	 * @const Window;
	 */
	const window__=null;
}
namespace {
	/**
	 * @const URL;
	 */
	const URL__=null;
}
namespace {
	/**
	 * @param mixed $message
	 * @return void
	 */
	function alert($message){}
}
namespace {
	/**
	 * @return void
	 */
	function blur(){}
}
namespace {
	/**
	 * @param number $handle
	 * @return void
	 */
	function cancelAnimationFrame($handle){}
}
namespace {
	/**
	 * @return void
	 */
	function captureEvents(){}
}
namespace {
	/**
	 * @return void
	 */
	function close(){}
}
namespace {
	/**
	 * @param string $message
	 * @return boolean
	 */
	function confirm($message){}
}
namespace {
	/**
	 * @return void
	 */
	function focus(){}
}
namespace {
	/**
	 * @param Element $elt
	 * @param string $pseudoElt
	 * @return CSSStyleDeclaration
	 */
	function getComputedStyle($elt,$pseudoElt){}
}
namespace {
	/**
	 * @param Element $elt
	 * @param string $pseudoElt
	 * @return CSSRuleList
	 */
	function getMatchedCSSRules($elt,$pseudoElt){}
}
namespace {
	/**
	 * @return Selection
	 */
	function getSelection(){}
}
namespace {
	/**
	 * @param string $mediaQuery
	 * @return MediaQueryList
	 */
	function matchMedia($mediaQuery){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function moveBy($x,$y){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function moveTo($x,$y){}
}
namespace {
	/**
	 * @param number $handle
	 * @return void
	 */
	function msCancelRequestAnimationFrame($handle){}
}
namespace {
	/**
	 * @param string $mediaQuery
	 * @return MediaQueryList
	 */
	function msMatchMedia($mediaQuery){}
}
namespace {
	/**
	 * @param FrameRequestCallback $callback
	 * @return number
	 */
	function msRequestAnimationFrame($callback){}
}
namespace {
	/**
	 * @param string $profilerMarkName
	 * @return void
	 */
	function msWriteProfilerMark($profilerMarkName){}
}
namespace {
	/**
	 * @param string $url
	 * @param string $target
	 * @param string $features
	 * @param boolean $replace
	 * @return Window
	 */
	function open($url,$target,$features,$replace){}
}
namespace {
	/**
	 * @param mixed $message
	 * @param string $targetOrigin
	 * @param mixed $ports
	 * @return void
	 */
	function postMessage($message,$targetOrigin,$ports){}
}
namespace {
	/**
	 * @return void
	 */
	function print_(){}
}
namespace {
	/**
	 * @param string $message
	 * @param string $_default
	 * @return string
	 */
	function prompt($message,$_default){}
}
namespace {
	/**
	 * @return void
	 */
	function releaseEvents(){}
}
namespace {
	/**
	 * @param FrameRequestCallback $callback
	 * @return number
	 */
	function requestAnimationFrame($callback){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function resizeBy($x,$y){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function resizeTo($x,$y){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function scroll($x,$y){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function scrollBy($x,$y){}
}
namespace {
	/**
	 * @param number $x
	 * @param number $y
	 * @return void
	 */
	function scrollTo($x,$y){}
}
namespace {
	/**
	 * @param Node $node
	 * @param WebKitPoint $pt
	 * @return WebKitPoint
	 */
	function webkitConvertPointFromNodeToPage($node,$pt){}
}
namespace {
	/**
	 * @param Node $node
	 * @param WebKitPoint $pt
	 * @return WebKitPoint
	 */
	function webkitConvertPointFromPageToNode($node,$pt){}
}
namespace {
	/**
	 * @return string
	 */
	function toString(){}
}
namespace {
	/**
	 * @param string $type
	 * @param \EventListenerOrEventListenerObject $listener
	 * @param boolean $useCapture
	 * @return void
	 */
	function addEventListener($type,$listener,$useCapture){}
}
namespace {
	/**
	 * @param Event $evt
	 * @return boolean
	 */
	function dispatchEvent($evt){}
}
namespace {
	/**
	 * @param string $type
	 * @param \EventListenerOrEventListenerObject $listener
	 * @param boolean $useCapture
	 * @return void
	 */
	function removeEventListener($type,$listener,$useCapture){}
}
namespace {
	/**
	 * @param number $handle
	 * @return void
	 */
	function clearInterval($handle){}
}
namespace {
	/**
	 * @param number $handle
	 * @return void
	 */
	function clearTimeout($handle){}
}
namespace {
	/**
	 * @param mixed $handler
	 * @param mixed $timeout
	 * @param mixed[] ...$args
	 * @return number
	 */
	function setInterval($handler,$timeout,$args){}
}
namespace {
	/**
	 * @param mixed $handler
	 * @param mixed $timeout
	 * @param mixed[] ...$args
	 * @return number
	 */
	function setTimeout($handler,$timeout,$args){}
}
namespace {
	/**
	 * @param number $handle
	 * @return void
	 */
	function clearImmediate($handle){}
}
namespace {
	/**
	 * @param number $handle
	 * @return void
	 */
	function msClearImmediate($handle){}
}
namespace {
	/**
	 * @param mixed $expression
	 * @param mixed[] ...$args
	 * @return number
	 */
	function msSetImmediate($expression,$args){}
}
namespace {
	/**
	 * @param mixed $expression
	 * @param mixed[] ...$args
	 * @return number
	 */
	function setImmediate($expression,$args){}
}
namespace {
	/**
	 * @const Storage;
	 */
	const sessionStorage=null;
}
namespace {
	/**
	 * @const Storage;
	 */
	const localStorage=null;
}
namespace {
	/**
	 * @const Console;
	 */
	const console__=null;
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
}
namespace {
	/**
	 * @const IDBFactory;
	 */
	const indexedDB=null;
}
namespace {
	/**
	 * @const IDBFactory;
	 */
	const msIndexedDB=null;
}
namespace {
	/**
	 * @param string $encodedString
	 * @return string
	 */
	function atob($encodedString){}
}
namespace {
	/**
	 * @param string $rawString
	 * @return string
	 */
	function btoa($rawString){}
}
namespace {
	/**
	 * @param \"MSGestureChange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_($type,$listener){}
}
namespace {
	/**
	 * @param \"MSGestureDoubleTap" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__($type,$listener){}
}
namespace {
	/**
	 * @param \"MSGestureEnd" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___($type,$listener){}
}
namespace {
	/**
	 * @param \"MSGestureHold" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____($type,$listener){}
}
namespace {
	/**
	 * @param \"MSGestureStart" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____($type,$listener){}
}
namespace {
	/**
	 * @param \"MSGestureTap" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______($type,$listener){}
}
namespace {
	/**
	 * @param \"MSInertiaStart" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerCancel" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerDown" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerEnter" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerLeave" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerMove" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerOut" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerOver" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________($type,$listener){}
}
namespace {
	/**
	 * @param \"MSPointerUp" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________($type,$listener){}
}
namespace {
	/**
	 * @param \"abort" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________($type,$listener){}
}
namespace {
	/**
	 * @param \"afterprint" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________($type,$listener){}
}
namespace {
	/**
	 * @param \"beforeprint" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________($type,$listener){}
}
namespace {
	/**
	 * @param \"beforeunload" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________($type,$listener){}
}
namespace {
	/**
	 * @param \"blur" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________($type,$listener){}
}
namespace {
	/**
	 * @param \"canplay" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________($type,$listener){}
}
namespace {
	/**
	 * @param \"canplaythrough" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________($type,$listener){}
}
namespace {
	/**
	 * @param \"change" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________($type,$listener){}
}
namespace {
	/**
	 * @param \"click" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"compassneedscalibration" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"contextmenu" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"dblclick" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"devicemotion" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"deviceorientation" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"drag" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"dragend" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"dragenter" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"dragleave" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"dragover" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"dragstart" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"drop" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"durationchange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"emptied" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"ended" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"focus" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"hashchange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"input" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"keydown" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"keypress" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"keyup" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"load" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"loadeddata" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"loadedmetadata" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"loadstart" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"message" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mousedown" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mouseenter" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mouseleave" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mousemove" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mouseout" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mouseover" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mouseup" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"mousewheel" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"offline" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"online" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"orientationchange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pagehide" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pageshow" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pause" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"play" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"playing" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointercancel" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointerdown" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointerenter" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointerleave" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointermove" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointerout" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointerover" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"pointerup" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"popstate" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"progress" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"ratechange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"readystatechange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"reset" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"resize" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"scroll" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"seeked" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"seeking" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"select" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"stalled" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"storage" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener______________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"submit" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_______________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"suspend" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener________________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"timeupdate" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_________________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"unload" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener__________________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"volumechange" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener___________________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"waiting" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener____________________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param \"wheel" $type
	 * @param \(ev $listener
	 * @return \=>any,useCapture?boolean)void
	 */
	function addEventListener_____________________________________________________________________________________________($type,$listener){}
}
namespace {
	/**
	 * @param string $type
	 * @param \EventListenerOrEventListenerObject $listener
	 * @param boolean $useCapture
	 * @return void
	 */
	function addEventListener______________________________________________________________________________________________($type,$listener,$useCapture){}
}
/////////////////////////////
/// WorkerGlobalScope APIs
/////////////////////////////
// These are only available in a Web Worker
namespace {
	/**
	 * @param string[] ...$urls
	 * @return void
	 */
	function importScripts($urls){}
}


/////////////////////////////
/// Windows Script Host APIS
/////////////////////////////


namespace {
	interface ActiveXObject
	{
	}
}
namespace {
	/**
	 * @const ActiveXObject;
	 */
	const ActiveXObject_=null;
}

namespace {
	interface ITextWriter
	{
	
		/**
		 * @param string $s
		 * void
		 */
		function Write($s);
	
	
		/**
		 * @param string $s
		 * void
		 */
		function WriteLine($s);
	
	
		/**
		 * void
		 */
		function Close();
	
	}
}

namespace {
	/**
	 * @property number $Column The column number of the current character position in an input stream.
	 * @property number $Line The current line number in an input stream.
	 */
	interface TextStreamBase
	{
	
		/**
		 * Closes a text stream.
		 * It is not necessary to close standard streams; they close automatically when the process ends. If
		 * you close a standard stream, be aware that any other pointers to that standard stream become invalid.
		 * void
		 */
		function Close();
	
	}
}

namespace {
	interface TextStreamWriter extends TextStreamBase
	{
	
		/**
		 * Sends a string to an output stream.
		 * @param string $s
		 * void
		 */
		function Write($s);
	
	
		/**
		 * Sends a specified number of blank lines (newline characters) to an output stream.
		 * @param number $intLines
		 * void
		 */
		function WriteBlankLines($intLines);
	
	
		/**
		 * Sends a string followed by a newline character to an output stream.
		 * @param string $s
		 * void
		 */
		function WriteLine($s);
	
	}
}

namespace {
	/**
	 * @property boolean $AtEndOfLine Indicates whether the stream pointer position is at the end of a line.
	 * @property boolean $AtEndOfStream Indicates whether the stream pointer position is at the end of a stream.
	 */
	interface TextStreamReader extends TextStreamBase
	{
	
		/**
		 * Returns a specified number of characters from an input stream, starting at the current pointer position.
		 * Does not return until the ENTER key is pressed.
		 * Can only be used on a stream in reading mode; causes an error in writing or appending mode.
		 * @param number $characters
		 * string
		 */
		function Read($characters);
	
	
		/**
		 * Returns all characters from an input stream.
		 * Can only be used on a stream in reading mode; causes an error in writing or appending mode.
		 * string
		 */
		function ReadAll();
	
	
		/**
		 * Returns an entire line from an input stream.
		 * Although this method extracts the newline character, it does not add it to the returned string.
		 * Can only be used on a stream in reading mode; causes an error in writing or appending mode.
		 * string
		 */
		function ReadLine();
	
	
		/**
		 * Skips a specified number of characters when reading from an input text stream.
		 * Can only be used on a stream in reading mode; causes an error in writing or appending mode.
		 * @param number $characters characters Positive number of characters to skip forward. (Backward skipping is not supported.)
		 * void
		 */
		function Skip($characters);
	
	
		/**
		 * Skips the next line when reading from an input text stream.
		 * Can only be used on a stream in reading mode, not writing or appending mode.
		 * void
		 */
		function SkipLine();
	
	}
}

namespace {
		class WScript
		{
			/**
			 * Exposes the write-only error output stream for the current script.
			 * Can be accessed only while using CScript.exe.
			 * @var TextStreamWriter
			 */
			public $StdErr;
		
			/**
			 * Exposes the write-only output stream for the current script.
			 * Can be accessed only while using CScript.exe.
			 * @var TextStreamWriter
			 */
			public $StdOut;
		
			/** @var \[] */
			public $Arguments = ['Arguments' => NULL];
		
			/**
			 * The full path of the currently running script.
			 * @var string
			 */
			public $ScriptFullName;
		
			/**
			 * The Windows Script Host build version number.
			 * @var number
			 */
			public $BuildVersion;
		
			/**
			 * Fully qualified path of the host executable.
			 * @var string
			 */
			public $FullName;
		
			/**
			 * Gets/sets the script mode - interactive(true) or batch(false).
			 * @var boolean
			 */
			public $Interactive;
		
			/**
			 * The name of the host executable (WScript.exe or CScript.exe).
			 * @var string
			 */
			public $Name;
		
			/**
			 * Path of the directory containing the host executable.
			 * @var string
			 */
			public $Path;
		
			/**
			 * The filename of the currently running script.
			 * @var string
			 */
			public $ScriptName;
		
			/**
			 * Exposes the read-only input stream for the current script.
			 * Can be accessed only while using CScript.exe.
			 * @var TextStreamReader
			 */
			public $StdIn;
		
			/**
			 * Windows Script Host version
			 * @var string
			 */
			public $Version;
		
		
			/**
			 * Outputs text to either a message box (under WScript.exe) or the command console window followed by
			 * a newline (under CScript.exe).
			 * @param mixed $s
			 * void
			 */
			public function Echo($s)
			{
			}
		
		
			/**
			 * Forces the script to stop immediately, with an optional exit code.
			 * @param number $exitCode
			 * number
			 */
			public function Quit($exitCode)
			{
			}
		
		
			/**
			 * Connects a COM object's event sources to functions named with a given prefix, in the form prefix_event.
			 * @param mixed $objEventSource
			 * @param string $strPrefix
			 * void
			 */
			public function ConnectObject($objEventSource, $strPrefix)
			{
			}
		
		
			/**
			 * Creates a COM object.
			 * @param string $strProgID strProgiID
			 * @param string $strPrefix
			 * mixed
			 */
			public function CreateObject($strProgID, $strPrefix)
			{
			}
		
		
			/**
			 * Disconnects a COM object from its event sources.
			 * @param mixed $obj
			 * void
			 */
			public function DisconnectObject($obj)
			{
			}
		
		
			/**
			 * Retrieves an existing object with the specified ProgID from memory, or creates a new one from a file.
			 * For objects in memory, pass a zero-length string.
			 * @param string $strPathname strPathname Fully qualified path to the file containing the object persisted to disk.
			 * @param string $strProgID
			 * @param string $strPrefix
			 * mixed
			 */
			public function GetObject($strPathname, $strProgID, $strPrefix)
			{
			}
		
		
			/**
			 * Suspends script execution for a specified length of time, then continues execution.
			 * @param number $intTime intTime Interval (in milliseconds) to suspend script execution.
			 * void
			 */
			public function Sleep($intTime)
			{
			}
		
		}
}

/**
* Allows enumerating over a COM collection, which may not have indexed item access.
*/
namespace {
	interface Enumerator
	{
	
		/**
		 * Returns true if the current item is the last one in the collection, or the collection is empty,
		 * or the current item is undefined.
		 * boolean
		 */
		function atEnd();
	
	
		/**
		 * Returns the current item in the collection
		 * \T
		 */
		function item();
	
	
		/**
		 * Resets the current item in the collection to the first item. If there are no items in the collection,
		 * the current item is set to undefined.
		 * void
		 */
		function moveFirst();
	
	
		/**
		 * Moves the current item to the next item in the collection. If the enumerator is at the end of
		 * the collection or the collection is empty, the current item is set to undefined.
		 * void
		 */
		function moveNext();
	
	}
}

namespace {
	interface EnumeratorConstructor
	{
	}
}

namespace {
	/**
	 * @const EnumeratorConstructor;
	 */
	const Enumerator_=null;
}

/**
* Enables reading from a COM safe array, which might have an alternate lower bound, or multiple dimensions.
*/
namespace {
	interface VBArray
	{
	
		/**
		 * Returns the number of dimensions (1-based).
		 * number
		 */
		function dimensions();
	
	
		/**
		 * Takes an index for each dimension in the array, and returns the item at the corresponding location.
		 * @param number $dimension1Index
		 * @param number[] ...$dimensionNIndexes
		 * \T
		 */
		function getItem($dimension1Index, $dimensionNIndexes);
	
	
		/**
		 * Returns the smallest available index for a given dimension.
		 * @param number $dimension dimension 1-based dimension (defaults to 1)
		 * number
		 */
		function lbound($dimension);
	
	
		/**
		 * Returns the largest available index for a given dimension.
		 * @param number $dimension dimension 1-based dimension (defaults to 1)
		 * number
		 */
		function ubound($dimension);
	
	
		/**
		 * Returns a Javascript array with all the elements in the VBArray. If there are multiple dimensions,
		 * each successive dimension is appended to the end of the array.
		 * Example: [[1,2,3],[4,5,6]] becomes [1,2,3,4,5,6]
		 * \T[]
		 */
		function toArray();
	
	}
}

namespace {
	interface VBArrayConstructor
	{
	}
}

namespace {
	/**
	 * @const VBArrayConstructor;
	 */
	const VBArray_=null;
}
