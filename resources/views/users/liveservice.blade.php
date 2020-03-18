@extends('layouts.website')
@section('title', 'Dasboard')

@push('page-title')
    Video Center
@endpush
@push('custom-styles')
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
@endpush
@push('page-content')

<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="grid grid-rows-2 md:grid-cols-4 gap-2">
        <div class="col-span-3 row-span-2">
            <div class="mb-2 h-auto md:w-full lg:w-11/12 bg-black flex justify-center items-center">
                <video class="video-js vjs-big-play-centered vjs-16-9" data-setup='{"controls": true, "autoplay": true, "preload": "auto"}'>
                    <source src="https://immout.netromedia.com/Superscreen/nungua/playlist.m3u8" type="video/mp4">
                    
                  </video>
            </div>
            <div class="p-2 lg:p-0 xl:p-0 flex flex-row justify-between md:w-11/12 w-full">
                <div class="flex flex-col w-8/12">
                    <p class="pt-4 pb-1 text-lg text-gray-700">Sunday Service with Pastor Earnest</p>
                    <p class="pb-4 pt-1 text text-gray-500">Feb 3, 2020</p>
                    <div class="sm:col-span-6">
                        <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                          comment
                        </label>
                        <div class="mt-1">
                          <textarea id="about" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 md:w-full lg:w-12/12"></textarea>
                          <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center shadow-md px-8 py-2 my-4 border border-transparent text-sm leading-5 font-medium rounded-full  text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                              Submit
                            </button>
                          </span>                  
                        </div>
                        <p class="mt-2 text-sm text-gray-500">post your thoughts here.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="">
                    <button  x-on:click="open = true" x-on:click.away="open = false"  type="button" class="inline-flex items-center shadow-md px-8 py-2 my-4 border border-transparent text-sm leading-5 font-medium rounded-full  text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        Give Online
                      </button>  
                </div>
               
            </div>
            <div class="md:w-11/12 my-4">
                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <ul>
                      <li>
                        <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                          <div class="flex  flex-col items-start px-4 py-4 sm:px-6">
                            <div>
                                <div class="min-w-0 flex-1 flex items-center">
                                    <div class="flex-shrink-0">
                                        {{-- <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" /> --}}
                                        <div class="h-8 w-8 rounded-full bg-white">
                                            <i class="las la-user-alt text-3xl text-indigo-600"></i>
                                          </div>
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <div class="text-sm leading-5 font-medium text-indigo-600 truncate">Thomas Cooper</div>
                                        </div>
                                    </div>
                             </div>
                             <div class="py-2 text-sm text-gray-500">
                                cepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. 
                                Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                             </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="border-t border-gray-200">
                        <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="flex  flex-col items-start px-4 py-4 sm:px-6">
                              <div>
                                  <div class="min-w-0 flex-1 flex items-center">
                                      <div class="flex-shrink-0">
                                          {{-- <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" /> --}}
                                          <div class="h-8 w-8 rounded-full bg-white">
                                            <i class="las la-user-alt text-3xl text-indigo-600"></i>
                                          </div>
                                      </div>
                                      <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                          <div>
                                              <div class="text-sm leading-5 font-medium text-indigo-600 truncate">Eben Otoo</div>
                                          </div>
                                      </div>
                               </div>
                               <div class="py-2 text-sm text-gray-500">
                                  cepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. 
                                  Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                               </div>
                              </div>
                            </div>
                          </a>
                      </li>
                    </ul>
                  </div> 
            </div>
        </div>
        <div class="col-span-1 row-span-2 m-1 lg:m-0 xl:m-0 flex md:flex-col flex-wrap">
            <div class="h-auto w-72 my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                <span class="rounded-full bg-white">
                    <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                </span>
                <p class="text-lg mt-2 font-bold px-4 max-w-xl">Super Sunday service with Pastor Earnest</p>
            </div>
            <div class="w-72 h-auto my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                <span class="rounded-full bg-white">
                    <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                </span>
                <p class="text-lg mt-2 font-bold px-4">Mid-Week Service</p>
            </div>
            <div class="h-auto w-72 my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                <span class="rounded-full bg-white">
                    <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                </span>
                <p class="text-lg mt-2 font-bold px-4 max-w-xl">Super Sunday service with Pastor Earnest</p>
            </div>
            <div class="w-72 h-auto my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                <span class="rounded-full bg-white">
                    <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                </span>
                <p class="text-lg mt-2 font-bold px-4">Mid-Week Service</p>
            </div>
            <div class="h-auto w-72 my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                <span class="rounded-full bg-white">
                    <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                </span>
                <p class="text-lg mt-2 font-bold px-4 max-w-xl">Super Sunday service with Pastor Earnest</p>
            </div>
            <div class="w-72 h-auto my-3 py-5 bg-indigo-500 rounded-lg shadow-2xl flex flex-col text-white items-center mx-2">
                <span class="rounded-full bg-white">
                    <i class=" text-indigo-400 las la-play text-3xl p-3"></i>
                </span>
                <p class="text-lg mt-2 font-bold px-4">Mid-Week Service</p>
            </div>
        </div>
    </div>
</div>
@endpush
@push('custom-scripts')
<script src="https://vjs.zencdn.net/7.6.6/video.js"></script>

@endpush