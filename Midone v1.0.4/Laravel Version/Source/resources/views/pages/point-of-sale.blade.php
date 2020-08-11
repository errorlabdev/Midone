@extends('../layout/' . $layout)

@section('subhead')
    <title>Point of Sale - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Point of Sale</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="javascript:;" data-toggle="modal" data-target="#new-order-modal" class="button text-white bg-theme-1 shadow-md mr-2">New Order</a>
            <div class="pos-dropdown dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="chevron-down"></i>
                    </span>
                </button>
                <div class="pos-dropdown__dropdown-box dropdown-box mt-10 absolute top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                            <span class="truncate">INV-0206020 - {{ $fakers[3]['users'][0]['name'] }}</span>
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                            <span class="truncate">INV-0206022 - {{ $fakers[4]['users'][0]['name'] }}</span>
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> 
                            <span class="truncate">INV-0206021 - {{ $fakers[5]['users'][0]['name'] }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="lg:flex intro-y">
                <div class="relative text-gray-700">
                    <input type="text" class="input input--lg w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="Search item...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
                <select class="input input--lg box w-full lg:w-auto mt-3 lg:mt-0 ml-auto">
                    <option>Sort By</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lowest Price</option>
                    <option>Highest Price</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Soup</div>
                    <div class="text-gray-600">5 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box bg-theme-1 p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base text-white">Pancake & Toast</div>
                    <div class="text-theme-25">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Pasta</div>
                    <div class="text-gray-600">4 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Waffle</div>
                    <div class="text-gray-600">3 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Snacks</div>
                    <div class="text-gray-600">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Deserts</div>
                    <div class="text-gray-600">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Beverage</div>
                    <div class="text-gray-600">9 Items</div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5">
                @foreach (array_slice($fakers, 0, 8) as $faker)
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Laravel Admin Dashboard Starter Kit" src="{{ asset('dist/images/' . $faker['foods'][0]['image']) }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">{{ $faker['foods'][0]['name'] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <div class="pos__tabs nav-tabs justify-center flex">
                        <a data-toggle="tab" data-target="#ticket" href="javascript:;" class="flex-1 py-2 rounded-md text-center active">Ticket</a>
                        <a data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center">Details</a>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-content__pane active" id="ticket">
                    <div class="pos__ticket box p-2 mt-5">
                        @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                            <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="pos__ticket__item-name truncate mr-1">{{ $faker['foods'][0]['name'] }}</div> 
                                <div class="text-gray-600">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                                <div class="ml-auto">${{ $faker['totals'][0] }}</div>
                            </a>
                        @endforeach
                    </div>
                    <div class="box flex p-5 mt-5">
                        <div class="w-full relative text-gray-700">
                            <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Use coupon code...">
                            <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                        </div>
                        <button class="button text-white bg-theme-1 ml-2">Apply</button>
                    </div>
                    <div class="box p-5 mt-5">
                        <div class="flex">
                            <div class="mr-auto">Subtotal</div>
                            <div>$250</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Discount</div>
                            <div class="text-theme-6">-$20</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Tax</div>
                            <div>15%</div>
                        </div>
                        <div class="flex mt-4 pt-4 border-t border-gray-200">
                            <div class="mr-auto font-medium text-base">Charge</div>
                            <div class="font-medium text-base">$220</div>
                        </div>
                    </div>
                    <div class="flex mt-5">
                        <button class="button w-32 border border-gray-400 text-gray-600">Clear Items</button>
                        <button class="button w-32 text-white bg-theme-1 shadow-md ml-auto">Charge</button>
                    </div>
                </div>
                <div class="tab-content__pane" id="details">
                    <div class="box p-5 mt-5">
                        <div class="flex items-center border-b pb-5">
                            <div class="">
                                <div class="text-gray-600">Time</div>
                                <div>02/06/20 02:10 PM</div>
                            </div>
                            <i data-feather="clock" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b py-5">
                            <div class="">
                                <div class="text-gray-600">Customer</div>
                                <div>{{ $fakers[0]['users'][0]['name'] }}</div>
                            </div>
                            <i data-feather="user" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b py-5">
                            <div class="">
                                <div class="text-gray-600">People</div>
                                <div>3</div>
                            </div>
                            <i data-feather="users" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                        <div class="flex items-center pt-5">
                            <div class="">
                                <div class="text-gray-600">Table</div>
                                <div>21</div>
                            </div>
                            <i data-feather="mic" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Ticket -->
    </div>
    <!-- BEGIN: New Order Modal -->
    <div class="modal" id="new-order-modal">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">New Order</h2>
            </div>
            <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                <div class="col-span-12">
                    <label>Name</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Customer name">
                </div>
                <div class="col-span-12">
                    <label>Table</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Customer table">
                </div>
                <div class="col-span-12">
                    <label>Number of People</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="People">
                </div>
            </div>
            <div class="px-5 py-3 text-right border-t border-gray-200">
                <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Cancel</button>
                <button type="button" class="button w-32 bg-theme-1 text-white">Create Ticket</button>
            </div>
        </div>
    </div>
    <!-- END: New Order Modal -->
    <!-- BEGIN: Add Item Modal -->
    <div class="modal" id="add-item-modal">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">{{ $fakers[0]['foods'][0]['name'] }}</h2>
            </div>
            <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                <div class="col-span-12">
                    <label>Quantity</label>
                    <div class="flex mt-2 flex-1">
                        <button type="button" class="button w-12 border bg-gray-200 text-gray-600 mr-1">-</button>
                        <input type="text" class="input w-full border text-center" placeholder="Item quantity" value="2">
                        <button type="button" class="button w-12 border bg-gray-200 text-gray-600 ml-1">+</button>
                    </div>
                </div>
                <div class="col-span-12">
                    <label>Notes</label>
                    <textarea class="input w-full border mt-2 flex-1" placeholder="Item notes"></textarea>
                </div>
            </div>
            <div class="px-5 py-3 text-right border-t border-gray-200">
                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                <button type="button" class="button w-24 bg-theme-1 text-white">Add Item</button>
            </div>
        </div>
    </div>
    <!-- END: Add Item Modal -->
@endsection