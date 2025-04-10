@extends('admin.layouts.default')
@section('title', 'Dashboard')
@section('content')
    <h1>Dashboard</h1>
@endsection

@push('scripts')
    <script>
        console.log('dashboard');
    </script>
@endpush

@push('styles')
    <style>
        h1 {
            color: red;
        }
    </style>
@endpush
