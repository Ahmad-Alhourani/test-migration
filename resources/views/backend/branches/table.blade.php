<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.branches.table.name')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($branches as $branch)
        <tr>
             
                <td>{{  $branch->name }}</td>  
                

               <td>{!! $branch->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>