@extends('../layout/' . $layout)

@section('subhead')
    <title>Tooltip - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tooltip</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Tooltip -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Tooltip</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-tooltip" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-tooltip">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-tooltip" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-tooltip">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Tooltip -->
            <!-- BEGIN: On CLick Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">On Click Tooltip</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#on-click-tooltip" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="on-click-tooltip">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-event="on-click" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-on-click-tooltip" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-on-click-tooltip">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-event="on-click" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: On CLick Tooltip -->
            <!-- BEGIN: Light Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Light Tooltip</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#light-tooltip" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="light-tooltip">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-light-tooltip" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-light-tooltip">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Light Tooltip -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Custom Content Tooltip -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Custom Content Tooltip</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#custom-content-preview-tooltip" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="custom-content-preview-tooltip">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" data-event="on-click" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                        <div class="tooltip-content">
                            <div id="custom-content-tooltip" class="relative flex items-center py-1">
                                <div class="w-12 h-12 image-fit">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium leading-relaxed">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-gray-600">Bootstrap 4 HTML Admin Template</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-custom-content-preview-tooltip" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-custom-content-preview-tooltip">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" data-event="on-click" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                        <div class="tooltip-content">
                                            <div id="custom-content-tooltip" class="relative flex items-center py-1">
                                                <div class="w-12 h-12 image-fit">
                                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-full" src="' . asset('dist/images/' . $fakers[0]['photos'][0]) . '">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium leading-relaxed">' . $fakers[0]['users'][0]['name'] . '</div>
                                                    <div class="text-gray-600">Bootstrap 4 HTML Admin Template</div>
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
            <!-- END: Custom Content Tooltip -->
            <!-- BEGIN: Chart Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Chart Tooltip</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#chart-preview-tooltip" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="chart-preview-tooltip">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" data-tooltip-content="#chart-tooltip" data-event="on-click" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                        <div class="tooltip-content">
                            <div id="chart-tooltip" class="py-1">
                                <div class="font-medium">Net Worth</div>
                                <div class="flex items-center mt-2 sm:mt-0">
                                    <div class="mr-2 w-20 flex">
                                        USP: <span class="ml-auto font-medium text-theme-9">+23%</span>
                                    </div>
                                    <div class="w-24 sm:w-32 lg:w-56">
                                        <canvas class="simple-line-chart-1" data-random="true" height="30"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-chart-preview-tooltip" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-chart-preview-tooltip">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" data-tooltip-content="#chart-tooltip" data-event="on-click" class="tooltip button inline-block bg-theme-1 text-white" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                        <div class="tooltip-content">
                                            <div id="chart-tooltip" class="py-1">
                                                <div class="font-medium">Net Worth</div>
                                                <div class="flex items-center mt-2 sm:mt-0">
                                                    <div class="mr-2 w-20 flex">
                                                        USP: <span class="ml-auto font-medium text-theme-9">+23%</span>
                                                    </div>
                                                    <div class="w-24 sm:w-32 lg:w-56">
                                                        <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
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
            <!-- END: Chart Tooltip -->
        </div>
    </div>    
@endsection