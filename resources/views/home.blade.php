<x-app-layout>
    <style>
        .homepage {
            position: relative;
            height: 90vh; /* Set the height to 100% of the viewport height */
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/house.jpg') }}') no-repeat center center / cover;
        }
        @media (max-width: 768px)
         {
        .homepage {

            height: 100vh;

        }
        }

    </style>

    <div class="homepage">
        <div class="pt-32 flex justify-center items-center">
            <div class="mr-10 lg:rounded-lg overflow-hidden hidden lg:block">
                <img src="img/door.jpg" alt="save" class="object-contain h-60">
            </div>
            <div class="ml-10 lg:w-60 w-full">
                <h2 class="capitalize text-white w-50% text-2xl font-semibold">expert estate security service</h2>
                <p class="text-white">Don't leave the safety of your estate and your love onces to chance</p>
                <div class="">
                    <button class="text-black bg-white p-2 text-sm capitalize rounded-md hover:bg-transparent  hover:border border-gray-300 hover:text-white transition-all duration-500">get started</button>
                    <button class="p-2 ml-3 text-white border border-gray-300 text-sm capitalize rounded-md mt-5 hover:bg-gray-300 hover:text-black transition-all duration-500">explore</button>
                </div>
            </div>
        </div>
        <hr class="mt-20 ">
        <div class=" lg:w-[55%] m-auto pt-5 pb-6 px-10 w-full">
            <p class="text-white text-lg text">
                choose us for reliable, effective and personalized security solution. contact us today
                to learn more about our services and how we can help you protect what matter most
            </p>
        </div>
    </div>
</x-app-layout>
