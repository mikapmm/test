<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace IQMosaic\IQMosaicTheme\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;
    /**
     * @var \Magento\WidgetSampleData\Model\CmsBlock
     */
    //private $cmsBlock;

    /**
     * @param \IQMosaic\IQMosaicTheme\Model\Page $page
     * @param \IQMosaic\IQMosaicTheme\Model\Block $block
     * @param \IQMosaic\IQMosaicTheme\Model\CmsBlock $cmsBlock
     */
    public function __construct(
        \IQMosaic\IQMosaicTheme\Model\Page $page,
        \IQMosaic\IQMosaicTheme\Model\Block $block
        //\IQMosaic\IQMosaicTheme\Model\CmsBlock $cmsBlock
    ) {
        $this->page = $page;
        $this->block = $block;
        //$this->cmsBlock = $cmsBlock;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {

        $this->page->install(['IQMosaic_IQMosaicTheme::fixtures/pages/pages.csv']);
        $this->block->install(
            [

                'IQMosaic_IQMosaicTheme::fixtures/blocks/pages_static_blocks.csv',
            ]
        );
        //$this->cmsBlock->install(['IQMosaic_IQMosaicTheme::fixtures/widget/cmsblock.csv',]);
    }
}