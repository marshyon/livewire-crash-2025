validation is trivial to add in livewire and I would say if we're looking for a reason to use livewire and for that matter laravel as a framework this is one good reason of many

```php
@error('title')
      <div class="error">{{ $message }}</div>
@enderror
```

this blade template markup conditionally shows an error if there is one

in the model for create book the followng rules are added that themselves call upon `Livewire\Attributes\Rule`

```php
    #[Rule('string|required|min:3|max:50')]
    public $title;

    #[Rule('string|required|min:3|max:50')]
    public $author;

    #[Rule('integer|required|min:1|max:10')]
    public $rating;

    public function save()
    {
      $this->validate();

      ...
```

and the `validate()` method invokes tis on save

