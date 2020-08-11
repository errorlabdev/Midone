@extends('../layout/' . $layout)

@section('subhead')
    <title>Alert - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Alert</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Alert -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Alerts</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-alert" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-alert">
                    <div class="preview">
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">Awesome simple alert</div>
                        <div class="rounded-md px-5 py-4 mb-2 border text-gray-700">Awesome simple alert</div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-9 text-white">Awesome simple alert</div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-12 text-white">Awesome simple alert</div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">Awesome simple alert</div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-gray-200 text-gray-600">Awesome simple alert</div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-alert" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-alert">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">Awesome simple alert</div>
                                        <div class="rounded-md px-5 py-4 mb-2 border text-gray-700">Awesome simple alert</div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-9 text-white">Awesome simple alert</div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-12 text-white">Awesome simple alert</div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">Awesome simple alert</div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-gray-200 text-gray-600">Awesome simple alert</div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Icon Alerts</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#icon-alert" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="icon-alert">
                    <div class="preview">
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-12 text-white">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-alert" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-icon-alert">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-12 text-white">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
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
                    <h2 class="font-medium text-base mr-auto">Additional Content Alerts</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#additional-content-alert" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="additional-content-alert">
                    <div class="preview">
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="rounded-md px-5 py-4 mb-2 border text-gray-700">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-gray-600 px-1 rounded-md text-white ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-9 text-white">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-12 text-white">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="rounded-md px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-gray-600 px-1 rounded-md text-white ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-additional-content-alert" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-additional-content-alert">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="rounded-md px-5 py-4 mb-2 border text-gray-700">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-gray-600 px-1 rounded-md text-white ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-9 text-white">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-12 text-white">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="rounded-md px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-gray-600 px-1 rounded-md text-white ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Alert -->
        <!-- BEGIN: Icon & Dismiss Alert -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Icon & Dismiss Alerts</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#icon-dismiss-alert" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="icon-dismiss-alert">
                    <div class="preview">
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-12 text-white">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-dismiss-alert" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-icon-dismiss-alert">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-12 text-white">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
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
                    <h2 class="font-medium text-base mr-auto">Outline Alerts</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#outline-alert" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="outline-alert">
                    <div class="preview">
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-1 text-theme-1">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-9 text-theme-9">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-12 text-theme-12">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-6 text-theme-6">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-outline-alert" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-outline-alert">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-1 text-theme-1">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-9 text-theme-9">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-12 text-theme-12">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-6 text-theme-6">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon <i data-feather="x" class="w-4 h-4 ml-auto"></i>
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
                    <h2 class="font-medium text-base mr-auto">Soft Color Alerts</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#softcolor-alert" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="softcolor-alert">
                    <div class="preview">
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-14 text-theme-10">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-17 text-theme-11">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-softcolor-alert" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-softcolor-alert">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-14 text-theme-10">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 border text-gray-700">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-17 text-theme-11">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Icon & Dismiss Alert -->
    </div>
@endsection