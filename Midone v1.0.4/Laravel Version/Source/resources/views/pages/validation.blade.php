@extends('../layout/' . $layout)

@section('subhead')
    <title>Validation - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Validation</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Implementation</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-datepicker" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-datepicker">
                    <div class="preview">
                        <form class="validate-form">
                            <div>
                                <label class="flex flex-col sm:flex-row">
                                    Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
                                </label>
                                <input type="text" name="name" class="input w-full border mt-2" placeholder="John Legend" minlength="2" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row">
                                    Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, email address format</span>
                                </label>
                                <input type="email" name="email" class="input w-full border mt-2" placeholder="example@gmail.com" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row">
                                    Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 6 characters</span>
                                </label>
                                <input type="password" name="password" class="input w-full border mt-2" placeholder="secret" minlength="6" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row">
                                    Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, integer only & maximum 3 characters</span>
                                </label>
                                <input type="number" name="age" class="input w-full border mt-2" placeholder="21" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row">
                                    Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional, URL format</span>
                                </label>
                                <input type="url" name="url" class="input w-full border mt-2" placeholder="https://google.com">
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row">
                                    Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span>
                                </label>
                                <textarea class="input w-full border mt-2" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                            </div>
                            <button type="submit" class="button bg-theme-1 text-white mt-5">Register</button>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-datepicker" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-datepicker">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form class="validate-form">
                                            <div>
                                                <label class="flex flex-col sm:flex-row">
                                                    Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
                                                </label>
                                                <input type="text" name="name" class="input w-full border mt-2" placeholder="John Legend" minlength="2" required>
                                            </div>
                                            <div class="mt-3">
                                                <label class="flex flex-col sm:flex-row">
                                                    Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, email address format</span>
                                                </label>
                                                <input type="email" name="email" class="input w-full border mt-2" placeholder="example@gmail.com" required>
                                            </div>
                                            <div class="mt-3">
                                                <label class="flex flex-col sm:flex-row">
                                                    Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 6 characters</span>
                                                </label>
                                                <input type="password" name="password" class="input w-full border mt-2" placeholder="secret" minlength="6" required>
                                            </div>
                                            <div class="mt-3">
                                                <label class="flex flex-col sm:flex-row">
                                                    Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, integer only & maximum 3 characters</span>
                                                </label>
                                                <input type="number" name="age" class="input w-full border mt-2" placeholder="21" required>
                                            </div>
                                            <div class="mt-3">
                                                <label class="flex flex-col sm:flex-row">
                                                    Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional, URL format</span>
                                                </label>
                                                <input type="url" name="url" class="input w-full border mt-2" placeholder="https://google.com">
                                            </div>
                                            <div class="mt-3">
                                                <label class="flex flex-col sm:flex-row">
                                                    Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span>
                                                </label>
                                                <textarea class="input w-full border mt-2" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                                            </div>
                                            <button type="submit" class="button bg-theme-1 text-white mt-5">Register</button>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>    
@endsection