<x-card class="mb-4">
    <div class="flex justify-between mb-2">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
            {{ number_format($job->salary, 2,',', '.') }} €
        </div>
    </div>
    <div class="flex items-center justify-between mb-4 text-sm text-slate-500">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                    {{ Str::ucfirst($job->experience) }}
                  </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                  </a>
            </x-tag>
        </div>
    </div>

    {{ $slot }}
</x-card>