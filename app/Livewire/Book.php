<?php

namespace App\Livewire;

use App\Models\Book as BookModel;
use Livewire\Component;
use Livewire\WithPagination;

class Book extends Component
{
    use WithPagination;

    public $rowsPerPage = 5;
    public $rowsPerPageOptions = [5, 10, 20];
    public $search = '';

    public function render()
    {
        $books = [];

        if (!empty($this->search)) {
            $lowerCaseSearch = strtolower($this->search);

            $books = BookModel::whereRaw("LOWER(n_title) like '%{$lowerCaseSearch}%'")
                ->orWhereRaw("LOWER(n_author) like '%{$lowerCaseSearch}%'")
                ->orWhereRaw("LOWER(i_rating) like '%{$lowerCaseSearch}%'")
                ->orderBy('d_entry', 'desc')
                ->paginate($this->rowsPerPage);
        } else {
            $books = BookModel::orderBy('d_entry', 'desc')->paginate($this->rowsPerPage);
        }

        return view('livewire.book', [
            'books' => $books
        ]);
    }
}
