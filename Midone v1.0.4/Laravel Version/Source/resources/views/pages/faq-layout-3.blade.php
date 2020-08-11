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
                <div class="px-4 pb-3 pt-5">
                    <a class="flex rounded-lg items-center px-4 py-2 bg-theme-1 text-white font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">About Our Products</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Related License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Single Application License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Multi Application License</div>
                    </a>
                </div>
                <div class="px-4 py-3 border-t border-gray-200">
                    <a class="flex items-center px-4 py-2" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Trem of Use</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Author Fees</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Product Review</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Privacy Policy</div>
                    </a>
                </div>
                <div class="px-4 pt-3 pb-5 border-t border-gray-200">
                    <a class="flex items-center px-4 py-2" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">About Our Products</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Related License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Single Application License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> 
                        <div class="flex-1 truncate">Multi Application License</div>
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
                <div class="accordion p-5">
                    <div class="accordion__pane active border border-gray-200 p-4">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
                </div>
                <div class="accordion p-5">
                    <div class="accordion__pane active border border-gray-200 p-4">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Multi Application License</h2>
                </div>
                <div class="accordion p-5">
                    <div class="accordion__pane active border border-gray-200 p-4">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">OpenSSL Essentials: Working with SSL Certificates, Private Keys</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">Understanding IP Addresses, Subnets, and CIDR Notation</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">How To Troubleshoot Common HTTP Error Codes</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="accordion__pane border border-gray-200 p-4 mt-3">
                        <a href="javascript:;" class="accordion__pane__toggle font-medium block">An Introduction to Securing your Linux VPS</a>
                        <div class="accordion__pane__content mt-3 text-gray-700 leading-relaxed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection