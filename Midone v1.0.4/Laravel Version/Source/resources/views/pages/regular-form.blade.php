@extends('../layout/' . $layout)

@section('subhead')
    <title>Regular Form - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Form</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Input</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#input" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="input">
                    <div class="preview">
                        <div>
                            <label>Input Text</label>
                            <input type="text" class="input w-full border mt-2" placeholder="Input text">
                        </div>
                        <div class="mt-3">
                            <label>Rounded</label>
                            <input type="text" class="input w-full rounded-full border mt-2" placeholder="Rounded">
                        </div>
                        <div class="mt-3">
                            <label>With Help</label>
                            <input type="text" class="input w-full border mt-2" placeholder="With help">
                            <div class="text-xs text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </div>
                        <div class="mt-3">
                            <label>Password</label>
                            <input type="password" class="input w-full border mt-2" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <label>Disabled</label>
                            <input type="text" class="input w-full border mt-2 bg-gray-100 cursor-not-allowed" placeholder="Disabled" disabled>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Input Text</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="Input text">
                                        </div>
                                        <div class="mt-3">
                                            <label>Rounded</label>
                                            <input type="text" class="input w-full rounded-full border mt-2" placeholder="Rounded">
                                        </div>
                                        <div class="mt-3">
                                            <label>With Help</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="With help">
                                            <div class="text-xs text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Password</label>
                                            <input type="password" class="input w-full border mt-2" placeholder="Password">
                                        </div>
                                        <div class="mt-3">
                                            <label>Disabled</label>
                                            <input type="text" class="input w-full border mt-2 bg-gray-100 cursor-not-allowed" placeholder="Disabled" disabled>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
            <!-- BEGIN: Input Sizing -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Input Sizing</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#input-sizing" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="input-sizing">
                    <div class="preview">
                        <input type="text" class="input input--sm w-full border" placeholder="Input small">
                        <input type="text" class="input w-full border mt-2" placeholder="Input normal">
                        <input type="text" class="input input--lg w-full border mt-2" placeholder="Input large">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-sizing" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input-sizing">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input type="text" class="input input--sm w-full border" placeholder="Input small">
                                        <input type="text" class="input w-full border mt-2" placeholder="Input normal">
                                        <input type="text" class="input input--lg w-full border mt-2" placeholder="Input large">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Sizing -->
            <!-- BEGIN: Input Groups -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Input Groups</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#input-groups" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="input-groups">
                    <div class="preview">
                        <div class="relative">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">@</div>
                            <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Email">
                        </div>
                        <div class="relative mt-2">
                            <input type="text" class="input pr-12 w-full border col-span-4" placeholder="Price">
                            <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">.00</div>
                        </div>
                        <div class="relative mt-2">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">@</div>
                            <input type="text" class="input px-12 w-full border col-span-4" placeholder="Price">
                            <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">.00</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-groups" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input-groups">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="relative">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">@</div>
                                            <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Email">
                                        </div>
                                        <div class="relative mt-2">
                                            <input type="text" class="input pr-12 w-full border col-span-4" placeholder="Price">
                                            <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">.00</div>
                                        </div>
                                        <div class="relative mt-2">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">@</div>
                                            <input type="text" class="input px-12 w-full border col-span-4" placeholder="Price">
                                            <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">.00</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Groups -->
            <!-- BEGIN: Input State -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Input State</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#input-state" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="input-state">
                    <div class="preview">
                        <div>
                            <label>Input Success</label>
                            <input type="text" class="input w-full border border-theme-9 mt-2" placeholder="Input text">
                            <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-gray-200"></div>
                            </div>
                            <div class="text-theme-9 mt-2">Strong password</div>
                        </div>
                        <div class="mt-3">
                            <label>Input Warning</label>
                            <input type="text" class="input w-full border border-theme-12 mt-2" placeholder="Input text">
                            <div class="text-theme-12 mt-2">Attempting to reconnect to server...</div>
                        </div>
                        <div class="mt-3">
                            <label>Input Error</label>
                            <input type="text" class="input w-full border border-theme-6 mt-2" placeholder="Input text">
                            <div class="text-theme-6 mt-2">This field is required</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-state" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input-state">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Input Success</label>
                                            <input type="text" class="input w-full border border-theme-9 mt-2" placeholder="Input text">
                                            <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                                <div class="col-span-3 h-full rounded bg-gray-200"></div>
                                            </div>
                                            <div class="text-theme-9 mt-2">Strong password</div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Input Warning</label>
                                            <input type="text" class="input w-full border border-theme-12 mt-2" placeholder="Input text">
                                            <div class="text-theme-12 mt-2">Attempting to reconnect to server...</div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Input Error</label>
                                            <input type="text" class="input w-full border border-theme-6 mt-2" placeholder="Input text">
                                            <div class="text-theme-6 mt-2">This field is required</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input State -->
            <!-- BEGIN: Select Options -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Select Options</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#select-options" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="select-options">
                    <div class="preview">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div class="sm:mt-2">
                                <select class="input input--sm border mr-2">
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <select class="input border mr-2">
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <select class="input input--lg border mr-2">
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-select-options" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-select-options">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="flex flex-col sm:flex-row items-center">
                                            <div class="sm:mt-2">
                                                <select class="input input--sm border mr-2">
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </select>
                                            </div>
                                            <div class="mt-2">
                                                <select class="input border mr-2">
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </select>
                                            </div>
                                            <div class="mt-2">
                                                <select class="input input--lg border mr-2">
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
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
            <!-- END: Select Options -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Vertical Form</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#vertical-form" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="vertical-form">
                    <div class="preview">
                        <div>
                            <label>Email</label>
                            <input type="email" class="input w-full border mt-2" placeholder="example@gmail.com">
                        </div>
                        <div class="mt-3">
                            <label>Password</label>
                            <input type="password" class="input w-full border mt-2" placeholder="secret">
                        </div>
                        <div class="flex items-center text-gray-700 mt-5">
                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                            <label class="cursor-pointer select-none" for="vertical-remember-me">Remember me</label>
                        </div>
                        <button type="button" class="button bg-theme-1 text-white mt-5">Login</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-vertical-form" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-vertical-form">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Email</label>
                                            <input type="email" class="input w-full border mt-2" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label>Password</label>
                                            <input type="password" class="input w-full border mt-2" placeholder="secret">
                                        </div>
                                        <div class="flex items-center text-gray-700 mt-5">
                                            <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                                            <label class="cursor-pointer select-none" for="vertical-remember-me">Remember me</label>
                                        </div>
                                        <button type="button" class="button bg-theme-1 text-white mt-5">Login</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Form -->
            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Horizontal Form</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#horizontal-form" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="horizontal-form">
                    <div class="preview">
                        <div class="flex flex-col sm:flex-row items-center">
                            <label class="w-full sm:w-20 sm:text-right sm:mr-5">Email</label>
                            <input type="email" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                        </div>
                        <div class="flex flex-col sm:flex-row items-center mt-3">
                            <label class="w-full sm:w-20 sm:text-right sm:mr-5">Password</label>
                            <input type="password" class="input w-full border mt-2 flex-1" placeholder="secret">
                        </div>
                        <div class="flex items-center text-gray-700 mt-5 sm:ml-20 sm:pl-5">
                            <input type="checkbox" class="input border mr-2" id="horizontal-remember-me">
                            <label class="cursor-pointer select-none" for="horizontal-remember-me">Remember me</label>
                        </div>
                        <div class="sm:ml-20 sm:pl-5 mt-5">
                            <button type="button" class="button bg-theme-1 text-white">Login</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-horizontal-form" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-horizontal-form">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="flex flex-col sm:flex-row items-center">
                                            <label class="w-full sm:w-20 sm:text-right sm:mr-5">Email</label>
                                            <input type="email" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center mt-3">
                                            <label class="w-full sm:w-20 sm:text-right sm:mr-5">Password</label>
                                            <input type="password" class="input w-full border mt-2 flex-1" placeholder="secret">
                                        </div>
                                        <div class="flex items-center text-gray-700 mt-5 sm:ml-20 sm:pl-5">
                                            <input type="checkbox" class="input border mr-2" id="horizontal-remember-me">
                                            <label class="cursor-pointer select-none" for="horizontal-remember-me">Remember me</label>
                                        </div>
                                        <div class="sm:ml-20 sm:pl-5 mt-5">
                                            <button type="button" class="button bg-theme-1 text-white">Login</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Form -->
            <!-- BEGIN: Inline Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Inline Form</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#inline-form" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="inline-form">
                    <div class="preview">
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="input w-full border col-span-4" placeholder="Input inline 1">
                            <input type="text" class="input w-full border col-span-4" placeholder="Input inline 2">
                            <input type="text" class="input w-full border col-span-4" placeholder="Input inline 3">
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-inline-form" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-inline-form">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="input w-full border col-span-4" placeholder="Input inline 1">
                                            <input type="text" class="input w-full border col-span-4" placeholder="Input inline 2">
                                            <input type="text" class="input w-full border col-span-4" placeholder="Input inline 3">
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Inline Form -->
            <!-- BEGIN: Checkbox & Switch -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Checkbox & Switch</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#checkbox-switch" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="checkbox-switch">
                    <div class="preview">
                        <div>
                            <label>Vertical Checkbox</label>
                            <div class="flex items-center text-gray-700 mt-2">
                                <input type="checkbox" class="input border mr-2" id="vertical-checkbox-chris-evans">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-chris-evans">Chris evans</label>
                            </div>
                            <div class="flex items-center text-gray-700 mt-2">
                                <input type="checkbox" class="input border mr-2" id="vertical-checkbox-liam-neeson">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-liam-neeson">Liam Neeson</label>
                            </div>
                            <div class="flex items-center text-gray-700 mt-2">
                                <input type="checkbox" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Daniel Craig</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Checkbox</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 mr-2">
                                    <input type="checkbox" class="input border mr-2" id="horizontal-checkbox-chris-evans">
                                    <label class="cursor-pointer select-none" for="horizontal-checkbox-chris-evans">Chris evans</label>
                                </div>
                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                    <input type="checkbox" class="input border mr-2" id="horizontal-checkbox-liam-neeson">
                                    <label class="cursor-pointer select-none" for="horizontal-checkbox-liam-neeson">Liam Neeson</label>
                                </div>
                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                    <input type="checkbox" class="input border mr-2" id="horizontal-checkbox-daniel-craig">
                                    <label class="cursor-pointer select-none" for="horizontal-checkbox-daniel-craig">Daniel Craig</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Switch</label>
                            <div class="mt-2">
                                <input type="checkbox" class="input input--switch border">
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-checkbox-switch" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-checkbox-switch">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Vertical Checkbox</label>
                                            <div class="flex items-center text-gray-700 mt-2">
                                                <input type="checkbox" class="input border mr-2" id="vertical-checkbox-chris-evans">
                                                <label class="cursor-pointer select-none" for="vertical-checkbox-chris-evans">Chris evans</label>
                                            </div>
                                            <div class="flex items-center text-gray-700 mt-2">
                                                <input type="checkbox" class="input border mr-2" id="vertical-checkbox-liam-neeson">
                                                <label class="cursor-pointer select-none" for="vertical-checkbox-liam-neeson">Liam Neeson</label>
                                            </div>
                                            <div class="flex items-center text-gray-700 mt-2">
                                                <input type="checkbox" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Daniel Craig</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Horizontal Checkbox</label>
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="flex items-center text-gray-700 mr-2">
                                                    <input type="checkbox" class="input border mr-2" id="horizontal-checkbox-chris-evans">
                                                    <label class="cursor-pointer select-none" for="horizontal-checkbox-chris-evans">Chris evans</label>
                                                </div>
                                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                                    <input type="checkbox" class="input border mr-2" id="horizontal-checkbox-liam-neeson">
                                                    <label class="cursor-pointer select-none" for="horizontal-checkbox-liam-neeson">Liam Neeson</label>
                                                </div>
                                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                                    <input type="checkbox" class="input border mr-2" id="horizontal-checkbox-daniel-craig">
                                                    <label class="cursor-pointer select-none" for="horizontal-checkbox-daniel-craig">Daniel Craig</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Switch</label>
                                            <div class="mt-2">
                                                <input type="checkbox" class="input input--switch border">
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Checkbox & Switch -->
            <!-- BEGIN: Radio Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Radio</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#radio" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="radio">
                    <div class="preview">
                        <div>
                            <label>Vertical Radio Button</label>
                            <div class="flex items-center text-gray-700 mt-2">
                                <input type="radio" class="input border mr-2" id="vertical-radio-chris-evans" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                <label class="cursor-pointer select-none" for="vertical-radio-chris-evans">Chris evans</label>
                            </div>
                            <div class="flex items-center text-gray-700 mt-2">
                                <input type="radio" class="input border mr-2" id="vertical-radio-liam-neeson" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                <label class="cursor-pointer select-none" for="vertical-radio-liam-neeson">Liam Neeson</label>
                            </div>
                            <div class="flex items-center text-gray-700 mt-2">
                                <input type="radio" class="input border mr-2" id="vertical-radio-daniel-craig" name="vertical_radio_button" value="vertical-radio-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-radio-daniel-craig">Daniel Craig</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Radio Button</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="flex items-center text-gray-700 mr-2">
                                    <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                    <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Chris Evans</label>
                                </div>
                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                    <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                    <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">Liam Neeson</label>
                                </div>
                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                    <input type="radio" class="input border mr-2" id="horizontal-radio-daniel-craig" name="horizontal_radio_button" value="horizontal-radio-daniel-craig">
                                    <label class="cursor-pointer select-none" for="horizontal-radio-daniel-craig">Daniel Craig</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-radio" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-radio">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Vertical Radio Button</label>
                                            <div class="flex items-center text-gray-700 mt-2">
                                                <input type="radio" class="input border mr-2" id="vertical-radio-chris-evans" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                                <label class="cursor-pointer select-none" for="vertical-radio-chris-evans">Chris evans</label>
                                            </div>
                                            <div class="flex items-center text-gray-700 mt-2">
                                                <input type="radio" class="input border mr-2" id="vertical-radio-liam-neeson" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                                <label class="cursor-pointer select-none" for="vertical-radio-liam-neeson">Liam Neeson</label>
                                            </div>
                                            <div class="flex items-center text-gray-700 mt-2">
                                                <input type="radio" class="input border mr-2" id="vertical-radio-daniel-craig" name="vertical_radio_button" value="vertical-radio-daniel-craig">
                                                <label class="cursor-pointer select-none" for="vertical-radio-daniel-craig">Daniel Craig</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Horizontal Radio Button</label>
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="flex items-center text-gray-700 mr-2">
                                                    <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                                    <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Chris Evans</label>
                                                </div>
                                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                                    <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                                    <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">Liam Neeson</label>
                                                </div>
                                                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                                                    <input type="radio" class="input border mr-2" id="horizontal-radio-daniel-craig" name="horizontal_radio_button" value="horizontal-radio-daniel-craig">
                                                    <label class="cursor-pointer select-none" for="horizontal-radio-daniel-craig">Daniel Craig</label>
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
            <!-- END: Radio Button -->
        </div>
    </div>    
@endsection