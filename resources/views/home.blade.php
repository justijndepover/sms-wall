@extends('layouts.default-page', ['name' => 'Home'])

@section('content')
    <div class="flex flex-col sm:flex-row mb-6">
        <div class="shadow rounded-lg bg-white p-6 flex-1 mb-3 sm:mb-0 sm:mr-3">
            <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Analytics</h2>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">73,329</h3>
        </div>

        <div class="shadow rounded-lg bg-white p-6 flex-1 mb-3 sm:mb-0 sm:mr-3">
            <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">aantal berichten</h2>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">{{ $messagecount }}</h3>
        </div>

        <div class="shadow rounded-lg bg-white p-6 flex-1">
            <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Totale winst</h2>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">€ 12,4 <small class="text-sm text-gray-600 ml-2">5 cent / sms</small></h3>
        </div>
    </div>

    <div class="shadow rounded-lg bg-white p-6 mb-6">
        <div class="sm:flex sm:flex-row items-center justify-between">
            <div class="">
                <h2 class="text-2xl font-bold leading-tight text-blue-400 mb-4">Stuur een bericht</h2>
                <p class="mb-4 text-gray-800 text-sm">Plaats een bericht op de muur vanaf je dashboard.<br>Klik op onderstaande knop en vul het tekstveld in.</p>
                <button class="rounded-lg px-6 py-3 mr-3 rounded-lg text-blue-300 bg-blue-100 hover:bg-blue-500 hover:text-blue-100 focus:outline-none focus:bg-blue-500 focus:text-blue-100 active:bg-blue-700 transition duration-150 ease-in-out">
                    <span class="text-xs leading-5 font-semibold uppercase tracking-wide">Voeg sms toe</span>
                </button>
            </div>

            <div class="mt-6 sm:mt-0">
                <svg id="060e19aa-3f7d-4f07-aa7e-820f8d371f55" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" class="w-full sm:w-64" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 870.71 691.21"><defs><linearGradient id="96d5bb21-1965-4d3e-ab37-1bcc7be514e6" x1="309.27" y1="560.72" x2="309.27" y2="406.06" gradientTransform="matrix(-1, 0, 0, 1, 616.6, 82.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.54" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient><linearGradient id="3608cfbe-4e57-42c8-8a3e-2b99e6b6c6a0" x1="-175.29" y1="157.73" x2="-175.29" y2="3.07" gradientTransform="matrix(0, -1, -1, 0, 970.73, 29.07)" xlink:href="#96d5bb21-1965-4d3e-ab37-1bcc7be514e6"/><linearGradient id="f4d6b150-3892-4d6f-bed9-22612cc59583" x1="-246.29" y1="456.25" x2="-246.29" y2="301.59" gradientTransform="matrix(0, -1, -1, 0, 1293.26, 304.09)" xlink:href="#96d5bb21-1965-4d3e-ab37-1bcc7be514e6"/><linearGradient id="675c2575-69c8-4c08-9859-0530d9a94ad2" x1="60" y1="226.17" x2="60" y2="71.51" gradientTransform="matrix(-1, 0, 0, 1, 436.24, 71.59)" xlink:href="#96d5bb21-1965-4d3e-ab37-1bcc7be514e6"/><linearGradient id="245258be-8ef2-4163-b815-3fbd211fc334" x1="435.66" y1="691.21" x2="435.66" y2="9.21" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#96d5bb21-1965-4d3e-ab37-1bcc7be514e6"/><linearGradient id="afb36fd3-f298-4117-ba9e-9f0c6a4eccfc" x1="435.66" y1="544.71" x2="435.66" y2="69.59" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#96d5bb21-1965-4d3e-ab37-1bcc7be514e6"/><linearGradient id="9b46ec67-d0ea-45ff-80f1-fe3db7b86030" x1="600.3" y1="786.69" x2="600.3" y2="565.96" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#96d5bb21-1965-4d3e-ab37-1bcc7be514e6"/></defs><title>opened</title><rect x="181.5" y="488.34" width="251.66" height="154.66" transform="translate(-313.48 7.02) rotate(-16.6)" fill="url(#96d5bb21-1965-4d3e-ab37-1bcc7be514e6)"/><rect x="184.26" y="492.57" width="243.13" height="144.34" transform="translate(-313.28 6.55) rotate(-16.6)" fill="#fff"/><g opacity="0.6"><rect x="184.56" y="532.96" width="30.93" height="22.89" transform="translate(382.63 904.55) rotate(163.4)" fill="#f55f44"/><rect x="221.97" y="570.99" width="118.78" height="7.42" transform="translate(550.57 940.64) rotate(163.4)" fill="#f55f44"/><rect x="258.42" y="584.23" width="86.61" height="4.95" transform="translate(593.88 958.32) rotate(163.4)" fill="#f55f44"/></g><rect x="812.99" y="78.53" width="154.66" height="251.66" transform="translate(354.91 934.8) rotate(-78.98)" fill="url(#3608cfbe-4e57-42c8-8a3e-2b99e6b6c6a0)"/><rect x="817.25" y="81.28" width="144.34" height="243.13" transform="translate(355.66 932.7) rotate(-78.98)" fill="#fff"/><g opacity="0.6"><rect x="789.65" y="124.32" width="30.93" height="22.89" transform="translate(1404.78 318.52) rotate(-168.98)" fill="#f55f44"/><rect x="803.74" y="196.61" width="118.78" height="7.42" transform="translate(1507.41 457.54) rotate(-168.98)" fill="#f55f44"/><rect x="832.3" y="217.92" width="86.61" height="4.95" transform="translate(1528.3 499.71) rotate(-168.98)" fill="#f55f44"/></g><rect x="837.01" y="424.55" width="154.66" height="251.66" transform="translate(-308.14 304.89) rotate(-23.45)" fill="url(#f4d6b150-3892-4d6f-bed9-22612cc59583)"/><rect x="842.9" y="427.21" width="144.34" height="243.13" transform="translate(-307.45 305.05) rotate(-23.45)" fill="#fff"/><g opacity="0.6"><rect x="907.2" y="429.86" width="30.93" height="22.89" transform="translate(720.31 1358.98) rotate(-113.45)" fill="#47e6b1"/><rect x="842.89" y="521.96" width="118.78" height="7.42" transform="translate(614.41 1458.22) rotate(-113.45)" fill="#47e6b1"/><rect x="849.48" y="544.85" width="86.61" height="4.95" transform="translate(581.28 1479.77) rotate(-113.45)" fill="#47e6b1"/></g><rect x="250.41" y="143.1" width="251.66" height="154.66" transform="translate(-216.69 34.06) rotate(-19.53)" fill="url(#675c2575-69c8-4c08-9859-0530d9a94ad2)"/><rect x="253.13" y="147.42" width="243.13" height="144.34" transform="translate(-216.5 33.5) rotate(-19.53)" fill="#fff"/><g opacity="0.6"><rect x="252.52" y="193.23" width="30.93" height="22.89" transform="translate(424.33 203.59) rotate(160.47)" fill="#6c63ff"/><rect x="291.38" y="227.07" width="118.78" height="7.42" transform="translate(593.86 226.63) rotate(160.47)" fill="#6c63ff"/><rect x="328.41" y="239.26" width="86.61" height="4.95" transform="translate(638.21 240.89) rotate(160.47)" fill="#6c63ff"/></g><polygon points="435.66 9.21 142.66 285.04 142.66 691.21 728.65 691.21 728.65 285.04 435.66 9.21" fill="url(#245258be-8ef2-4163-b815-3fbd211fc334)"/><polygon points="725.68 682.3 145.63 682.3 145.63 284.38 435.66 14.16 725.68 284.38 725.68 682.3" fill="#fff"/><rect x="233.73" y="69.59" width="403.85" height="475.12" fill="url(#afb36fd3-f298-4117-ba9e-9f0c6a4eccfc)"/><rect x="238.83" y="73.55" width="393.65" height="471.16" fill="#fff"/><polygon points="145.63 284.38 435.66 483.34 145.63 682.3 145.63 284.38" fill="#f5f5f5"/><polygon points="725.68 284.38 435.66 483.34 725.68 682.3 725.68 284.38" fill="#f5f5f5"/><path d="M310.28,786.69,588.92,569.9a18.39,18.39,0,0,1,22.75,0L890.33,786.69Z" transform="translate(-164.65 -104.4)" fill="url(#9b46ec67-d0ea-45ff-80f1-fe3db7b86030)"/><path d="M310.28,786.69,588.92,579.37a19.06,19.06,0,0,1,22.75,0L890.33,786.69Z" transform="translate(-164.65 -104.4)" fill="#fff"/><rect x="298.56" y="164.61" width="82.16" height="13.86" fill="#47e6b1"/><rect x="298.56" y="201.24" width="274.19" height="13.86" fill="#f5f5f5"/><rect x="298.56" y="224.99" width="274.19" height="13.86" fill="#f5f5f5"/><rect x="298.56" y="248.75" width="274.19" height="13.86" fill="#f5f5f5"/><rect x="298.56" y="272.5" width="274.19" height="13.86" fill="#f5f5f5"/><rect x="298.56" y="296.26" width="124.72" height="13.86" fill="#f5f5f5"/><rect x="448.03" y="296.26" width="124.72" height="13.86" fill="#6c63ff"/></svg>
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Director</div>
                                <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                Owner
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1532910404247-7ee9488d7292?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Director</div>
                                <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                Owner
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1505503693641-1926193e8d57?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Director</div>
                                <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Inactive
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                Owner
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900">Director</div>
                                <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Inactive
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                Owner
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            Previous
                        </a>
                        <a href="#"
                            class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm leading-5 text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">97</span>
                                results
                            </p>
                        </div>
                        <div>
                            <span class="relative z-0 inline-flex shadow-sm">
                                <button type="button"
                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    1
                                </button>
                                <button type="button"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    2
                                </button>
                                <button type="button"
                                    class="hidden md:inline-flex -ml-px relative items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    3
                                </button>
                                <span class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700">
                                    ...
                                </span>
                                <button type="button"
                                    class="hidden md:inline-flex -ml-px relative items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    8
                                </button>
                                <button type="button"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    9
                                </button>
                                <button type="button"
                                    class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    10
                                </button>
                                <button type="button"
                                    class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection