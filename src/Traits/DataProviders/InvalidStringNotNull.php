<?php

namespace Prokl\TestingTools\Traits\DataProviders;

class InvalidStringNotNull extends InvalidString
{
    use NotNull;

    public function values()
    {
        return $this->notNull(parent::values());
    }
}
