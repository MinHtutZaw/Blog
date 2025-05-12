<x-layout>
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <h3 class="text-blue-600 text-center text-xl font-semibold my-4">Register form</h3>

                <div class="bg-white p-6 rounded shadow-sm">
                    <form method="POST"  action="/register">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                value="{{old('name')}}"
                                required
                            
                            >
                            <x-error name="name"></x-error>
                        </div>

                        <div class="mb-4">
                            <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
                            <input
                                type="text"
                                id="username"
                                name="username" 
                                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                value="{{old('username')}}"
                                required
                            >
                            <x-error name="username"></x-error>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                value="{{old('email')}}"
                                required
                            >
                                <x-error name="email"/>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                value="{{old('password')}}"
                                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required
                            >
                            <x-error name="password"/>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded"
                        >
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
