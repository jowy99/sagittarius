<div class="h-screen flex grow flex-col gap-y-5 overflow-y-auto bg-green-600 px-6 z-10">
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <li>
                        <!-- Current: "bg-green-700 text-white", Default: "text-green-200 hover:text-white hover:bg-green-700" -->
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            <x-heroicon-o-home class="h-6 w-6" />
                            Home
                            <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">5</span>
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
                    <li>
                        <x-nav-link>
                            <x-heroicon-o-folder class="h-6 w-6" />
                            Projects
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
                                </x-nav-link>
                            </li>
                            <hr>
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
                                </x-nav-link>
                            </li>
<!--                            <li>-->
<!--                                <x-nav-link>-->
<!--                                    <x-feathericon-edit class="h-6 w-6" />-->
<!--                                    Edit other projects-->
<!--                                </x-nav-link>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <x-nav-link>-->
<!--                                    <x-ri-delete-bin-6-line class="h-6 w-6" />-->
<!--                                    Remove dev projects-->
<!--                                </x-nav-link>-->
<!--                            </li>-->
                        </ul>
                    </li>
                    <li>
                        <x-nav-link>
                            <x-feathericon-mail class="h-6 w-6" />
                            Contact
                            <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-green-600 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-white ring-1 ring-inset ring-green-500" aria-hidden="true">12</span>
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
