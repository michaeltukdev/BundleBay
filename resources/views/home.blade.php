@extends('layouts.app')

@section('content')
    <div class="container">
        
        <livewire:resource-filter />    

        <div class="grid lg:grid-cols-[1.9fr_3fr] gap-8">

            <livewire:resources-feed />

            <livewire:resource-details />
        </div>
    </div>
@endsection
