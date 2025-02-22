there is a missing page now for a link created in the top of the page in the last stage

this can be created with

```bash
sail artisan make:livewire create-book
 COMPONENT CREATED  🤙

CLASS: app/Livewire/CreateBook.php
VIEW:  resources/views/livewire/create-book.blade.php
```

some simple markup is added, see the above and commented out is the following showing how different layout files could be used for each model, so in `CreatteBook` :

```php
// #[Layout('components.layouts.second')]
public function render()
{
   return view('livewire.create-book');
}
```

it could have used a second layout. This file must exist where the default one does cuxrrently

```bash
resources/views/components/layouts
├── app.blade.php
└── second.blade.php
```

but we wont use it, its there to see how this could be done