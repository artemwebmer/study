<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Study\Brand\Api\Data;

interface BrandInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const BRAND_ID = 'brand_id';
    const IMAGE = 'image';
    const CREATED_AT = 'created_at';
    const HISTORY = 'history';
    const UPDATED_AT = 'updated_at';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const TITLE = 'title';

    /**
     * Get brand_id
     * @return string|null
     */
    public function getBrandId();

    /**
     * Set brand_id
     * @param string $brandId
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setBrandId($brandId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setTitle($title);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Study\Brand\Api\Data\BrandExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Study\Brand\Api\Data\BrandExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Study\Brand\Api\Data\BrandExtensionInterface $extensionAttributes
    );

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setName($name);

    /**
     * Get image
     * @return string|null
     */
    public function getImage();

    /**
     * Set image
     * @param string $image
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setImage($image);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setDescription($description);

    /**
     * Get history
     * @return string|null
     */
    public function getHistory();

    /**
     * Set history
     * @param string $history
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setHistory($history);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Study\Brand\Api\Data\BrandInterface
     */
    public function setUpdatedAt($updatedAt);
}

