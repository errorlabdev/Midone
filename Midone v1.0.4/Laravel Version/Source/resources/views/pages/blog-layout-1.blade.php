@extends('../layout/' . $layout)

@section('subhead')
    <title>Blog - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Blog Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Post</button>
            <div class="dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Post
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @foreach (array_slice($fakers, 0, 9) as $faker)
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1">
                            <a class="text-theme-1 inline-block truncate" href="">{{ $faker['products'][0]['category'] }}</a> <span class="mx-1">•</span> {{ $faker['formatted_times'][0] }}
                        </div>
                    </div>
                    <div class="dropdown relative ml-3">
                        <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500">
                            <i data-feather="more-vertical" class="w-4 h-4"></i>
                        </a>
                        <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                            <div class="dropdown-box__content box p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post
                                </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-md" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">{{ $faker['news'][0]['title'] }}</a>
                    <div class="text-gray-700 mt-2">{{ $faker['news'][0]['short_content'] }}</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Bookmark">
                        <i data-feather="bookmark" class="w-3 h-3"></i>
                    </a>
                    <div class="intro-x flex mr-2">
                        <div class="intro-x w-8 h-8 image-fit">
                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][0]) }}" title="{{ $faker['users'][0]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][1]) }}" title="{{ $faker['users'][1]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][2]) }}" title="{{ $faker['users'][2]['name'] }}">
                        </div>
                    </div>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Share">
                        <i data-feather="share-2" class="w-3 h-3"></i>
                    </a>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Download PDF">
                        <i data-feather="share" class="w-3 h-3"></i>
                    </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2">
                            Comments: <span class="font-medium">{{ $faker['totals'][0] }}</span>
                        </div>
                        <div class="mr-2">
                            Views: <span class="font-medium">{{ $faker['totals'][1] }}k</span>
                        </div>
                        <div class="ml-auto">
                            Likes: <span class="font-medium">{{ $faker['totals'][2] }}k</span>
                        </div>
                    </div>
                    <div class="w-full flex items-center mt-3">
                        <div class="w-8 h-8 flex-none image-fit mr-3">
                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="flex-1 relative text-gray-700">
                            <input type="text" class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Post a comment...">
                            <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            <ul class="pagination">
                <li>
                    <a class="pagination__link" href="">
                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href="">
                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href="">...</a>
                </li>
                <li>
                    <a class="pagination__link" href="">1</a>
                </li>
                <li>
                    <a class="pagination__link pagination__link--active" href="">2</a>
                </li>
                <li>
                    <a class="pagination__link" href="">3</a>
                </li>
                <li>
                    <a class="pagination__link" href="">...</a>
                </li>
                <li>
                    <a class="pagination__link" href="">
                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href="">
                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                    </a>
                </li>
            </ul>
            <select class="w-20 input box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
@endsection