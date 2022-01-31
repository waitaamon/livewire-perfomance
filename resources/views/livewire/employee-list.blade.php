<div>
    @foreach($employees as $employee)
        <livewire:employee-list-item :employee-id="$employee->id" :employee-name="$employee->name" :employee-full-name="$employee->fullName()"/>
    @endforeach
</div>
