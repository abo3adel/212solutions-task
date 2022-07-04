<x-app-layout>
    <div class="p-5">
        <table id="employee_table" class="display">
            <thead>
                <tr>
                    <th>image</th>
                    <th>Name</th>
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
                $('#employee_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('employee-list') !!}',
                    columns: [{
                            data: 'image',
                            name: 'image',
                            render: (data) => '<img src="' + data +
                                '" alt="emplyee Image" class="object-fit" />'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                    ]
                });
            });

        </script>
    @endpush
</x-app-layout>
