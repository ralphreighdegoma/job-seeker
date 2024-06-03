@vite('resources/css/app.css')

<div class="relative bg-white max-w-xs	  text-black-600 p-4 rounded-tl-3xl shadow-lg flex flex-col items-center">
    <div class="absolute top-0 right-0 bg-yellow-400 text-black text-sm font-semibold px-2 py-1 rounded-bl-lg">
        Virtual Assistant
    </div>
    <img src="{{$data['photo']}}" alt="Jane P." class="w-24 bg-yellow-400 h-24 rounded-full mb-4">
    <h2 class="text-xl font-semibold mb-2 text-black">{{$data['alias']}}</h2>
    <h1 class="text-sm  mb-2 text-black">Accountant</h1>
    </h4>

    <div class="space-x-4">
        <i class="fas fa-user text-1xl text-gray-300"></i>
        <i class="fas fa-video text-1xl text-gray-300"></i>
        <i class="fas fa-heart text-1xl text-gray-300"></i>
    </div>

    <p class="text-justify text-black mb-4 text-sm p-5">
        {{$data['description_intro']}}
    </p>
    <div class="flex flex-wrap justify-center space-x-2">
        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Efficiency</span>
        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Multitasking</span>
        <span class="bg-yellow-400 text-black text-xs font-semibold px-2 py-1 m-1 rounded-full">#Admin</span>
    </div>
</div>
