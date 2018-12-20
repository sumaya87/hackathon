<?php
/**
 * Created by PhpStorm.
 * User: sumaya
 * Date: 21/12/18
 * Time: 6:30 AM
 */

namespace App\Service;

class ScraperService
{
    public function apiGet(string $url)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return $res->getBody();
    }

    public function apiPost(string $url, array $data){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', $url, $data);
        return $res->getBody();
    }

    public function getTest()
    {
        $data = array('first_name' => 'Jonathan', 'last_name' => 'Leane', 'key' => 'drv1n04btkxgkxus2n8ojlm2');
        $configuration = new \PiplApi_SearchRequestConfiguration();
        $configuration->api_key = 'drv1n04btkxgkxus2n8ojlm2';

        $request = new \PiplApi_SearchAPIRequest($data, $configuration);
        $response = $request->send();
        var_dump($response->possible_persons);die();
    }

    public function getPiplTestData()
    {
        $data = array('first_name' => 'Jonathan', 'last_name' => 'Leane', 'key' => 'drv1n04btkxgkxus2n8ojlm2');
        $configuration = new \PiplApi_SearchRequestConfiguration();
        $configuration->api_key = 'drv1n04btkxgkxus2n8ojlm2';

        $request = new \PiplApi_SearchAPIRequest($data, $configuration);
        $response = $request->send();
        var_dump($response->possible_persons);die();
        return $this->processPiplResponse($response);

    }

    public function processPiplResponse(\PiplApi_SearchAPIResponse $response)
    {
        $names = $response->available_data;
        $addresses = $response->address();
        var_dump($addresses);
        die();
    }

    public function getLeadInfo(){
        $piplApikey = 'drv1n04btkxgkxus2n8ojlm2';
        $firstName = 'Jonathan';
        $lastName = 'Leane';
        $country = 'Australia';
        $state = 'New South Wales';
        $city = 'Sydney';



    }
    
}