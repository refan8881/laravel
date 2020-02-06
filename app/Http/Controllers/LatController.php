<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Book;

class LatController extends Controller
{
    public function Barang()
    {

        $barang = Barang::all()->take(5);
        return view('barang.index', compact('barang'));
    }
    public function Buku()
    {
        $book = Book::all();
        return view('book.index', compact('book'));
    }
}
