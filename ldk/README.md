# LDK

This repository contains a small Laravel 13 application. It was refreshed from the original Laravel 5.1 starter project to remove unsupported and vulnerable dependencies. The only application route is `/`.

## Requirements

- PHP 8.3 or newer with the extensions required by Laravel
- Composer 2
- SQLite (default), or another database configured in `.env`

## Local setup

```sh
cd ldk
composer install
cp .env.example .env
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate
php artisan serve
```

Run `composer test` for the test suite and `composer audit --locked` to check the dependency lockfile against current security advisories. Keep `composer.lock` committed when updating dependencies. The old Gulp/Elixir frontend build was removed because the landing page does not use it.

## Existing installations

This is a major upgrade from Laravel 5.1 and requires PHP 8.3 or newer on the server. Review the old `.env` settings before deployment: several configuration names and defaults changed, and the current starter migrations differ from the 2014 migrations. Back up and migrate any existing application database deliberately instead of running the new starter migrations against it without review.
