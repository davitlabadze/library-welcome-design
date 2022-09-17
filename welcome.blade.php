@extends('layouts.frontLayout')
@section('content')
<div class="mt-12">
    <nav class="flex justify-between px-24">
        <h1 class="text-3xl font-black">E-Library</h1>
        @auth
        <div class="flex space-x-5" x-data="{ open: false }">
            <div class="mt-2 text-white">
                <img src="{{ asset('image/bookmark.svg') }}" class="w-6 h-6 text-white" alt="">
            </div>
            <img @click="open = !open" src="{{ asset('image/avatar.jpg') }}"
                class="w-10 h-10 text-center rounded-full cursor-pointer" alt="avatar">

            <span class="absolute items-center p-3 mt-12 text-sm font-medium text-center bg-white rounded-xl"
                x-show="open">
                @can('admin')
                <a href="{{ route('dashboard') }}"
                    class="block w-full px-4 py-2 text-sm leading-5 text-orange-400 transition duration-150 ease-in-out bg-white hover:bg-orange-400 hover:text-white ">Dashboard</a>
                @endcan
                <a href="{{ route('profile') }}"
                    class="block w-full px-4 py-2 text-sm leading-5 text-orange-400 transition duration-150 ease-in-out bg-white hover:bg-orange-400 hover:text-white ">Profile</a>
                <button x-date="{}" @click.prevent="document.querySelector('#signout-form').submit()"
                    class="block w-full px-4 py-2 text-sm leading-5 text-orange-400 transition duration-150 ease-in-out bg-white hover:bg-orange-400 hover:text-white">
                    Log Out </button>
                <form id="signout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </span>
        </div>

        @endauth
        @guest
        <div>
            <a href="{{ route('login') }}"
                class="p-3 text-orange-500 border border-orange-500 rounded-3xl hover:text-white hover:bg-orange-500">
                Log In
            </a>
        </div>
        @endguest
    </nav>
</div>


<div class="container mx-auto mt-10 text-center rounded-t-3xl bg-orange-50">
    <div class="flex justify-center text-center ">
        <button class="flex px-10 py-3 mt-6 border border-orange-400 border-1 hover:bg-orange-400 rounded-3xl">
            <img src="{{ asset('image/book.png') }}" class="w-6 h-6" alt="">
            <a href="{{ url('/books') }}" class="ml-2">Books</a>
        </button>
    </div>
    <div class="grid grid-cols-3">
        <div class="mt-40">
            <h1 class="text-7xl">New & Trending</h1>
            <p class="mt-4 text-gray-400">Explorer new worlds from authors</p>
            <input type="search" name="search" id="search" placeholder="Title, author, or topics"
                class="p-4 px-12 mt-6 bg-no-repeat shadow-md outline-none bg-left-1 bg-search rounded-3xl" />
        </div>
        <div>
            <img src="{{ asset('image/5.jpeg') }}"
                class="translate-y-10 ml-20 w-96 mt-12 shadow-[20px_0px_20px_rgba(0,0,0,0.3)]" alt="">
        </div>
        <div class="p-36">
            <div class="w-56 p-4 bg-orange-300 shadow-xl h-96 rounded-2xl">
                <h1>Leo Tolstoy</h1>
                <h1>Collection</h1>
                <p class="mt-2 text-stone-600">67 book</p>
                <img src="{{ asset('image/LeoTolstoy.jpeg') }}" class=" mt-11" alt="">
            </div>

        </div>
    </div>

</div>
<div class="bg-stone-200  ml-20 h-12 w-11/12
    border-l-[110px] border-l-orange-100
    border-b-[50px] border-b-transparent
    border-r-[110px] border-r-orange-100
    "></div>
<div class="z-50 w-11/12 h-4 ml-20 bg-white rounded "></div>

<div class="container mx-auto mb-12 bg-orange-50 rounded-b-3xl">

    <div class="w-full h-12 opacity-90 -z-20 bg-gradient-to-b from-gray-400 blur-sm"></div>

    <div class="absolute flex text-xl -rotate-90 mt-36">Recent Bestsellers</div>
    <div class="grid grid-cols-3 mt-12 mb-12 text-center ">
        <div class="grid grid-cols-2 mb-12 ">
            <img src="{{ asset('image/4.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
            <div class="relative">
                <h1>A Game of THRONES</h1>
                <p class="mt-2 text-gray-400">GEORGE R.R MARTIN</p>
                <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Subscribe</button>
            </div>
        </div>
        <div class="grid grid-cols-2 mb-12 ">
            <img src="{{ asset('image/1.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
            <div class="relative">
                <h1>Harry Potter: and the Chamber of secrets</h1>
                <p class="mt-2 text-gray-400">J.K ROWLING</p>
                <p class="w-16 mt-2 ml-24 text-white bg-red-500 rounded-md">Busy</p>
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Bookmark</button>
            </div>
        </div>
        <div class="grid grid-cols-2 mb-12">
            <img src="{{ asset('image/2.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
            <div class="relative">
                <h1>The OPPOSITE of Fate hardcover</h1>
                <p class="mt-2 text-gray-400">AMY TAN</p>
                <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Subscribe</button>
            </div>
        </div>
    </div>
</div>
@endsection
