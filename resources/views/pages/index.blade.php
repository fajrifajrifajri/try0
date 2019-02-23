@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="thumbnail row mb-md-4">
                <div class="thumbnail-header col-md-12 mt-md-5">
                    <h1>
                        Wonderful Indonesia
                    </h1>
                </div>
                <div class="col-md-10">
                    <img src="{{asset('img/wonderful-indonesia.png')}}" 
                    class="thumbnail-img" alt="Wonderful Indonesia">
                </div>
                <div class="thumbnail-posted-in col-md-12">
                    Posted in: <a href="/">Blog</a>
                </div>
                <div class="thumbnail-p col-md-6 ">
                        An early spring morning I woke up with feelings of dizziness. 
                        A feeling I dread very much. I just remember how I struggled to 
                        stop my worst habit of playing Mobile games at midnight, good thing 
                        my roommate gave me...
                </div>
                <div class="thumbnail-button col-md-12 ">
                    <a href="/p/wonderful-indonesia">
                        Keep Reading
                    </a>
                </div>
            </div>
            <div class="thumbnail row mb-md-4">
                <div class="thumbnail-header col-md-12 mt-md-5">
                    <h1>
                        It's a blog! or is it?
                    </h1>
                </div>
                <div class="col-md-10">
                    <img src="{{asset('img/blog.jpg')}}" 
                    class="thumbnail-img" alt="Wonderful Indonesia">
                </div>
                <div class="thumbnail-posted-in col-md-12">
                    Posted in: <a href="/">About Me</a>
                </div>
                <div class="thumbnail-p col-md-6 ">
                    Okay, so this is my first ever blog. I'm still confused what to write,
                    I loved journey, and I'm about to start one maybe in the next months (or year?),
                    Maybe when I'm not busy... (I hope so)
                </div>
                <div class="thumbnail-button col-md-12 ">
                    <a href="#">
                        No keep reading! Maybe later...
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection