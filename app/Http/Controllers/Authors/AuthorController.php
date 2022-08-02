<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function list()
    {
        $authors = DB::table('authors')->select('authors.first_name', 'authors.last_name', 'authors.nationality', 'authors.info', 'books.author_id', DB::raw('count(books.author_id) as total'))->leftJoin('books', 'authors.id', '=', 'books.author_id')->groupBy('authors.id')->get();

        // dd($authors);
        // ->select('user_id', DB::raw('SUM(points) as total_points'))

        return view('authors.list', ['authors' => $authors]);
    }
}
