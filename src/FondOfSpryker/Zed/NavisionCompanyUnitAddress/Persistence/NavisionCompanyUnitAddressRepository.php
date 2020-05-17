<?php

namespace FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence;

use Generated\Shared\Transfer\CompanyUnitAddressTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressPersistenceFactory getFactory()
 */
class NavisionCompanyUnitAddressRepository extends AbstractRepository implements NavisionCompanyUnitAddressRepositoryInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressTransfer|null
     */
    public function findCompanyUnitAddressByExternalReference(string $externalReference): ?CompanyUnitAddressTransfer
    {
        $companyUnitAddressEntity = $this->getFactory()
            ->getCompanyUnitAddressQuery()
            ->filterByExternalReference($externalReference)
            ->findOne();

        if (!$companyUnitAddressEntity) {
            return null;
        }

        return (new CompanyUnitAddressTransfer())->fromArray(
            $companyUnitAddressEntity->toArray(),
            true
        );
    }
}
