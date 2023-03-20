<?php

namespace Mnurullahsaglam\LaravelOwner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Mnurullahsaglam\LaravelOwner\Exceptions\InvalidOwnerIdException;
use Mnurullahsaglam\LaravelOwner\Exceptions\InvalidOwnerModelException;
use Mnurullahsaglam\LaravelOwner\Exceptions\UnauthorizedException;

trait HasOwner
{
    protected OwnerSettings $ownerSettings;

    public function getOwnerSettings(): OwnerSettings
    {
        return OwnerSettings::create();
    }

    protected static function bootHasOwner(): void
    {
        static::creating(function (Model $model) {
            $model->addOwnerId();
        });

        static::updating(function (Model $model) {
            $model->addOwnerId();
        });
    }

    protected function addOwnerId(): void
    {
        $this->ownerSettings = $this->getOwnerSettings();

        $this->ensureValidOwnerSettings();

        $this->{$this->ownerSettings->ownerIdColumn} = Auth::id();
    }

    /**
     * @throws UnauthorizedException
     * @throws InvalidOwnerModelException
     * @throws InvalidOwnerIdException
     */
    protected function ensureValidOwnerSettings(): void
    {
        if (! Auth::check()) {
            throw new UnauthorizedException();
        }

        if (! class_exists($this->ownerSettings->ownerModel)) {
            throw new InvalidOwnerModelException();
        }

        if (! Schema::hasColumn((new $this)->getTable(), $this->ownerSettings->ownerIdColumn)) {
            throw new InvalidOwnerIdException();
        }
    }

    public function owner(): BelongsTo
    {
        $this->ownerSettings = $this->getOwnerSettings();

        return $this->belongsTo($this->ownerSettings->ownerModel, $this->ownerSettings->ownerIdColumn);
    }
}
