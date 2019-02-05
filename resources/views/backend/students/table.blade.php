<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('name', trans('labels.backend.students.table.name')) </th>
                
                 <th>@sortablelink('school_id', trans('labels.backend.students.table.school_id')) </th>
                
                 <th>@sortablelink('l_name', trans('labels.backend.students.table.l_name')) </th>
                
                 <th>@sortablelink('email', trans('labels.backend.students.table.email')) </th>
                
                 <th>{{ __('labels.backend.students.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
             
                <td>{{  $student->name }}</td>  
                <td>{!! $student->school? $student->school->name : 'N/A' !!}</td> 
                <td>{{  $student->l_name }}</td>  
                <td>{{  $student->email }}</td>  
                <td>{{  $student->sms }}</td>  
                

               <td>{!! $student->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>