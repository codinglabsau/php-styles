# PHP Styles

A PHP-CS-Fixer ruleset to share across projects, inspired by this [Tim MacDonald article](https://laravel-news.com/sharing-php-cs-fixer-rules-across-projects-and-teams).

## Installation
Via Composer

``` bash
$ composer require codinglabsau/php-styles
```

## Usage
Create a .php_cs.dist that looks like this:

```php
$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ]);

return CodingLabs\styles($finder);
```

Note the second argument for `styles` is an array of [rules](https://mlocati.github.io/php-cs-fixer-configurator/) to override the defaults. 

Do a dry run like this (handy for CI): 
`./vendor/bin/php-cs-fixer --dry-run`

And do a proper fix like this: 
`./vendor/bin/php-cs-fixer fix`

## Contributing
This package opinionated to our preferred code style at Coding Labs and subject to change, so use with caution!

## Credits
- [Steve Thomas](https://github.com/stevethomas)
- [All Contributors](../../contributors)

## License
MIT. Please see the [license file](LICENSE.md) for more information.

## About Coding Labs
Coding Labs is a web app development agency based on the Gold Coast, Australia. See our open source projects [on our website](https://codinglabs.com.au/open-source).
