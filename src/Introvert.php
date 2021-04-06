<?php


namespace Amo;


use Introvert\ApiClient;
use Introvert\Configuration;

class Introvert
{
    private $api;

    public function __construct()
    {
        Configuration::getDefaultConfiguration()->setApiKey('key', '23bc075b710da43f0ffb50ff9e889aed');
        $this->api = new ApiClient();
    }

    public function getLeadDate($idCustomField = null, $date = '2021-01-14', $idStatus = [142, 143])
    {
        $data = [];

        $dateTime = new \DateTime($date);
        $date = date_format($dateTime, 'Y-m-d H:i:s');



        while (true){
            $result = $this->api->lead->getAll(null, [142, 143], null, null, 250, count($data));

            $data = array_merge($data, $result['result']);

            if (count($result['result']) < 250){
                break;
            }
        }


        $newData = [];

        foreach ($data as $key => $item){

            foreach ($item['custom_fields'] as $fieldIndex => $value){

                if ($value['id'] == 968675 && $value['values'][0]['value'] == $date) {

                    $newData[$key] = $item;
                    break;
                }
            }
        }

        return count($newData);
    }

    public function getLeadDateJ($idCustomField = null, $idStatus = [142, 143, 35904058])
    {
        $data = [];

        $dateTime = new \DateTime(date('Y-m-d'));
        $date = date_format($dateTime, 'Y-m-d H:i:s');
        $dateAdd30 = date('Y-m-d H:i:s', strtotime($date) + 30 * 24 * 3600);

        while (true){
            $result = $this->api->lead->getAll(null, [142, 143, 35904058], null, null, 250, count($data));

            $data = array_merge($data, $result['result']);

            if (count($result['result']) < 250){
                break;
            }
        }


        $newData = [];

        foreach ($data as $key => $item){

            foreach ($item['custom_fields'] as $fieldIndex => $value){

                if ($value['id'] == 968675 && $value['values'][0]['value'] >= $date && $value['values'][0]['value'] <= $dateAdd30) {
                    $newData[$value['values'][0]['value']][$key] = $item;
                    break;
                }


            }
        }
        unset($data);

        foreach ($newData as $key => $item){
              $data[] = [
                  'count' => count($item),
                  'date' => $key
              ];
        }

        return $data;
    }
}