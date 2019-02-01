<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.tests.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $test->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.tests.name|50'))->class('col-md-2 form-control-label')->for('name|50') }}
            <div class="col-md-10">
       

                {{ $test->name|50 }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.tests.l_name2'))->class('col-md-2 form-control-label')->for('l_name2') }}
            <div class="col-md-10">
       

                {{ $test->l_name2 }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.tests.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
       

                {{ $test->email }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.tests.sms'))->class('col-md-2 form-control-label')->for('sms') }}
            <div class="col-md-10">
       

                {{ $test->sms }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->