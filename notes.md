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

this project will already have livewire installed but a fresh laravel project will need this installed with

```bash
composer require livewire/livewire
```

when running, npm dependencies need added and the node dev server needs started

```bash
sail npm install
sail npm run dev
```

in order for any project to work with livewire, each blade file needs to have some augmentation

at the `<head>` element we need 

```html
    @livewireStyles
</head>
```

( so the livewireStyles directive is added)


also the end of the document and before the end of the body tag

```html
    @livewireScripts
</body>

</html>
```

we need the scripts directive

in-between, anywhere a livewire component is needed, we just need something like

```html
<livewire:counter />
```

there are a lot of things happeing with Larvel right now and we are on the eve of version 12 so things may change but the above can be found at

https://laravel-livewire.com/docs/2.x/quickstart

and it is here that is best to go back to at any rate to see if there are changes to this approach

for now, livewire is installed, larevel set up and I'm ready to take a look at the various parts of NetNinjas crash course for livewire ...