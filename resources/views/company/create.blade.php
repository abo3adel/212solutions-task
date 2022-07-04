<x-app-layout>
    <dvi class="font-semibold text-red-800 bg-red-300 alert">
        @foreach ($errors->all() as $err)
            {{$err}}
        @endforeach
    </dvi>
    <div class="w-full p-4">
        <form class="w-full px-1 py-3 text-start md:px-3 xl:w-1/2" method="post"
            action="{{ route('company.store') }}" enctype="multipart/form-data">
            <div class="flex flex-row flex-wrap my-3">
                <label for="name" class="pr-2 md:w-1/4">
                    Name</label>
                <input type="text" id="name" name="name" class="w-3/4 input" value="{{ old('name') }}" required />
            </div>
            <div class="flex flex-row flex-wrap my-3">
                <label for="address" class="pr-2 md:w-1/4">
                    address</label>
                <input type="text" id="address" name="address" class="w-3/4 input" value="{{ old('adress') }}" required />
            </div>
            <div class="flex flex-row flex-wrap my-3">
                <label for="logo" class="pr-2 md:w-1/4">
                    logo</label>
                <input type="file" id="logo" name="logo" class="w-3/4 input" value="{{ old('logo') }}" accept="image/jpg,image/jpeg,image/png" required />
            </div>
            <div class="flex flex-row flex-wrap my-3">
                <input type="submit" value="Submit" class='px-4 py-2 bg-blue-600 rounded cursor-pointer btn btn-primary hover:bg-blue-800' />
            </div>
            @csrf
        </form>
    </div>
</x-app-layout>
