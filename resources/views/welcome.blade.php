<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Webform Test</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <style>
        .stepper {
            display: flex;
            justify-content: space-between;
        }

        .step {
            position: relative;
            flex: 1;
            text-align: center;
        }

        .step-icon {
            background: #ddd;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 0 auto 10px;
        }

        .step-label {
            font-size: 14px;
        }

        .step-line {
            height: 2px;
            background: #ddd;
            flex: 1;
            position: relative;
            top: 12px;
        }

        .step.active .step-icon {
            background: #4CAF50;
            color: #fff;
        }

        .step.active .step-label {
            font-weight: bold;
        }

        .step-line.active {
            background: #4CAF50;
        }
    </style>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="app" class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <img src="{{ asset('logo.png') }}" alt="">

                </header>

                <main class="mt-6">



                    {{-- First Section --}}
                    <div class="container mx-auto" v-if="currentMainStep === 1">

                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <!-- Column 1 -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h2 class="text-xl font-semibold text-green-600 mb-4">SkyLink Unlimited</h2>
                                <ul class="list-disc ml-5 text-gray-700">
                                    <li>14 day money back guarantee</li>
                                    <li>Nationwide coverage</li>
                                    <li>Dual-Band Able to connect to any of the 3 Major Cell Carriers, with no SIM card
                                        needed.</li>
                                    <li>Capable of High Speed Internet</li>
                                    <li><strong>50GB to Unlimited Data</strong></li>
                                    <li><strong>Unthrottled</strong></li>
                                    <li>No installation needed, plug and play</li>
                                    <li>Support multiple devices.</li>
                                    <li>Great for traveling or home use. Easily stream video while using other devices
                                    </li>
                                </ul>
                                <p class="text-gray-800 font-bold mt-4">$199 sign-up fee*, includes device, activation
                                    and shipping. Plans starting at $59.99/mo.*</p>
                                <button @click="goToNextStep"
                                    class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">
                                    Select SkyLink Unlimited
                                </button>
                            </div>

                            <!-- Column 2 -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h2 class="text-xl font-semibold text-green-600 mb-4">"V-Red" 5G Cube</h2>
                                <ul class="list-disc ml-5 text-gray-700">
                                    <li>14 day money back guarantee</li>
                                    <li>Nationwide coverage</li>
                                    <li>Lease device equipment keeps startup costs low</li>
                                    <li>5G Compatible</li>
                                    <li><strong>Unlimited Data</strong></li>
                                    <li><strong>Unthrottled</strong> (usage over 1TB could experience slower speeds)
                                    </li>
                                    <li>High Speed Up To 200mbps</li>
                                    <li>No installation needed, plug and play</li>
                                    <li>4K video streaming</li>
                                    <li>Excellent gaming latency</li>
                                    <li>Supports up to 64 connected devices.</li>
                                </ul>
                                <p class="text-gray-800 font-bold mt-4">$199 sign-up fee, includes device, activation
                                    and shipping. Plan $119/mo.*</p>
                                <button class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">
                                    Select 5G Cube
                                </button>
                            </div>

                            <!-- Column 3 -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h2 class="text-xl font-semibold text-green-600 mb-4">E-Sim</h2>
                                <ul class="list-disc ml-5 text-gray-700">
                                    <li>14 day money back guarantee</li>
                                    <li>No SIM card needed</li>
                                    <li>Able to connect to any of the 3 Major Cell Carriers, so you can work, or play
                                        games from anywhere.</li>
                                    <li>5 hours of battery life.</li>
                                    <li><strong>350GB or Unlimited Data</strong></li>
                                    <li><strong>Unthrottled</strong></li>
                                    <li>No installation needed, plug and play</li>
                                    <li>Great for travelers, take to on vacation, or home use. Easily stream video while
                                        using other devices.</li>
                                </ul>
                                <p class="text-gray-800 font-bold mt-4">$99 sign-up fee, includes device, activation and
                                    shipping. Plans starting at $89.99/mo.*</p>
                                <button class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">
                                    Select E-Sim
                                </button>
                            </div>

                            <!-- Column 4 -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h2 class="text-xl font-semibold text-green-600 mb-4">T-Mobile Rocker</h2>
                                <ul class="list-disc ml-5 text-gray-700">
                                    <li>14 day money back guarantee</li>
                                    <li>Dual-band for the fastest T-Mobile connection</li>
                                    <li><strong>Data up to 1TB/Unlimited</strong></li>
                                    <li><strong>Unthrottled</strong> (usage over 1TB could experience slower speeds)
                                    </li>
                                    <li>No installation needed, plug and play</li>
                                    <li>Great for gaming, streaming music or video, cloud services, and big downloads.
                                    </li>
                                </ul>
                                <p class="text-gray-800 font-bold mt-4">$199 sign-up fee, includes device, activation
                                    and shipping. Plan $119/mo.*</p>
                                <button class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">
                                    Select Rocker
                                </button>
                            </div>
                        </div>

                        <p class="mt-4 text-gray-600 text-sm">*Sign-up fee includes equipment and shipping.</p>
                        <a href="#" class="text-green-600 underline">View full device specifications</a>
                    </div>
                    {{-- End of first ection --}}




                    {{-- Second Section --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 my-10 gap-6" v-if="currentMainStep === 2">
                        <!-- Card 1 -->
                        <div v-for="service in services" :key="service.id"
                            class="bg-gray-900 text-white rounded-lg shadow-lg p-6">
                            <h2 class="text-lg font-semibold mb-4">@{{ service.name }}</h2>
                            <p class="mb-6">@{{ service.description }}</p>
                            <p class="text-3xl font-bold text-blue-400 mb-4">$@{{ service.unit_price }} <span
                                    class="text-base font-normal">/month</span></p>
                            <button @click="selectService(service)"
                                class="bg-transparent border border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black transition duration-300">
                                Subscribe Now
                            </button>
                        </div>
                    </div>
                    {{-- End of second section --}}


                    {{-- Start of 3rd section --}}
                    <div class="container mx-auto" v-if="currentMainStep === 3">


                        <div class="relative flex items-center w-100 w-full content-center">
                            <div class="stepper mx-auto">
                                <div class="step" :class="{ 'active': currentStep >= 1 }">
                                    <div class="step-icon">1</div>
                                    <div class="step-label">@{{ selectedService.name }}</div>
                                </div>
                                <div class="step-line" :class="{ 'active': currentStep > 1 }"></div>
                                <div class="step" :class="{ 'active': currentStep >= 2 }">
                                    <div class="step-icon">2</div>
                                    <div class="step-label">Create an Account</div>
                                </div>
                                <div class="step-line" :class="{ 'active': currentStep > 2 }"></div>
                                <div class="step" :class="{ 'active': currentStep >= 3 }">
                                    <div class="step-icon">3</div>
                                    <div class="step-label">Subscriber Information</div>
                                </div>
                                <div class="step-line" :class="{ 'active': currentStep > 3 }"></div>
                                <div class="step" :class="{ 'active': currentStep >= 4 }">
                                    <div class="step-icon">4</div>
                                    <div class="step-label">Complete Signup</div>
                                </div>
                            </div>
                        </div>

                        <!-- Form -->
                        <form @submit.prevent="handleSubmit">
                            <!-- Step 1 -->
                            <div class="bg-white rounded-lg shadow p-6" v-if="currentStep === 1">
                                <h2 class="text-lg font-bold">Step 1: User Information</h2>
                                <div class="mb-4">

                                    <p class="mb-2 text-gray-500">@{{ selectedService.name }}</p>
                                    <p class="text-gray-500">$@{{ selectedService.unit_price }}/month</p>
                                    <p class="mb-2 text-gray-500">@{{ selectedService.description }}</p>


                                    {{-- <label for="username" class="block">Username:</label>
                                    <input type="text" v-model="formData.username" @blur="validateStep(1)"
                                        class="border border-gray-300 rounded w-full px-3 py-2" />
                                    <span v-if="errors.username"
                                        class="text-red-500 text-sm">@{{ errors.username }}</span> --}}
                                </div>
                                <button type="button" @click="nextStep"
                                    class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">Next</button>
                            </div>

                            <!-- Step 2 -->
                            <div class="bg-white rounded-lg shadow p-6" v-if="currentStep === 2">
                                <h2 class="text-lg font-bold">Step 2: Contact Information</h2>
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="username" class="block text-gray-700">Username</label>
                                        <input type="text" v-model="formData.username" id="username"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="Enter username"
                                            required>
                                        <span v-if="errors.username"
                                            class="text-red-500 text-sm">@{{ errors.username }}</span>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="block text-gray-700">Password</label>
                                        <input type="password" v-model="formData.password" id="password"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="Enter password"
                                            required>
                                        <span v-if="errors.password"
                                            class="text-red-500 text-sm">@{{ errors.password }}</span>
                                    </div>

                                    <div class="mb-4">
                                        <label for="first_name" class="block text-gray-700">First Name</label>
                                        <input type="text" v-model="formData.first_name" id="first_name"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="Enter First Name"
                                            required>
                                        <span v-if="errors.first_name"
                                            class="text-red-500 text-sm">@{{ errors.first_name }}</span>
                                    </div>

                                    <div class="mb-4">
                                        <label for="last_name" class="block text-gray-700">Last Name</label>
                                        <input type="text" v-model="formData.last_name" id="last_name"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="Enter last Name"
                                            required>
                                        <span v-if="errors.last_name"
                                            class="text-red-500 text-sm">@{{ errors.last_name }}</span>
                                    </div>
                                    <div class="mb-4">
                                        <label for="email_address" class="block text-gray-700">Email
                                            Address</label>
                                        <input type="text" v-model="formData.email" id="email_address"
                                            class="w-full px-4 py-2 border rounded-lg"
                                            placeholder="Enter Email Address" required>
                                        <span v-if="errors.email"
                                            class="text-red-500 text-sm">@{{ errors.email }}</span>
                                    </div>
                                    <div class="mb-4">
                                        <label for="phone" class="block text-gray-700">Phone</label>
                                        <input type="text" v-model="formData.phone" id="phone"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="Enter Phone"
                                            required>
                                        <span v-if="errors.phone"
                                            class="text-red-500 text-sm">@{{ errors.phone }}</span>
                                    </div>
                                </div>
                                <button type="button" @click="prevStep"
                                    class="mt-4 bg-transparent border mr-2 border-black text-black py-2 px-4 rounded hover:bg-black hover:text-white transition duration-300">Previous</button>
                                <button type="button" @click="nextStep"
                                    class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">Next</button>
                            </div>

                            <!-- Step 3 -->
                            <div class="bg-white rounded-lg shadow p-6" v-if="currentStep === 3">
                                <h2 class="text-lg font-bold">Step 3: Subscriber Information</h2>
                                <div class="mb-4">
                                    <label for="card_name" class="block text-gray-700">Name on Card</label>
                                    <input type="text" id="card_name" v-model="formData.card_name"
                                        class="w-full px-4 py-2 border rounded-lg" placeholder="John Doe" required>
                                    <span v-if="errors.card_name"
                                        class="text-red-500 text-sm">@{{ errors.card_name }}</span>
                                </div>
                                <div class="mb-4">
                                    <label for="card_number" class="block text-gray-700">Card Number</label>
                                    <input type="text" id="card_number" v-model="formData.card_no"
                                        class="w-full px-4 py-2 border rounded-lg" placeholder="1111-2222-3333-4444"
                                        required>
                                    <span v-if="errors.card_no"
                                        class="text-red-500 text-sm">@{{ errors.card_no }}</span>
                                </div>
                                <div class="mb-4 grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="expiry_date" class="block text-gray-700">Expiry
                                            Date</label>
                                        <input type="text" id="expiry_date" v-model="formData.card_expiry"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="MM/YY" required>
                                        <span v-if="errors.card_expiry"
                                            class="text-red-500 text-sm">@{{ errors.card_expiry }}</span>
                                    </div>
                                    <div>
                                        <label for="cvv" class="block text-gray-700">CVV</label>
                                        <input type="text" id="cvv" v-model="formData.card_cvc"
                                            class="w-full px-4 py-2 border rounded-lg" placeholder="123" required>
                                        <span v-if="errors.card_cvc"
                                            class="text-red-500 text-sm">@{{ errors.card_cvc }}</span>
                                    </div>
                                </div>
                                <button type="button" @click="prevStep"
                                    class="mt-4 bg-transparent border border-black mr-2 text-black py-2 px-4 rounded hover:bg-black hover:text-white transition duration-300">Previous</button>
                                <button type="button" @click="nextStep"
                                    class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">Next</button>
                            </div>

                            <!-- Step 3 -->
                            <div class="bg-white rounded-lg shadow p-6" v-if="currentStep === 4">
                                <h2 class="text-lg font-bold">Step 4: Confirmation</h2>
                                <h2 class="text-lg font-semibold mb-4">@{{ selectedService.name }}</h2>
                                <p class="mb-6">@{{ selectedService.description }}</p>
                                <p class="text-3xl font-bold text-blue-400 mb-4">$@{{ selectedService.unit_price }} <span
                                        class="text-base font-normal">/month</span></p>


                                <div>
                                    <label for="cvv" class="block text-gray-700">Deposit Amount</label>
                                    <input type="text" id="cvv" v-model="form.card_cvc"
                                        class="w-full px-4 py-2 border rounded-lg" placeholder="123" required>
                                </div>

                                <div>
                                    <div class="flex items-center mb-4">
                                        <input id="default-checkbox" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autopay
                                            will be enabled for this credit card</label>
                                    </div>
                                </div>
                                <button type="button" @click="prevStep"
                                    class="mt-4 bg-transparent border border-black text-black py-2 px-4 mr-2 rounded hover:bg-black hover:text-white transition duration-300">Previous</button>
                                <button type="submit"
                                    class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-500">Submit</button>
                            </div>
                        </form>


















                        <!-- Accordion Section -->
                        {{-- <div id="accordion-collapse" data-accordion="collapse" class="space-y-4"
                            v-show="currentStep === 3">
                            <!-- 1st Accordion Item -->
                            <h2 id="accordion-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 bg-gray-100 border border-b-0 border-gray-200 rounded-t-lg focus:ring-4 focus:ring-gray-200"
                                    data-accordion-target="#accordion-body-1" aria-expanded="true"
                                    aria-controls="accordion-body-1">
                                    <span>@{{ selectedService.name }}</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707 1.707L6.414 9.5H17a1 1 0 110 2H6.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6A1 1 0 0110 3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-1" class="hidden" aria-labelledby="accordion-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <p class="mb-2 text-gray-500">@{{ selectedService.name }}</p>
                                    <p class="text-gray-500">$@{{ selectedService.unit_price }}/month</p>
                                    <p class="mb-2 text-gray-500">@{{ selectedService.description }}</p>
                                    <button
                                        class="mt-4 bg-transparent border border-black text-black py-2 px-4 rounded hover:bg-black hover:text-white transition duration-300">
                                        Subscribe Now
                                    </button>
                                </div>
                            </div>

                            <!-- 2nd Accordion Item -->
                            <h2 id="accordion-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 bg-gray-100 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200"
                                    data-accordion-target="#accordion-body-2" aria-expanded="false"
                                    aria-controls="accordion-body-2">
                                    <span>Create an Account</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-0 shrink-0" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707 1.707L6.414 9.5H17a1 1 0 110 2H6.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6A1 1 0 0110 3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-2" class="hidden" aria-labelledby="accordion-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200">
                                    <form>
                                        <div class="mb-4">
                                            <label for="username" class="block text-gray-700">Username</label>
                                            <input type="text" v-model="form.username" id="username"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="Enter username" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="block text-gray-700">Password</label>
                                            <input type="password" v-model="form.password" id="password"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="Enter password" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="confirm_password" class="block text-gray-700">Confirm
                                                Password</label>
                                            <input type="password" id="confirm_password"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="Confirm password" required>
                                        </div>
                                    </form>
                                </div>
                            </div>



                            <h2 id="accordion-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 bg-gray-100 border border-gray-200 rounded-b-lg focus:ring-4 focus:ring-gray-200"
                                    data-accordion-target="#accordion-body-3" aria-expanded="false"
                                    aria-controls="accordion-body-3">
                                    <span>Subscriber Information</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-0 shrink-0" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707 1.707L6.414 9.5H17a1 1 0 110 2H6.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6A1 1 0 0110 3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-3" class="hidden" aria-labelledby="accordion-heading-3">
                                <div class="p-5 border border-t-0 border-gray-200">
                                    <form>
                                        <div class="mb-4">
                                            <label for="first_name" class="block text-gray-700">First Name</label>
                                            <input type="text" v-model="form.first_name" id="first_name"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="Enter First Name" required>
                                        </div>

                                        <div class="mb-4">
                                            <label for="last_name" class="block text-gray-700">Last Name</label>
                                            <input type="text" v-model="form.last_name" id="last_name"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="Enter last Name" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="email_address" class="block text-gray-700">Email
                                                Address</label>
                                            <input type="text" v-model="form.email_address" id="email_address"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="Enter Email Address" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="phone" class="block text-gray-700">Email Phone</label>
                                            <input type="text" v-model="form.phone" id="phone"
                                                class="w-full px-4 py-2 border rounded-lg" placeholder="Enter Phone"
                                                required>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- 4th Accordion Item -->
                            <h2 id="accordion-heading-4">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 bg-gray-100 border border-gray-200 rounded-b-lg focus:ring-4 focus:ring-gray-200"
                                    data-accordion-target="#accordion-body-4" aria-expanded="false"
                                    aria-controls="accordion-body-4">
                                    <span>Card Details</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-0 shrink-0" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707 1.707L6.414 9.5H17a1 1 0 110 2H6.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6A1 1 0 0110 3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-4" class="hidden" aria-labelledby="accordion-heading-4">
                                <div class="p-5 border border-t-0 border-gray-200">
                                    <form>
                                        <div class="mb-4">
                                            <label for="card_name" class="block text-gray-700">Name on Card</label>
                                            <input type="text" id="card_name" v-model="form.card_name"
                                                class="w-full px-4 py-2 border rounded-lg" placeholder="John Doe"
                                                required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="card_number" class="block text-gray-700">Card Number</label>
                                            <input type="text" id="card_number" v-model="form.card_no"
                                                class="w-full px-4 py-2 border rounded-lg"
                                                placeholder="1111-2222-3333-4444" required>
                                        </div>
                                        <div class="mb-4 grid grid-cols-2 gap-4">
                                            <div>
                                                <label for="expiry_date" class="block text-gray-700">Expiry
                                                    Date</label>
                                                <input type="text" id="expiry_date" v-model="form.card_expiry"
                                                    class="w-full px-4 py-2 border rounded-lg" placeholder="MM/YY"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="cvv" class="block text-gray-700">CVV</label>
                                                <input type="text" id="cvv" v-model="form.card_cvc"
                                                    class="w-full px-4 py-2 border rounded-lg" placeholder="123"
                                                    required>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="bg-black text-white py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Submit</button>
                                    </form>
                                </div>
                            </div>

                            <h2 id="accordion-heading-5">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 bg-gray-100 border border-gray-200 rounded-b-lg focus:ring-5 focus:ring-gray-200"
                                    data-accordion-target="#accordion-body-5" aria-expanded="false"
                                    aria-controls="accordion-body-5">
                                    <span>Complete Signup</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-0 shrink-0" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707 1.707L6.414 9.5H17a1 1 0 110 2H6.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6A1 1 0 0110 3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-5" class="hidden" aria-labelledby="accordion-heading-5">
                                <div class="p-5 border border-t-0 border-gray-200">
                                    <form>
                                        <h2 class="text-lg font-semibold mb-4">@{{ selectedService.name }}</h2>
                                        <p class="mb-6">@{{ selectedService.description }}</p>
                                        <p class="text-3xl font-bold text-blue-400 mb-4">$@{{ selectedService.unit_price }} <span
                                                class="text-base font-normal">/month</span></p>


                                                <div>
                                                    <label for="cvv" class="block text-gray-700">Deposit Amount</label>
                                                    <input type="text" id="cvv" v-model="form.card_cvc"
                                                        class="w-full px-4 py-2 border rounded-lg" placeholder="123"
                                                        required>
                                                </div>

                                                <div>
                                                    <div class="flex items-center mb-4">
                                                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autopay will be enabled for this credit card</label>
                                                    </div>
                                                </div>
                                        <button @click="selectService(service)"
                                            class="bg-black text-white py-2 px-4 rounded hover:bg-gray-700 transition duration-300">
                                            Pay & Signup
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div> --}}
                    </div>
            </div>
        </div>
        {{-- End of 4th section --}}


        <!-- 5th Accordion Item -->

        {{-- End of 5th section --}}

        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Made in xGate
        </footer>
    </div>
    </div>

    </div>


    <script type="module">
        // import { createApp } from "vue"; // Correct path for the bundled app.js
        const {
            createApp
        } = Vue;
        createApp({
            data() {

                return {
                    errors: {},
                    currentStep: 1,
                    currentMainStep: 1,
                    selectedService: '',
                    services: [],
                    formData: {

                    },
                    form: {
                        name: '',
                        email: '',
                        phone: ''
                    },
                    message: 'WISPGate',
                    openAccordions: []
                };
            },
            mounted() {
                this.fetchServices(); // Fetch services when the component is mounted
            },
            methods: {
                nextStep() {
                    if (this.validateStep(this.currentStep)) {
                        this.currentStep++;
                    }
                },
                prevStep() {
                    this.currentStep--;
                },
                validateStep(step) {
                    this.errors = {}; // Clear previous errors

                    if (step === 2) {
                        if (!this.formData.username) {
                            this.errors.username = 'Username is required.';
                        }
                        if (!this.formData.password) {
                            this.errors.password = 'Password is required.';
                        }
                        if (!this.formData.first_name) {
                            this.errors.first_name = 'First Name is required.';
                        }
                        if (!this.formData.last_name) {
                            this.errors.last_name = 'Last Name is required.';
                        }
                        if (!this.formData.email) {
                            this.errors.email = 'Email is required.';
                        } else if (!/\S+@\S+\.\S+/.test(this.formData.email)) {
                            this.errors.email = 'Email is invalid.';
                        }
                        if (!this.formData.phone) {
                            this.errors.phone = 'Phone is required.';
                        }
                    } else if (step === 3) {
                        if (!this.formData.card_name) {
                            this.errors.card_name = 'Name is required.';
                        }
                        if (!this.formData.card_no) {
                            this.errors.card_no = 'Card Number is required.';
                        }
                        if (!this.formData.card_expiry) {
                            this.errors.card_expiry = 'Expiry Date is required.';
                        }
                        if (!this.formData.card_cvc) {
                            this.errors.card_cvc = 'CVV is required.';
                        }
                    }
                    return Object.keys(this.errors).length === 0;
                },
                handleSubmit() {
                    if (this.validateStep(this.currentStep)) {
                        
                        axios.post('/submit-form', this.formData)
                            .then(response => {
                                alert(response.data.message);
                                // Reset form or redirect as necessary
                            })
                            .catch(error => {
                                alert('An error occurred: ' + error.response.data.message);
                            });
                        // Perform the actual form submission logic here
                    }
                },
                fetchServices() {
                    axios.get('/fetchServices')
                        .then(response => {
                            this.services = response.data; // Store the services
                        })
                        .catch(error => {
                            console.error('Error fetching services:', error);
                        });
                },
                selectService(service) {
                    this.selectedService = service; // Set the clicked service as the selected service
                    this.formData.service_id = service.id;
                    console.log("Selected service:", this.selectedService);
                    this.currentMainStep++
                },
                goToNextStep() {
                    // Move to the next step once a service is selected
                    if (this.selectedService !== '') {
                        this.currentMainStep = 2;
                    } else {
                        this.currentMainStep++
                    }
                },
                async submitForm() {
                    // Gather all data to be submitted
                    const data = {
                        service: this.selectedService,
                        name: this.form.name,
                        email: this.form.email,
                        phone: this.form.phone
                    };

                    // Send a POST request to the API endpoint
                    try {
                        const response = await fetch('/submitForm', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(data)
                        });

                        const result = await response.json();

                        if (response.ok) {
                            alert('Form submitted successfully!');
                        } else {
                            alert('Error submitting the form: ' + result.message);
                        }
                    } catch (error) {
                        console.error('Error submitting the form:', error);
                        alert('An unexpected error occurred. Please try again later.');
                    }
                },
                changeMessage() {
                    this.message = 'You clicked the button!';
                }
            }
        }).mount('#app');
    </script>
</body>

</html>
