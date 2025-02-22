a function is added to handle a delete in each row

`wire:key` is of note as this is how items are indexed in the dom

delete gets the id passed in order to delete, as in normal blade templates


```html
    <ul class="list">
        @foreach ($books as $book)
            <li wire:key="{{ $book->id }}">
                <button wire:click="delete({{ $book->id }})">
                    Delete
                </button>
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <p>Rating: {{ $book->rating }}/10</p>
            </li>
        @endforeach
    </ul>
````

in the model file `BookList.php`

```php
    public function delete(Book $book)
    {
      $book->delete();
    }
```

a simple function here, nothing to see much

I suppose `$book->delete()` is of note as this is a benefit of having laravel eloquent to make this as simple as it is to read and implement