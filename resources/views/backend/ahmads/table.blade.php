<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('name', trans('labels.backend.ahmads.table.name')) </th>
                
                 <th>@sortablelink('name7', trans('labels.backend.ahmads.table.name7')) </th>
                
                 <th>@sortablelink('name5', trans('labels.backend.ahmads.table.name5')) </th>
                
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
                <td>{{  $ahmad->name7 }}</td>  
                <td>{{  $ahmad->name5 }}</td>  
                <td>{{  $ahmad->l_name }}</td>  
                <td>{{  $ahmad->email }}</td>  
                <td>{{  $ahmad->sms }}</td>  
                

               <td>{!! $ahmad->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>