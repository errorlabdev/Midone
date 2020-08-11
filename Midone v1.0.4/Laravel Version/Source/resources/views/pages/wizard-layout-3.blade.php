@extends('../layout/' . $layout)

@section('subhead')
    <title>Wizard - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-white bg-theme-1">1</button>
                <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Account</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">2</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Setup Your Profile</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">3</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Setup Your Business Details</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">4</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Setup Billing Account</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">5</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Finalize your purchase</div>
            </div>
            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 absolute mt-5"></div>
        </div>
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
            <div class="font-medium text-base">Profile Settings</div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">From</div>
                    <input type="text" class="input w-full border flex-1" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">To</div>
                    <input type="text" class="input w-full border flex-1" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Subject</div>
                    <input type="text" class="input w-full border flex-1" placeholder="Important Meeting">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Has the Words</div>
                    <input type="text" class="input w-full border flex-1" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Doesn't Have</div>
                    <input type="text" class="input w-full border flex-1" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Size</div>
                    <select class="input w-full border flex-1">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="button w-24 justify-center block bg-gray-200 text-gray-600">Previous</button>
                    <button class="button w-24 justify-center block bg-theme-1 text-white ml-2">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Wizard Layout -->
@endsection