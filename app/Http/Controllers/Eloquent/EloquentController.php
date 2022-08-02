<?php

namespace App\Http\Controllers\Eloquent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eloquent\Book;
use App\Models\Eloquent\Author;
use Illuminate\Support\Facades\DB;

class EloquentController extends Controller
{
    public function list()
    {

        $books = Book::with(['genre', 'author'])->paginate(10);

        // $books->toArray();

        return view('eloquent.list', ['books' => $books]);
    }
    public function show($id)
    {
        $book = Book::with(['genre', 'author'])->find($id)->toArray();

        return view('eloquent.show', ['id' => $id, 'book' => $book]);
    }
    public function bestsellers()
    {
        $books = Book::with(['genre', 'author'])->orderBy('score', 'desc')->limit(10)->get()->toArray();
        // dd($books);

        return view('eloquent.bestsellers', ['books' => $books]);
    }
    public function authors()
    {
        $authors = Author::with('book')->get()->toArray();


        // dd($authors);
        return view('eloquent.authors', ['authors' => $authors]);
    }
    public function promotions()
    {
        $booksSellOff = Book::with(['author', 'genre'])->where('author_id', 5)->get()->toArray();

        // dump($booksSellOff);
        // dd($booksSellOff);

        return view('eloquent.promotion', ['booksSellOff' => $booksSellOff]);
    }
}
