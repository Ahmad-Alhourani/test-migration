@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.students.title'))


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.students.management') }}
                    </h4>
                </div><!--col-->

                <div class="col-sm-4">
                    <form name="condition" action="" method="get">
                    {{--   <input type="text" name="search" placeholder="search">--}}
                    </form>
                </div><!--col-->

                <div class="col-sm-3 pull-right">
                    @include('backend.students.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    @include('backend.students.table')
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        @if(isset($part)){{ $part}} from  @endif  {!! $students->total() !!} {{ trans_choice('labels.backend.students.table.total', $students->total()) }}
                    </div>
                </div><!--col-->
                <div class="col-5">
                    <div class="float-right">
                        {!! $students->render() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection
