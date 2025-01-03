<nav class="relative  z-10 shadow-lg border-b border-b-black/30 flex items-center flex-shrink-0 w-full h-16 px-10 bg-white bg-opacity-75">
   <svg class="w-8 h-8 text-indigo-600 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
   </svg>
   <input class="flex items-center h-10 px-4 ml-10 text-sm bg-gray-200 rounded-full focus:outline-none focus:ring" type="search" placeholder="Search for anything…">
   <div class="ml-auto flex items-center gap-6">
      <a class="font-semibold  text-gray-500 hover:text-indigo-700 <?= checkURL("/") || checkURL("/home") ? "text-indigo-700" : "" ?>" href="/">home</a>
      <?php if (User::isLoggedIn()) : ?>
         <a class="font-semibold text-gray-500 hover:text-indigo-700 <?= checkURL("/signup") ? "text-indigo-700" : "" ?>" href="/logout">logout</a>
      <?php else: ?>
         <a class="font-semibold text-gray-500 hover:text-indigo-700 <?= checkURL("/signup") ? "text-indigo-700" : "" ?>" href="/signup">signup</a>
         <a class="font-semibold text-gray-500 hover:text-indigo-700 <?= checkURL("/login") ? "text-indigo-700" : "" ?>" href="/login">login</a>
      <?php endif ?>
      <a href="/profile" class="ml-6 flex items-center justify-center w-8 h-8 overflow-hidden rounded-full cursor-pointer">
         <img src="https://assets.codepen.io/5041378/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1600304177&width=512" alt="">
      </a>
   </div>
</nav>