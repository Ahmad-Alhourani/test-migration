<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.companies.table.name')) </th>
                
                 <th>{{ __('labels.backend.companies.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($companies as $company)
        <tr>
             
                <td>{{  $company->name }}</td>  
                <td>{{  $company->sms }}</td>  
                

               <td>{!! $company->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>