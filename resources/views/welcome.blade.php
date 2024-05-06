{{-- esta es una manera
@component('components.layouts')
    <h1>hola people</h1>

@endcomponent --}}

{{-- otra manera de usar el componente --}}

<x-layouts.app meta-description="Home description"
:sum=" 2-3">

{{-- <x-layouts.app meta-description="Home description"
:sum=" 2-3"> --}}
    <h1>hola people</h1>
    <p>hellow</p>

</x-layouts.app>
