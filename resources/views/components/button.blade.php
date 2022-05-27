<button  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex font-light items-center px-4 py-2 bg-black border border-transparent rounded-md text-white  hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
