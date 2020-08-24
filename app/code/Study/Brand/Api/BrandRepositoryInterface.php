<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Study\Brand\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface BrandRepositoryInterface
{

    /**
     * Save Brand
     * @param \Study\Brand\Api\Data\BrandInterface $brand
     * @return \Study\Brand\Api\Data\BrandInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Study\Brand\Api\Data\BrandInterface $brand
    );

    /**
     * Retrieve Brand
     * @param string $brandId
     * @return \Study\Brand\Api\Data\BrandInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($brandId);

    /**
     * Retrieve Brand matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Study\Brand\Api\Data\BrandSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Brand
     * @param \Study\Brand\Api\Data\BrandInterface $brand
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Study\Brand\Api\Data\BrandInterface $brand
    );

    /**
     * Delete Brand by ID
     * @param string $brandId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($brandId);
}

