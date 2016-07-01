<?php
/**
 * Created by PhpStorm.
 * User: mostkaj
 * Date: 1. 7. 2016
 * Time: 22:09
 */

namespace tuc\js\utils;


use jsphp\JsArray;

class Sprite {
	protected $images;
	protected $imageIndex=0;

	public $width=0,$height=0;

	/**
	 * Sprite constructor.
	 * @param int $width
	 * @param int $height
	 */
	public function __construct($width, $height) {
		$this->images=new JsArray();
		$this->width = $width;
		$this->height = $height;
	}


}