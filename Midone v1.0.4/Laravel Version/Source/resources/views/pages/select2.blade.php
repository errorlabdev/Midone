@extends('../layout/' . $layout)

@section('subhead')
    <title>Select2 - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Select2</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Select -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Select</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-select" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-select">
                    <div class="preview">
                        <div>
                            <label>Basic</label>
                            <div class="mt-2">
                                <select class="select2 w-full">
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option value="2">Johnny Deep</option>
                                    <option value="3">Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Nested</label>
                            <div class="mt-2">
                                <select class="select2 block w-full border mt-2">
                                    <optgroup label="American Actors">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </optgroup>
                                    <optgroup label="American Actresses">
                                        <option value="1">Scarlett Johansson</option>
                                        <option value="2">Jessica Alba</option>
                                        <option value="3">Jennifer Lawrence</option>
                                        <option value="4">Emma Stone</option>
                                        <option value="5">Angelina Jolie</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-select" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-select">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Basic</label>
                                            <div class="mt-2">
                                                <select class="select2 w-full">
                                                    <option value="1">Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option value="3">Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Nested</label>
                                            <div class="mt-2">
                                                <select class="select2 block w-full border mt-2">
                                                    <optgroup label="American Actors">
                                                        <option value="1">Leonardo DiCaprio</option>
                                                        <option value="2">Johnny Deep</option>
                                                        <option value="3">Robert Downey, Jr</option>
                                                        <option value="4">Samuel L. Jackson</option>
                                                        <option value="5">Morgan Freeman</option>
                                                    </optgroup>
                                                    <optgroup label="American Actresses">
                                                        <option value="1">Scarlett Johansson</option>
                                                        <option value="2">Jessica Alba</option>
                                                        <option value="3">Jennifer Lawrence</option>
                                                        <option value="4">Emma Stone</option>
                                                        <option value="5">Angelina Jolie</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Select -->
            <!-- BEGIN: Multi Select -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Multi Select</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#multi-select" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="multi-select">
                    <div class="preview">
                        <select data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
                            <option value="1" selected>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-multi-select" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-multi-select">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <select data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
                                            <option value="1" selected>Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3" selected>Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Multi Select -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input Group -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Input Group</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#input-group" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="input-group">
                    <div class="preview">
                        <div class="flex">
                            <div class="z-10 rounded-l w-10 flex items-center justify-center bg-gray-100 border text-gray-600 -mr-1">@</div>
                            <select class="select2 w-full">
                                <option value="1">Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3">Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </select>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-group" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input-group">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="flex">
                                            <div class="z-10 rounded-l w-10 flex items-center justify-center bg-gray-100 border text-gray-600 -mr-1">@</div>
                                            <select class="select2 w-full">
                                                <option value="1">Leonardo DiCaprio</option>
                                                <option value="2">Johnny Deep</option>
                                                <option value="3">Robert Downey, Jr</option>
                                                <option value="4">Samuel L. Jackson</option>
                                                <option value="5">Morgan Freeman</option>
                                            </select>
                                        </div>
                                    ') }}    
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Group -->
            <!-- BEGIN: Hiding Search Box -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Hiding Search Box</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#hiding-searchbox" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="hiding-searchbox">
                    <div class="preview">
                        <select data-hide-search="true" class="select2 w-full">
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-hiding-searchbox" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-hiding-searchbox">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <select data-hide-search="true" class="select2 w-full">
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hiding Search Box -->
        </div>
    </div>    
@endsection