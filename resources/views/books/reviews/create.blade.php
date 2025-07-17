@extends('layouts.app')
@section('content')
<h1 class="mb-10 text-2xl">Add Review For {{$book->title}}</h1>
<form action="{{route('books.reviews.store',$book)}}" method="Post">
    @csrf
    <textarea name="review" id="review" required class="input mb-4"></textarea>
    <label for="review">Review</label>

    <select name="rating" id="rating" required class="input mb-4">
        <option value="">select a rating</option>
        @for($i=1;$i<=5;$i++)
         <option value="{{$i}}">{{$i}}</option>
         @endfor
    </select>
    <button type="submit" class="btn">Add Review</button>
</form>
@endsection