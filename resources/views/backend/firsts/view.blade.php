<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.firsts.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $first->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.firsts.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $first->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.firsts.l_name'))->class('col-md-2 form-control-label')->for('l_name') }}
            <div class="col-md-10">
       

                {{ $first->l_name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.firsts.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
       

                {{ $first->email }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.firsts.des'))->class('col-md-2 form-control-label')->for('des') }}
            <div class="col-md-10">
       

                {{ $first->des }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.firsts.sms'))->class('col-md-2 form-control-label')->for('sms') }}
            <div class="col-md-10">
       

                {{ $first->sms }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->