# Laravel Auditable

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel Auditable is a simple Laravel auditing package for your Eloquent Model.
This package automatically inserts/updates an audit log on your table on who created and last updated the record.

## Install via Composer
``` bash
$ composer require yajra/laravel-auditable
```

## Usage
Update your model's migration and add `created_by` and `updated_by` field.
```php
Schema::create('users', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 100);
    $table->integer('created_by')->index();
    $table->integer('updated_by')->index();
    $table->timestamps();
});
```

Then use `AuditableTrait` on your model.

``` php
namespace App;

use Yajra\Auditable\AuditableTrait;

class User extends Model
{
    use AuditableTrait;
}
```

And your done! The package will now automatically add a basic audit log for your model to track who inserted and last updated your records.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email aqangeles@gmail.com instead of using the issue tracker.

## Credits

- [Arjay Angeles][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/yajra/laravel-auditable.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/yajra/laravel-auditable/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/yajra/laravel-auditable.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/yajra/laravel-auditable.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yajra/laravel-auditable.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yajra/laravel-auditable
[link-travis]: https://travis-ci.org/yajra/laravel-auditable
[link-scrutinizer]: https://scrutinizer-ci.com/g/yajra/laravel-auditable/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/yajra/laravel-auditable
[link-downloads]: https://packagist.org/packages/yajra/laravel-auditable
[link-author]: https://github.com/yajra
[link-contributors]: ../../contributors
