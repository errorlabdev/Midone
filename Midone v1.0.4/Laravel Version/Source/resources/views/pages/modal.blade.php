@extends('../layout/' . $layout)

@section('subhead')
    <title>Modal - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Modal</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Blank Modal -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Blank Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#blank-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="blank-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="basic-modal-preview">
                            <div class="modal__content p-10 text-center">
                                This is totally awesome blank modal!
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-blank-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-blank-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="basic-modal-preview">
                                            <div class="modal__content p-10 text-center">
                                                This is totally awesome blank modal!
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Blank Modal -->
            <!-- BEGIN: Modal Size -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Modal Size</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#modal-size" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="modal-size">
                    <div class="preview">
                        <div class="text-center text-sm-left">
                            <a href="javascript:;" data-toggle="modal" data-target="#small-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Small Modal</a>
                            <a href="javascript:;" data-toggle="modal" data-target="#medium-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Medium Modal</a>
                            <a href="javascript:;" data-toggle="modal" data-target="#large-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Large Modal</a>
                            <a href="javascript:;" data-toggle="modal" data-target="#superlarge-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Superlarge Modal</a>
                        </div>
                        <div class="modal" id="small-modal-size-preview">
                            <div class="modal__content modal__content--sm p-10 text-center">
                                This is totally awesome small modal!
                            </div>
                        </div>
                        <div class="modal" id="medium-modal-size-preview">
                            <div class="modal__content p-10 text-center">
                                This is totally awesome medium modal!
                            </div>
                        </div>
                        <div class="modal" id="large-modal-size-preview">
                            <div class="modal__content modal__content--lg p-10 text-center">
                                This is totally awesome large modal!
                            </div>
                        </div>
                        <div class="modal" id="superlarge-modal-size-preview">
                            <div class="modal__content modal__content--xl p-10 text-center">
                                This is totally awesome superlarge modal!
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-modal-size" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-modal-size">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center text-sm-left">
                                            <a href="javascript:;" data-toggle="modal" data-target="#small-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Small Modal</a>
                                            <a href="javascript:;" data-toggle="modal" data-target="#medium-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Medium Modal</a>
                                            <a href="javascript:;" data-toggle="modal" data-target="#large-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Large Modal</a>
                                            <a href="javascript:;" data-toggle="modal" data-target="#superlarge-modal-size-preview" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Superlarge Modal</a>
                                        </div>
                                        <div class="modal" id="small-modal-size-preview">
                                            <div class="modal__content modal__content--sm p-10 text-center">
                                                This is totally awesome small modal!
                                            </div>
                                        </div>
                                        <div class="modal" id="medium-modal-size-preview">
                                            <div class="modal__content p-10 text-center">
                                                This is totally awesome medium modal!
                                            </div>
                                        </div>
                                        <div class="modal" id="large-modal-size-preview">
                                            <div class="modal__content modal__content--lg p-10 text-center">
                                                This is totally awesome large modal!
                                            </div>
                                        </div>
                                        <div class="modal" id="superlarge-modal-size-preview">
                                            <div class="modal__content modal__content--xl p-10 text-center">
                                                This is totally awesome superlarge modal!
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Size -->
            <!-- BEGIN: Programmatically Show/Hide Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#programmatically-show-hide-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="programmatically-show-hide-modal">
                    <div class="preview">
                        <div class="text-center text-sm-left">
                            <a href="javascript:;" class="button mr-1 mb-2 inline-block bg-theme-1 text-white" id="programmatically-show-modal">Show Modal</a>
                        </div>
                        <div class="modal" id="programmatically-modal">
                            <div class="modal__content p-10 text-center">
                                <a href="javascript:;" class="button mr-1 inline-block bg-theme-1 text-white" id="programmatically-hide-modal">Hide Modal</a>
                                <a href="javascript:;" class="button mr-1 inline-block bg-theme-1 text-white" id="programmatically-toggle-modal">Toggle Modal</a>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-programmatically-show-hide-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-programmatically-show-hide-modal">
                                <code class="javascript cursor-texttext-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Show modal
                                        $(\'#programmatically-show-modal\').on(\'click\', function() {
                                            $(\'#programmatically-modal\').modal(\'show\')
                                        })

                                        // Hide modal
                                        $(\'#programmatically-hide-modal\').on(\'click\', function() {
                                            $(\'#programmatically-modal\').modal(\'hide\')
                                        })

                                        // Toggle modal
                                        $(\'#programmatically-toggle-modal\').on(\'click\', function() {
                                            $(\'#programmatically-modal\').modal(\'toggle\')
                                        })
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Programmatically Show/Hide Modal -->
            <!-- BEGIN: Warning Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Warning Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#warning-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="warning-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#warning-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="warning-modal-preview">
                            <div class="modal__content">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-12 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Oops...</div>
                                    <div class="text-gray-600 mt-2">Something went wrong!</div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
                                </div>
                                <div class="p-5 text-center border-t border-gray-200">
                                    <a href="" class="text-theme-1">Why do I have this issue?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-warning-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-warning-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#warning-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="warning-modal-preview">
                                            <div class="modal__content">
                                                <div class="p-5 text-center">
                                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Oops...</div>
                                                    <div class="text-gray-600 mt-2">Something went wrong!</div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
                                                </div>
                                                <div class="p-5 text-center border-t border-gray-200">
                                                    <a href="" class="text-theme-1">Why do I have this issue?</a>
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
            <!-- END: Warning Modal -->
            <!-- BEGIN: Modal With Close Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Modal With Close Button</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#button-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="button-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="button-modal-preview">
                            <div class="modal__content relative">
                                <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3">
                                    <i data-feather="x" class="w-8 h-8 text-gray-500"></i>
                                </a>
                                <div class="p-5 text-center">
                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Modal Example</div>
                                    <div class="text-gray-600 mt-2">Modal with close button</div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-button-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="button-modal-preview">
                                            <div class="modal__content relative">
                                                <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3">
                                                    <i data-feather="x" class="w-8 h-8 text-gray-500"></i>
                                                </a>
                                                <div class="p-5 text-center">
                                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Modal Example</div>
                                                    <div class="text-gray-600 mt-2">Modal with close button</div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
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
            <!-- END: Modal With Close Button -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Overlapping Modal -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Overlapping Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#overlapping-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="overlapping-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#overlapping-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="overlapping-modal-preview">
                            <div class="modal__content px-5 py-10">
                                <div class="text-center">
                                    <div class="mb-3">Click button bellow to show overlapping modal!</div>
                                    <a href="javascript:;" data-toggle="modal" data-target="#next-overlapping-modal-preview" class="button inline-block bg-theme-1 text-white">Show overlapping modal</a>
                                </div>
                                <div class="modal" id="next-overlapping-modal-preview">
                                    <div class="modal__content p-10 text-center">
                                        <div class="mb-2">This is totally awesome overlapping modal!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-overlapping-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-overlapping-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#overlapping-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="overlapping-modal-preview">
                                            <div class="modal__content px-5 py-10">
                                                <div class="text-center">
                                                    <div class="mb-3">Click button bellow to show overlapping modal!</div>
                                                    <a href="javascript:;" data-toggle="modal" data-target="#next-overlapping-modal-preview" class="button inline-block bg-theme-1 text-white">Show overlapping modal</a>
                                                </div>
                                                <div class="modal" id="next-overlapping-modal-preview">
                                                    <div class="modal__content p-10 text-center">
                                                        <div class="mb-2">This is totally awesome overlapping modal!</div>
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
            <!-- END: Overlapping Modal -->
            <!-- BEGIN: Header & Footer Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Header & Footer Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#header-footer-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="header-footer-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="header-footer-modal-preview">
                            <div class="modal__content">
                                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                                    <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
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
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>To</label>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>Subject</label>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>Has the Words</label>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>Doesn't Have</label>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label>Size</label>
                                        <select class="input w-full border mt-2 flex-1">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="px-5 py-3 text-right border-t border-gray-200">
                                    <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                    <button type="button" class="button w-20 bg-theme-1 text-white">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-footer-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-header-footer-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="header-footer-modal-preview">
                                            <div class="modal__content">
                                                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                                                    <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
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
                                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>To</label>
                                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>Subject</label>
                                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>Has the Words</label>
                                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>Doesn\'t Have</label>
                                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label>Size</label>
                                                        <select class="input w-full border mt-2 flex-1">
                                                            <option>10</option>
                                                            <option>25</option>
                                                            <option>35</option>
                                                            <option>50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="px-5 py-3 text-right border-t border-gray-200">
                                                    <button type="button" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                                    <button type="button" class="button w-20 bg-theme-1 text-white">Send</button>
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
            <!-- END: Header & Footer Modal -->
            <!-- BEGIN: Delete Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Delete Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#delete-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="delete-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="delete-modal-preview">
                            <div class="modal__content">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Are you sure?</div>
                                    <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                    <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-delete-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-delete-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="delete-modal-preview">
                                            <div class="modal__content">
                                                <div class="p-5 text-center">
                                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Are you sure?</div>
                                                    <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                                    <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
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
            <!-- END: Delete Modal -->
            <!-- BEGIN: Success Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Success Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#success-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="success-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#success-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="success-modal-preview">
                            <div class="modal__content">
                                <div class="p-5 text-center">
                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Good job!</div>
                                    <div class="text-gray-600 mt-2">You clicked the button!</div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-success-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-success-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#success-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="success-modal-preview">
                                            <div class="modal__content">
                                                <div class="p-5 text-center">
                                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Good job!</div>
                                                    <div class="text-gray-600 mt-2">You clicked the button!</div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-dismiss="modal" class="button w-24 bg-theme-1 text-white">Ok</button>
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
            <!-- END: Success Modal -->
            <!-- BEGIN: Slick Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Slick Modal</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#slick-modal" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="slick-modal">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-toggle="modal" data-target="#slick-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                        </div>
                        <div class="modal" id="slick-modal-preview">
                            <div class="modal__content">
                                <div class="p-5">
                                    <div class="slider mx-6 center-mode">
                                        <div class="h-56 px-2">
                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[0]['images'][0]) }}" />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[0]['images'][1]) }}" />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[0]['images'][2]) }}" />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[0]['images'][3]) }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-slick-modal" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-slick-modal">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-toggle="modal" data-target="#slick-modal-preview" class="button inline-block bg-theme-1 text-white">Show Modal</a>
                                        </div>
                                        <div class="modal" id="slick-modal-preview">
                                            <div class="modal__content">
                                                <div class="p-5">
                                                    <div class="slider mx-6 center-mode">
                                                        <div class="h-56 px-2">
                                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[0]['images'][0]) . '" />
                                                            </div>
                                                        </div>
                                                        <div class="h-56 px-2">
                                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[0]['images'][1]) . '" />
                                                            </div>
                                                        </div>
                                                        <div class="h-56 px-2">
                                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[0]['images'][2]) . '" />
                                                            </div>
                                                        </div>
                                                        <div class="h-56 px-2">
                                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" src="' . asset('dist/images/' . $fakers[0]['images'][3]) . '" />
                                                            </div>
                                                        </div>
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
            <!-- END: Slick Modal -->
        </div>
    </div>
@endsection