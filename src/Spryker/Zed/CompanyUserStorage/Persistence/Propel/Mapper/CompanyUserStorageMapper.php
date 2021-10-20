<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUserStorage\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\CompanyUserStorageTransfer;
use Generated\Shared\Transfer\SynchronizationDataTransfer;
use Orm\Zed\CompanyUserStorage\Persistence\SpyCompanyUserStorage;
use Propel\Runtime\Collection\ObjectCollection;

class CompanyUserStorageMapper implements CompanyUserStorageMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyUserStorageTransfer $companyUserStorageTransfer
     * @param \Orm\Zed\CompanyUserStorage\Persistence\SpyCompanyUserStorage $spyCompanyUserEntityTransfer
     *
     * @return \Orm\Zed\CompanyUserStorage\Persistence\SpyCompanyUserStorage
     */
    public function mapCompanyUserStorageTransferToCompanyUserStorageEntity(
        CompanyUserStorageTransfer $companyUserStorageTransfer,
        SpyCompanyUserStorage $spyCompanyUserEntityTransfer
    ): SpyCompanyUserStorage {
        $spyCompanyUserEntityTransfer->setFkCompanyUser($companyUserStorageTransfer->getIdCompanyUser());
        $spyCompanyUserEntityTransfer->setData($companyUserStorageTransfer->toArray());

        return $spyCompanyUserEntityTransfer;
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\CompanyUserStorage\Persistence\SpyCompanyUserStorage> $companyUserStorageEntityCollection
     *
     * @return array<\Generated\Shared\Transfer\SynchronizationDataTransfer>
     */
    public function mapCompanyUserStorageEntityCollectionToSynchronizationDataTransfers(ObjectCollection $companyUserStorageEntityCollection): array
    {
        $synchronizationDataTransfers = [];

        foreach ($companyUserStorageEntityCollection as $companyUserStorageEntity) {
            $synchronizationDataTransfers[] = $this->mapCompanyUserStorageEntityToSynchronizationDataTransfer(
                $companyUserStorageEntity,
                new SynchronizationDataTransfer(),
            );
        }

        return $synchronizationDataTransfers;
    }

    /**
     * @param \Orm\Zed\CompanyUserStorage\Persistence\SpyCompanyUserStorage $companyUserStorageEntity
     * @param \Generated\Shared\Transfer\SynchronizationDataTransfer $synchronizationDataTransfer
     *
     * @return \Generated\Shared\Transfer\SynchronizationDataTransfer
     */
    public function mapCompanyUserStorageEntityToSynchronizationDataTransfer(
        SpyCompanyUserStorage $companyUserStorageEntity,
        SynchronizationDataTransfer $synchronizationDataTransfer
    ): SynchronizationDataTransfer {
        return $synchronizationDataTransfer->fromArray($companyUserStorageEntity->toArray(), true);
    }
}
