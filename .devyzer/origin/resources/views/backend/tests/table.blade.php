<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('name', trans('labels.backend.tests.table.name')) </th>
                
                 <th>@sortablelink('name5', trans('labels.backend.tests.table.name5')) </th>
                
                 <th>@sortablelink('l_name', trans('labels.backend.tests.table.l_name')) </th>
                
                 <th>@sortablelink('email', trans('labels.backend.tests.table.email')) </th>
                
                 <th>{{ __('labels.backend.tests.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tests as $test)
        <tr>
             
                <td>{{  $test->name }}</td>  
                <td>{{  $test->name5 }}</td>  
                <td>{{  $test->l_name }}</td>  
                <td>{{  $test->email }}</td>  
                <td>{{  $test->sms }}</td>  
                

               <td>{!! $test->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>