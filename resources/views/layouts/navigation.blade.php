<nav x-data="{ open: false }" class="bg-white"> <!-- Removido border-b e definido bg-white -->
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center"> <!-- Adicionado items-center para alinhamento vertical -->
            <!-- Logo (Esquerda) -->
            <div class="shrink-0 flex items-center font-bold text-xl">
                <a href="{{ route('dashboard') }}" style="color: #000000">
                   BookShop
                </a>
            </div>

            <!-- Links Centralizados -->
            <div class="hidden sm:flex sm:items-center sm:space-x-8 "> <!-- Centralizado -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-black " style="color: #000000">
                    {{ __('Início') }}
                </x-nav-link>
                <x-nav-link :href="route('livros.index')" :active="request()->routeIs('livros.index')" class="text-black" style="color: #000000">
                    {{ __('Livros') }}
                </x-nav-link>
                <x-nav-link :href="route('editoras.index')" :active="request()->routeIs('editoras.index')" class="text-black" style="color: #000000">
                    {{ __('Editoras') }}
                </x-nav-link>
                <x-nav-link :href="route('estoques.index')" :active="request()->routeIs('estoque')" class="text-black" style="color: #000000">
                    {{ __('Estoque') }}
                </x-nav-link>
            </div>

            <!-- Menu do Usuário (Direita) -->
            <div class="flex items-center ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" style="color: white; background-color: #403a8d;">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="color: white">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-black" style="color: #000000">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-black" style="color: #000000">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-black hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out" style="color: #000000">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" style="color: #000000">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-black" style="color: #000000">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('livros.index')" :active="request()->routeIs('livros.index')" class="text-black" style="color: #000000">
                {{ __('Livros') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('editoras.index')" :active="request()->routeIs('editoras.index')" class="text-black" style="color: #000000">
                {{ __('Editoras') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('estoques.index')" :active="request()->routeIs('estoque')" class="text-black" style="color: #000000">
                {{ __('Estoque') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-black" style="color: #000000">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-black" style="color: #000000">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-black" style="color: #000000">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-black" style="color: #000000">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>