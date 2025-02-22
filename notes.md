we have single page components but there is potential for optimising the first one that has a `<haeader>` section in it that could be used else where

a new component can be created with

```bash
sail artisan make:livewire page-header
 COMPONENT CREATED  🤙

CLASS: app/Livewire/PageHeader.php
VIEW:  resources/views/livewire/page-header.blade.php
```

the content from the header section is added and a `$name` variable added to the model

it is then included into the book list template useing

```php
   <livewire:page-header>
```

