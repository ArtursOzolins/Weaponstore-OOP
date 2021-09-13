<?php

require_once 'Licenseclass.php';

class Gunstore
{
    private array $weapons;

    public function __construct(array $weapons)
    {
        $this->weapons = $weapons;
    }

    public function previewStock()
    {
        echo "Guns for sale: " . PHP_EOL;
        foreach ($this->weapons as $weapon)
        {
            echo "{$weapon->getName()} | Caliber: {$weapon->getCaliber()} | Trajectory: {$weapon->getTrajectory()}" . PHP_EOL;
        }
    }

    public function sell($user, $weapon)
    {
        $checkLicense = new LicenseCheck($user->getLicense());
        $possibleSale = $checkLicense->checkIfFits($weapon->getType());
        if ($possibleSale === true)
        {
            echo "{$user->getName()} just bought a {$weapon->getName()}" . PHP_EOL;
        }
    }
}
