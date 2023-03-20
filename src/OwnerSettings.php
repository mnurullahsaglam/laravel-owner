<?php

namespace Mnurullahsaglam\LaravelOwner;

class OwnerSettings
{
    public string $ownerModel = 'App\Models\User';

    public string $ownerColumn = 'user_id';

    public static function create(): static
    {
        return new static();
    }

    public function setOwnerModel(string $ownerModel): self
    {
        $this->ownerModel = $ownerModel;

        return $this;
    }

    public function setOwnerColumn(string $ownerColumn): self
    {
        $this->ownerColumn = $ownerColumn;

        return $this;
    }
}
