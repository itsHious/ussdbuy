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
  <h2 class="text-white font-weight-bold my-2 mr-5">Manage Number Access</h2>
@endsection
@section('content')
  <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Dashboard-->
              <!--begin::Row-->
              <div class="card">
                <div class="card-header">
                  Manage Number Access

                  <div class="float-right">
                    <a href="{!! route('add.number') !!}" class="btn btn-primary btn-sm">Add Number</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-stiped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Number</th>
                          <th>Option</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($all as $key)
                          <tr>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->number }}</td>
                            <td>{{ $key->option }}</td>
                            <td>
                              <a href="{!! route('edit.number',$key->id) !!}" class="btn btn-icon mr-2 btn-primary">
      <i class="flaticon2-edit"></i>
  </a>
  <a href="#" class="btn btn-icon mr-2 btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter{{ $key->id }}">
      <i class="flaticon2-delete"></i>
  </a>




  <div class="modal fade" id="exampleModalCenter{{ $key->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
  															<div class="modal-dialog modal-dialog-centered" role="document">
  																<div class="modal-content">
  																	<div class="modal-header">
  																		<h5 class="modal-title text-danger" id="exampleModalLabel">Delete {{ $key->name }}'s Access</h5>
  																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  																			<i aria-hidden="true" class="ki ki-close"></i>
  																		</button>
  																	</div>
  																	<div class="modal-body text-center">
                                      <p class="text">Are you sure?</p>
                                      <p class="text">You won"t be able to revert this!</p>
                                    </div>
  																	<div class="modal-footer">
  																		<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
  																		<a href="{!! route('delete.number',$key->id) !!}" type="button" class="btn btn-danger font-weight-bold">Yes, delete it!</a>
  																	</div>
  																</div>
  															</div>
  														</div>


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
