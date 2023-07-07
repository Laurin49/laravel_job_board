<x-layout>
    @foreach ($jobs as $key => $job)
        <div class="text-xl font-bold p-2 m-2">{{ $key }} : {{ $job->title }}</div>
    @endforeach
</x-layout>