<?php

/**
 * Created by PhpStorm.
 * User: mostkaj
 * Date: 1. 7. 2016
 * Time: 21:31
 */

namespace tuc\js\utils {

	class Point {
		public $x, $y;

		public function __construct($x=0, $y=0) {
			$this->x = $x;
			$this->y = $y;
		}

		public function distanceTo(Point $b) {
			$dx = $this->x - $b->x;
			$dy = $this->y - $b->y;
			return sqrt($dx * $dx + $dy * $dy);
		}

		public function moveByLenDir($len, $dir) {
			$moved = self::lengthDir($len,$dir);
			$this->x+=$moved->x;
			$this->y+=$moved->y;
		}

		public static function lengthDir($length, $dir) {
			$dir+=90;
			if ($dir> 360){
				$dir-=360;
			}
			$dir=deg2rad($dir);
			
			return new Point(
				(int)(sin($dir)*$length),
				(int)(cos($dir)*$length)
			);
		}

		public static function distanceBetweenPoints(Point $a, Point $b) {
			$dx = $a->x - $b->x;
			$dy = $a->y - $b->y;
			return sqrt($dx * $dx + $dy * $dy);
		}

		public static function distanceBetween($x1, $y1, $x2, $y2) {
			$dx = $x1 - $x2;
			$dy = $y1 - $y2;
			return sqrt($dx * $dx + $dy * $dy);
		}
	}
}