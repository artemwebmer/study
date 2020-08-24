<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Study\Brand\Api\Data;

interface BrandSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Brand list.
     * @return \Study\Brand\Api\Data\BrandInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \Study\Brand\Api\Data\BrandInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

