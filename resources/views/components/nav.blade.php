<div class="sticky top-0 bg-black" x-data="{ open: false}">
    <div class=" pt-9 pb-9">
        <div class="">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center sticky top-0" aria-label="Global">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">Workflow</span>
                                <img class="h-8 w-auto sm:h-10" id="logo"
                                     src="{{ asset('img/logo.png') }}" alt="">
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button" @click="open = !open"
                                        class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                        aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:flex md:space-x-10">
                        @foreach($items as $id => $item)
                        <a onclick="scrollWin({{ $id }})" href="#{{$id}}" class="font-medium text-white font-primary-color--hover">{{ $item }}</a>
                        @endforeach
                    </div>
                    <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    </div>
                </nav>
            </div>
            <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
                 x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                 x-description="Mobile menu, show/hide based on menu open state."
                 class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel"
                 @click.away="open = false" style="display: none;">
                <div class="absolute z-10 top-12 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md bg-black ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-end justify-end">
                            <div class="-mr-2">
                                <button type="button" @click="open = !open"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3">
                            @foreach($items as $id => $item)
                                <p class="text-center px-4 py-2">
                                    <a href="#{{$id}}" class="font-medium text-white font-primary-color--hover">{{ $item }}</a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
