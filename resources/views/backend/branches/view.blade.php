<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.branches.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $branch->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.branches.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $branch->name }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->