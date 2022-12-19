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
@section('show')
  <h2 class="text-white font-weight-bold my-2 mr-5">Add Number</h2>
@endsection
@section('content')
  <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Dashboard-->
              <!--begin::Row-->
              <div class="card">
                <div class="card-header">
                  Add Number
                </div>
                <div class="card-body">
                  <form class="" action="{!! route('post.edit.number',$number->id) !!}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $number->name }}" required>
                        </div>
                      </div>
                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Number</label>
                          <input type="tel" class="form-control" name="number" value="{{ $number->number }}" required>
                        </div>
                      </div>

                      <div class="col-lg">
                        <div class="form-group">
                          <label for="">Select An Option</label>
                          <select class="form-control" name="option" required>
                            <option selected disabled hidden>--Select an option--</option>
                            <option {{ $number->option == 'Blacklist'?'selected':'' }} value="Blacklist">Blacklist</option>
                            <option {{ $number->option == 'Whitelist'?'selected':'' }} value="Whitelist">Whitelist</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-4">
                      <button type="submit" class="btn btn-success col-lg-5 btn-sm" name="button">Update</button>
                    </div>
                  </form>
                </div>
              </div>

              <!--end::Dashboard-->
            </div>
            <!--end::Container-->
          </div>
@endsection
