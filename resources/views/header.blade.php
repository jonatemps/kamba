@push('head')
    <link
        href="{{asset('logo.jpg')}}"
        id="favicon"
        rel="icon"
    >
@endpush

<p class="h2 n-m font-thin v-center">
    <img height="35px" width="35px" src="{{ asset('logo.jpg') }}" alt="logo">
    {{-- <x-orchid-icon path="database"/> --}}

    <span class="m-l d-none d-sm-block">
        F-KAMBA
        <small class="v-top opacity">Platform</small>
    </span>
</p>
