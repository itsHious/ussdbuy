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
  <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
@endsection
@section('content')
  <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Dashboard-->
              <!--begin::Row-->
              <div class="row">
                <div class="col-xl-4">
                  <!--begin::Tiles Widget 1-->
                  <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                      <div class="card-title">
                        <div class="card-label">
                          <div class="font-weight-bolder">Number Stats</div>
                          {{-- <div class="font-size-sm text-muted mt-2">890,344 Sales</div> --}}
                        </div>
                      </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column px-0">

                      <div class="flex-grow-1 card-spacer-x">
                        <!--begin::Item-->
                        @forelse ($all as $key)
                          <div class="d-flex align-items-center justify-content-between mb-10">
                            <div class="d-flex align-items-center mr-2">
                              <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                <div class="symbol-label">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" id="blobSvg" style="opacity: 1;">                        <defs>                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">                            <stop offset="0%" style="stop-color: rgb(100, 102, 144);"></stop>                            <stop offset="100%" style="stop-color: rgb(22, 126, 124);"></stop>                        </linearGradient>                        </defs>                                            <path id="blob" fill="url(#gradient)" style="opacity: 1;"><animate attributeName="d" dur="2.5s" repeatCount="indefinite" values="M430.80624,308.72934Q432.1339,367.45868,372.72647,377.66948Q313.31905,387.88027,263.72647,442.80911Q214.1339,497.73795,154.61821,463.08837Q95.10253,428.43879,60.15953,372.16526Q25.21653,315.89174,60.3661,260.16239Q95.51568,204.43305,120.04418,166.21939Q144.57268,128.00574,181.94874,82.19376Q219.32479,36.38179,273.74216,57.19376Q328.15953,78.00574,384.05413,102.85329Q439.94874,127.70084,434.71366,188.85042Q429.47858,250,430.80624,308.72934Z;M463.5,311.5Q441,373,396,422Q351,471,287,455Q223,439,179,411Q135,383,79,350Q23,317,51.5,258.5Q80,200,94,143.5Q108,87,162,49.5Q216,12,281.5,24.5Q347,37,383.5,89Q420,141,453,195.5Q486,250,463.5,311.5Z;M440.79254,295.90011Q393.21514,341.80021,357.53347,375.20746Q321.85181,408.61471,271.82218,427.01866Q221.79254,445.4226,171.55544,422.09659Q121.31834,398.77057,68.79254,358.84083Q16.26674,318.91109,38.15202,256.60373Q60.03731,194.29637,79.65586,134.88912Q99.27441,75.48187,157.19648,42.12622Q215.11855,8.77057,268.67782,50.11855Q322.2371,91.46653,362.16684,121.87761Q402.09659,152.2887,445.23326,201.14435Q488.36994,250,440.79254,295.90011Z;M456.0768,303.76136Q418.13543,357.52271,379.98225,404.29316Q341.82907,451.0636,284.01817,433.65772Q226.20727,416.25185,163.99091,418.54046Q101.77456,420.82907,62.72047,368.86953Q23.66638,316.90999,61.99091,261.65772Q100.31545,206.40545,118.97771,163.62635Q137.63998,120.84725,179.51817,86.26136Q221.39637,51.67547,267.19818,81.83773Q313,112,367.68455,125.86045Q422.36911,139.7209,458.19364,194.86045Q494.01817,250,456.0768,303.76136Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M430.80624,308.72934Q432.1339,367.45868,372.72647,377.66948Q313.31905,387.88027,263.72647,442.80911Q214.1339,497.73795,154.61821,463.08837Q95.10253,428.43879,60.15953,372.16526Q25.21653,315.89174,60.3661,260.16239Q95.51568,204.43305,120.04418,166.21939Q144.57268,128.00574,181.94874,82.19376Q219.32479,36.38179,273.74216,57.19376Q328.15953,78.00574,384.05413,102.85329Q439.94874,127.70084,434.71366,188.85042Q429.47858,250,430.80624,308.72934Z"></animate></path></svg>
                                </div>
                              </div>
                              <div>
                                <a href="index.html#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">{{ $key->number }}</a>
                                <div class="font-size-sm text-muted font-weight-bold mt-1">{{ $key->name }} - {{ $key->option }}</div>
                              </div>
                            </div>
                            <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">{{ $key->no_req }}  </div>
                          </div>
                        @empty
                          <p class="text-center">No Numbers Added!</p>
                        @endforelse


                      </div>
                      <!--end::Items-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tiles Widget 1-->
                </div>
                <div class="col-xl-8">
                  <div class="row">
                    <div class="col-xl-3">
                      <!--begin::Tiles Widget 3-->
                      <div class="card card-custom bgi-no-repeat bgi-no-repeat bgi-size-cover gutter-b" style="height: 150px; background-image: url('https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/bg/bg-9.jpg')">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                          <!--begin::Title-->
                          <a href="index.html#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h3">Numbers Added</a>
                          <h2>{{ $countnumbers }}</h2>
                          <!--end::Title-->
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Tiles Widget 3-->
                    </div>
                    <div class="col-xl-9">
                      <!--begin::Mixed Widget 10-->
                      <div class="card card-custom gutter-b" style="height: 150px">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                          <div class="mr-2">
                            <h3 class="font-weight-bolder">Add New Number</h3>
                            <div class="text-dark-50 font-size-lg mt-2">Add a number to list of Whitelisted/Blacklisted numbers</div>
                          </div>
                          <a href="{!! route('add.number') !!}" class="btn btn-primary font-weight-bold py-3 px-6">Add Number</a>
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Mixed Widget 10-->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-6">
                      <!--begin::Tiles Widget 13-->
                      <div class="card card-custom bgi-no-repeat gutter-b" style="height: 175px; background-color: #663259; background-position: calc(100% + 0.5rem) 100%; background-size: 100% auto; background-image: url('https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/patterns/taieri.svg')">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center">
                          <div>
                            <h3 class="text-white font-weight-bolder line-height-lg mb-5">Manage Access
                          </h3>
                            <a href='{!! route('managenumbers') !!}' class="btn btn-success font-weight-bold px-6 py-3">Manage Access</a>
                          </div>
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Tiles Widget 13-->
                      <div class="row">
                        <div class="col-xl-6">
                          <!--begin::Tiles Widget 11-->
                          <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                            <div class="card-body">
                              <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                              <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">{{$countwhite}}</div>
                              <a href="index.html#" class="text-inverse-primary font-weight-bold font-size-sm mt-1">Whitelisted Numbers</a>
                            </div>
                          </div>
                          <!--end::Tiles Widget 11-->
                        </div>
                        <div class="col-xl-6">
                          <!--begin::Tiles Widget 12-->
                          <div class="card card-custom gutter-b" style="height: 150px">
                            <div class="card-body">
                              <span class="svg-icon svg-icon-3x svg-icon-success">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Group.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                              <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$countblack}}</div>
                              <a href="index.html#" class="text-muted text-hover-primary font-weight-bold font-size-sm mt-1">Blacklisted Numbers</a>
                            </div>
                          </div>
                          <!--end::Tiles Widget 12-->
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <!--begin::Mixed Widget 14-->
                      <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch" style="background-image: url('https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/stock-600x600/img-16.jpg')">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column align-items-start justify-content-start">
                          <div class="p-1 flex-grow-1">
                            <h3 class="text-white font-weight-bolder line-height-lg mb-5">Total Api
                            <br />Calls <br> {{ $countapi }} </h3>
                          </div>
                          <a href='{!! route('viewapireport') !!}' class="btn btn-link btn-link-warning font-weight-bold">View Report
                          <span class="svg-icon svg-icon-lg svg-icon-warning">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span></a>
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Mixed Widget 14-->
                    </div>
                  </div>
                </div>
              </div>

              <!--end::Dashboard-->
            </div>
            <!--end::Container-->
          </div>
@endsection
