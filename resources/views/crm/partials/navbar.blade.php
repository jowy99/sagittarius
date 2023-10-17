<div class="h-screen flex grow flex-col gap-y-5 overflow-y-auto bg-green-600 px-6 z-10">
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-2">
                    <li>
                        <!-- Current: "bg-green-700 text-white", Default: "text-green-200 hover:text-white hover:bg-green-700" -->
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
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
                        <x-nav-link :href="route('dev')" :active="request()->routeIs('dev')">
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
                        <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
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
                        <x-nav-link :href="route('opinions')" :active="request()->routeIs('opinions')">
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

                    <hr>

                    <li>
                        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
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
                </ul>
            </li>
        </ul>
    </nav>
</div>
