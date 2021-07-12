<?php
/**
 * Copyright ©  All rights reserved.
 * See LICENSE for license details.
 */
declare(strict_types=1);

namespace Gr4vy\Payment\Api\Data;

interface TransactionSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Transaction list.
     * @return \Gr4vy\Payment\Api\Data\TransactionInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \Gr4vy\Payment\Api\Data\TransactionInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
