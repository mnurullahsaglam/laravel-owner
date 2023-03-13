<?php

namespace Mnurullahsaglam\LaravelOwner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Mnurullahsaglam\LaravelOwner\Exceptions\InvalidSetting;

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

    protected function ensureValidOwnerSettings(): void
    {
        if (! Auth::check()) {
            throw InvalidSetting::unauthorized();
        }

        if (! class_exists($this->ownerSettings->ownerModel)) {
            throw InvalidSetting::invalidOwnerModel();
        }

        if (! in_array($this->ownerSettings->ownerIdColumn,
            $this->getConnection()->getSchemaBuilder()->getColumnListing('test_posts'))) {
            throw InvalidSetting::invalidOwnerIdColumn();
        }
    }

    public function owner(): BelongsTo
    {
        $this->ownerSettings = $this->getOwnerSettings();

        return $this->belongsTo($this->ownerSettings->ownerModel, $this->ownerSettings->ownerIdColumn);
    }
}
