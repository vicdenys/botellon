<button  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex font-light items-center px-4 py-2 lowercase border  text-white hover:shadow-lg hover:scale-105 focus:bg-white focus:text-green focus:shadow-lg focus:scale-105 shadow-gray-900  hover:bg-white hover:text-green active:bg-white focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
