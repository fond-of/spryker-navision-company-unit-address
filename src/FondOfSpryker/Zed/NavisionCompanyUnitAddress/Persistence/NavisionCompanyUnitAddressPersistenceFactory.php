<?php

namespace FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence;

use FondOfSpryker\Zed\NavisionCompanyUnitAddress\NavisionCompanyUnitAddressDependencyProvider;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\NavisionCompanyUnitAddressConfig getConfig()
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressRepositoryInterface getRepository()
 */
class NavisionCompanyUnitAddressPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery
     */
    public function getCompanyUnitAddressQuery(): SpyCompanyUnitAddressQuery
    {
        return $this->getProvidedDependency(NavisionCompanyUnitAddressDependencyProvider::PROPEL_QUERY_COMPANY_UNIT_ADDRESS);
    }
}
