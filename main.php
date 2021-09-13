<?php

require_once 'Gunstoreclass.php';
require_once 'Gunclass.php';
require_once 'Customerclass.php';

$weapons = [
    new Gun('pistol', 'Glock', 9),
    new Gun('assault-rifle', 'AK47', 12)
];
$weapons[0]->setTrajectory(10-2*3);
$weapons[1]->setTrajectory(15-2*4);


$storeVisitors = [
    new Customer(),
    new Customer(),
    new Customer()
];

$storeVisitorDetails = [
    new Details('Paul', ['pistol', 'shotgun']),
    new Details('John', ['pistol']),
    new Details('Arnold', ['pistol', 'shotgun', 'assault-rifle'])
];

$bestGunStore = new Gunstore($weapons);
$bestGunStore->previewStock();

foreach ($storeVisitorDetails as $visitor)
{
    $bestGunStore->sell($visitor, $weapons[$visitor->choose(count($weapons))]);
}
