<?php

/**
 *
 * @package  ZGM
 */
namespace ZGM;

class Deactivate
{
	public static function deactivate()
	{
		flush_rewrite_rules();
	}
}