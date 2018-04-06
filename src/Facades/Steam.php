<?php

namespace Gegeriyadi\Steam\Facades;

use Illuminate\Support\Facades\Facade;

class Steam extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'gegeriyadi-steam';
	}
}
