<?php
/**
 * @author	    Vladan Kuzmanovic (vladankuzmanovic@gmail.com)
 */
namespace Kuzman\ProductBadges\Model\System\Config\Source;

class Corners
{
    /**
     * Options for badge position
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            1 => 'Top Left',
            2 => 'Top Right',
            3 => 'Bottom Left',
            4 => 'Bottom Right',
        );
    }
}