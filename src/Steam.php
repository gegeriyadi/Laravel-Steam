<?php

namespace Gegeriyadi\Steam;

use Gegeriyadi\Steam\SteamApi;

class Steam
{
	use SteamApi;

    /**
     * @param $steamid
     * @return mixed
     */
    public function getUserData($steamid)
	{
		$result = $this->process('GetPlayerSummaries/v2/','steamids', $steamid);
        $players = $result->response->players;

        return $players;
	}

    /**
     * @param $vanityurl
     * @return mixed
     */
    public function getID($vanityurl)
	{
        $result = $this->process('ResolveVanityURL/v0001/','vanityurl', $vanityurl);
        $steamid = $result->response->steamid;

        return $steamid;
	}

}
