<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Types') }}
        </h2>
    </x-slot>


    <form action="{{ route('types.update', $type->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="">Type</label>
            <input type="text" name="name" placeholder="Input Type disini.." value="{{$type->name}}"><br>
            <span class="text-red-500 text-xs">{{ $errors->first('name') }}</span>
        </div>
        <div>
            <button type="submit" class="bg-sky-400 h-12 w-20 mt-5 rounded-lg text-lime-50">Simpan</button>
        </div>
    </form>

</x-app-layout>
