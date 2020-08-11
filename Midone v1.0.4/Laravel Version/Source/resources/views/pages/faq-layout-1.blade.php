@extends('../layout/' . $layout)

@section('subhead')
    <title>FAQ - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: FAQ Menu -->
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-theme-1">
            <i data-feather="shield" class="w-12 h-12 text-theme-1 mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Single Application</div>
            <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-feather="send" class="w-12 h-12 text-theme-1 mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Multi Application</div>
            <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-feather="trending-up" class="w-12 h-12 text-theme-1 mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Custom License</div>
            <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-6 box">
            <div class="flex items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
            </div>
            <div class="accordion px-5 py-1">
                <div class="accordion__pane active border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6 box">
            <div class="flex items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
            </div>
            <div class="accordion px-5 py-1">
                <div class="accordion__pane active border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6 box">
            <div class="flex items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
            </div>
            <div class="accordion px-5 py-1">
                <div class="accordion__pane active border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6 box">
            <div class="flex items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
            </div>
            <div class="accordion px-5 py-1">
                <div class="accordion__pane active border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane border-b border-gray-200 py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="accordion__pane py-4">
                    <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                    <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection