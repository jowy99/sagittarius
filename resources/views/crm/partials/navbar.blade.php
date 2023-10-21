<div class="hidden md:flex min-h-screen grow flex-col gap-y-5 overflow-y-auto bg-green-700 dark:bg-green-800 px-6 z-10">
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-2">
                    <li>
                        <!-- Current: "bg-green-700 text-white", Default: "text-green-200 hover:text-white hover:bg-green-700" -->
                        <x-nav-link :href="route('web.home')">
                            <x-heroicon-o-home class="h-6 w-6" />
                            Home
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.crm')" :active="request()->routeIs('crm.crm')">
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit home
                                </x-nav-link>
                            </li>
                        </ul>
                    </li>

                    <hr>

                    <li>
                        <x-nav-link :href="route('web.dev')">
                            <x-heroicon-o-folder class="h-6 w-6" />
                            Dev projects
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.add-dev')" :active="request()->routeIs('crm.add-dev')">
                                    <x-ri-add-fill class="h-6 w-6" />
                                    Add dev projects
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('crm.list-dev')" :active="request()->routeIs('crm.list-dev')">
                                    <x-tabler-list class="h-6 w-6" />
                                    Dev projects list
                                    <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">
                                        @php
                                            $devModel = resolve(\App\Models\devs::class);
                                            $devCount = $devModel->count();
                                        @endphp
                                        {{ $devCount }}
                                    </span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </li>

                    <hr>

                    <li>
                        <x-nav-link :href="route('web.projects')">
                            <x-heroicon-o-folder class="h-6 w-6" />
                            Projects
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.add-proj')" :active="request()->routeIs('crm.add-proj')">
                                    <x-ri-add-fill class="h-6 w-6" />
                                    Add other projects
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('crm.list-proj')" :active="request()->routeIs('crm.list-proj')">
                                    <x-tabler-list class="h-6 w-6" />
                                    Projects list
                                    <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">
                                        @php
                                            $projModel = resolve(\App\Models\projects::class);
                                            $projCount = $projModel->count();
                                        @endphp
                                        {{ $projCount }}
                                    </span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </li>

                    <hr>

                    <li>
                        <x-nav-link :href="route('web.aboutme')">
                            <x-radix-person class="w-6 h-6" />
                            About me
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.edit-abtme')" :active="request()->routeIs('crm.edit-abtme')">
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit about me
                                </x-nav-link>
                            </li>
                        </ul>
                    </li>

                    <hr>

                    <li>
                        <x-nav-link :href="route('web.contact')">
                            <x-feathericon-mail class="h-6 w-6" />
                            Contact
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link>
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit contact
                                </x-nav-link>
                            </li>
                        </ul>
                    </li>

                    <hr>

                    <li>
                        <x-nav-link :href="route('web.opinions')">
                            <x-far-comment class="w-6 h-6" />
                            Opinions
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.opinions')" :active="request()->routeIs('crm.opinions')">
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit opinions
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('crm.opinions-export')" :active="request()->routeIs('crm.opinions-export')">
                                    <x-bytesize-export class="h-6 w-6" />
                                    Export opinions
                                    <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">
                                        @php
                                            $opModel = resolve(\App\Models\opinions::class);
                                            $opCount = $opModel->count();
                                        @endphp
                                        {{ $opCount }}
                                    </span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<!-- Responsive -->

<div class="sm:hidden fixed top-0 right-0 sm:left-0 p-6 text-right z-10 md:w-32 flex md:grow md:flex-col md:gap-y-5 md:bg-green-600 md:rounded-xl md:px-6 md:py-6 md:fixed md:top-1/2 md:right-8 md:transform md:-translate-y-1/2">
    <div class="flex items-center ml-6">
        <x-dropdown align="right">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-green_light-500 hover:text-green-400 dark:hover:text-green-300 focus:outline-none transition ease-in-out duration-150">
                    <x-radix-hamburger-menu class="w-6 h-6" />
                </button>
            </x-slot>

            <x-slot name="content">
                <div class="max-h-80 relative overflow-y-auto scroll-smooth">
                    <div class="flex flex-col">
                        <x-nav-link :href="route('web.home')">
                            <x-heroicon-o-home class="h-6 w-6" />
                            Home
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.crm')" :active="request()->routeIs('crm.crm')">
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="flex flex-col">
                        <x-nav-link :href="route('web.dev')">
                            <x-heroicon-o-folder class="h-6 w-6" />
                            Dev projects
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.add-dev')" :active="request()->routeIs('crm.add-dev')">
                                    <x-ri-add-fill class="h-6 w-6" />
                                    Add
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('crm.list-dev')" :active="request()->routeIs('crm.list-dev')">
                                    <x-tabler-list class="h-6 w-6" />
                                    List
                                    <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">
                                    @php
                                        $devModel = resolve(\App\Models\devs::class);
                                        $devCount = $devModel->count();
                                    @endphp
                                    {{ $devCount }}
                                </span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="flex flex-col">
                        <x-nav-link :href="route('web.projects')">
                            <x-heroicon-o-folder class="h-6 w-6" />
                            Projects
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.add-proj')" :active="request()->routeIs('crm.add-proj')">
                                    <x-ri-add-fill class="h-6 w-6" />
                                    Add
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('crm.list-proj')" :active="request()->routeIs('crm.list-proj')">
                                    <x-tabler-list class="h-6 w-6" />
                                    List
                                    <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">
                                    @php
                                        $projModel = resolve(\App\Models\projects::class);
                                        $projCount = $projModel->count();
                                    @endphp
                                    {{ $projCount }}
                                </span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="flex flex-col">
                        <x-nav-link :href="route('web.aboutme')">
                            <x-radix-person class="w-6 h-6" />
                            About me
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.edit-abtme')" :active="request()->routeIs('crm.edit-abtme')">
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="flex flex-col">
                        <x-nav-link :href="route('web.contact')">
                            <x-feathericon-mail class="h-6 w-6" />
                            Contact
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link>
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="flex flex-col">
                        <x-nav-link :href="route('web.opinions')">
                            <x-far-comment class="w-6 h-6" />
                            Opinions
                        </x-nav-link>
                        <ul role="list" class="mt-2 mx-6 space-y-1">
                            <li>
                                <x-nav-link :href="route('crm.opinions')" :active="request()->routeIs('crm.opinions')">
                                    <x-feathericon-edit class="h-6 w-6" />
                                    Edit
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('crm.opinions-export')" :active="request()->routeIs('crm.opinions-export')">
                                    <x-bytesize-export class="h-6 w-6" />
                                    Export
                                    <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">
                                    @php
                                        $opModel = resolve(\App\Models\opinions::class);
                                        $opCount = $opModel->count();
                                    @endphp
                                    {{ $opCount }}
                                </span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </x-slot>
        </x-dropdown>
    </div>
</div>
