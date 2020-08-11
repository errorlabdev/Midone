@extends('../layout/' . $layout)

@section('subhead')
    <title>Pricing - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-2xl font-medium mt-10 text-center mr-auto">Best Price & Services</h2>
    <!-- BEGIN: Pricing Tab -->
    <div class="intro-y flex justify-center mt-6">
        <div class="pricing-tabs nav-tabs box rounded-full overflow-hidden flex">
            <a data-toggle="tab" data-target="#layout-1-monthly-fees" href="javascript:;" class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center active">Monthly Fees</a>
            <a data-toggle="tab" data-target="#layout-1-annual-fees" href="javascript:;" class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center">Annual Fees</a>
        </div>
    </div>
    <!-- END: Pricing Tab -->
    <!-- BEGIN: Pricing Content -->
    <div class="flex mt-10">
        <div class="tab-content">
            <div class="tab-content__pane flex flex-col lg:flex-row active" id="layout-1-monthly-fees">
                <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                    <div class="font-medium text-lg">Monthly Product Pricing</div>
                    <div class="mt-3 lg:text-justify text-gray-700">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-gray-700 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            60 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                        </div>
                    </div>
                    <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-gray-700 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            120 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                        </div>
                    </div>
                    <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                </div>
            </div>
            <div class="tab-content__pane flex flex-col lg:flex-row" id="layout-1-annual-fees">
                <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                    <div class="font-medium text-lg">Annual Product Pricing</div>
                    <div class="mt-3 lg:text-justify text-gray-700">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-gray-700 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            40 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                        </div>
                    </div>
                    <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-gray-700 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            90 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                        </div>
                    </div>
                    <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Pricing Content -->
    <div class="intro-y box mt-20 px-8 py-12">
        <h2 class="intro-y text-2xl font-medium text-center mr-auto">Best Price & Services</h2>
        <!-- BEGIN: Pricing Tab -->
        <div class="intro-y flex justify-center mt-6">
            <div class="pricing-tabs nav-tabs box rounded-full overflow-hidden flex">
                <a data-toggle="tab" data-target="#layout-2-monthly-fees" href="javascript:;" class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center active">Monthly Fees</a>
                <a data-toggle="tab" data-target="#layout-2-annual-fees" href="javascript:;" class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center">Annual Fees</a>
            </div>
        </div>
        <!-- END: Pricing Tab -->
        <!-- BEGIN: Pricing Content -->
        <div class="flex mt-10">
            <div class="tab-content">
                <div class="tab-content__pane flex flex-col lg:flex-row active" id="layout-2-monthly-fees">
                    <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                        <div class="font-medium text-lg">Monthly Product Pricing</div>
                        <div class="mt-3 lg:text-justify text-gray-700">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="intro-y flex-1 border-t border-b lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-gray-200 py-16 lg:ml-8">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Business</div>
                        <div class="text-gray-700 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                60 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                            </div>
                        </div>
                        <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                    <div class="intro-y flex-1 py-16">
                        <i data-feather="shopping-bag" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                        <div class="text-gray-700 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                120 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                            </div>
                        </div>
                        <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                </div>
                <div class="tab-content__pane flex flex-col lg:flex-row" id="layout-2-annual-fees">
                    <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                        <div class="font-medium text-lg">Annual Product Pricing</div>
                        <div class="mt-3 lg:text-justify text-gray-700">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="intro-y flex-1 border-t border-b lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-gray-200 py-16 lg:ml-8">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Business</div>
                        <div class="text-gray-700 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                120 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                            </div>
                        </div>
                        <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                    <div class="intro-y flex-1 py-16">
                        <i data-feather="shopping-bag" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                        <div class="text-gray-700 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                210 <span class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span>
                            </div>
                        </div>
                        <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Pricing Content -->
    </div>
@endsection