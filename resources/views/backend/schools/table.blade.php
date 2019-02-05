<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.schools.table.name')) </th>
                
                  <th>@sortablelink('l_name', trans('labels.backend.schools.table.l_name')) </th>
                
                  <th>@sortablelink('email', trans('labels.backend.schools.table.email')) </th>
                
                 <th>{{ __('labels.backend.schools.table.des') }}</th>
                
                 <th>{{ __('labels.backend.schools.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($schools as $school)
        <tr>
             
                <td>{{  $school->name }}</td>  
                <td>{{  $school->l_name }}</td>  
                <td>{{  $school->email }}</td>  
                <td>{{  $school->des }}</td>  
                <td>{{  $school->sms }}</td>  
                

               <td>{!! $school->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>