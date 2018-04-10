<?php

namespace Gegeriyadi\Steam;

use Gegeriyadi\Steam\SteamApi;

class Steam
{
	use SteamApi;

	public function getUserData($steamid)
	{
		$result = self::process($steamid);
		$players = $result->response->players;
		// dd($players);

		return $players;
	}

	public function getID()
	{
		
	}

}
