<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> -->




                <div class=" overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Link</th>
                <th scope="col" class="px-6 py-3">Size</th>
                <th scope="col" class="px-6 py-3">device</th>
                <th scope="col" class="px-6 py-3">release date</th>
                <th scope="col" class="px-6 py-3">version</th>
                <th scope="col" class="px-6 py-3">Comments</th>
                <th scope="col" class="px-6 py-3">md5</th>
                <th scope="col" class="px-6 py-3">More</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $releaselist as $id=>$dev )
                
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <td class="px-6 py-4">
                    {{$id}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$dev->name}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('downloadpath',$dev->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">download</a>
                </td>
                <td class="px-6 py-4">
                    {{convert_filesize($dev->file_size)}}
                </td>
                <td class="px-6 py-4 ">
                    {{$dev->device}}
                </td>
                <td class="px-6 py-4 ">
                    {{$dev->releasedate}}
                </td>
                <td class="px-6 py-4 ">
                    {{$dev->version}}
                </td>
                <td class="px-6 py-4 ">
                    {{$dev->comment}}
                </td>
                <td class="px-6 py-4 ">
                    <label data-popover-target="popover-default"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" for="popover-default">md5</label>
                    
                    <div data-popover id="popover-default" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
                        </div>
                        <div class="py-2 ">
                            <p>{{$dev->md5}}</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </td>
                <td class="px-6 py-4 ">
                    ...
                </td>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>




            </div>
        </div>
    </div>
</x-app-layout>
