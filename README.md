# Laravel Owner

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mnurullahsaglam/laravel-owner.svg?style=flat-square)](https://packagist.org/packages/mnurullahsaglam/laravel-owner)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mnurullahsaglam/laravel-owner/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mnurullahsaglam/laravel-owner/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mnurullahsaglam/laravel-owner/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mnurullahsaglam/laravel-owner/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mnurullahsaglam/laravel-owner.svg?style=flat-square)](https://packagist.org/packages/mnurullahsaglam/laravel-owner)

This is a simple package to add owner foreign id to models with a trait.

## Installation

You can install the package via composer:

```bash
composer require mnurullahsaglam/laravel-owner
```

## Usage

- Add `HasOwner` trait to your model.

By default, the owner model is `App\Models\User` and the owner key is `user_id`. If you want to change these values, you can override them in your model.

```php
use Illuminate\Database\Eloquent\Model;
use Mnurullahsaglam\LaravelOwner\HasOwner;
use Mnurullahsaglam\LaravelOwner\OwnerSettings;

class Post extends Model
{
    use HasOwner;

    public function getOwnerSettings(): OwnerSettings
    {
        return OwnerSettings::create()
            ->setOwnerModel(App\Models\Owner::class)
            ->setOwnerKey('owner_id');
    }
}
```

You can access the owner model with `owner` relationship.

```php
$post = Post::find(1);

return $post->owner;
```

## Testing

```bash
composer test
```

## Credits

- [Mehmet Nurullah Sağlam](https://github.com/mnurullahsaglam)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
