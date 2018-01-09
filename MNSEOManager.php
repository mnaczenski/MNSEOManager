<?php

namespace MNSEOManager;

use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Model\ModelManager;
use MNSEOManager\Models\seo;

class MNSEOManager extends \Shopware\Components\Plugin
{

    public function activate(ActivateContext $context)
    {
        $context->scheduleClearCache(ActivateContext::CACHE_LIST_DEFAULT);
    }

    public function deactivate(DeactivateContext $context)
    {
        $context->scheduleClearCache(DeactivateContext::CACHE_LIST_DEFAULT);
    }

    private function getClasses(ModelManager $modelManager)
    {
        return [
            $modelManager->getClassMetadata(seo::class)
        ];
    }
}