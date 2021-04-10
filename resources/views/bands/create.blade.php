@extends('layouts.app')

@section('content')
    <div>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="w-full md:flex md:justify-between items-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Add a Band
                    </h2>
                </div>
            </div>
        </header>

        <main class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 py-6 sm:px-0">
                    <div class="space-y-6">
                        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Band Details</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        We try to keep all information up to date and accurate that is why all posts
                                        are reviewed by our team, thank you for collaborating with BeProgMyApi.
                                    </p>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form class="space-y-6" action="#" method="POST">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <label for="name" class="block text-sm font-medium text-gray-700">
                                                    Name
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text"
                                                       name="name"
                                                       id="name"
                                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Caligula's Horse">
                                                </div>
                                            </div>

                                            <div class="col-span-3 sm:col-span-2">
                                                <label for="company_website" class="block text-sm font-medium text-gray-700">
                                                    Official Website
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                  https://
                                                </span>
                                                <input type="text"
                                                       name="company_website"
                                                       id="company_website"
                                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                       placeholder="caligulashorse.com">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">
                                                Band's Bio
                                            </label>
                                            <div class="mt-1">
                                                <textarea id="about"
                                                          name="about"
                                                          rows="10"
                                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                          placeholder="you@example.com"
                                                ></textarea>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Band's Photo or Logo
                                            </label>
                                            <div class="mt-2 flex items-center space-x-5">
                                              <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                  <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                              </span>
                                                <button type="button" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Select image
                                                </button>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Use a permanent address where you can receive mail.
                                    </p>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form action="#" method="POST">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                                                <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option>United States</option>
                                                    <option>Canada</option>
                                                    <option>Mexico</option>
                                                </select>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                                                <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                                <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                                                <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                                <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Decide which communications you'd like to receive and how.
                                    </p>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form class="space-y-6" action="#" method="POST">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">By Email</legend>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-start">
                                                    <div class="h-5 flex items-center">
                                                        <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comments" class="font-medium text-gray-700">Comments</label>
                                                        <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                                        <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="offers" class="font-medium text-gray-700">Offers</label>
                                                        <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div>
                                                <legend class="text-base font-medium text-gray-900">Push Notifications</legend>
                                                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                                            </div>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-center">
                                                    <input id="push_everything" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="push_everything" class="ml-3 block text-sm font-medium text-gray-700">
                                                        Everything
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="push_email" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">
                                                        Same as email
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="push_nothing" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="push_nothing" class="ml-3 block text-sm font-medium text-gray-700">
                                                        No push notifications
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                            </button>
                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
@endsection
