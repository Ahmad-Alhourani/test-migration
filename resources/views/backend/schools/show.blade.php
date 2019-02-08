@extends ('backend.layouts.app')

@section ('title', __('labels.backend.schools.management') . ' | ' . __('labels.backend.schools.view'))

@section('breadcrumb-links')
@include('backend.schools.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.schools.management') }}
                        <small class="text-muted">{{ __('labels.backend.schools.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.schools.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.schools.content.created_at') }}:</strong> {{ $school->updated_at->timezone(get_user_timezone()) }} ({{ $school->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.schools.content.last_updated') }}:</strong> {{ $school->created_at->timezone(get_user_timezone()) }} ({{$school->updated_at->diffForHumans() }})--}}
                        @if ($school->trashed())
                            <strong>{{ __('labels.backend.schools.content.deleted_at') }}:</strong> $school->deleted_at->timezone(get_user_timezone())  ($school->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection