<?php

namespace Craft;

use Guzzle\Http\Client;
use Guzzle\Http\Message\Request;

class HowToVideos_WistiaVideosService extends BaseApplicationComponent
{

    public function getVideos()
    {
        $wistiaApiKey = craft()->config->get('wistiaApiKey', 'howtovideos');
        $wistiaProjectId = craft()->config->get('wistiaProjectId', 'howtovideos');

        $client = new Client();

        $url = 'https://api.wistia.com/v1/medias.json/?api_password=' . $wistiaApiKey . '&project_id=' . $wistiaProjectId;

        try {
            /** @var Request $response */
            $response = $client->get($url);
            $response = $response->send();
            $response = $response->json();

            $videos = [];

            foreach($response as $video) {
                $videos[$video['section']][] = $video;
            }

            return $videos;

        } catch (\Exception $e) {
            return null;
        }
    }
}