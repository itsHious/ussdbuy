{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.admin')
@section('page-css')
  <link rel="stylesheet" href="{!! asset('css/dt.css') !!}">
@endsection
@section('show')
  <h2 class="text-white font-weight-bold my-2 mr-5">Api Access Reports</h2>
@endsection
@section('content')
  <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Dashboard-->
              <!--begin::Row-->
              <div class="card">
                <div class="card-header">
                  Api Access Reports


                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-stiped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Number</th>
                          <th>Option</th>
                          <th>No. of Requests</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($all as $key)
                          <tr>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->number }}</td>
                            <td>{{ $key->option }}</td>
                            <td>
                              {{ $key->no_req }}
</td>
                          </tr>
                        @empty
                          <tr class="text-center">
                            <td colspan="4">No Data Available</td>
                          </tr>
                        @endforelse

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!--end::Dashboard-->
            </div>
            <!--end::Container-->
          </div>
@endsection
@section('page-js')
  <script src="{!! asset('css/dt.js') !!}" charset="utf-8"></script>
  <script type="text/javascript">
  $(document).ready( function () {
  $('.table-bordered').DataTable();
} );
  </script>
@endsection
