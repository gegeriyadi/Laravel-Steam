<?php

namespace Gegeriyadi\Steam;

use GuzzleHttp\Client;

trait SteamApi
{
	public $base_uri= 'https://api.steampowered.com/ISteamUser/';

	public function process($steamid)
	{
		$key = config('steamapi.key');
		$client = new Client(['base_uri' => $this->base_uri]);
		$response = $client->request('GET', 'GetPlayerSummaries/v2/', [
			'verify' => false,
			'query' => [
				'key' => $key,
				'steamids' => $steamid
			]
		]);

		$result = json_decode($response->getBody());
		
		return $result;
	}
}
