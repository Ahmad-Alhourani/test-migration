<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('name', trans('labels.backend.firsts.table.name')) </th>
                
                 <th>@sortablelink('l_name', trans('labels.backend.firsts.table.l_name')) </th>
                
                 <th>@sortablelink('email', trans('labels.backend.firsts.table.email')) </th>
                
                 <th>{{ __('labels.backend.firsts.table.des') }}</th>
                
                 <th>{{ __('labels.backend.firsts.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($firsts as $first)
        <tr>
             
                <td>{{  $first->name }}</td>  
                <td>{{  $first->l_name }}</td>  
                <td>{{  $first->email }}</td>  
                <td>{{  $first->des }}</td>  
                <td>{{  $first->sms }}</td>  
                

               <td>{!! $first->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>