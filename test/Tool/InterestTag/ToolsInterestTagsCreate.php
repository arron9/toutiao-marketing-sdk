<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 17:02
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\InterestTag\V1\ToolsInterestTagsCreate();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setName("测试测试");
$req->setWords(['我', '测测']);

print_r($client->excute($req));