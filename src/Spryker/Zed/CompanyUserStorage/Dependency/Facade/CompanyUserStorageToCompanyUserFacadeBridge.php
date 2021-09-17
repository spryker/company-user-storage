<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUserStorage\Dependency\Facade;

use Generated\Shared\Transfer\CompanyUserCollectionTransfer;
use Generated\Shared\Transfer\CompanyUserCriteriaFilterTransfer;

class CompanyUserStorageToCompanyUserFacadeBridge implements CompanyUserStorageToCompanyUserFacadeInterface
{
    /**
     * @var \Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface
     */
    protected $companyUserFacade;

    /**
     * @param \Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface $companyUserFacade
     */
    public function __construct($companyUserFacade)
    {
        $this->companyUserFacade = $companyUserFacade;
    }

    /**
     * @param array<int> $companyUserIds
     *
     * @return array<\Generated\Shared\Transfer\CompanyUserTransfer>
     */
    public function findActiveCompanyUsersByIds(array $companyUserIds): array
    {
        return $this->companyUserFacade->findActiveCompanyUsersByIds($companyUserIds);
    }

    /**
     * @param array<int> $companyIds
     *
     * @return array<int>
     */
    public function findActiveCompanyUserIdsByCompanyIds(array $companyIds): array
    {
        return $this->companyUserFacade->findActiveCompanyUserIdsByCompanyIds($companyIds);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyUserCriteriaFilterTransfer $companyUserCriteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserCollectionTransfer
     */
    public function getRawCompanyUsersByCriteria(CompanyUserCriteriaFilterTransfer $companyUserCriteriaFilterTransfer): CompanyUserCollectionTransfer
    {
        return $this->companyUserFacade->getRawCompanyUsersByCriteria($companyUserCriteriaFilterTransfer);
    }
}
