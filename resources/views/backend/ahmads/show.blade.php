@extends ('backend.layouts.app')

@section ('title', __('labels.backend.ahmads.management') . ' | ' . __('labels.backend.ahmads.view'))

@section('breadcrumb-links')
@include('backend.ahmads.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.ahmads.management') }}
                        <small class="text-muted">{{ __('labels.backend.ahmads.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.ahmads.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.ahmads.content.created_at') }}:</strong> {{ $ahmad->updated_at->timezone(get_user_timezone()) }} ({{ $ahmad->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.ahmads.content.last_updated') }}:</strong> {{ $ahmad->created_at->timezone(get_user_timezone()) }} ({{$ahmad->updated_at->diffForHumans() }})--}}
                        @if ($ahmad->trashed())
                            <strong>{{ __('labels.backend.ahmads.content.deleted_at') }}:</strong> $ahmad->deleted_at->timezone(get_user_timezone())  ($ahmad->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection