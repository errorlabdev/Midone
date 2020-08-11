@extends('../layout/' . $layout)

@section('subhead')
    <title>Invoice Layout - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Invoice Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="button text-white bg-theme-1 shadow-md mr-2">Print</button>
            <div class="dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-gray-200 text-center sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-theme-1 font-semibold text-3xl">INVOICE</div>
                <div class="mt-2">
                    Receipt <span class="font-medium">#1923195</span>
                </div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
            <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                <div class="">
                    <div class="text-base text-gray-600">Client Details</div>
                    <div class="text-lg font-medium text-theme-1 mt-2">Arnold Schwarzenegger</div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
                </div>
                <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-gray-600">Payment to</div>
                    <div class="text-lg font-medium text-theme-1 mt-2">Left4code</div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 whitespace-no-wrap">DESCRIPTION</th>
                            <th class="border-b-2 text-right whitespace-no-wrap">QTY</th>
                            <th class="border-b-2 text-right whitespace-no-wrap">PRICE</th>
                            <th class="border-b-2 text-right whitespace-no-wrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b">
                                <div class="font-medium whitespace-no-wrap">Midone Laravel Admin Dashboard Starter Kit</div>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">Regular License</div>
                            </td>
                            <td class="text-right border-b w-32">2</td>
                            <td class="text-right border-b w-32">$25</td>
                            <td class="text-right border-b w-32 font-medium">$50</td>
                        </tr>
                        <tr>
                            <td class="border-b">
                                <div class="font-medium whitespace-no-wrap">Vuejs Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">Regular License</div>
                            </td>
                            <td class="text-right border-b w-32">1</td>
                            <td class="text-right border-b w-32">$25</td>
                            <td class="text-right border-b w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td class="border-b">
                                <div class="font-medium whitespace-no-wrap">React Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">Regular License</div>
                            </td>
                            <td class="text-right border-b w-32">1</td>
                            <td class="text-right border-b w-32">$25</td>
                            <td class="text-right border-b w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="font-medium whitespace-no-wrap">Laravel Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">Regular License</div>
                            </td>
                            <td class="text-right w-32">3</td>
                            <td class="text-right w-32">$25</td>
                            <td class="text-right w-32 font-medium">$75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-gray-600">Bank Transfer</div>
                <div class="text-lg text-theme-1 font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-gray-600">Total Amount</div>
                <div class="text-xl text-theme-1 font-medium mt-2">$20.600.00</div>
                <div class="mt-1 tetx-xs">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->
@endsection