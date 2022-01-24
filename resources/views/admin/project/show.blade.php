@extends('layouts.app')
@section('content')
        <a href="{{ url()->previous() }}" type="button"
            class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                class=" mr-2 w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
            </svg>
            Back</a>
        <section class="resume py-5 mt-12 d-lg-flex justify-content-center align-items-center" id="about">
            <div class="container p-20">

                <div class="row">
                    <div class="col-lg-6 col-12 mt-auto flex justify-center mb-3">
                        <img class="w-100" src="{{ asset('images/project/' . $id->image) }}">
                    </div>
                    <div class="flex justify-center">

                        <button  type=""
                            class="cursor-pointer flex justify-center flex-col items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
                            </svg>The Image
                        </button>
                    </div>

                    <div class="col-lg-6 col-12 mt-auto tracking-widest leading-loose">
                            <p>
                                {{ $id->title }}
                            </p>
                            <div class="flex justify-start">

                                <button  type=""
                                    class="cursor-pointer flex justify-center flex-col items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
                                    </svg>The Title
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
