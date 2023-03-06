<?php

namespace Mnurullahsaglam\LaravelOwner;

class OwnerSettings
{
    public string $ownerModel = 'App\Models\User';

    public string $ownerIdColumn = 'user_id';

    public static function create(): static
    {
        return new static();
    }

    public function setOwnerModel(string $ownerModel): self
    {
        $this->ownerModel = $ownerModel;

        return $this;
    }

    /**
     * @return $this
     */
    public function setOwnerColumn(string $ownerIdColumn): self
    {
        $this->ownerIdColumn = $ownerIdColumn;

        return $this;
    }
}
