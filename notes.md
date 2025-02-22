to use livewire components as full pages like a laravel blade a layout needs to be created for the livewire component to use

```bash
php artisan livewire:layout
 LAYOUT CREATED  🤙

CLASS: resources/views/components/layouts/app.blade.php
```

this file has a slot, title and local defined out of the box

it is into this file now we need layout that was formerly in the welcome page laravel gave us when starting up the project

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <div>
            <h1>My Book Reviews</h1>
            <a @class(['active' => request()->is('/')]) href="/">
                Book List
            </a>
            <a @class(['active' => request()->is('create')]) href="/create">
                Add a Book
            </a>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
```

`web.php` needs to be updated to use the component we made in the earlier stage

```php
use App\Livewire\BookList;
use Illuminate\Support\Facades\Route;

Route::get('/', BookList::class);
```

which I find interesting as the 'function' that was there is replaced by a `BookList::class` which, without the above template being made and updated would not have known how to create a page as it needs a layout do to so

the file `resources/views/welcome.blade.php` can be removed as it is no longer in use

so using Laravel in the traditional sense of blade template files for the welcome page and embedding livewire components as we go is no more

this is a full page livewire page now