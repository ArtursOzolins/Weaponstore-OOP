<?php

class LicenseCheck
{
    private array $customerLicense;

    public function __construct(array $customerLicense)
    {
        $this->customerLicense = $customerLicense;
    }

    public function checkIfFits($gunType): bool
    {
        return !(array_search($gunType, $this->customerLicense) === false);
    }
}
