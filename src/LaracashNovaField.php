<?php

namespace Nicko170\LaracashNovaField;

use Andriichuk\Laracash\Facades\Laracash;
use Laravel\Nova\Fields\Field;
use Money\Money;

class LaracashNovaField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'laracash-nova-field';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->displayUsing(fn(Money|null $value) => $value ? formatMoneyAsCurrency($value) : '')
            ->resolveUsing(fn(Money|null $value) => $value ? formatMoneyAsCurrency($value) : '')
            ->fillUsing(fn($request, $model, $attribute) => $model->$attribute = Laracash::parser()->parseIntlCurrency($request->$attribute));
    }
}
