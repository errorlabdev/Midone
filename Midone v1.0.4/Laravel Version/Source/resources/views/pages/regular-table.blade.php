@extends('../layout/' . $layout)

@section('subhead')
    <title>Regular Table - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Table</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Table -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Basic Table</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#basic-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b">1</td>
                                        <td class="border-b">Angelina</td>
                                        <td class="border-b">Jolie</td>
                                        <td class="border-b">@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">2</td>
                                        <td class="border-b">Brad</td>
                                        <td class="border-b">Pitt</td>
                                        <td class="border-b">@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">3</td>
                                        <td class="border-b">Charlie</td>
                                        <td class="border-b">Hunnam</td>
                                        <td class="border-b">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table mt-5">
                                <thead>
                                    <tr class="bg-gray-700 text-white">
                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">#</th>
                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">First Name</th>
                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">Last Name</th>
                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-700 text-white">
                                        <td class="border-b border-gray-600">1</td>
                                        <td class="border-b border-gray-600">Angelina</td>
                                        <td class="border-b border-gray-600">Jolie</td>
                                        <td class="border-b border-gray-600">@angelinajolie</td>
                                    </tr>
                                    <tr class="bg-gray-700 text-white">
                                        <td class="border-b border-gray-600">2</td>
                                        <td class="border-b border-gray-600">Brad</td>
                                        <td class="border-b border-gray-600">Pitt</td>
                                        <td class="border-b border-gray-600">@bradpitt</td>
                                    </tr>
                                    <tr class="bg-gray-700 text-white">
                                        <td class="border-b border-gray-600">3</td>
                                        <td class="border-b border-gray-600">Charlie</td>
                                        <td class="border-b border-gray-600">Hunnam</td>
                                        <td class="border-b border-gray-600">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-basic-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-b">1</td>
                                                        <td class="border-b">Angelina</td>
                                                        <td class="border-b">Jolie</td>
                                                        <td class="border-b">@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">2</td>
                                                        <td class="border-b">Brad</td>
                                                        <td class="border-b">Pitt</td>
                                                        <td class="border-b">@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">3</td>
                                                        <td class="border-b">Charlie</td>
                                                        <td class="border-b">Hunnam</td>
                                                        <td class="border-b">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table mt-5">
                                                <thead>
                                                    <tr class="bg-gray-700 text-white">
                                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">#</th>
                                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">First Name</th>
                                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">Last Name</th>
                                                        <th class="border-b-2 border-gray-600 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-gray-700 text-white">
                                                        <td class="border-b border-gray-600">1</td>
                                                        <td class="border-b border-gray-600">Angelina</td>
                                                        <td class="border-b border-gray-600">Jolie</td>
                                                        <td class="border-b border-gray-600">@angelinajolie</td>
                                                    </tr>
                                                    <tr class="bg-gray-700 text-white">
                                                        <td class="border-b border-gray-600">2</td>
                                                        <td class="border-b border-gray-600">Brad</td>
                                                        <td class="border-b border-gray-600">Pitt</td>
                                                        <td class="border-b border-gray-600">@bradpitt</td>
                                                    </tr>
                                                    <tr class="bg-gray-700 text-white">
                                                        <td class="border-b border-gray-600">3</td>
                                                        <td class="border-b border-gray-600">Charlie</td>
                                                        <td class="border-b border-gray-600">Hunnam</td>
                                                        <td class="border-b border-gray-600">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Bordered Table</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#bordered-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="bordered-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border border-b-2 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border">1</td>
                                        <td class="border">Angelina</td>
                                        <td class="border">Jolie</td>
                                        <td class="border">@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td class="border">2</td>
                                        <td class="border">Brad</td>
                                        <td class="border">Pitt</td>
                                        <td class="border">@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td class="border">3</td>
                                        <td class="border">Charlie</td>
                                        <td class="border">Hunnam</td>
                                        <td class="border">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-bordered-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-bordered-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border border-b-2 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border">1</td>
                                                        <td class="border">Angelina</td>
                                                        <td class="border">Jolie</td>
                                                        <td class="border">@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border">2</td>
                                                        <td class="border">Brad</td>
                                                        <td class="border">Pitt</td>
                                                        <td class="border">@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border">3</td>
                                                        <td class="border">Charlie</td>
                                                        <td class="border">Hunnam</td>
                                                        <td class="border">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Bordered Table -->
            <!-- BEGIN: Hoverable Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Hoverable Table</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#hoverable-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="hoverable-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border border-b-2 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-200">
                                        <td class="border">1</td>
                                        <td class="border">Angelina</td>
                                        <td class="border">Jolie</td>
                                        <td class="border">@angelinajolie</td>
                                    </tr>
                                    <tr class="hover:bg-gray-200">
                                        <td class="border">2</td>
                                        <td class="border">Brad</td>
                                        <td class="border">Pitt</td>
                                        <td class="border">@bradpitt</td>
                                    </tr>
                                    <tr class="hover:bg-gray-200">
                                        <td class="border">3</td>
                                        <td class="border">Charlie</td>
                                        <td class="border">Hunnam</td>
                                        <td class="border">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-hoverable-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-hoverable-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border border-b-2 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="hover:bg-gray-200">
                                                        <td class="border">1</td>
                                                        <td class="border">Angelina</td>
                                                        <td class="border">Jolie</td>
                                                        <td class="border">@angelinajolie</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-200">
                                                        <td class="border">2</td>
                                                        <td class="border">Brad</td>
                                                        <td class="border">Pitt</td>
                                                        <td class="border">@bradpitt</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-200">
                                                        <td class="border">3</td>
                                                        <td class="border">Charlie</td>
                                                        <td class="border">Hunnam</td>
                                                        <td class="border">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hoverable Table -->
            <!-- BEGIN: Table Row States -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Table Row States</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#row-states-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="row-states-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-theme-1 text-white">
                                        <td class="border-b">1</td>
                                        <td class="border-b">Angelina</td>
                                        <td class="border-b">Jolie</td>
                                        <td class="border-b">@angelinajolie</td>
                                    </tr>
                                    <tr class="bg-theme-6 text-white">
                                        <td class="border-b">2</td>
                                        <td class="border-b">Brad</td>
                                        <td class="border-b">Pitt</td>
                                        <td class="border-b">@bradpitt</td>
                                    </tr>
                                    <tr class="bg-theme-11 text-white">
                                        <td class="border-b">3</td>
                                        <td class="border-b">Charlie</td>
                                        <td class="border-b">Hunnam</td>
                                        <td class="border-b">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-row-states-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-row-states-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-theme-1 text-white">
                                                        <td class="border-b">1</td>
                                                        <td class="border-b">Angelina</td>
                                                        <td class="border-b">Jolie</td>
                                                        <td class="border-b">@angelinajolie</td>
                                                    </tr>
                                                    <tr class="bg-theme-6 text-white">
                                                        <td class="border-b">2</td>
                                                        <td class="border-b">Brad</td>
                                                        <td class="border-b">Pitt</td>
                                                        <td class="border-b">@bradpitt</td>
                                                    </tr>
                                                    <tr class="bg-theme-11 text-white">
                                                        <td class="border-b">3</td>
                                                        <td class="border-b">Charlie</td>
                                                        <td class="border-b">Hunnam</td>
                                                        <td class="border-b">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Row States -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Table Head Options -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Table Head Options</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#head-options-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="head-options-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="bg-gray-700 text-white">
                                        <th class="whitespace-no-wrap">#</th>
                                        <th class="whitespace-no-wrap">First Name</th>
                                        <th class="whitespace-no-wrap">Last Name</th>
                                        <th class="whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b">1</td>
                                        <td class="border-b">Angelina</td>
                                        <td class="border-b">Jolie</td>
                                        <td class="border-b">@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">2</td>
                                        <td class="border-b">Brad</td>
                                        <td class="border-b">Pitt</td>
                                        <td class="border-b">@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">3</td>
                                        <td class="border-b">Charlie</td>
                                        <td class="border-b">Hunnam</td>
                                        <td class="border-b">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table mt-5">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-700">
                                        <th class="whitespace-no-wrap">#</th>
                                        <th class="whitespace-no-wrap">First Name</th>
                                        <th class="whitespace-no-wrap">Last Name</th>
                                        <th class="whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b">1</td>
                                        <td class="border-b">Angelina</td>
                                        <td class="border-b">Jolie</td>
                                        <td class="border-b">@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">2</td>
                                        <td class="border-b">Brad</td>
                                        <td class="border-b">Pitt</td>
                                        <td class="border-b">@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">3</td>
                                        <td class="border-b">Charlie</td>
                                        <td class="border-b">Hunnam</td>
                                        <td class="border-b">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-head-options-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-head-options-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr class="bg-gray-700 text-white">
                                                        <th class="whitespace-no-wrap">#</th>
                                                        <th class="whitespace-no-wrap">First Name</th>
                                                        <th class="whitespace-no-wrap">Last Name</th>
                                                        <th class="whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-b">1</td>
                                                        <td class="border-b">Angelina</td>
                                                        <td class="border-b">Jolie</td>
                                                        <td class="border-b">@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">2</td>
                                                        <td class="border-b">Brad</td>
                                                        <td class="border-b">Pitt</td>
                                                        <td class="border-b">@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">3</td>
                                                        <td class="border-b">Charlie</td>
                                                        <td class="border-b">Hunnam</td>
                                                        <td class="border-b">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table mt-5">
                                                <thead>
                                                    <tr class="bg-gray-200 text-gray-700">
                                                        <th class="whitespace-no-wrap">#</th>
                                                        <th class="whitespace-no-wrap">First Name</th>
                                                        <th class="whitespace-no-wrap">Last Name</th>
                                                        <th class="whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-b">1</td>
                                                        <td class="border-b">Angelina</td>
                                                        <td class="border-b">Jolie</td>
                                                        <td class="border-b">@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">2</td>
                                                        <td class="border-b">Brad</td>
                                                        <td class="border-b">Pitt</td>
                                                        <td class="border-b">@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">3</td>
                                                        <td class="border-b">Charlie</td>
                                                        <td class="border-b">Hunnam</td>
                                                        <td class="border-b">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Head Options -->
            <!-- BEGIN: Responsive Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Responsive Table</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#responsive-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="responsive-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                        <th class="border-b-2 whitespace-no-wrap">Email</th>
                                        <th class="border-b-2 whitespace-no-wrap">Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b whitespace-no-wrap">1</td>
                                        <td class="border-b whitespace-no-wrap">Angelina</td>
                                        <td class="border-b whitespace-no-wrap">Jolie</td>
                                        <td class="border-b whitespace-no-wrap">@angelinajolie</td>
                                        <td class="border-b whitespace-no-wrap">angelinajolie@gmail.com</td>
                                        <td class="border-b whitespace-no-wrap">260 W. Storm Street New York, NY 10025.</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b whitespace-no-wrap">2</td>
                                        <td class="border-b whitespace-no-wrap">Brad</td>
                                        <td class="border-b whitespace-no-wrap">Pitt</td>
                                        <td class="border-b whitespace-no-wrap">@bradpitt</td>
                                        <td class="border-b whitespace-no-wrap">bradpitt@gmail.com</td>
                                        <td class="border-b whitespace-no-wrap">47 Division St. Buffalo, NY 14241.</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b whitespace-no-wrap">3</td>
                                        <td class="border-b whitespace-no-wrap">Charlie</td>
                                        <td class="border-b whitespace-no-wrap">Hunnam</td>
                                        <td class="border-b whitespace-no-wrap">@charliehunnam</td>
                                        <td class="border-b whitespace-no-wrap">charliehunnam@gmail.com</td>
                                        <td class="border-b whitespace-no-wrap">8023 Amerige Street Harriman, NY 10926.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-responsive-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-responsive-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Email</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-b whitespace-no-wrap">1</td>
                                                        <td class="border-b whitespace-no-wrap">Angelina</td>
                                                        <td class="border-b whitespace-no-wrap">Jolie</td>
                                                        <td class="border-b whitespace-no-wrap">@angelinajolie</td>
                                                        <td class="border-b whitespace-no-wrap">angelinajolie@gmail.com</td>
                                                        <td class="border-b whitespace-no-wrap">260 W. Storm Street New York, NY 10025.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b whitespace-no-wrap">2</td>
                                                        <td class="border-b whitespace-no-wrap">Brad</td>
                                                        <td class="border-b whitespace-no-wrap">Pitt</td>
                                                        <td class="border-b whitespace-no-wrap">@bradpitt</td>
                                                        <td class="border-b whitespace-no-wrap">bradpitt@gmail.com</td>
                                                        <td class="border-b whitespace-no-wrap">47 Division St. Buffalo, NY 14241.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b whitespace-no-wrap">3</td>
                                                        <td class="border-b whitespace-no-wrap">Charlie</td>
                                                        <td class="border-b whitespace-no-wrap">Hunnam</td>
                                                        <td class="border-b whitespace-no-wrap">@charliehunnam</td>
                                                        <td class="border-b whitespace-no-wrap">charliehunnam@gmail.com</td>
                                                        <td class="border-b whitespace-no-wrap">8023 Amerige Street Harriman, NY 10926.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Responsive Table -->
            <!-- BEGIN: Small Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Small Table</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#small-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="small-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table--sm">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b">1</td>
                                        <td class="border-b">Angelina</td>
                                        <td class="border-b">Jolie</td>
                                        <td class="border-b">@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">2</td>
                                        <td class="border-b">Brad</td>
                                        <td class="border-b">Pitt</td>
                                        <td class="border-b">@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">3</td>
                                        <td class="border-b">Charlie</td>
                                        <td class="border-b">Hunnam</td>
                                        <td class="border-b">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-small-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-small-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table table--sm">
                                                <thead>
                                                    <tr>
                                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="border-b">1</td>
                                                        <td class="border-b">Angelina</td>
                                                        <td class="border-b">Jolie</td>
                                                        <td class="border-b">@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">2</td>
                                                        <td class="border-b">Brad</td>
                                                        <td class="border-b">Pitt</td>
                                                        <td class="border-b">@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">3</td>
                                                        <td class="border-b">Charlie</td>
                                                        <td class="border-b">Hunnam</td>
                                                        <td class="border-b">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Small Table -->
            <!-- BEGIN: Striped Rows -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Striped Rows</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">Show code</div>
                        <input data-target="#striped-rows-table" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="striped-rows-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-200">
                                        <td class="border-b">1</td>
                                        <td class="border-b">Angelina</td>
                                        <td class="border-b">Jolie</td>
                                        <td class="border-b">@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b">2</td>
                                        <td class="border-b">Brad</td>
                                        <td class="border-b">Pitt</td>
                                        <td class="border-b">@bradpitt</td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="border-b">3</td>
                                        <td class="border-b">Charlie</td>
                                        <td class="border-b">Hunnam</td>
                                        <td class="border-b">@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-striped-rows-table" class="copy-code button button--sm border flex items-center text-gray-700">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code
                        </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-striped-rows-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-b-2 whitespace-no-wrap">#</th>
                                                        <th class="border-b-2 whitespace-no-wrap">First Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Last Name</th>
                                                        <th class="border-b-2 whitespace-no-wrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-gray-200">
                                                        <td class="border-b">1</td>
                                                        <td class="border-b">Angelina</td>
                                                        <td class="border-b">Jolie</td>
                                                        <td class="border-b">@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-b">2</td>
                                                        <td class="border-b">Brad</td>
                                                        <td class="border-b">Pitt</td>
                                                        <td class="border-b">@bradpitt</td>
                                                    </tr>
                                                    <tr class="bg-gray-200">
                                                        <td class="border-b">3</td>
                                                        <td class="border-b">Charlie</td>
                                                        <td class="border-b">Hunnam</td>
                                                        <td class="border-b">@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Striped Rows -->
        </div>
    </div>
@endsection