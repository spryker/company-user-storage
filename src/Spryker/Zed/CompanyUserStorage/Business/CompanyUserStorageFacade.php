<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUserStorage\Business;

use Generated\Shared\Transfer\FilterTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\CompanyUserStorage\Business\CompanyUserStorageBusinessFactory getFactory()
 * @method \Spryker\Zed\CompanyUserStorage\Persistence\CompanyUserStorageEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\CompanyUserStorage\Persistence\CompanyUserStorageRepositoryInterface getRepository()
 */
class CompanyUserStorageFacade extends AbstractFacade implements CompanyUserStorageFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<int> $companyUserIds
     *
     * @return void
     */
    public function publishByCompanyUserIds(array $companyUserIds): void
    {
        $this->getFactory()
            ->createCompanyUserStorageWriter()
            ->publishByCompanyUserIds($companyUserIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<int> $companyIds
     *
     * @return void
     */
    public function publishByCompanyIds(array $companyIds): void
    {
        $this->getFactory()
            ->createCompanyUserStorageWriter()
            ->publishByCompanyIds($companyIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<int> $companyUserIds
     *
     * @return void
     */
    public function unpublishByCompanyUserIds(array $companyUserIds): void
    {
        $this->getFactory()
            ->createCompanyUserStorageWriter()
            ->unpublishByCompanyUserIds($companyUserIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filterTransfer
     * @param array<int> $companyUserIds
     *
     * @return array<\Generated\Shared\Transfer\SynchronizationDataTransfer>
     */
    public function getSynchronizationDataTransfersByFilterAndCompanyUserIds(FilterTransfer $filterTransfer, array $companyUserIds = []): array
    {
        return $this->getRepository()
            ->getSynchronizationDataTransfersByFilterAndCompanyUserIds($filterTransfer, $companyUserIds);
    }
}
