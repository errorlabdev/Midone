@extends('../layout/' . $layout)

@section('subhead')
    <title>Slider - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Slider</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Single Item -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Single Item</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#single-item-slider" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="single-item-slider">
                    <div class="preview">
                        <div class="slider mx-6 single-item">
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-single-item-slider" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-single-item-slider">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="slider mx-6 single-item">
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
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
            <!-- END: Single Item -->
            <!-- BEGIN: Multiple Item -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Multiple Item</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#multiple-item-slider" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="multiple-item-slider">
                    <div class="preview">
                        <div class="slider mx-6 multiple-items">
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">7</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">8</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">9</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-multiple-item-slider" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-multiple-item-slider">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="slider mx-6 multiple-items">
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">7</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">8</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">9</h3>
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
            <!-- END: Multiple Item -->
            <!-- BEGIN: Responsive Display -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Responsive Display</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#responsive-slider" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="responsive-slider">
                    <div class="preview">
                        <div class="slider mx-6 responsive-mode">
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">7</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">8</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-responsive-slider" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-responsive-slider">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="slider mx-6 responsive-mode">
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">7</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">8</h3>
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
            <!-- END: Responsive Display -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Center Mode -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Center Mode</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#center-mode-slider" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="center-mode-slider">
                    <div class="preview">
                        <div class="slider mx-6 center-mode">
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-gray-200 rounded-md">
                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-center-mode-slider" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-center-mode-slider">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="slider mx-6 center-mode">
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                                </div>
                                            </div>
                                            <div class="h-32 px-2">
                                                <div class="h-full bg-gray-200 rounded-md">
                                                    <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
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
            <!-- END: Center Mode -->
            <!-- BEGIN: Fade Animation -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Fade Animation</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#fade-animation-slider" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="fade-animation-slider">
                    <div class="preview">
                        <div class="slider mx-6 fade-mode">
                            <div class="h-64 px-2">
                                <div class="h-full image-fit rounded-md overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[0]['images'][0]) }}" />
                                </div>
                            </div>
                            <div class="h-64 px-2">
                                <div class="h-full image-fit rounded-md overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[1]['images'][1]) }}" />
                                </div>
                            </div>
                            <div class="h-64 px-2">
                                <div class="h-full image-fit rounded-md overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[2]['images'][2]) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-fade-animation-slider" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-fade-animation-slider">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="slider mx-6 fade-mode">
                                            <div class="h-64 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[0]['images'][0]) . '" />
                                                </div>
                                            </div>
                                            <div class="h-64 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[1]['images'][1]) . '" />
                                                </div>
                                            </div>
                                            <div class="h-64 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[2]['images'][2]) . '" />
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
            <!-- END: Fade Animation -->
        </div>
    </div>    
@endsection