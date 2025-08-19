<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddBook extends Component
{
    #[Validate('required', message: 'Title is required')]
    public $title = '';

    #[Validate('required', message: 'Author is required')]
    public $author = '';

    #[Validate('required')]
    public $rating = 5;

    public function add()
    {
        $this->validate();

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        flash()->success('Book Successfully Added!');

        return $this->redirectRoute('book.list', navigate: true);
    }

    public function render()
    {
        return view('livewire.add-book');
    }
}
