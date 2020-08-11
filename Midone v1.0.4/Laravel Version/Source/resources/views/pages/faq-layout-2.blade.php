@extends('../layout/' . $layout)

@section('subhead')
    <title>FAQ - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a class="flex items-center text-theme-1 font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
                <div class="p-5 border-t border-gray-200">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Trem of Use
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Author Fees
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Product Review
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Privacy Policy
                    </a>
                </div>
                <div class="p-5 border-t border-gray-200">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">About Our Products</h2>
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
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Related License</h2>
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
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
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
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection