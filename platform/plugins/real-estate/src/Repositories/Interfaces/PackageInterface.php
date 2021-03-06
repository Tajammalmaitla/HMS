<?php

namespace Botble\RealEstate\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;

interface PackageInterface extends RepositoryInterface
{
    public function getByLocale();
}
