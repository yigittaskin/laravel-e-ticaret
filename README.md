# E-Ticaret

### Installation //Kurulum

Laravel v9

Install the dependencies and devDependencies and start the server. //Bağımlılıkları yükleyin.

```sh
$ cd e-ticaret-web-prog
$ composer install
$ npm install
```

Create .env file from .env.example than:

```sh
$ php artisan generate:key
```

### Run

You can start the localhost with this code.

```sh
$ php artisan serve
$ npm run watch
```

### For PhpStorm IDE_HELPER

```sh
$ composer require --dev barryvdh/laravel-ide-helper
$ php artisan clear-compiled
$ php artisan ide-helper:generate
$ php artisan optimize
$ php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config
$ php artisan ide-helper:models OR $ php artisan ide-helper:models "App\Models\Post"
```
