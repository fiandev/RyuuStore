<nav class="z-10 w-full top-0 fixed flex items-center gap-4 py-2 px-4 bg-main-600 dark:bg-slate-800">
  <div class="flex gap-2 items-center">
    <button id="toggle-sidenav" class="w-8 h-8 flex items-center justify-center">
      <i class="text-xl fa fa-bars p-2 text-slate-100 dark:text-main-600"></i>
    </button>
    <h1 class="text-xl sm:w-fit">RyuuStore</h1>
  </div>

  <div class="flex gap-2 items-center w-full justify-end">
    <div class="group/search hover:bg-white hidden lg:flex flex-row-reverse items-center justify-end gap-2 text-main-600 w-fit h-fit">
      <label for="search" class="w-8 h-8 group-hover/search:p-0 bg-white text-main-600 flex items-center justify-center rounded-full">
        <i class="text-lg fa fa-search flex items-center justify-center p-4"></i>
      </label>
      <input placeholder="cari di {{ env("APP_NAME") }}..." id="search" name="q" type="text" class="bg-white transition-ease-in w-0 focus:px-2 focus:w-full outline-0 border-0 hover:outline-0 hover:border-0">
    </div>
    
    <div class="dropdown px-2 flex flex-col justify-center text-lg w-fit h-8 bg-main-600 bg-white text-main-600 rounded-full">
      <div class="dropdown-toggle flex items-center justify-center gap-2">
        @can("auth")
          <i class="fa fa-user"></i>
          <i class="fa fa-caret-down"></i>
        @else
          <a href="/login" class="flex items-center gap-2">
            <span class="text-xs uppercase">sign in</span>
            <i class="fa fa-sign-in"></i>
          </a>
        @endcan
      </div>
      @can("auth")
        <ul class="dropdown-content bg-main-600 text-white text-end flex flex-col right-[5%] top-[100%]">
          <a class="dropdown-item">
           <i class="fi fi-id"></i>
           Indonesia
          </a>
        </ul>
      @endcan
      <div class="dropdown-shadow"></div>
    </div>
    
    <div class="dropdown flex flex-col justify-center text-lg w-16 h-8 bg-main-600 bg-white text-main-600 rounded-full">
      <div class="dropdown-toggle flex items-center justify-center gap-4">
        <i class="fa fa-flag"></i>
        <i class="fa fa-caret-down"></i>
      </div>
      <ul class="dropdown-content bg-main-600 text-white text-end flex flex-col right-[5%] top-[100%]">
        <a class="dropdown-item">
         <i class="fi fi-id"></i>
         Indonesia
        </a>
        <a class="dropdown-item">
         <i class="fi fi-us"></i>
         English
        </a>
      </ul>
      <div class="dropdown-shadow"></div>
    </div>
    
  </div>
</nav>

