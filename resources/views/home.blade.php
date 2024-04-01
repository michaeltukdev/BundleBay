@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="grid grid-cols-[1.9fr_3fr] gap-8">

            <livewire:resources-feed />

            <div class="py-3 rounded-lg bg-container">
                <!-- Content here will take up the majority of the space -->
            </div>
        </div>
    </div>
@endsection
