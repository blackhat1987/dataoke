<?php

namespace DaTaoKe\Requests\Dtk;

use DaTaoKe\Requests\DtkRequest;

/**
 * 精选专辑
 */
class TopicCatalogue extends DtkRequest
{
    public $version = 'v1.1.0';
    public $api = '/goods/topic/catalogue';
    public $extraParasField = [];
}