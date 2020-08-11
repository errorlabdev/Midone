@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label>Product Name</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Input text">
                </div>
                <div class="mt-3">
                    <label>Category</label>
                    <div class="mt-2">
                        <select data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
                            <option value="1" selected>Sport & Outdoor</option>
                            <option value="2">PC & Laptop</option>
                            <option value="3" selected>Smartphone & Tablet</option>
                            <option value="4">Photography</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Quantity</label>
                    <div class="relative mt-2">
                        <input type="text" class="input pr-12 w-full border col-span-4" placeholder="Price">
                        <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">pcs</div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Weight</label>
                    <div class="relative mt-2">
                        <input type="text" class="input pr-16 w-full border col-span-4" placeholder="Price">
                        <div class="absolute top-0 right-0 rounded-r w-16 h-full flex items-center justify-center bg-gray-100 border text-gray-600">grams</div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Price</label>
                    <div class="sm:grid grid-cols-3 gap-2">
                        <div class="relative mt-2">
                            <div class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Unit</div>
                            <div class="pl-3">
                                <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Price">
                            </div>
                        </div>
                        <div class="relative mt-2">
                            <div class="absolute top-0 left-0 rounded-l w-20 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Wholesale</div>
                            <div class="pl-3">
                                <input type="text" class="input pl-20 w-full border col-span-4" placeholder="Price">
                            </div>
                        </div>
                        <div class="relative mt-2">
                            <div class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Bulk</div>
                            <div class="pl-3">
                                <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input type="checkbox" class="input input--switch border">
                    </div>
                </div>
                <div class="mt-3">
                    <label>Textarea</label>
                    <div class="mt-2">
                        <textarea data-feature="basic" class="summernote" name="editor"></textarea>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                    <button type="button" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>    
@endsection