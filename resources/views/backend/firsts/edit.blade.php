@extends ('backend.layouts.app')

@section ('title', __('labels.backend.firsts.management') . ' | ' . __('labels.backend.firsts.edit'))

@section('breadcrumb-links')
@include('backend.firsts.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($first, 'PATCH', route('admin.first.update', $first->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.firsts.management') }}
                        <small class="text-muted">{{ __('labels.backend.firsts.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.firsts.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.first.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection