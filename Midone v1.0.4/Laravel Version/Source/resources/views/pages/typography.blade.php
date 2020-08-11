@extends('../layout/' . $layout)

@section('subhead')
    <title>Typography - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Typography</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: HEADING -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Heading</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#heading" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="heading">
                    <div class="preview">
                        <div>
                            <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                            <h2 class="text-3xl font-medium leading-none mt-3">h2. Heading 2</h2>
                            <h3 class="text-2xl font-medium leading-none mt-3">h3. Heading 3</h3>
                            <h4 class="text-xl font-medium leading-none mt-3">h4. Heading 4</h4>
                            <h5 class="text-lg font-medium leading-none mt-3">h5. Heading 5</h5>
                            <h6 class="font-medium leading-none mt-3">h6. Heading 6</h6>
                        </div>
                        <div class="mt-5">
                            <h1 class="text-4xl text-theme-1 font-medium leading-none">h1. Heading 1</h1>
                            <h2 class="text-3xl text-gray-700 font-medium leading-none mt-3">h2. Heading 2</h2>
                            <h3 class="text-2xl text-theme-9 font-medium leading-none mt-3">h3. Heading 3</h3>
                            <h4 class="text-xl text-theme-12 font-medium leading-none mt-3">h4. Heading 4</h4>
                            <h5 class="text-lg text-theme-6 font-medium leading-none mt-3">h5. Heading 5</h5>
                            <h6 class="text-gray-600 font-medium leading-none mt-3">h6. Heading 6</h6>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-heading" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-heading">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                                            <h2 class="text-3xl font-medium leading-none mt-3">h2. Heading 2</h2>
                                            <h3 class="text-2xl font-medium leading-none mt-3">h3. Heading 3</h3>
                                            <h4 class="text-xl font-medium leading-none mt-3">h4. Heading 4</h4>
                                            <h5 class="text-lg font-medium leading-none mt-3">h5. Heading 5</h5>
                                            <h6 class="font-medium leading-none mt-3">h6. Heading 6</h6>
                                        </div>
                                        <div class="mt-5">
                                            <h1 class="text-4xl text-theme-1 font-medium leading-none">h1. Heading 1</h1>
                                            <h2 class="text-3xl text-gray-700 font-medium leading-none mt-3">h2. Heading 2</h2>
                                            <h3 class="text-2xl text-theme-9 font-medium leading-none mt-3">h3. Heading 3</h3>
                                            <h4 class="text-xl text-theme-12 font-medium leading-none mt-3">h4. Heading 4</h4>
                                            <h5 class="text-lg text-theme-6 font-medium leading-none mt-3">h5. Heading 5</h5>
                                            <h6 class="text-gray-600 font-medium leading-none mt-3">h6. Heading 6</h6>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: HEADING -->
            <!-- BEGIN: TEXT SETTINGS -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Text Settings</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#text-settings" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="text-settings">
                    <div class="preview">
                        <div>
                            <div class="font-normal">Example text</div>
                            <div class="font-medium">Example medium text</div>
                            <div class="font-semibold">Example semibold text</div>
                            <div class="font-bold">Example bolder text</div>
                            <div class="font-extrabold">Example boldest text</div>
                        </div>
                        <div class="mt-5">
                            <div class="uppercase">Example uppercase text</div>
                            <div class="lowercase">Example lowercase text</div>
                            <div class="capitalize">Example capitalized text</div>
                            <div class="normal-case">Example cursive text</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-text-settings" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-text-settings">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <div class="font-normal">Example text</div>
                                            <div class="font-medium">Example medium text</div>
                                            <div class="font-semibold">Example semibold text</div>
                                            <div class="font-bold">Example bolder text</div>
                                            <div class="font-extrabold">Example boldest text</div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="uppercase">Example uppercase text</div>
                                            <div class="lowercase">Example lowercase text</div>
                                            <div class="capitalize">Example capitalized text</div>
                                            <div class="normal-case">Example cursive text</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: TEXT SETTINGS -->
            <!-- BEGIN: COMMON ELEMENTS -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Common Elements</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#common-elements" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="common-elements">
                    <div class="preview">
                        <div class="">You can use the mark tag to <mark class="p-1 bg-yellow-200">highlight</mark> text.</div>
                        <del class="block mt-1">This line of text is meant to be treated as deleted text.</del>
                        <s class="block mt-1">This line of text is meant to be treated as no longer accurate.</s>
                        <ins class="block mt-1">This line of text is meant to be treated as an addition to the document.</ins>
                        <u class="block mt-1">This line of text will render as underlined</u>
                        <small class="block mt-1">This line of text is meant to be treated as fine print.</small>
                        <strong class="block mt-1">This line rendered as bold text.</strong>
                        <em class="block mt-1">This line rendered as italicized text.</em>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-common-elements" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-common-elements">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="">You can use the mark tag to <mark class="p-1 bg-yellow-200">highlight</mark> text.</div>
                                        <del class="block mt-1">This line of text is meant to be treated as deleted text.</del>
                                        <s class="block mt-1">This line of text is meant to be treated as no longer accurate.</s>
                                        <ins class="block mt-1">This line of text is meant to be treated as an addition to the document.</ins>
                                        <u class="block mt-1">This line of text will render as underlined</u>
                                        <small class="block mt-1">This line of text is meant to be treated as fine print.</small>
                                        <strong class="block mt-1">This line rendered as bold text.</strong>
                                        <em class="block mt-1">This line rendered as italicized text.</em>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: COMMON ELEMENTS -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: BADGES -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Badges</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#badge" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="badge">
                    <div class="preview">
                        <div class="font-medium">Basic Badge</div>
                        <div class="mt-2">
                            <span class="text-xs px-1 rounded-full bg-theme-1 text-white mr-1">1</span>
                            <span class="text-xs px-1 rounded-full border text-gray-700 mr-1">2</span>
                            <span class="text-xs px-1 rounded-full bg-theme-9 text-white mr-1">3</span>
                            <span class="text-xs px-1 rounded-full bg-theme-12 text-white mr-1">4</span>
                            <span class="text-xs px-1 rounded-full bg-theme-6 text-white mr-1">5</span>
                            <span class="text-xs px-1 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-6">Badge Sizes</div>
                        <div class="mt-3">
                            <span class="px-2 py-1 rounded-full bg-theme-1 text-white mr-1">1</span>
                            <span class="px-2 py-1 rounded-full border text-gray-700 mr-1">2</span>
                            <span class="px-2 py-1 rounded-full bg-theme-9 text-white mr-1">3</span>
                            <span class="px-2 py-1 rounded-full bg-theme-12 text-white mr-1">4</span>
                            <span class="px-2 py-1 rounded-full bg-theme-6 text-white mr-1">5</span>
                            <span class="px-2 py-1 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                        </div>
                        <div class="mt-4">
                            <span class="px-3 py-2 rounded-full bg-theme-1 text-white mr-1">1</span>
                            <span class="px-3 py-2 rounded-full border text-gray-700 mr-1">2</span>
                            <span class="px-3 py-2 rounded-full bg-theme-9 text-white mr-1">3</span>
                            <span class="px-3 py-2 rounded-full bg-theme-12 text-white mr-1">4</span>
                            <span class="px-3 py-2 rounded-full bg-theme-6 text-white mr-1">5</span>
                            <span class="px-3 py-2 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                        </div>
                        <div class="mt-6">
                            <span class="px-4 py-3 rounded-full bg-theme-1 text-white mr-1">1</span>
                            <span class="px-4 py-3 rounded-full border text-gray-700 mr-1">2</span>
                            <span class="px-4 py-3 rounded-full bg-theme-9 text-white mr-1">3</span>
                            <span class="px-4 py-3 rounded-full bg-theme-12 text-white mr-1">4</span>
                            <span class="px-4 py-3 rounded-full bg-theme-6 text-white mr-1">5</span>
                            <span class="px-4 py-3 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-10">Square Badge</div>
                        <div class="mt-2">
                            <span class="text-xs px-1 bg-theme-1 text-white mr-1">1</span>
                            <span class="text-xs px-1 border text-gray-700 mr-1">2</span>
                            <span class="text-xs px-1 bg-theme-9 text-white mr-1">3</span>
                            <span class="text-xs px-1 bg-theme-12 text-white mr-1">4</span>
                            <span class="text-xs px-1 bg-theme-6 text-white mr-1">5</span>
                            <span class="text-xs px-1 bg-gray-200 text-gray-600 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-6">Outline Badge</div>
                        <div class="mt-4">
                            <span class="px-3 py-2 rounded-full border border-theme-1 text-theme-1 mr-1">1</span>
                            <span class="px-3 py-2 rounded-full border text-gray-700 mr-1">2</span>
                            <span class="px-3 py-2 rounded-full border border-theme-9 text-theme-9 mr-1">3</span>
                            <span class="px-3 py-2 rounded-full border border-theme-12 text-theme-12 mr-1">4</span>
                            <span class="px-3 py-2 rounded-full border border-theme-6 text-theme-6 mr-1">5</span>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-badge" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-badge">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="font-medium">Basic Badge</div>
                                        <div class="mt-2">
                                            <span class="text-xs px-1 rounded-full bg-theme-1 text-white mr-1">1</span>
                                            <span class="text-xs px-1 rounded-full border text-gray-700 mr-1">2</span>
                                            <span class="text-xs px-1 rounded-full bg-theme-9 text-white mr-1">3</span>
                                            <span class="text-xs px-1 rounded-full bg-theme-12 text-white mr-1">4</span>
                                            <span class="text-xs px-1 rounded-full bg-theme-6 text-white mr-1">5</span>
                                            <span class="text-xs px-1 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-6">Badge Sizes</div>
                                        <div class="mt-3">
                                            <span class="px-2 py-1 rounded-full bg-theme-1 text-white mr-1">1</span>
                                            <span class="px-2 py-1 rounded-full border text-gray-700 mr-1">2</span>
                                            <span class="px-2 py-1 rounded-full bg-theme-9 text-white mr-1">3</span>
                                            <span class="px-2 py-1 rounded-full bg-theme-12 text-white mr-1">4</span>
                                            <span class="px-2 py-1 rounded-full bg-theme-6 text-white mr-1">5</span>
                                            <span class="px-2 py-1 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                                        </div>
                                        <div class="mt-4">
                                            <span class="px-3 py-2 rounded-full bg-theme-1 text-white mr-1">1</span>
                                            <span class="px-3 py-2 rounded-full border text-gray-700 mr-1">2</span>
                                            <span class="px-3 py-2 rounded-full bg-theme-9 text-white mr-1">3</span>
                                            <span class="px-3 py-2 rounded-full bg-theme-12 text-white mr-1">4</span>
                                            <span class="px-3 py-2 rounded-full bg-theme-6 text-white mr-1">5</span>
                                            <span class="px-3 py-2 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                                        </div>
                                        <div class="mt-6">
                                            <span class="px-4 py-3 rounded-full bg-theme-1 text-white mr-1">1</span>
                                            <span class="px-4 py-3 rounded-full border text-gray-700 mr-1">2</span>
                                            <span class="px-4 py-3 rounded-full bg-theme-9 text-white mr-1">3</span>
                                            <span class="px-4 py-3 rounded-full bg-theme-12 text-white mr-1">4</span>
                                            <span class="px-4 py-3 rounded-full bg-theme-6 text-white mr-1">5</span>
                                            <span class="px-4 py-3 rounded-full bg-gray-200 text-gray-600 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-10">Square Badge</div>
                                        <div class="mt-2">
                                            <span class="text-xs px-1 bg-theme-1 text-white mr-1">1</span>
                                            <span class="text-xs px-1 border text-gray-700 mr-1">2</span>
                                            <span class="text-xs px-1 bg-theme-9 text-white mr-1">3</span>
                                            <span class="text-xs px-1 bg-theme-12 text-white mr-1">4</span>
                                            <span class="text-xs px-1 bg-theme-6 text-white mr-1">5</span>
                                            <span class="text-xs px-1 bg-gray-200 text-gray-600 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-6">Outline Badge</div>
                                        <div class="mt-4">
                                            <span class="px-3 py-2 rounded-full border border-theme-1 text-theme-1 mr-1">1</span>
                                            <span class="px-3 py-2 rounded-full border text-gray-700 mr-1">2</span>
                                            <span class="px-3 py-2 rounded-full border border-theme-9 text-theme-9 mr-1">3</span>
                                            <span class="px-3 py-2 rounded-full border border-theme-12 text-theme-12 mr-1">4</span>
                                            <span class="px-3 py-2 rounded-full border border-theme-6 text-theme-6 mr-1">5</span>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BADGES -->
            <!-- BEGIN: SEPARATOR -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Separator</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#separator" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="separator">
                    <div class="preview">
                        <div class="w-full border-t border-gray-200 border-dashed"></div>
                        <div class="w-full border-t border-gray-200 mt-5"></div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-separator" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-separator">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full border-t border-gray-200 border-dashed"></div>
                                        <div class="w-full border-t border-gray-200 mt-5"></div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: SEPARATOR -->
            <!-- BEGIN: Devider -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Devider</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#devider" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="devider">
                    <div class="preview">
                        <div class="w-full flex justify-center border-t border-gray-200 mt-2">
                            <div class="bg-white px-5 -mt-3 text-gray-600">or</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-devider" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-devider">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full flex justify-center border-t border-gray-200 mt-2">
                                            <div class="bg-white px-5 -mt-3 text-gray-600">or</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Devider -->
            <!-- BEGIN: Links -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Links</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#link" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="link">
                    <div class="preview">
                        <div>
                            <a href="" class="text-theme-1 block font-normal">Example text</a>
                            <a href="" class="text-theme-1 block font-medium">Example medium text</a>
                            <a href="" class="text-theme-1 block font-semibold">Example semibold text</a>
                            <a href="" class="text-theme-1 block font-bold">Example bolder text</a>
                            <a href="" class="text-theme-1 block font-extrabold">Example boldest text</a>
                        </div>
                        <div class="mt-5">
                            <a href="" class="text-theme-1 block">Primary state</a>
                            <a href="" class="text-gray-700 block">Secondary state</a>
                            <a href="" class="text-theme-9 block">Success state</a>
                            <a href="" class="text-theme-12 block">Warning state</a>
                            <a href="" class="text-theme-6 block">Danger state</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-link" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-link">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <a href="" class="text-theme-1 block font-normal">Example text</a>
                                            <a href="" class="text-theme-1 block font-medium">Example medium text</a>
                                            <a href="" class="text-theme-1 block font-semibold">Example semibold text</a>
                                            <a href="" class="text-theme-1 block font-bold">Example bolder text</a>
                                            <a href="" class="text-theme-1 block font-extrabold">Example boldest text</a>
                                        </div>
                                        <div class="mt-5">
                                            <a href="" class="text-theme-1 block">Primary state</a>
                                            <a href="" class="text-gray-700 block">Secondary state</a>
                                            <a href="" class="text-theme-9 block">Success state</a>
                                            <a href="" class="text-theme-12 block">Warning state</a>
                                            <a href="" class="text-theme-6 block">Danger state</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Links -->
        </div>
    </div>    
@endsection