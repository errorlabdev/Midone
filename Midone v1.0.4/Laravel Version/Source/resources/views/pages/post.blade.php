@extends('../layout/' . $layout)

@section('subhead')
    <title>Add New Post - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add New Post</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <div class="dropdown relative mr-2">
                <button class="dropdown-toggle button box text-gray-700 flex items-center">
                    English <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                            <span class="truncate">English</span>
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                            <span class="truncate">Indonesian</span>
                        </a>
                    </div>
                </div>
            </div>
            <button type="button" class="button box text-gray-700 mr-2 flex items-center ml-auto sm:ml-0">
                <i class="w-4 h-4 mr-2" data-feather="eye"></i> Preview
            </button>
            <div class="dropdown relative">
                <button class="dropdown-toggle button text-white bg-theme-1 shadow-md flex items-center">
                    Save <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> As New Post
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> As Draft
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Word
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input type="text" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Title">
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__tabs nav-tabs flex flex-col sm:flex-row bg-gray-200 text-gray-600">
                    <a title="Fill in the article content" data-toggle="tab" data-target="#content" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active">
                        <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Content
                    </a>
                    <a title="Adjust the meta title" data-toggle="tab" data-target="#meta-title" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center">
                        <i data-feather="code" class="w-4 h-4 mr-2"></i> Meta Title
                    </a>
                    <a title="Use search keywords" data-toggle="tab" data-target="#keywords" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center">
                        <i data-feather="align-left" class="w-4 h-4 mr-2"></i> Keywords
                    </a>
                </div>
                <div class="post__content tab-content">
                    <div class="tab-content__pane p-5 active" id="content">
                        <div class="border border-gray-200 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-gray-200 pb-5">
                                <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Text Content
                            </div>
                            <div class="mt-5">
                                <textarea data-feature="all" class="summernote" data-height="250" name="editor"></textarea>
                            </div>
                        </div>
                        <div class="border border-gray-200 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 pb-5">
                                <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Caption & Images
                            </div>
                            <div class="mt-5">
                                <div>
                                    <label>Caption</label>
                                    <input type="text" class="input w-full border mt-2" placeholder="Write caption">
                                </div>
                                <div class="mt-3">
                                    <label>Upload Image</label>
                                    <div class="border-2 border-dashed rounded-md mt-3 pt-4">
                                        <div class="flex flex-wrap px-4">
                                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                                    <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                                        <i data-feather="x" class="w-4 h-4"></i>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 mr-1">Upload a file</span> or drag and drop
                                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label>Written By</label>
                    <div class="dropdown relative mt-2">
                        <button class="dropdown-toggle button w-full border flex items-center">
                            <div class="w-6 h-6 absolute image-fit mr-3">
                                <img class="rounded" alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-8 pl-1 truncate">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <i class="w-4 h-4 ml-auto" data-feather="chevron-down"></i>
                        </button>
                        <div class="dropdown-box mt-10 absolute w-full top-0 right-0 z-20">
                            <div class="dropdown-box__content box p-2">
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-8 pl-1">{{ $faker['users'][0]['name'] }}</div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Post Date</label>
                    <input data-timepicker="true" class="datepicker input w-full border mt-2">
                </div>
                <div class="mt-3">
                    <label>Categories</label>
                    <div class="mt-2">
                        <select data-placeholder="Select categories" class="select2 w-full" multiple>
                            <option value="1" selected>Horror</option>
                            <option value="2">Sci-fi</option>
                            <option value="3" selected>Action</option>
                            <option value="4">Drama</option>
                            <option value="5">Comedy</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Tags</label>
                    <div class="mt-2">
                        <select data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
                            <option value="1" selected>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Published</label>
                    <div class="mt-2">
                        <input class="input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="mt-3">
                    <label>Show Author Name</label>
                    <div class="mt-2">
                        <input class="input input--switch border" type="checkbox">
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection