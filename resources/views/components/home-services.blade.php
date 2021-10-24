<div>
    <div class="bg-white">
        <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
            <h2 class="text-3xl font-extrabold text-black tracking-tight">
                Servicios
            </h2>
            <p class="mt-4 max-w-3xl text-lg text-black">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis. Blandit
                aliquam sit nisl euismod mattis in.
            </p>
            <div
                class="mt-12 grid grid-cols-1  sm:grid-cols-2 lg:mt-16 lg:grid-cols-3">
                @foreach($services as $service)
                    <div class="{{ $service['background_color'] }} p-6">
                        <div class="max-h-36">
                            <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                                {!! $service['icon'] !!}
                            </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium {{ $service['font_color'] }}">{{ $service['title'] }}</h3>
                            <p class="mt-2 text-base {{ $service['font_color'] }}">{{ $service['copy'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
