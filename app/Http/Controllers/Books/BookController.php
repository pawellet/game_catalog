<?php

declare(strict_types=1);

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function list(Request $request)
    {
        $request->session()->flash('status', 'Task was successful!');
        $session = $request->session();

        $books = DB::table('books')
            ->select('books.id', 'books.title', 'books.author_id', 'books.genre_id', 'books.school_lecture', 'books.year_of_publish', 'books.publisher', 'books.score', 'books.language', 'books.isnew', 'books.description', 'genres.name', 'authors.first_name', 'authors.last_name', 'authors.nationality', 'authors.info')
            ->join('genres', 'books.genre_id', '=', 'genres.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->paginate(15);

        // dd($books);

        return view('books.list', ['session' => $session, 'books' => $books]);
    }

    public function dashboard(Request $request)
    {
        $session = $request->session();

        return view('books.dashboard', ['session' => $session]);
    }
    public function bestsellers()
    {

        $books = DB::table('books')
            ->select('books.id', 'books.title', 'books.author_id', 'books.genre_id', 'books.school_lecture', 'books.year_of_publish', 'books.publisher', 'books.score', 'books.language', 'books.isnew', 'books.description', 'genres.name', 'authors.first_name', 'authors.last_name', 'authors.nationality', 'authors.info')
            ->join('genres', 'books.genre_id', '=', 'genres.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->orderBy('score', 'desc')->limit(10)->get();

        // dd($books);

        return view('books.bestsellers', ['books' => $books]);
    }
    public function show(int $id)
    {
        $bookInfo = DB::table('books')
            ->select('books.id', 'books.title', 'books.year_of_publish', 'books.publisher', 'books.language', 'books.isnew', 'books.description', 'genres.name', 'authors.first_name', 'authors.last_name')
            ->join('genres', 'books.genre_id', '=', 'genres.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->where('books.id', $id)
            ->get();
        // dd($bookInfo, $id);

        return view('books.show', ['bookInfo' => $bookInfo, 'id' => $id]);
    }
    public function promotion()
    {
        $booksSellOff = DB::table('books')
            ->select('books.id', 'books.title', 'books.description', 'books.publisher', 'books.year_of_publish', 'books.language', 'books.isnew', 'genres.name', 'authors.first_name', 'authors.last_name')
            ->join('genres', 'books.genre_id', '=', 'genres.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->where('authors.id', 2)
            ->paginate(10);
        // dd($booksSellOff);

        return view('books.promotion', ['booksSellOff' => $booksSellOff]);
    }
}
