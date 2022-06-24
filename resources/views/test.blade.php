@extends('layouts.main')

@section('page-title', 'Test Page')

@section('page-fonts')
    {{-- Page Fonts Go Here --}}
@endsection

@section('page-styles')
    {{-- Page Styles Go Here --}}
@endsection

@section('header-scripts')
    {{-- Page Header Scripts Go Here --}}
@endsection

@section('content')
    Test page content
@endsection

@push('body-scripts')
    {{-- Page Footer Scripts Go Here --}}
@endpush
