@extends('layouts.main')

@section('title', 'Politique de confidentialité')

@section('content')
    <section class="container px-[1rem] md:px-[0px] lg:px-[3rem] mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="privacy">
            @if ($appBasics->privacy_policy)
                {!! $appBasics->privacy_policy !!}
            @endif
        </div>
    </section>
@endsection
