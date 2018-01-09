<?php

use MNSEOManager\Models\seo;

class Shopware_Controllers_Backend_SwagSEOManager extends Shopware_Controllers_Backend_Application
{
    protected $model = seo::class;
    protected $alias = 'seo';
}