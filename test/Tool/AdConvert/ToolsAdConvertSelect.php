<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 15:22
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$req = $client::Tool()->adConvert->select();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setPackageName('sdwe');

print_r($client->excute($req));