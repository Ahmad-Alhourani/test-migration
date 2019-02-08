@extends ('backend.layouts.app')

@section ('title', __('labels.backend.schools.management') . ' | ' . __('labels.backend.schools.edit'))

@section('breadcrumb-links')
@include('backend.schools.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($school, 'PATCH', route('admin.school.update', $school->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.schools.management') }}
                        <small class="text-muted">{{ __('labels.backend.schools.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.schools.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.school.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection