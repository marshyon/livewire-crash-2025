when checking out this repository, initially th project has no packages installed or `.env` so one has to be created and the dev server can be started

```bash
composer install
cp .env.example .env
sail -u -d
sail bash
```

for convenience, I have changed the app url in `.env` to be

```
APP_URL=http://laravel.test
```

having created an entry in `/etc/hosts` for this to resolve to localhost

in the running app shell crete a new application key

```bash
php artisan key:generate
```







