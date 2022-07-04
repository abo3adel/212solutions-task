<x-app-layout>
    <div class="flex flex-row flex-wrap p-5 mb-5">
        <lable for="comapnies-list" class="w-1/3">Search by Company</lable>
        <select id="comapnies-list" name="companies" class="w-2/3">
            @foreach($companies as $c)
                <option value="{{ $c->name }}">{{ $c->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <table id="employee_table" class="display">
            <thead>
                <tr>
                    <th>image</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function () {
                var table = $('#employee_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('employee-list') !!}',
                    columns: [{
                            data: 'image',
                            name: 'employees.image',
                            render: (data) => '<img src="' + data +
                                '" alt="emplyee Image" class="object-fit" />'
                        },
                        {
                            data: 'name',
                            name: 'employees.name'
                        },
                        {
                            data: 'company.name',
                            name: 'company.name'
                        },
                        {
                            data: 'email',
                            name: 'employees.email'
                        },
                    ],
                });

                var select = $('#comapnies-list')
                    .on('change', function () {
                        table
                            .search($(this).val())
                            .draw();
                    });
            });

        </script>
    @endpush
</x-app-layout>
