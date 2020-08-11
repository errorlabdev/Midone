@extends('../layout/' . $layout)

@section('subhead')
    <title>Image Zoom - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Drift Zoom</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Drift Zoom -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Implementation</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#image-zoom" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="image-zoom">
                    <div class="preview">
                        <div class="image-zoom relative">
                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="w-full" src="{{ asset('dist/images/' . $fakers[2]['images'][0]) }}" data-zoom="{{ asset('dist/images/' . $fakers[2]['images'][0]) }}">
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-image-zoom" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-image-zoom">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="image-zoom relative">
                                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="w-full" src="' . asset('dist/images/' . $fakers[2]['images'][0]) . '" data-zoom="' . asset('dist/images/' . $fakers[2]['images'][0]) . '">
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Drift Zoom -->
    </div>    
@endsection