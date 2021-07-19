# laracash-nova-field

A Laravel Nova field for Laracash (https://github.com/andriichuk/laracash)

## Installation

Use [composer](https://getcomposer.org/) to install.

```bash
composer require nicko170/laracash-nova-field
```

## Usage

```php
<?php

namespace App\Nova;

use Nicko170\LaracashNovaField\LaracashNovaField;

class Invoice extends Resource
{
    public function fields(Request $request): array
    {
        return [
            ID::make(__('id'), 'id')->sortable()->readonly(true),
            Text::make(__('Invoice'), 'number')->sortable()->readonly(true),
            LaracashNovaField::make(__('Total'), 'total'),
            LaracashNovaField::make(__('Due'), 'amount_due')
        ];
    }
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[GNU GPLv3](https://choosealicense.com/licenses/mit/)
