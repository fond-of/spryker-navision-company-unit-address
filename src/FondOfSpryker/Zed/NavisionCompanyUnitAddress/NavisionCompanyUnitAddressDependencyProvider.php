<?php

namespace FondOfSpryker\Zed\NavisionCompanyUnitAddress;

use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class NavisionCompanyUnitAddressDependencyProvider extends AbstractBundleDependencyProvider
{
    public const PROPEL_QUERY_COMPANY_UNIT_ADDRESS = 'PROPEL_QUERY_COMPANY_UNIT_ADDRESS';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function providePersistenceLayerDependencies(Container $container): Container
    {
        $container = parent::providePersistenceLayerDependencies($container);

        $container = $this->addCompanyUnitAddressPropelQuery($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addCompanyUnitAddressPropelQuery(Container $container): Container
    {
        $container[static::PROPEL_QUERY_COMPANY_UNIT_ADDRESS] = function () {
            return SpyCompanyUnitAddressQuery::create();
        };

        return $container;
    }
}
