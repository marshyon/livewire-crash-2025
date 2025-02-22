adding search is simple for single fields in the database with livewire

in the BookList model, `$term` is added as a public variable

then within the render function, a conditional based upon the value of $term is used to send back filtered results if the user has typed any values in the field

```php
class BookList extends Component
{
    public $term = '';
      .....
    public function render()
    {
        if ($this->term) {
          return view('livewire.book-list', [
            'books' => Book::where('title', 'like', '%' . $this->term . '%')->get()
          ]);
        }
        
        return view('livewire.book-list', [
          'books' => Book::all()
        ]);
    }
}
```

the book list component then has

```php
        {{-- search --}}
        <input type="text" wire:model.live.debounce.300ms="term" placeholder="Search for books..." class="search">
```

added such that these queries are pushed live to the server, debounced accordingly and in a very few lines o code we have search, real time query, data and content sync

amazing for so little code - livewire is here at its best in my view