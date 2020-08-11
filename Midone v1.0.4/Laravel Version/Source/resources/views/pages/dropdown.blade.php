@extends('../layout/' . $layout)

@section('subhead')
    <title>Dropdown - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Dropdown</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Dropdown -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Dropdown</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-dropdown" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-dropdown">
                    <div class="preview flex justify-center">
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New Dropdown</a>
                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Delete Dropdown</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-dropdown" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-dropdown">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                                            <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                                                <div class="dropdown-box__content box p-2">
                                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New Dropdown</a>
                                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Delete Dropdown</a>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Position Dropdown</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#position-dropdown" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="position-dropdown">
                    <div class="preview flex flex-col sm:flex-row justify-center items-center">
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Left Dropdown</button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New Dropdown</a>
                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Delete Dropdown</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown relative sm:ml-2 mt-2 sm:mt-0">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Right Dropdown</button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New Dropdown</a>
                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Delete Dropdown</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-position-dropdown" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-position-dropdown">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Left Dropdown</button>
                                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                                <div class="dropdown-box__content box p-2">
                                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New Dropdown</a>
                                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Delete Dropdown</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown relative sm:ml-2 mt-2 sm:mt-0">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Right Dropdown</button>
                                            <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                                                <div class="dropdown-box__content box p-2">
                                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New Dropdown</a>
                                                    <a href="" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Delete Dropdown</a>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Icon Dropdown</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#icon-dropdown" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="icon-dropdown">
                    <div class="preview flex justify-center">
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                            <div class="dropdown-box mt-10 absolute w-48 top-0 left-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Dropdown
                                    </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Dropdown
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-dropdown" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-icon-dropdown">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                                            <div class="dropdown-box mt-10 absolute w-48 top-0 left-0 z-20">
                                                <div class="dropdown-box__content box p-2">
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Dropdown
                                                    </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Dropdown
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Dropdown -->
        <!-- BEGIN: Header & Footer Dropdown -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Header & Footer Dropdown</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#header-footer-dropdown" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="header-footer-dropdown">
                    <div class="preview flex justify-center">
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                            <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 -mr-12 sm:mr-0 z-20">
                                <div class="dropdown-box__content box">
                                    <div class="p-4 border-b border-gray-200 font-medium">Export Options</div>
                                    <div class="p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="activity" class="w-4 h-4 text-gray-700 mr-2"></i> Export to PDF
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="box" class="w-4 h-4 text-gray-700 mr-2"></i> 
                                            Export to Excel 
                                            <div class="text-xs text-white px-1 rounded-full bg-theme-6 ml-auto">10</div>
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="layout" class="w-4 h-4 text-gray-700 mr-2"></i> Export to CSV
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="sidebar" class="w-4 h-4 text-gray-700 mr-2"></i> Export to Word
                                        </a>
                                    </div>
                                    <div class="px-3 py-3 border-t border-gray-200 font-medium flex">
                                        <button type="button" class="button button--sm bg-theme-1 text-white">Settings</button>
                                        <button type="button" class="button button--sm bg-gray-200 text-gray-600 ml-auto">View Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-footer-dropdown" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-header-footer-dropdown">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                                            <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 -mr-12 sm:mr-0 z-20">
                                                <div class="dropdown-box__content box">
                                                    <div class="p-4 border-b border-gray-200 font-medium">Export Options</div>
                                                    <div class="p-2">
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="activity" class="w-4 h-4 text-gray-700 mr-2"></i> Export to PDF
                                                        </a>
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="box" class="w-4 h-4 text-gray-700 mr-2"></i> 
                                                            Export to Excel 
                                                            <div class="text-xs text-white px-1 rounded-full bg-theme-6 ml-auto">10</div>
                                                        </a>
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="layout" class="w-4 h-4 text-gray-700 mr-2"></i> Export to CSV
                                                        </a>
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="sidebar" class="w-4 h-4 text-gray-700 mr-2"></i> Export to Word
                                                        </a>
                                                    </div>
                                                    <div class="px-3 py-3 border-t border-gray-200 font-medium flex">
                                                        <button type="button" class="button button--sm bg-theme-1 text-white">Settings</button>
                                                        <button type="button" class="button button--sm bg-gray-200 text-gray-600 ml-auto">View Profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Scrolled Dropdown</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#scrolled-dropdown" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="scrolled-dropdown">
                    <div class="preview flex justify-center">
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2 overflow-y-auto h-32">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">January</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">February</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">March</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">June</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">July</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-scrolled-dropdown" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-scrolled-dropdown">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                                <div class="dropdown-box__content box p-2 overflow-y-auto h-32">
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">January</a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">February</a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">March</a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">June</a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">July</a>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Header & Icon Dropdown</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#header-icon-dropdown" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="header-icon-dropdown">
                    <div class="preview flex justify-center">
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                            <div class="dropdown-box mt-12 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box">
                                    <div class="px-4 py-2 border-b border-gray-200 font-medium">Export Tools</div>
                                    <div class="p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="printer" class="w-4 h-4 text-gray-700 mr-2"></i> Print
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="external-link" class="w-4 h-4 text-gray-700 mr-2"></i> Excel
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="file-text" class="w-4 h-4 text-gray-700 mr-2"></i> CSV
                                        </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="archive" class="w-4 h-4 text-gray-700 mr-2"></i> PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-icon-dropdown" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-header-icon-dropdown">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown relative">
                                            <button class="dropdown-toggle button inline-block bg-theme-1 text-white">Show Dropdown</button>
                                            <div class="dropdown-box mt-12 absolute w-40 top-0 right-0 z-20">
                                                <div class="dropdown-box__content box">
                                                    <div class="px-4 py-2 border-b border-gray-200 font-medium">Export Tools</div>
                                                    <div class="p-2">
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="printer" class="w-4 h-4 text-gray-700 mr-2"></i> Print
                                                        </a>
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="external-link" class="w-4 h-4 text-gray-700 mr-2"></i> Excel
                                                        </a>
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="file-text" class="w-4 h-4 text-gray-700 mr-2"></i> CSV
                                                        </a>
                                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                            <i data-feather="archive" class="w-4 h-4 text-gray-700 mr-2"></i> PDF
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Header & Footer Dropdown -->
    </div>    
@endsection