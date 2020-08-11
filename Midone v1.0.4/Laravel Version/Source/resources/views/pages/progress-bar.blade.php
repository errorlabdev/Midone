@extends('../layout/' . $layout)

@section('subhead')
    <title>Progress Bar - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Progressbar</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Progressbar -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Progressbar</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-progressbar" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-progressbar">
                    <div class="preview">
                        <div class="w-full h-2 bg-gray-400 rounded-full">
                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                        </div>
                        <div class="w-full h-2 bg-gray-400 rounded-full mt-3">
                            <div class="w-2/3 h-full bg-theme-1 rounded-full"></div>
                        </div>
                        <div class="w-full h-2 bg-gray-400 rounded-full mt-3">
                            <div class="w-3/4 h-full bg-theme-1 rounded-full"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-progressbar" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-progressbar">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full h-2 bg-gray-400 rounded-full">
                                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                        <div class="w-full h-2 bg-gray-400 rounded-full mt-3">
                                            <div class="w-2/3 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                        <div class="w-full h-2 bg-gray-400 rounded-full mt-3">
                                            <div class="w-3/4 h-full bg-theme-1 rounded-full"></div>
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
                    <h2 class="font-medium text-base mr-auto">Progressbar with Label</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#progressbar-label" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="progressbar-label">
                    <div class="preview">
                        <div class="w-full h-4 bg-gray-400 rounded">
                            <div class="w-1/2 h-full bg-theme-1 rounded text-center text-xs text-white">50%</div>
                        </div>
                        <div class="w-full h-4 bg-gray-400 rounded mt-3">
                            <div class="w-2/3 h-full bg-theme-1 rounded text-center text-xs text-white">60%</div>
                        </div>
                        <div class="w-full h-4 bg-gray-400 rounded mt-3">
                            <div class="w-3/4 h-full bg-theme-1 rounded text-center text-xs text-white">70%</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-label" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-progressbar-label">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full h-4 bg-gray-400 rounded">
                                            <div class="w-1/2 h-full bg-theme-1 rounded text-center text-xs text-white">50%</div>
                                        </div>
                                        <div class="w-full h-4 bg-gray-400 rounded mt-3">
                                            <div class="w-2/3 h-full bg-theme-1 rounded text-center text-xs text-white">60%</div>
                                        </div>
                                        <div class="w-full h-4 bg-gray-400 rounded mt-3">
                                            <div class="w-3/4 h-full bg-theme-1 rounded text-center text-xs text-white">70%</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Progressbar -->
        <!-- BEGIN: Progressbar Height -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Progressbar Height</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#progressbar-height" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="progressbar-height">
                    <div class="preview">
                        <div class="w-full h-1 bg-gray-400 rounded-full">
                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                        </div>
                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                            <div class="w-2/3 h-full bg-theme-1 rounded"></div>
                        </div>
                        <div class="w-full h-3 bg-gray-400 rounded mt-3">
                            <div class="w-3/4 h-full bg-theme-1 rounded"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-height" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-progressbar-height">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full h-1 bg-gray-400 rounded-full">
                                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                                            <div class="w-2/3 h-full bg-theme-1 rounded"></div>
                                        </div>
                                        <div class="w-full h-3 bg-gray-400 rounded mt-3">
                                            <div class="w-3/4 h-full bg-theme-1 rounded"></div>
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
                    <h2 class="font-medium text-base mr-auto">Progressbar Color</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#progressbar-color" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="progressbar-color">
                    <div class="preview">
                        <div class="w-full h-2 bg-gray-400 rounded-full">
                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                        </div>
                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                            <div class="w-2/3 h-full bg-theme-9 rounded"></div>
                        </div>
                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                            <div class="w-3/4 h-full bg-theme-12 rounded"></div>
                        </div>
                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                            <div class="w-3/4 h-full bg-theme-6 rounded"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-color" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-progressbar-color">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full h-2 bg-gray-400 rounded-full">
                                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                                            <div class="w-2/3 h-full bg-theme-9 rounded"></div>
                                        </div>
                                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                                            <div class="w-3/4 h-full bg-theme-12 rounded"></div>
                                        </div>
                                        <div class="w-full h-2 bg-gray-400 rounded mt-3">
                                            <div class="w-3/4 h-full bg-theme-6 rounded"></div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Progressbar Height -->
    </div>
@endsection