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

        $url = 'https://api.wistia.com/v1/projects/' . $wistiaProjectId . '.json?api_password=' . $wistiaApiKey;

        try {
            /** @var Request $response */
            $response = $client->get($url);
            $response = $response->send();
            $response = $response->json();

            $videos = [];

            foreach ($response['medias'] as $video) {

                if (isset($video['section'])) {
                    $videos[$video['section']][] = $video;

                } else {
                    $videos['Misc'][] = $video;
                }
            }

            return $videos;

        } catch (\Exception $e) {
            return null;
        }
    }
}