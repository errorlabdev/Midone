@extends('../layout/' . $layout)

@section('subhead')
    <title>Wysiwyg Editor - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Summernote</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Simple Editor -->
        <div class="col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Simple Editor</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#simple-editor" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="simple-editor">
                    <div class="preview">
                        <form method="post">
                            <textarea data-feature="basic" class="summernote" name="editor"></textarea>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-simple-editor" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-simple-editor">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form method="post">
                                            <textarea data-feature="basic" class="summernote" name="editor"></textarea>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Simple Editor -->
        <!-- BEGIN: Standard Editor -->
        <div class="col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Standard Editor</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#standard-editor" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="standard-editor">
                    <div class="preview">
                        <form method="post">
                            <textarea class="summernote" name="editor"></textarea>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-standard-editor" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-standard-editor">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form method="post">
                                            <textarea class="summernote" name="editor"></textarea>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Standard Editor -->
        <!-- BEGIN: Fully Featured -->
        <div class="col-span-12">
            <div class="box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Fully Featured</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#full-featured" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="full-featured">
                    <div class="preview">
                        <form method="post">
                            <textarea data-feature="all" class="summernote" name="editor"></textarea>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-full-featured" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-full-featured">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form method="post">
                                            <textarea data-feature="all" class="summernote" name="editor"></textarea>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Fully Featured -->
    </div>    
@endsection