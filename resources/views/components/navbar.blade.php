  <!-- Navbar -->
  <!-- 
  <header>
      <a href="../html/index.html" class="logo"> <span> SDC</span> </a>

      
      <input type="checkbox" id="menu-toggle" >
      <label for="menu-toggle" class="menu-icon"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
          <path d="M4 5L20 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M4 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M4 19L20 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
        
      </label>
    
      <ul class="navbar">
        <li>
          <a href="/"> <span>Home</span></a>
        </li>
        <li>
          <a href="">Blogs</a>
        </li>

        <li>
          <a href="">Benefits</a>
        </li>
        <li>
          <a href="">Contact Us</a>
        </li>

       
      </ul>
</header> -->


  <!-- Navbar -->
  <nav class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <a href="/" class="text-xl font-bold">Test</a>
      <div class="flex space-x-4">
        <a href="/" class="hover:text-blue-500">Home</a>
        <a href="/#blogs" class="hover:text-blue-500">Blogs</a>
        <a href="#subscribe" class="hover:text-blue-500">Subscribe</a>
        @auth
          <a href="" class="nav-link"> {{auth()->user()->name}}</a>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" href="" class="hover:text-blue-500">Logout</button>
          </form>
          @else
          <a href="/register" class="hover:text-blue-500">Sign In</a>
          <a href="/login" class="hover:text-blue-500">Login</a>

        @endauth
      </div>
    </div>
  </nav>