<?php

namespace Gegeriyadi\Steam;

use GuzzleHttp\Client;

class Steam
{
	public function getSteamId($vanityurl)
	{
		$uri = 'https://api.steampowered.com/ISteamUser/ResolveVanityURL/v0001/';
		$params = [
			'key' => config('steamapi.key'),
			'vanityurl' => $vanityurl
		];

		$client = new Client(['base_uri' => $uri]);
		$response = $client->request('GET', '', [
			'verify' => false,
			'query' => $params
		]);

		$result = json_decode($response->getBody());

		if ($result->response->success == 1) {
			$steamid = $result->response->steamid;
			return $steamid;
		} else {
			return 'Pencarian gagal, Cek kembali url profile steam anda!';
		}
	}

	public function getUserOnline($steamid)
	{

		$client = new Client();
		$response = $client->request('GET', 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v2/?key='. config('steamapi.key') .'&steamids='. $steamid,
			['verify' => false]
		);

		$result = json_decode($response->getBody());
		$players = $result->response->players;
		// dd($players);

		return $players;

	}

	public function test()
	{
		return "hoho";
	}

}
