<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{
    public $term = '';

    public function delete(Book $book)
    {
      $book->delete();
    }

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
