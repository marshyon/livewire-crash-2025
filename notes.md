
navigation can be made a bit quicker in livewire 

```php
$this->redirect('/', navigate: true);
```

this uses [wire:navigate a part of redirects]([      $this->redirect('/', navigate: true);](https://livewire.laravel.com/docs/navigate#redirects) in livewire

links themselves in templates are modified to look something like

```php
<a wire:navigate @class(['active' => request()->is('/')]) href="/">
      Book List
</a>
```

so, just `wire:navigate` here added

that is pretty much it

now, page reloads will be replaced by in place updates as required

I believe this works in a similar way to how ruby on rails hotwire but dont quote me on that

the way I understand this is that laravel, livewire and alpinejs all work in sync to refresh only the inline html / content that is needed at any one time and datas that are entered / enacted by the user similar

all this is worked out for us in the background quintessentially by magic

a lot of working, moving parts, spinning plates done for us 