<?php
namespace IFSR\HomePage;

use Flowpack\NodeTemplates\Template;
use IFSR\HomePage\Service\ChildNodeCopyService;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Package\Package as BasePackage;

/**
 * The Node Templates Magic Package
 */
class Package extends BasePackage
{
    /**
     * @param Bootstrap $bootstrap The current bootstrap
     * @return void
     */
    public function boot(Bootstrap $bootstrap)
    {
        $dispatcher = $bootstrap->getSignalSlotDispatcher();
        $dispatcher->connect(Template::class, 'nodeTemplateApplied', ChildNodeCopyService::class, 'copyChildNodesAfterTemplateApplication');
    }
}
