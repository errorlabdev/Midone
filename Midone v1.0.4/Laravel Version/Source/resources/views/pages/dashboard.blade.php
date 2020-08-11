@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                    <a href="" class="ml-auto flex text-theme-1">
                        <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month">
                                            33% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">4.510</div>
                                <div class="text-base text-gray-600 mt-1">Item Sales</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month">
                                            2% <i data-feather="chevron-down" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                                <div class="text-base text-gray-600 mt-1">New Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month">
                                            12% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                                <div class="text-base text-gray-600 mt-1">Total Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month">
                                            22% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">152.000</div>
                                <div class="text-base text-gray-600 mt-1">Unique Visitor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Sales Report -->
            <div class="col-span-12 lg:col-span-6 mt-8">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                        <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" data-daterange="true" class="datepicker input w-full sm:w-56 box pl-10">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div class="flex flex-col xl:flex-row xl:items-center">
                        <div class="flex">
                            <div>
                                <div class="text-theme-20 text-lg xl:text-xl font-bold">$15,000</div>
                                <div class="text-gray-600">This Month</div>
                            </div>
                            <div class="w-px h-12 border border-r border-dashed border-gray-300 mx-4 xl:mx-6"></div>
                            <div>
                                <div class="text-gray-600 text-lg xl:text-xl font-medium">$10,000</div>
                                <div class="text-gray-600">Last Month</div>
                            </div>
                        </div>
                        <div class="dropdown relative xl:ml-auto mt-5 xl:mt-0">
                            <button class="dropdown-toggle button font-normal border text-white relative flex items-center text-gray-700">
                                Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> 
                            </button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 xl:right-0 z-20">
                                <div class="dropdown-box__content box p-2 overflow-y-auto h-32">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">PC & Laptop</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Smartphone</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Electronic</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Photography</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Sport</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="report-chart">
                        <canvas id="report-line-chart" height="160" class="mt-6"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->
            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                    <a href="" class="ml-auto text-theme-1 truncate">See all</a>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <canvas class="mt-3" id="report-pie-chart" height="280"></canvas>
                    <div class="mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div> 
                            <span class="truncate">17 - 30 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">62%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div> 
                            <span class="truncate">31 - 50 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">33%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div> 
                            <span class="truncate">>= 50 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">10%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Weekly Top Seller -->
            <!-- BEGIN: Sales Report -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                    <a href="" class="ml-auto text-theme-1 truncate">See all</a>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <canvas class="mt-3" id="report-donut-chart" height="280"></canvas>
                    <div class="mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div> 
                            <span class="truncate">17 - 30 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">62%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div> 
                            <span class="truncate">31 - 50 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">33%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div> 
                            <span class="truncate">>= 50 Years old</span>
                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto">10%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->
            <!-- BEGIN: Official Store -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                        <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" class="input w-full sm:w-40 box pl-10" placeholder="Filter by city">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                    <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                </div>
            </div>
            <!-- END: Official Store -->
            <!-- BEGIN: Weekly Best Sellers -->
            <div class="col-span-12 xl:col-span-4 mt-6">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                </div>
                <div class="mt-5">
                    @foreach (array_slice($fakers, 0, 4) as $faker)
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                    <div class="text-gray-600 text-xs">{{ $faker['dates'][0] }}</div>
                                </div>
                                <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                            </div>
                        </div>
                    @endforeach
                    <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 text-theme-16">View More</a>
                </div>
            </div>
            <!-- END: Weekly Best Sellers -->
            <!-- BEGIN: General Report -->
            <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                    <div class="mini-report-chart box p-5 zoom-in">
                        <div class="flex items-center">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate">Target Sales</div>
                                <div class="text-gray-600 mt-1">300 Sales</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                    <div class="mini-report-chart box p-5 zoom-in">
                        <div class="flex">
                            <div class="text-lg font-medium truncate mr-3">Social Media</div>
                            <div class="py-1 px-2 rounded-full text-xs bg-gray-200 text-gray-600 cursor-pointer ml-auto truncate">320 Followers</div>
                        </div>
                        <div class="mt-4">
                            <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                    <div class="mini-report-chart box p-5 zoom-in">
                        <div class="flex items-center">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate">New Products</div>
                                <div class="text-gray-600 mt-1">1450 Products</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                    <div class="mini-report-chart box p-5 zoom-in">
                        <div class="flex">
                            <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                            <div class="py-1 px-2 rounded-full text-xs bg-gray-200 text-gray-600 cursor-pointer ml-auto truncate">180 Campaign</div>
                        </div>
                        <div class="mt-4">
                            <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="button box flex items-center text-gray-700">
                            <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                        </button>
                        <button class="ml-3 button box flex items-center text-gray-700">
                            <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                        </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">IMAGES</th>
                                <th class="whitespace-no-wrap">PRODUCT NAME</th>
                                <th class="text-center whitespace-no-wrap">STOCK</th>
                                <th class="text-center whitespace-no-wrap">STATUS</th>
                                <th class="text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone Laravel Admin Dashboard Starter Kit" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $faker['products'][0]['name'] }}</a>
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $faker['products'][0]['category'] }}</div>
                                    </td>
                                    <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-theme-9' : 'text-theme-6' }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-theme-6" href="">
                                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                    <ul class="pagination">
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevrons-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevron-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">...</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">1</a>
                        </li>
                        <li>
                            <a class="pagination__link pagination__link--active" href="">2</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">3</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">...</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevrons-right"></i>
                            </a>
                        </li>
                    </ul>
                    <select class="w-20 input box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Seller -->
        </div>
        <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
            <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                <!-- BEGIN: Transactions -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-gray-600 text-xs">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="{{ $faker['true_false'][0] ? 'text-theme-9' : 'text-theme-6' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 text-theme-16">View More</a>
                    </div>
                </div>
                <!-- END: Transactions -->
                <!-- BEGIN: Recent Activities -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                        <a href="" class="ml-auto text-theme-1 truncate">See all</a>
                    </div>
                    <div class="report-timeline mt-5 relative">
                        <div class="intro-x relative flex items-center mb-3">
                            <div class="report-timeline__image">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-gray-600 mt-1">Has joined the team</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div class="report-timeline__image">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-gray-600">
                                    <div class="mt-1">Added 3 new photos</div>
                                    <div class="flex mt-2">
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                        </div>
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                        </div>
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                            <img alt="Midone Laravel Admin Dashboard Starter Kit" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div class="report-timeline__image">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div class="report-timeline__image">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Recent Activities -->
                <!-- BEGIN: Important Notes -->
                <div class="col-span-12 md:col-span-6 xl:col-span-12 xxl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                        <button data-carousel="important-notes" data-target="prev" class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="important-notes" data-target="next" class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="mt-5 intro-x">
                        <div class="slick-carousel box zoom-in" id="important-notes">
                            <div class="p-5">
                                <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 text-gray-600">View Notes</button>
                                    <button type="button" class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 text-gray-600">View Notes</button>
                                    <button type="button" class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 text-gray-600">View Notes</button>
                                    <button type="button" class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Important Notes -->
                <!-- BEGIN: Schedules -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                        <a href="" class="ml-auto text-theme-1 truncate flex items-center">
                            <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                        </a>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x box">
                            <div class="p-5">
                                <div class="flex">
                                    <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                    <div class="font-medium mx-auto">April</div>
                                    <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                                </div>
                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                    <div class="font-medium">Su</div>
                                    <div class="font-medium">Mo</div>
                                    <div class="font-medium">Tu</div>
                                    <div class="font-medium">We</div>
                                    <div class="font-medium">Th</div>
                                    <div class="font-medium">Fr</div>
                                    <div class="font-medium">Sa</div>
                                    <div class="py-1 rounded relative text-gray-600">29</div>
                                    <div class="py-1 rounded relative text-gray-600">30</div>
                                    <div class="py-1 rounded relative text-gray-600">31</div>
                                    <div class="py-1 rounded relative">1</div>
                                    <div class="py-1 rounded relative">2</div>
                                    <div class="py-1 rounded relative">3</div>
                                    <div class="py-1 rounded relative">4</div>
                                    <div class="py-1 rounded relative">5</div>
                                    <div class="py-1 bg-theme-18 rounded relative">6</div>
                                    <div class="py-1 rounded relative">7</div>
                                    <div class="py-1 bg-theme-1 text-white rounded relative">8</div>
                                    <div class="py-1 rounded relative">9</div>
                                    <div class="py-1 rounded relative">10</div>
                                    <div class="py-1 rounded relative">11</div>
                                    <div class="py-1 rounded relative">12</div>
                                    <div class="py-1 rounded relative">13</div>
                                    <div class="py-1 rounded relative">14</div>
                                    <div class="py-1 rounded relative">15</div>
                                    <div class="py-1 rounded relative">16</div>
                                    <div class="py-1 rounded relative">17</div>
                                    <div class="py-1 rounded relative">18</div>
                                    <div class="py-1 rounded relative">19</div>
                                    <div class="py-1 rounded relative">20</div>
                                    <div class="py-1 rounded relative">21</div>
                                    <div class="py-1 rounded relative">22</div>
                                    <div class="py-1 bg-theme-17 rounded relative">23</div>
                                    <div class="py-1 rounded relative">24</div>
                                    <div class="py-1 rounded relative">25</div>
                                    <div class="py-1 rounded relative">26</div>
                                    <div class="py-1 bg-theme-14 rounded relative">27</div>
                                    <div class="py-1 rounded relative">28</div>
                                    <div class="py-1 rounded relative">29</div>
                                    <div class="py-1 rounded relative">30</div>
                                    <div class="py-1 rounded relative text-gray-600">1</div>
                                    <div class="py-1 rounded relative text-gray-600">2</div>
                                    <div class="py-1 rounded relative text-gray-600">3</div>
                                    <div class="py-1 rounded relative text-gray-600">4</div>
                                    <div class="py-1 rounded relative text-gray-600">5</div>
                                    <div class="py-1 rounded relative text-gray-600">6</div>
                                    <div class="py-1 rounded relative text-gray-600">7</div>
                                    <div class="py-1 rounded relative text-gray-600">8</div>
                                    <div class="py-1 rounded relative text-gray-600">9</div>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 p-5">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div> 
                                    <span class="truncate">UI/UX Workshop</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">23th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div> 
                                    <span class="truncate">VueJs Frontend Development</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">10th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div> 
                                    <span class="truncate">Laravel Rest API</span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto">31th</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Schedules -->
            </div>
        </div>
    </div>
@endsection