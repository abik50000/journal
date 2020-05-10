@extends('layouts.app')
@section('content')


<div class="mt-4">
    <student-diary></student-diary>
</div>
@endsection
@section('scripts')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush


