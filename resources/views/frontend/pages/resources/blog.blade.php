
@extends('layouts.frontend.master')

@section('content')
@component('frontend.components.breadcrumb',['title'=>"Add Blogs "])

@endcomponent
<!--====== Start Contact Area ======-->
    @component('frontend.components.blogForm')
    @endcomponent

@endsection



