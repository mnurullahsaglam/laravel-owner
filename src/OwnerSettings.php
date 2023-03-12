<?php

namespace Mnurullahsaglam\LaravelOwner;

class OwnerSettings
{
    public string $ownerModel;

    public string $ownerIdColumn;

    public static function create(): static
    {
        return new static();
    }

    public function setOwnerModel(string $ownerModel): self
    {
        $this->ownerModel = $ownerModel;

        return $this;
    }

    public function setOwnerColumn(string $ownerIdColumn): self
    {
        $this->ownerIdColumn = $ownerIdColumn;

        return $this;
    }
}
