<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditBook extends Component
{
    public Book $book;

    #[Validate('required', message: 'Title is required')]
    public $title;

    #[Validate('required', message: 'Author is required')]
    public $author;

    #[Validate('required')]
    public $rating;

    public function mount($book)
    {
        $this->book = $book;

        $this->title = $book->title;
        $this->author = $book->author;
        $this->rating = $book->rating;
    }

    public function update()
    {
        $this->validate();

        $this->book->update([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        flash()->success('Book Successfully Updated!');

        return $this->redirectRoute('book.list', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-book');
    }
}
