<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.branches.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.branches.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.branches.comp0_id'))->class('col-md-2 form-control-label')->for('comp0_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="comp0_id"  required  >
                         <option value="">select...</option>
                        @if  ($companies->count())
                        @foreach($companies as $temp)
                                <option value="{{ $temp->id }}" {{ isset($branch->comp0_id)&& $branch->comp0_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.branches.comp2_id'))->class('col-md-2 form-control-label')->for('comp2_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="comp2_id"  required  >
                         <option value="">select...</option>
                        @if  ($companies->count())
                        @foreach($companies as $temp)
                                <option value="{{ $temp->id }}" {{ isset($branch->comp2_id)&& $branch->comp2_id == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->