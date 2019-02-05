@extends ('backend.layouts.app')

@section ('title', __('labels.backend.students.management') . ' | ' . __('labels.backend.students.view'))

@section('breadcrumb-links')
@include('backend.students.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.students.management') }}
                        <small class="text-muted">{{ __('labels.backend.students.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.students.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.students.content.created_at') }}:</strong> {{ $student->updated_at->timezone(get_user_timezone()) }} ({{ $student->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.students.content.last_updated') }}:</strong> {{ $student->created_at->timezone(get_user_timezone()) }} ({{$student->updated_at->diffForHumans() }})--}}
                        @if ($student->trashed())
                            <strong>{{ __('labels.backend.students.content.deleted_at') }}:</strong> $student->deleted_at->timezone(get_user_timezone())  ($student->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection