@extends('frontend.index')
@section('main')

<form action="/uploadform" method="POST" enctype="multipart/form-data">
@csrf
    <h1>Sign Up</h1>

    <fieldset>

      <legend><span class="number">1</span> Your basic info</legend>

      <label for="book_name">Book Name:</label>
      <input type="text" id="book_name" name="book_name">

      <label for="author">Author:</label>
      <input type="text" id="author" name="author">

      <label for="pdf_book">Book:</label>
      <input type="file" id="pdf_book" name="pdf_book">

    </fieldset>

    <button type="submit">Upload</button>

  </form>


@endsection
