<?php

namespace Gegeriyadi\Steam;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait SteamApi
{
	public $base_uri= 'https://api.steampowered.com/ISteamUser/';

    /**
     * @param $steamid
     * @return mixed
     */
    public function process($uri, $param, $value)
	{
		$key = config('steamapi.key');
		$client = new Client(['base_uri' => $this->base_uri]);
        try {
            $response = $client->request('GET', $uri, [
                'verify' => false,
                'query' => [
                    'key' => $key,
                    $param => $value
                ]
            ]);
            $result = json_decode($response->getBody());
            return $result;
        } catch (GuzzleException $e) {
            // handle the exception
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
	}
}
