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
        $configuration = new \PiplApi_SearchRequestConfiguration();
        $configuration->api_key = 'drv1n04btkxgkxus2n8ojlm2';

        $fields = array(new \PiplApi_Address(array("country" => "AU",
                "state" => "NSW", "city" => "Sydney")),
            new \PiplApi_Name(array("first" => "Jonathan",
                "last" => "Leane")));
        $person = new \PiplApi_Person($fields);
        $request = new \PiplApi_SearchAPIRequest(array('person' => $person), $configuration);

        return $request;
//        return $this->apiGet('http://api.pipl.com/search/?first_name=Clark&last_name=Kent&email=clark.kent@example.com&key=drv1n04btkxgkxus2n8ojlm2');
    }

    public function getPiplTestData()
    {
//        $data = array('first_name' => 'Jonathan', 'last_name' => 'Leane', 'key' => 'drv1n04btkxgkxus2n8ojlm2');
        $response = $this->apiGet('http://api.pipl.com/search/?first_name=Jonathan&last_name=Leane&key=drv1n04btkxgkxus2n8ojlm2');
        return $response;

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