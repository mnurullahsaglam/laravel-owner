<?php

namespace Mnurullahsaglam\LaravelOwner;

class OwnerSettings
{
    public string $ownerModel = 'App\Models\User';

    public string $ownerIdColumn = 'user_id';

    /**
     * @return $this
     */
    public static function create(): static
    {
        return new static();
    }

    public function setOWnerModel(string $ownerModel): self
    {
        $this->ownerModel = $ownerModel;

        return $this;
    }

    /**
     * @param string $ownerIdColumn
     * @return $this
     */
    public function setOwnerColumn(string $ownerIdColumn): self
    {
        $this->ownerIdColumn = $ownerIdColumn;

        return $this;
    }
}
