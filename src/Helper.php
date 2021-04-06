<?php


namespace Amo;


class Helper
{

    public static function dd($data)
    {
        echo '<pre>';print_r($data);die;
    }
}