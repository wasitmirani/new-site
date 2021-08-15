@extends('layouts.frontend.master')

@push('styles')
<style>
    .bg-royal-blue {
    background-color: #473bf0;
}
</style>
@endpush
@section('content')
@component('frontend.components.breadcrumb',['title'=>"About Us"])
@endcomponent



@endsection
