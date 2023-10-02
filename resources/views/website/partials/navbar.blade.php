<div class="w-32 z-10 flex grow flex-col gap-y-5 overflow-y-auto bg-green-600 rounded-xl px-6 py-6 fixed top-1/2 right-8 transform -translate-y-1/2">
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <li>
                        <!-- Current: "bg-green-700 text-white", Default: "text-green-200 hover:text-white hover:bg-green-700" -->
                        <x-home-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            <x-heroicon-o-home class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link>
                            <x-heroicon-o-folder class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link>
                            <x-heroicon-o-folder class="h-6 w-6" />
                        </x-home-nav-link>
                    </li>
                    <li>
                        <x-home-nav-link>
                            <x-feathericon-mail class="h-6 w-6" />
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
