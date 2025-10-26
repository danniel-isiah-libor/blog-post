<x-layouts.app>
    <section class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl text-center">
            <h1>{{ $post->title }}</h1>

            <figure class="mt-10">
                <blockquote class="text-center text-xl/8 font-semibold text-white sm:text-2xl/9">
                    <p>{{ $post->content }}</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="mx-auto size-10 rounded-full" />
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-white">Judith Black</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-white">
                            <circle r="1" cx="1" cy="1" />
                        </svg>
                        <div class="text-gray-400">CEO of Workcation</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
</x-layouts.app>
