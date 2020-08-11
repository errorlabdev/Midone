@extends('../layout/' . $layout)

@section('subhead')
    <title>Toast - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Toast</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Toast -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Textual Toast</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-textual-toast" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-textual-toast">
                    <div class="preview">
                        <div class="text-center text-sm-left">
                            <button id="basic-non-sticky-toast" class="button inline-block bg-theme-1 text-white">Non Sticky Toast</button>
                            <button id="basic-sticky-toast" class="button inline-block bg-theme-1 text-white">Sticky Toast</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-textual-toast" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-textual-toast">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Non sticky version
                                        $.toast("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, consequuntur doloremque eveniet eius eaque dicta repudiandae illo ullam. Minima itaque sint magnam dolorum asperiores repudiandae dignissimos expedita, voluptatum vitae velit.")

                                        // Sticky version
                                        $.toast({
                                            text : "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, consequuntur doloremque eveniet eius eaque dicta repudiandae illo ullam. Minima itaque sint magnam dolorum asperiores repudiandae dignissimos expedita, voluptatum vitae velit.",
                                            hideAfter : false
                                        })
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Toast -->
        <!-- BEGIN: Basic Toast -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Toast using HTML as a text</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#html-textual-toast" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="html-textual-toast">
                    <div class="preview">
                        <div class="text-center text-sm-left">
                            <button id="html-non-sticky-toast" class="button inline-block bg-theme-1 text-white">Non Sticky Toast</button>
                            <button id="html-sticky-toast" class="button inline-block bg-theme-1 text-white">Sticky Toast</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-html-textual-toast" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-html-textual-toast">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Non sticky
                                        $.toast(\'Lets test some HTML stuff... <a href="#">github</a>\')

                                        // sticky
                                        $.toast({
                                            text : \'<strong>Remember!</strong> You can <span class="font-medium text-red-600">always</span> introduce your own × HTML and <span class="font-medium">CSS</span> in the toast.\',
                                            hideAfter : false
                                        })
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Toast -->
    </div>
@endsection