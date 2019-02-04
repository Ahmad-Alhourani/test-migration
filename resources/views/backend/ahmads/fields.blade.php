<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.ahmads.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.ahmads.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.ahmads.name5'))->class('col-md-2 form-control-label')->for('name5') }}
            <div class="col-md-10">
                
                        {{ html()->text('name5')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.ahmads.name5'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.ahmads.l_name'))->class('col-md-2 form-control-label')->for('l_name') }}
            <div class="col-md-10">
                
                        {{ html()->text('l_name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.ahmads.l_name'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.ahmads.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
                
                        {{ html()->email('email')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.ahmads.email'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.ahmads.sms'))->class('col-md-2 form-control-label')->for('sms') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('sms')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.ahmads.sms'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->