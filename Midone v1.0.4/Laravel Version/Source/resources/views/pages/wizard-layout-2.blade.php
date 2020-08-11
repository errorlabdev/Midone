@extends('../layout/' . $layout)

@section('subhead')
    <title>Wizard - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="px-5 sm:px-20">
            <div class="intro-x flex items-center">
                <button class="w-10 h-10 rounded-full button text-white bg-theme-1">1</button>
                <div class="font-medium text-base ml-3">Create New Account</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">2</button>
                <div class="text-base text-gray-700 ml-3">Setup Your Profile</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">3</button>
                <div class="text-base text-gray-700 ml-3">Setup Your Business Details</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">4</button>
                <div class="text-base text-gray-700 ml-3">Setup Billing Account</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">5</button>
                <div class="text-base text-gray-700 ml-3">Finalize your purchase</div>
            </div>
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