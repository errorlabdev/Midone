@extends('../layout/' . $layout)

@section('subhead')
    <title>Profile - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-gray-600">{{ $fakers[0]['jobs'][0] }}</div>
                </div>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ $fakers[0]['users'][0]['email'] }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram {{ $fakers[0]['users'][0]['name'] }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $fakers[0]['users'][0]['name'] }}
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-semibold text-theme-1 text-lg">201</div>
                    <div class="text-gray-600">Orders</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-semibold text-theme-1 text-lg">1k</div>
                    <div class="text-gray-600">Purchases</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-semibold text-theme-1 text-lg">492</div>
                    <div class="text-gray-600">Reviews</div>
                </div>
            </div>
        </div>
        <div class="nav-tabs flex flex-col sm:flex-row justify-center lg:justify-start">
            <a data-toggle="tab" data-target="#profile" href="javascript:;" class="py-4 sm:mr-8 flex items-center active">
                <i class="w-4 h-4 mr-2" data-feather="user"></i> Profile
            </a>
            <a data-toggle="tab" data-target="#account" href="javascript:;" class="py-4 sm:mr-8 flex items-center">
                <i class="w-4 h-4 mr-2" data-feather="shield"></i> Account
            </a>
            <a data-toggle="tab" data-target="#change-password" href="javascript:;" class="py-4 sm:mr-8 flex items-center">
                <i class="w-4 h-4 mr-2" data-feather="lock"></i> Change Password
            </a>
            <a data-toggle="tab" data-target="#settings" href="javascript:;" class="py-4 sm:mr-8 flex items-center">
                <i class="w-4 h-4 mr-2" data-feather="settings"></i> Settings
            </a>
        </div>
    </div>
    <!-- END: Profile Info -->
    <div class="tab-content mt-5">
        <div class="tab-content__pane active" id="profile">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Latest Uploads -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Latest Uploads</h2>
                        <div class="dropdown relative ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                            </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="javascript:;" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">All Files</a>
                                </div>
                            </div>
                        </div>
                        <button class="button border text-gray-700 hidden sm:flex">All Files</button>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Documentation</a>
                                <div class="text-gray-600 text-xs">40 KB</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                                </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--file">
                                    <div class="file__icon__file-name text-xs">MP3</div>
                                </a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Celine Dion - Ashes</a>
                                <div class="text-gray-600 text-xs">40 KB</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                                </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--empty-directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Resources</a>
                                <div class="text-gray-600 text-xs">0 KB</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                                </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Uploads -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown relative ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                            </a>
                            <div class="nav-tabs dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="javascript:;" data-toggle="tab" data-target="#new" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New</a>
                                    <a href="javascript:;" data-toggle="tab" data-target="#last-week" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Last Week</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav-tabs ml-auto hidden sm:flex">
                            <a data-toggle="tab" data-target="#work-in-progress-new" href="javascript:;" class="py-5 ml-6 active">New</a>
                            <a data-toggle="tab" data-target="#work-in-progress-last-week" href="javascript:;" class="py-5 ml-6">Last Week</a>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div class="tab-content__pane active" id="work-in-progress-new">
                                <div>
                                    <div class="flex">
                                        <div class="text-gray-700 mr-auto">Pending Tasks</div>
                                        <div class="font-medium">20%</div>
                                    </div>
                                    <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                        <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="text-gray-700 mr-auto">Completed Tasks</div>
                                        <div class="font-medium">2 / <span class="text-gray-600">20</span></div>
                                    </div>
                                    <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                        <div class="w-1/4 h-full bg-theme-1 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="text-gray-700 mr-auto">Tasks In Progress</div>
                                        <div class="font-medium">42</div>
                                    </div>
                                    <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                        <div class="w-3/4 h-full bg-theme-1 rounded-full"></div>
                                    </div>
                                </div>
                                <a href="" class="button w-40 mx-auto justify-center block bg-gray-200 text-gray-600 mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown relative ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                            </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                        <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="button border relative flex items-center text-gray-700 hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-gray-600 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-gray-700">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-gray-600 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-gray-700">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-gray-600 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-gray-700">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown relative ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                            </a>
                            <div class="nav-tabs dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="javascript:;" data-toggle="tab" data-target="#new" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New</a>
                                    <a href="javascript:;" data-toggle="tab" data-target="#last-week" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Last Week</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav-tabs ml-auto hidden sm:flex">
                            <a data-toggle="tab" data-target="#latest-tasks-new" href="javascript:;" class="py-5 ml-6 active">New</a>
                            <a data-toggle="tab" data-target="#latest-tasks-last-week" href="javascript:;" class="py-5 ml-6">Last Week</a>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div class="tab-content__pane active" id="latest-tasks-new">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-theme-1 pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-gray-600">10:00 AM</div>
                                    </div>
                                    <input class="input input--switch ml-auto border" type="checkbox">
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-theme-1 pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-gray-600">02:00 PM</div>
                                    </div>
                                    <input class="input input--switch ml-auto border" type="checkbox">
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-theme-1 pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-gray-600">04:00 PM</div>
                                    </div>
                                    <input class="input input--switch ml-auto border" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: New Products -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">New Products</h2>
                        <button data-carousel="new-products" data-target="prev" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-products" data-target="next" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="slick-carousel py-5" id="new-products">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-gray-200">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-gray-600 mt-1 sm:mt-0">{{ $faker['news'][0]['short_content'] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-gray-200">
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-semibold text-theme-1 text-lg">{{ $faker['totals'][0] }}</div>
                                            <div class="text-gray-600">Orders</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-semibold text-theme-1 text-lg">{{ $faker['totals'][1] }}k</div>
                                            <div class="text-gray-600">Purchases</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-semibold text-theme-1 text-lg">{{ $faker['totals'][0] }}</div>
                                            <div class="text-gray-600">Reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-gray-200 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-gray-200 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 bg-theme-14 text-theme-10 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-gray-600">Date of Release</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="button w-20 justify-center block bg-gray-200 text-gray-600 ml-auto">Preview</button>
                                        <button class="button w-20 justify-center block bg-gray-200 text-gray-600 ml-2">Details</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Products -->
                <!-- BEGIN: New Authors -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">New Authors</h2>
                        <button data-carousel="new-authors" data-target="prev" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-authors" data-target="next" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="slick-carousel py-5" id="new-authors">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-gray-200">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['users'][0]['name'] }}</a>
                                            <div class="text-gray-600 mt-1 sm:mt-0">{{ $faker['jobs'][0] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-gray-200">
                                        <div class="flex items-center">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-gray-500">
                                                <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                                            </a>
                                            {{ $faker['users'][0]['email'] }}
                                        </div>
                                        <div class="flex items-center mt-2">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-gray-500">
                                                <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                                            </a>
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-gray-200 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-gray-200 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 bg-theme-14 text-theme-10 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-gray-600">Joined Date</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="button w-20 justify-center block bg-gray-200 text-gray-600 ml-auto">Message</button>
                                        <button class="button w-20 justify-center block bg-gray-200 text-gray-600 ml-2">Profile</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Authors -->
            </div>
        </div>
    </div>
@endsection