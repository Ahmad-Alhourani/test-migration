<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('name', trans('labels.backend.ahmads.table.name')) </th>
                
                 <th>{{ __('labels.backend.ahmads.table.first_id') }}</th>
                
                 <th>@sortablelink('l_name', trans('labels.backend.ahmads.table.l_name')) </th>
                
                 <th>@sortablelink('email', trans('labels.backend.ahmads.table.email')) </th>
                
                 <th>{{ __('labels.backend.ahmads.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ahmads as $ahmad)
        <tr>
             
                <td>{{  $ahmad->name }}</td>  
                <td>{!! $ahmad->first? $ahmad->first->name : 'N/A' !!}</td> 
                <td>{{  $ahmad->l_name }}</td>  
                <td>{{  $ahmad->email }}</td>  
                <td>{{  $ahmad->sms }}</td>  
                

               <td>{!! $ahmad->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>