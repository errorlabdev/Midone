@extends('../layout/' . $layout)

@section('subhead')
    <title>Button - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Buttons</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Button -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-button">
                    <div class="preview">
                        <button class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                        <button class="button w-24 mr-1 mb-2 border text-gray-700">Secondary</button>
                        <button class="button w-24 mr-1 mb-2 bg-theme-9 text-white">Success</button>
                        <button class="button w-24 mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                        <button class="button w-24 mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                        <button class="button w-24 mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                                        <button class="button w-24 mr-1 mb-2 border text-gray-700">Secondary</button>
                                        <button class="button w-24 mr-1 mb-2 bg-theme-9 text-white">Success</button>
                                        <button class="button w-24 mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                                        <button class="button w-24 mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                                        <button class="button w-24 mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Button -->
            <!-- BEGIN: Button Size -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Button Sizes</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#button-size" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="button-size">
                    <div class="preview">
                        <div>
                            <button class="button button--sm w-24 mr-1 mb-2 bg-theme-1 text-white">Small</button>
                            <button class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Medium</button>
                            <button class="button button--lg w-24 mr-1 mb-2 bg-theme-1 text-white">Large</button>
                        </div>
                        <div class="mt-5">
                            <button class="button button--sm w-24 mr-1 mb-2 border text-gray-700">Small</button>
                            <button class="button w-24 mr-1 mb-2 border text-gray-700">Medium</button>
                            <button class="button button--lg w-24 mr-1 mb-2 border text-gray-700">Large</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-size" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-button-size">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <button class="button button--sm w-24 mr-1 mb-2 bg-theme-1 text-white">Small</button>
                                            <button class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Medium</button>
                                            <button class="button button--lg w-24 mr-1 mb-2 bg-theme-1 text-white">Large</button>
                                        </div>
                                        <div class="mt-5">
                                            <button class="button button--sm w-24 mr-1 mb-2 border text-gray-700">Small</button>
                                            <button class="button w-24 mr-1 mb-2 border text-gray-700">Medium</button>
                                            <button class="button button--lg w-24 mr-1 mb-2 border text-gray-700">Large</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Button Size -->
            <!-- BEGIN: Button Link -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Working with Links</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#link-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="link-button">
                    <div class="preview">
                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-1 text-white">Link</a>
                        <a href="" class="button w-24 inline-block mr-1 mb-2 border text-gray-700">Button</a>
                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-9 text-white">Input</a>
                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-12 text-white">Submit</a>
                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-6 text-white">Reset</a>
                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-gray-200 text-gray-600">Metal</a>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-link-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-link-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-1 text-white">Link</a>
                                        <a href="" class="button w-24 inline-block mr-1 mb-2 border text-gray-700">Button</a>
                                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-9 text-white">Input</a>
                                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-12 text-white">Submit</a>
                                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-theme-6 text-white">Reset</a>
                                        <a href="" class="button w-24 inline-block mr-1 mb-2 bg-gray-200 text-gray-600">Metal</a>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Button Link -->
            <!-- BEGIN: Elevated Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Elevated Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#elevated-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="elevated-button">
                    <div class="preview">
                        <div>
                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                            <button class="button w-24 shadow-md mr-1 mb-2 text-gray-700">Secondary</button>
                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-9 text-white">Success</button>
                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                            <button class="button w-24 shadow-md mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                        </div>
                        <div class="mt-5">
                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 text-gray-700">Secondary</button>
                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-9 text-white">Success</button>
                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-elevated-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-elevated-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                                            <button class="button w-24 shadow-md mr-1 mb-2 text-gray-700">Secondary</button>
                                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-9 text-white">Success</button>
                                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                                            <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                                            <button class="button w-24 shadow-md mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                                        </div>
                                        <div class="mt-5">
                                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 text-gray-700">Secondary</button>
                                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-9 text-white">Success</button>
                                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                                            <button class="button w-24 rounded-full shadow-md mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Elevated Button -->
            <!-- BEGIN: Social Media Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Social Media Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#social-media-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="social-media-button">
                    <div class="preview flex flex-wrap">
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-32 text-white">
                            <i data-feather="facebook" class="w-4 h-4 mr-2"></i> Facebook
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-33 text-white">
                            <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-34 text-white">
                            <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-35 text-white">
                            <i data-feather="linkedin" class="w-4 h-4 mr-2"></i> Linkedin
                        </button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-social-media-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-social-media-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-32 text-white">
                                            <i data-feather="facebook" class="w-4 h-4 mr-2"></i> Facebook
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-33 text-white">
                                            <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-34 text-white">
                                            <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-35 text-white">
                                            <i data-feather="linkedin" class="w-4 h-4 mr-2"></i> Linkedin
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Social Media Button -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Outline Button -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Outline Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#outline-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="outline-button">
                    <div class="preview">
                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-1 text-theme-1">Link</button>
                        <button class="button w-24 inline-block mr-1 mb-2 border text-gray-700">Button</button>
                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-9 text-theme-9">Input</button>
                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-12 text-theme-12">Submit</button>
                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-6 text-theme-6">Reset</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-outline-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-outline-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-1 text-theme-1">Link</button>
                                        <button class="button w-24 inline-block mr-1 mb-2 border text-gray-700">Button</button>
                                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-9 text-theme-9">Input</button>
                                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-12 text-theme-12">Submit</button>
                                        <button class="button w-24 inline-block mr-1 mb-2 border border-theme-6 text-theme-6">Reset</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Outline Button -->
            <!-- BEGIN: Loading Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Loading State Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#loading-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="loading-button">
                    <div class="preview">
                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-1 text-white inline-flex items-center">
                            Saving <i data-loading-icon="oval" data-color="white" class="w-4 h-4 ml-auto"></i>
                        </button>
                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-9 text-white inline-flex items-center">
                            Adding <i data-loading-icon="spinning-circles" data-color="white" class="w-4 h-4 ml-auto"></i>
                        </button>
                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-12 text-white inline-flex items-center">
                            Loading <i data-loading-icon="three-dots" data-color="white" class="w-4 h-4 ml-auto"></i>
                        </button>
                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-6 text-white inline-flex items-center">
                            Deleting <i data-loading-icon="puff" data-color="white" class="w-4 h-4 ml-auto"></i>
                        </button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-loading-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-loading-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-1 text-white inline-flex items-center">
                                            Saving <i data-loading-icon="oval" data-color="white" class="w-4 h-4 ml-auto"></i>
                                        </button>
                                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-9 text-white inline-flex items-center">
                                            Adding <i data-loading-icon="spinning-circles" data-color="white" class="w-4 h-4 ml-auto"></i>
                                        </button>
                                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-12 text-white inline-flex items-center">
                                            Loading <i data-loading-icon="three-dots" data-color="white" class="w-4 h-4 ml-auto"></i>
                                        </button>
                                        <button class="button w-24 inline-block mr-1 mb-2 bg-theme-6 text-white inline-flex items-center">
                                            Deleting <i data-loading-icon="puff" data-color="white" class="w-4 h-4 ml-auto"></i>
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Loading Button -->
            <!-- BEGIN: Rounded Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Rounded Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#rounded-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="rounded-button">
                    <div class="preview">
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 border text-gray-700">Secondary</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-9 text-white">Success</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-rounded-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-rounded-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-1 text-white">Primary</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 border text-gray-700">Secondary</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-9 text-white">Success</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-12 text-white">Warning</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-6 text-white">Danger</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Rounded Button -->
            <!-- BEGIN: Soft Color Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Soft Color Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#softcolor-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="softcolor-button">
                    <div class="preview">
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-14 text-theme-10">Primary</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 border text-gray-700">Secondary</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-18 text-theme-9">Success</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-17 text-theme-11">Warning</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-31 text-theme-6">Danger</button>
                        <button class="button w-24 rounded-full mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-softcolor-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-softcolor-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-14 text-theme-10">Primary</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 border text-gray-700">Secondary</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-18 text-theme-9">Success</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-17 text-theme-11">Warning</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-theme-31 text-theme-6">Danger</button>
                                        <button class="button w-24 rounded-full mr-1 mb-2 bg-gray-200 text-gray-600">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Soft Color Button -->
            <!-- BEGIN: Icon Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Icon Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#icon-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="icon-button">
                    <div class="preview flex flex-wrap">
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white">
                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> Activity
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center border text-gray-700">
                            <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Hard Drive
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-9 text-white">
                            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> Calendar
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-12 text-white">
                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-6 text-white">
                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Trash
                        </button>
                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-gray-200 text-gray-600">
                            <i data-feather="image" class="w-4 h-4 mr-2"></i> Image
                        </button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-icon-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white">
                                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> Activity
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center border text-gray-700">
                                            <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Hard Drive
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-9 text-white">
                                            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> Calendar
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-12 text-white">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-6 text-white">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Trash
                                        </button>
                                        <button class="button w-32 mr-2 mb-2 flex items-center justify-center bg-gray-200 text-gray-600">
                                            <i data-feather="image" class="w-4 h-4 mr-2"></i> Image
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon Button -->
            <!-- BEGIN: Icon Only Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Icon Only Buttons</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#icon-only-button" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="icon-only-button">
                    <div class="preview">
                        <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i data-feather="activity" class="w-4 h-4"></i>
                            </span>
                        </button>
                        <button class="button px-2 mr-1 mb-2 border text-gray-700">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i data-feather="hard-drive" class="w-4 h-4"></i>
                            </span>
                        </button>
                        <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i data-feather="calendar" class="w-4 h-4"></i>
                            </span>
                        </button>
                        <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i data-feather="share-2" class="w-4 h-4"></i>
                            </span>
                        </button>
                        <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i data-feather="trash" class="w-4 h-4"></i>
                            </span>
                        </button>
                        <button class="button px-2 mr-1 mb-2 bg-gray-200 text-gray-600">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i data-feather="image" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-only-button" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-icon-only-button">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="button px-2 mr-1 mb-2 bg-theme-1 text-white">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i data-feather="activity" class="w-4 h-4"></i>
                                            </span>
                                        </button>
                                        <button class="button px-2 mr-1 mb-2 border text-gray-700">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i data-feather="hard-drive" class="w-4 h-4"></i>
                                            </span>
                                        </button>
                                        <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i data-feather="calendar" class="w-4 h-4"></i>
                                            </span>
                                        </button>
                                        <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i data-feather="share-2" class="w-4 h-4"></i>
                                            </span>
                                        </button>
                                        <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i data-feather="trash" class="w-4 h-4"></i>
                                            </span>
                                        </button>
                                        <button class="button px-2 mr-1 mb-2 bg-gray-200 text-gray-600">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i data-feather="image" class="w-4 h-4"></i>
                                            </span>
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon Only Button -->
        </div>
    </div>
@endsection