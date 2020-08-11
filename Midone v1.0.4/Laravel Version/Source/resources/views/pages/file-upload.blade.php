@extends('../layout/' . $layout)

@section('subhead')
    <title>File Upload - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Dropzone</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Single File Upload -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Single File Upload</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#single-file-upload" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="single-file-upload">
                    <div class="preview">
                        <form data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-single-file-upload" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-single-file-upload">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-gray-600">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Single File Upload -->
            <!-- BEGIN: Multiple File Upload -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Multiple File Upload</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#multiple-file-upload" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="multiple-file-upload">
                    <div class="preview">
                        <form action="/file-upload" class="dropzone border-gray-200 border-dashed">
                            <div class="fallback">
                                <input name="file" type="file" multiple/>
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-multiple-file-upload" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-multiple-file-upload">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple/>
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-gray-600">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Multiple File Upload -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: File Type Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">File Type Validation</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#file-type-validation" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="file-type-validation">
                    <div class="preview">
                        <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-file-type-validation" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-file-type-validation">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-gray-600">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: File Type Validation -->
        </div>
    </div>
@endsection