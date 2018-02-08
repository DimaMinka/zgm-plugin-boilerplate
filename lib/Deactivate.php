<?php

/**
 *
 * @package  ZGM
 */
namespace ZGM\ZGMPB;

class Deactivate
{
	public static function deactivate()
	{
		flush_rewrite_rules();
	}
}