<?php
/*
 * Macfadyen_Flexslider

 * @category   Macfadyen
 * @package    Macfadyen_Flexslider
 * @version    1.0.0
 */
namespace Macfadyen\Flexslider\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Store\Model\ScopeInterface;
use \Magento\Framework\View\Asset\Repository;

class Sliders extends Template
{
    const XML_PATH_SLIDERS_ENABLE    = 'homesliders/general/enable';

    protected $_assetRepo;

    /**
     * Sliders constructor.
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        Repository $assetRepo,
        array $data = []
    ) {
        $this->_assetRepo = $assetRepo;
        parent::__construct($context, $data);
        
    }

    /**
     * Check the module is enabled in the admin
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_scopeConfig->getValue(self::XML_PATH_SLIDERS_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get the slider image URL
     *
     * @param $image
     * @return bool|string
     */
    public function getImageUrl($image)
    {
        $url = '';
        if ($image) {
            if (is_string($image)) {

                $url = $this->_assetRepo->getUrl("Macfadyen_Flexslider::images/$image");
            }
        }
        return $url;
    }
}
