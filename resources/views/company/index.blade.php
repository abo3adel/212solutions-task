<x-app-layout>
    <div class="p-5">
        <table id="companies_table" class="display">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Adress</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#companies_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('company-list') !!}',
                    columns: [{
                            data: 'logo',
                            name: 'logo',
                            render: (data) => '<img src="' + data +
                                '" alt="company logo" class="object-fit" />'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'address',
                            name: 'address'
                        },
                    ]
                });
            });

        </script>
    @endpush
</x-app-layout>
