<?php

/**
 *
 * @package  ZGM
 */
namespace ZGM\ZGMPB;

class Activate
{
	public static function activate()
	{
		flush_rewrite_rules();
	}
}