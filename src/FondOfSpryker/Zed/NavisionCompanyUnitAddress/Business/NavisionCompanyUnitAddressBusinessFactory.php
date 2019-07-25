<?php

namespace FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business;

use FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business\Reader\CompanyUnitAddressReader;
use FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business\Reader\CompanyUnitAddressReaderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\NavisionCompanyUnitAddressConfig getConfig()
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressRepositoryInterface getRepository()
 */
class NavisionCompanyUnitAddressBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business\Reader\CompanyUnitAddressReaderInterface
     */
    public function createCompanyUnitAddressReader(): CompanyUnitAddressReaderInterface
    {
        return new CompanyUnitAddressReader($this->getRepository());
    }
}
