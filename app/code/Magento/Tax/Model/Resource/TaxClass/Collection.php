<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_Tax
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Tax class collection
 *
 * @category    Magento
 * @package     Magento_Tax
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace Magento\Tax\Model\Resource\TaxClass;

class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Magento\Tax\Model\ClassModel', 'Magento\Tax\Model\Resource\TaxClass');
    }

    /**
     * Add class type filter to result
     *
     * @param int $classTypeId
     * @return $this
     */
    public function setClassTypeFilter($classTypeId)
    {
        return $this->addFieldToFilter('main_table.class_type', $classTypeId);
    }

    /**
     * Retrieve option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->_toOptionArray('class_id', 'class_name');
    }

    /**
     * Retrieve option hash
     *
     * @return array
     */
    public function toOptionHash()
    {
        return $this->_toOptionHash('class_id', 'class_name');
    }
}
