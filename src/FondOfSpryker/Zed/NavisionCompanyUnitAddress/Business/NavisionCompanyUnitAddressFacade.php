<?php

namespace FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business;

use Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer;
use Generated\Shared\Transfer\CompanyUnitAddressTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressRepositoryInterface getRepository()
 * @method \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business\NavisionCompanyUnitAddressBusinessFactory getFactory()
 */
class NavisionCompanyUnitAddressFacade extends AbstractFacade implements NavisionCompanyUnitAddressFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressTransfer $companyUnitAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer
     */
    public function findCompanyUnitAddressByExternalReference(
        CompanyUnitAddressTransfer $companyUnitAddressTransfer
    ): CompanyUnitAddressResponseTransfer {
        return $this->getFactory()->createCompanyUnitAddressReader()
            ->findCompanyUnitAddressByExternalReference($companyUnitAddressTransfer);
    }
}
