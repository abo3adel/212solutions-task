<x-app-layout>
    <div class="p-5">
        <table id="table_id" class="display">
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
                $('#table_id').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('
                    company - list ') !!}',
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
                            name: 'adress'
                        },
                    ]
                });
            });

        </script>
    @endpush
</x-app-layout>
