@extends('../layout/' . $layout)

@section('subhead')
    <title>Inbox - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">Inbox</h2>
            <!-- BEGIN: Inbox Menu -->
            <div class="intro-y box bg-theme-1 p-5 mt-6">
                <button type="button" class="button button--lg flex items-center justify-center text-gray-700 w-full bg-white mt-2">
                    <i class="w-4 h-4 mr-2" data-feather="edit-3"></i> Compose
                </button>
                <div class="border-t border-theme-3 mt-6 pt-6 text-white">
                    <a href="" class="flex items-center px-3 py-2 rounded-md bg-theme-22 font-medium">
                        <i class="w-4 h-4 mr-2" data-feather="mail"></i> Inbox
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="star"></i> Marked
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="inbox"></i> Draft
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="send"></i> Sent
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="trash"></i> Trash
                    </a>
                </div>
                <div class="border-t border-theme-3 mt-5 pt-5 text-white">
                    <a href="" class="flex items-center px-3 py-2 truncate">
                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div> Custom Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-theme-9 rounded-full mr-3"></div> Important Meetings
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div> Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div> Design
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-theme-6 rounded-full mr-3"></div> Next Week
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <i class="w-4 h-4 mr-2" data-feather="plus"></i> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700" data-feather="search"></i>
                    <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search mail">
                    <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center">
                        <i class="dropdown-toggle w-4 h-4 cursor-pointer text-gray-700" data-feather="chevron-down"></i>
                        <div class="inbox-filter__dropdown-box dropdown-box mt-10 absolute top-0 left-0 z-20">
                            <div class="dropdown-box__content box p-5">
                                <div class="grid grid-cols-12 gap-4 row-gap-3">
                                    <div class="col-span-6">
                                        <div class="text-xs">From</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">To</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Subject</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Has the Words</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Doesn't Have</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Size</div>
                                        <select class="input w-full border mt-2 flex-1">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 flex items-center mt-3">
                                        <button class="button w-32 justify-center block bg-gray-200 text-gray-600 ml-auto">Create Filter</button>
                                        <button class="button w-32 justify-center block bg-theme-1 text-white ml-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="button text-white bg-theme-1 shadow-md mr-2">Start a Video Call</button>
                    <div class="dropdown relative">
                        <button class="dropdown-toggle button px-2 box text-gray-700">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i class="w-4 h-4" data-feather="plus"></i>
                            </span>
                        </button>
                        <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                            <div class="dropdown-box__content box p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                    <i data-feather="user" class="w-4 h-4 mr-2"></i> Contacts
                                </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                    <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y inbox box mt-5">
                <div class="p-5 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200">
                    <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-gray-200 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                        <input class="input border border-gray-500" type="checkbox">
                        <div class="dropdown relative ml-1">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                <i data-feather="chevron-down" class="w-5 h-5"></i>
                            </a>
                            <div class="dropdown-box mt-6 absolute w-32 top-0 left-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">All</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">None</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Read</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Unread</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Starred</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Unstarred</a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="refresh-cw"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="more-horizontal"></i>
                        </a>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div>1 - 50 of 5,238</div>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="settings"></i>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @foreach ($fakers as $faker)
                        <div class="intro-y">
                            <div class="inbox__item{{ $faker['true_false'][0] ? ' inbox__item--active' : '' }} inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                <div class="flex px-5 py-3">
                                    <div class="w-56 flex-none flex items-center mr-10">
                                        <input class="input flex-none border border-gray-500" type="checkbox" {{ !$faker['true_false'][0] ? 'checked' : '' }}>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500">
                                            <i class="w-4 h-4" data-feather="star"></i>
                                        </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500">
                                            <i class="w-4 h-4" data-feather="bookmark"></i>
                                        </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">{{ $faker['users'][0]['name'] }}</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate">
                                        <span class="inbox__item--highlight">{{ $faker['news'][0]['super_short_content'] }}</span> {{ $faker['news'][0]['short_content'] }}
                                    </div>
                                    <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">{{ $faker['times'][0] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
                    <div>4.41 GB (25%) of 17 GB used Manage</div>
                    <div class="sm:ml-auto mt-2 sm:mt-0">Last account activity: 36 minutes ago</div>
                </div>
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
@endsection