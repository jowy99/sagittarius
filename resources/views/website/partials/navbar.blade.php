<div class="hidden w-32 z-10 sm:flex grow flex-col gap-y-5 overflow-y-auto bg-green-600 rounded-xl px-6 py-6 fixed top-1/2 right-8 transform -translate-y-1/2">
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <li>
                        <!-- Current: "bg-green-700 text-white", Default: "text-green-200 hover:text-white hover:bg-green-700" -->
                        <x-home-nav-link :href="route('web.home')" :active="request()->routeIs('web.home')">
                            <x-heroicon-o-home class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link :href="route('web.dev')" :active="request()->routeIs('web.dev')">
                            <x-heroicon-o-folder class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link :href="route('web.projects')" :active="request()->routeIs('web.projects')">
                            <x-heroicon-o-folder class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link :href="route('web.aboutme')" :active="request()->routeIs('web.aboutme')">
                            <x-radix-person class="w-6 h-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link :href="route('web.contact')" :active="request()->routeIs('web.contact')">
                            <x-feathericon-mail class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link :href="route('web.opinions')" :active="request()->routeIs('web.opinions')">
                            <x-far-comment class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link :href="route('crm.crm')" :active="request()->routeIs('crm.crm')">
                            <x-akar-dashboard class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<!-- Responsive -->

<div class="sm:hidden fixed top-0 right-0 sm:left-0 p-6 text-right z-10 md:w-32 flex md:grow md:flex-col md:gap-y-5 md:bg-green-600 md:rounded-xl md:px-6 md:py-6 md:fixed md:top-1/2 md:right-8 md:transform md:-translate-y-1/2">
    <div class="flex items-center ml-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-green-500 hover:text-green-400 dark:hover:text-green-300 focus:outline-none transition ease-in-out duration-150">
                    <x-radix-hamburger-menu class="w-6 h-6" />
                </button>
            </x-slot>

            <x-slot name="content">
                <x-home-nav-link :href="route('web.home')" :active="request()->routeIs('web.home')">
                    <x-heroicon-o-home class="h-6 w-6" />
                </x-home-nav-link>

                <x-home-nav-link :href="route('web.dev')" :active="request()->routeIs('web.dev')">
                    <x-heroicon-o-folder class="h-6 w-6" />
                </x-home-nav-link>

                <x-home-nav-link :href="route('web.projects')" :active="request()->routeIs('web.projects')">
                    <x-heroicon-o-folder class="h-6 w-6" />
                </x-home-nav-link>

                <x-home-nav-link :href="route('web.aboutme')" :active="request()->routeIs('web.aboutme')">
                    <x-radix-person class="w-6 h-6" />
                </x-home-nav-link>

                <x-home-nav-link :href="route('web.contact')" :active="request()->routeIs('web.contact')">
                    <x-feathericon-mail class="h-6 w-6" />
                </x-home-nav-link>

                <x-home-nav-link :href="route('web.opinions')" :active="request()->routeIs('web.opinions')">
                    <x-far-comment class="h-6 w-6" />
                </x-home-nav-link>

                <x-home-nav-link :href="route('crm.crm')" :active="request()->routeIs('crm.crm')">
                    <x-akar-dashboard class="h-6 w-6" />
                </x-home-nav-link>
            </x-slot>
        </x-dropdown>
    </div>
</div>
