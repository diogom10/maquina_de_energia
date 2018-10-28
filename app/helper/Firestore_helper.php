<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 18/10/2018
 * Time: 21:29
 */

namespace App\helper;

require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use MrShan0\PHPFirestore\FireStoreApiClient;

class Firestore_helper
{
    public $config;

    public function __construct()
    {
        $this->config = $this->accessGoogleDataBase();
    }

    public function accessGoogleDataBase()
    {
        $config = [
            'apiKey' => env('FIRESTORE_APIKEY'),
            'authDomain' => env('FIRESTORE_AUTHDOMAIN'),
            'databaseURL' => env('FIRESTORE_DATABASEURL'),
            'projectId' => env('FIRESTORE_PROJECTID'),
            'storageBucket' => env('FIRESTORE_STORAGEBUCKET'),
            'messagingSenderId' => env('FIRESTORE_MESSAGINGSENDERID'),
            "json_file" => env('FIRESTORE_JSON'),
        ];

        return $config;

    }


    public function firestore()
    {
        $firestore = new FireStoreApiClient($this->config['projectId'], $this->config['apiKey'], [
            'database' => $this->config['databaseURL'],
        ]);
        return $firestore;
    }


    public function firebase()
    {
        $serviceAccount = ServiceAccount::fromJsonFile($this->config["json_file"]);
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri($this->config["databaseURL"])
            ->create();

        return $firebase;

    }
}

