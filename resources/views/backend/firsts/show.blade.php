@extends ('backend.layouts.app')

@section ('title', __('labels.backend.firsts.management') . ' | ' . __('labels.backend.firsts.view'))

@section('breadcrumb-links')
@include('backend.firsts.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.firsts.management') }}
                        <small class="text-muted">{{ __('labels.backend.firsts.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.firsts.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.firsts.content.created_at') }}:</strong> {{ $first->updated_at->timezone(get_user_timezone()) }} ({{ $first->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.firsts.content.last_updated') }}:</strong> {{ $first->created_at->timezone(get_user_timezone()) }} ({{$first->updated_at->diffForHumans() }})--}}
                        @if ($first->trashed())
                            <strong>{{ __('labels.backend.firsts.content.deleted_at') }}:</strong> $first->deleted_at->timezone(get_user_timezone())  ($first->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection