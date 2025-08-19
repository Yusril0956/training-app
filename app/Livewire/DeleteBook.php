<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class DeleteBook extends Component
{
    public Book $book;

    public function mount($book)
    {
        $this->book = $book;

        $this->book->delete();

        flash()->success('Book Successfully Deleted');

        return $this->redirectRoute('book.list', navigate: true);
    }

    public function render()
    {
        return view('livewire.delete-book');
    }
}
