<?php

declare(strict_types=1);

namespace LaminasTest\Filter\TestAsset;

use Laminas\Filter\FilterInterface;

class StrRepeatFilterInterface implements Filterinterface
{
    public function filter($value)
    {
        return str_repeat((string) $value, 2);
    }
}
