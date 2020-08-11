@extends('../layout/' . $layout)

@section('subhead')
    <title>Datepicker - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Datepicker</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Datepicker -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Date Picker</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-datepicker" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-datepicker">
                    <div class="preview">
                        <input class="datepicker input w-56 border block mx-auto">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-datepicker" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-datepicker">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input class="datepicker input w-56 border block mx-auto">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Datepicker -->
            <!-- BEGIN: Input Group -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Input Group</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#input-group-datepicker" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="input-group-datepicker">
                    <div class="preview">
                        <div class="relative w-56 mx-auto">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                <i data-feather="calendar" class="w-4 h-4"></i>
                            </div>
                            <input type="text" class="datepicker input pl-12 border">
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-group-datepicker" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input-group-datepicker">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="relative w-56 mx-auto">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                                                <i data-feather="calendar" class="w-4 h-4"></i>
                                            </div>
                                            <input type="text" class="datepicker input pl-12 border">
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Group -->
            <!-- BEGIN: TIme Picker -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Time Picker</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#timepicker-datepicker" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="timepicker-datepicker">
                    <div class="preview">
                        <input data-timepicker="true" class="datepicker input w-56 border block mx-auto">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-timepicker-datepicker" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-timepicker-datepicker">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input data-timepicker="true" class="datepicker input w-56 border block mx-auto">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: TIme Picker -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Daterange Picker -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Date Range Picker</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#daterangepicker" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="daterangepicker">
                    <div class="preview">
                        <input data-daterange="true" class="datepicker input w-56 border block mx-auto">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-daterangepicker" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-daterangepicker">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input data-daterange="true" class="datepicker input w-56 border block mx-auto">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Daterange Picker -->
            <!-- BEGIN: Modal Datepicker -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Modal Date Picker</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#modal-datepicker" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="modal-datepicker">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="datepicker-modal-preview">
                            <div class="modal__content">
                                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                                    <h2 class="font-medium text-base mr-auto">Filter by Date</h2>
                                    <button class="button border items-center text-gray-700 hidden sm:flex">
                                        <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                    </button>
                                    <div class="dropdown relative sm:hidden">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                            <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                                        </a>
                                        <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                            <div class="dropdown-box__content box p-2">
                                                <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                    <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>From</label>
                                        <input class="datepicker input w-full border mt-2">
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>To</label>
                                        <input class="datepicker input w-full border mt-2">
                                    </div>
                                </div>
                                <div class="px-5 py-3 text-right border-t border-gray-200">
                                    <button type="button" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                    <button type="button" class="button w-20 bg-theme-1 text-white">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-modal-datepicker" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-modal-datepicker">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="datepicker-modal-preview">
                                            <div class="modal__content">
                                                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                                                    <h2 class="font-medium text-base mr-auto">Filter by Date</h2>
                                                    <button class="button border items-center text-gray-700 hidden sm:flex">
                                                        <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                    </button>
                                                    <div class="dropdown relative sm:hidden">
                                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                                            <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i>
                                                        </a>
                                                        <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                                            <div class="dropdown-box__content box p-2">
                                                                <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                                    <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>From</label>
                                                        <input class="datepicker input w-full border mt-2">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>To</label>
                                                        <input class="datepicker input w-full border mt-2">
                                                    </div>
                                                </div>
                                                <div class="px-5 py-3 text-right border-t border-gray-200">
                                                    <button type="button" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                                    <button type="button" class="button w-20 bg-theme-1 text-white">Submit</button>
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
            <!-- END: Modal Datepicker -->
        </div>
    </div>    
@endsection