<?php

/**
 *
 * @package  ZGM
 */
namespace ZGM;

class Activate
{
	public static function activate()
	{
		flush_rewrite_rules();
	}
}