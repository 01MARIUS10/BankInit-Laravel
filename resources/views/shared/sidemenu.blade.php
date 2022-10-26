<nav class="d-flex justify-content-center m-2 py-2">
    <a class="navbar-brand d-flex justify-content-between align-items-center mx-0 w-75" href="#">
        <svg xmlns="http://www.w3.org/2000/svg"
        width="60" height="60" fill="currentColor" class="bi bi-bank2"
        viewBox="0 0 16 16">
            <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"></path></svg>
        <span class="display-6 ">Bank</span>

    </a>
</nav>
<div class="navbar-nav align-items-center mx-2 mt-5">
    <a class="nav-item nav-link m-2 w-100 bg-dark border border-light text-white text-center @if(Route::is('/pret/index'))  active" @else " href="{{url('/pret')  }}"  @endif >Home</a>
    <a class="nav-item nav-link m-2 w-100 border border-dark text-dark text-center @if(Route::is('/pret/create')) active" @else " href="{{url('/pret/new')  }}" @endif >add new pret</a>
    {{-- <a class="nav-item nav-link m-2 w-100 border border-dark text-dark text-center @if(Route::is('/edit/{id}')) active" @else  }}" href="#" @endif ></a>
    <a class="nav-item nav-link m-2 w-100 border border-dark text-dark text-center @if(Route::is('page3')) active" @else " href="{{route('page3')}}" @endif >page3</a> --}}
</div>
