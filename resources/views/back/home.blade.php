@section('addcss')




@endsection

@extends('back.layouts.master')



@section('content-area')
<h6 class="mb-0 text-uppercase">DASHBOARD</h6>
<hr>

         <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
        </div>
@endsection



@section('addjs')



    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
