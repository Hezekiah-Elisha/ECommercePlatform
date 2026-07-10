<x-layout>
    <x-slot:title>
        Home || E-commerce Platform
    </x-slot:title>
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
        Welcome to the platform where you can find a variety of products to suit your needs. Browse through our
        categories
        and discover the best deals available.
    </div>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div
            class="bg-accent/20 p-4 rounded-lg hover:border-blue-500 hover:border transition duration-300 hover:cursor-pointer">
            <h2 class="text-xl font-bold mb-2">Category 1</h2>
            <p>Explore a wide range of products in Category 1.</p>
        </div>
        <div
            class="bg-accent/20 p-4 rounded-lg hover:border-blue-500 hover:border transition duration-300 hover:cursor-pointer">
            <h2 class="text-xl font-bold mb-2">Category 2</h2>
            <p>Discover the latest trends and offers in Category 2.</p>
        </div>
        <div
            class="bg-accent/20 p-4 rounded-lg hover:border-blue-500 hover:border transition duration-300 hover:cursor-pointer">
            <h2 class="text-xl font-bold mb-2">Category 3</h2>
            <p>Find the best deals and products in Category 3.</p>
        </div>
    </div>

    <div class="mt-6">
        <h2 class="text-xl font-bold mb-2">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg hover:shadow-lg transition duration-300 hover:cursor-pointer">
                <img src="{{ asset('images/watch.webp') }}" alt="Product 1" class="mb-2 w-full h-auto">
                <h3 class="text-lg font-bold">Product 1</h3>
                <p class="text-gray-600">$19.99</p>
                <button
                    class="flex flex-row justify-between align-middle items-center bg-primary text-white px-4 py-2 rounded mt-2 hover:bg-primary-dark transition duration-300">
                    <x-lucide-shopping-cart class="w-6 h-6" />
                    Add to Cart
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg hover:shadow-lg transition duration-300 hover:cursor-pointer">
                <img src="{{ asset('images/watch.webp') }}" alt="Product 2" class="mb-2 w-full h-auto">
                <h3 class="text-lg font-bold">Product 2</h3>
                <p class="text-gray-600">$29.99</p>
                <button
                    class="flex flex-row justify-between align-middle items-center bg-primary text-white px-4 py-2 rounded mt-2 hover:bg-primary-dark transition duration-300">
                    <x-lucide-shopping-cart class="w-6 h-6" />
                    Add to Cart
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg hover:shadow-lg transition duration-300 hover:cursor-pointer">
                <img src="{{ asset('images/watch.webp') }}" alt="Product 3" class="mb-2 w-full h-auto">
                <h3 class="text-lg font-bold">Product 3</h3>
                <p class="text-gray-600">$39.99</p>
                <button
                    class="flex flex-row justify-between align-middle items-center bg-primary text-white px-4 py-2 rounded mt-2 hover:bg-primary-dark transition duration-300">
                    <x-lucide-shopping-cart class="w-6 h-6" />
                    Add to Cart
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg hover:shadow-lg transition duration-300 hover:cursor-pointer">
                <img src="{{ asset('images/watch.webp') }}" alt="Product 4" class="mb-2 w-full h-auto">
                <h3 class="text-lg font-bold">Product 4</h3>
                <p class="text-gray-600">$49.99</p>
                <button
                    class="flex flex-row justify-between align-middle items-center bg-primary text-white px-4 py-2 rounded mt-2 hover:bg-primary-dark transition duration-300">
                    <x-lucide-shopping-cart class="w-6 h-6" />
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</x-layout>
