<section>
    <div class="container px-[1rem] md:px-[0px] lg:px-[3rem] mx-auto mt-9">
        @if ($breadcrumbs)
            <ul class="flex flex-wrap text-lg md:text-xl">
                @foreach ($breadcrumbs as $breadcrumb)
                    <li class="flex items-center text-sm">
                        @if ($breadcrumb['url'])
                            <a href="{{ $breadcrumb['url'] }}" class="hover:underline">
                                {{ $breadcrumb['label'] }}
                            </a>
                        @else
                            <span class="">
                                {{ $breadcrumb['label'] }}
                            </span>
                        @endif

                        @if (!$loop->last)
                            <span class="mx-1">></span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</section>
