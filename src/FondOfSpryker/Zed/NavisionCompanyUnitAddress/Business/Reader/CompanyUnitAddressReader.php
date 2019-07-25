<?php

namespace FondOfSpryker\Zed\NavisionCompanyUnitAddress\Business\Reader;

use FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressRepositoryInterface;
use Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer;
use Generated\Shared\Transfer\CompanyUnitAddressTransfer;

class CompanyUnitAddressReader implements CompanyUnitAddressReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressRepositoryInterface
     */
    protected $navisionCompanyUnitAddressRepository;

    /**
     * @param \FondOfSpryker\Zed\NavisionCompanyUnitAddress\Persistence\NavisionCompanyUnitAddressRepositoryInterface $navisionCompanyUnitAddressRepository
     */
    public function __construct(NavisionCompanyUnitAddressRepositoryInterface $navisionCompanyUnitAddressRepository)
    {
        $this->navisionCompanyUnitAddressRepository = $navisionCompanyUnitAddressRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyUnitAddressTransfer $companyUnitAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer
     */
    public function findCompanyUnitAddressByExternalReference(
        CompanyUnitAddressTransfer $companyUnitAddressTransfer
    ): CompanyUnitAddressResponseTransfer {
        $companyUnitAddressTransfer->requireExternalReference();

        $companyUnitAddressTransfer = $this->navisionCompanyUnitAddressRepository->findCompanyUnitAddressByExternalReference(
            $companyUnitAddressTransfer->getExternalReference()
        );

        $companyUnitAddressResponseTransfer = new CompanyUnitAddressResponseTransfer();
        if (!$companyUnitAddressTransfer) {
            return $companyUnitAddressResponseTransfer->setIsSuccessful(false);
        }

        return $companyUnitAddressResponseTransfer
            ->setIsSuccessful(true)
            ->setCompanyUnitAddressTransfer($companyUnitAddressTransfer);
    }
}
