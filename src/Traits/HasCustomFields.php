<?php

namespace Vendor\AcfLaravel\Traits;

use Vendor\AcfLaravel\Models\CustomField;

trait HasCustomFields
{
    public function customFields()
    {
        return $this->morphMany(CustomField::class, 'model');
    }

    public function getCustomField(string $key, $default = null)
    {
        return $this->customFields()->where('key', $key)->value('value') ?? $default;
    }

    public function setCustomField(string $key, $value)
    {
        $this->customFields()->updateOrCreate(['key' => $key], ['value' => $value]);
    }
}