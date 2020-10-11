<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookApiController extends Controller
{
  public function getAllBook()
  {
    $books = Book::all();
    return response() -> json($books);
  }
  public function getIdBook() {

    $books = Book::where('id', '>', 20) -> get();
    return response() -> json($books);

  }

}
