@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class ="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                <a href="{{ url('/kategori/create') }}"> <!-- Perubahan di sini -->
                    <button type="button" class="btn btn-primary" >
                        <i class="fa fa-plus"> ADD</i>
                    </button>
                </a>
                <br><br>
                {{$dataTable->table()}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush
