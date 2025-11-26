 <nav class="bg-gray-800/50">
   <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
     <div class="flex h-16 items-center justify-between">
       <div class="flex items-center">
         <div class="shrink-0">
           <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
         </div>
         <div class="hidden md:block">
           <div class="ml-10 flex items-baseline space-x-4">
             <a href="/" class="<?= urlIs('/') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Home</a>
             <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
             <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
             <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>
           </div>
         </div>
       </div>

       <div class="hidden md:block">
         <div class="ml-4 flex items-center md:ml-6">
           <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
             <span class="absolute -inset-1.5"></span>
             <span class="sr-only">View notifications</span>
             <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
               <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
             </svg>
           </button>
         </div>
       </div>
     </div>
   </div>
 </nav>