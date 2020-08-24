<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Study\Brand\Model;

use Magento\Framework\Api\DataObjectHelper;
use Study\Brand\Api\Data\BrandInterface;
use Study\Brand\Api\Data\BrandInterfaceFactory;

class Brand extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'study_brand';
    protected $dataObjectHelper;

    protected $brandDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param BrandInterfaceFactory $brandDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Study\Brand\Model\ResourceModel\Brand $resource
     * @param \Study\Brand\Model\ResourceModel\Brand\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        BrandInterfaceFactory $brandDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Study\Brand\Model\ResourceModel\Brand $resource,
        \Study\Brand\Model\ResourceModel\Brand\Collection $resourceCollection,
        array $data = []
    ) {
        $this->brandDataFactory = $brandDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve brand model with brand data
     * @return BrandInterface
     */
    public function getDataModel()
    {
        $brandData = $this->getData();

        $brandDataObject = $this->brandDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $brandDataObject,
            $brandData,
            BrandInterface::class
        );

        return $brandDataObject;
    }
}
