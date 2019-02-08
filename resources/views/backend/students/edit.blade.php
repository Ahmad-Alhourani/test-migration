@extends ('backend.layouts.app')

@section ('title', __('labels.backend.students.management') . ' | ' . __('labels.backend.students.edit'))

@section('breadcrumb-links')
@include('backend.students.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($student, 'PATCH', route('admin.student.update', $student->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.students.management') }}
                        <small class="text-muted">{{ __('labels.backend.students.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.students.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.student.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection