<div>
    <label for="{{ $name }}" class="flex items-center mb-1">
        <input type="radio" name="{{ $name }}" value="" @checked(!request($name)) />
        <span class="ml-2">All</span>
    </label>

    @foreach ($options as $option)
    <label for="{{ $name }}" class="flex items-center mb-1">
        <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked($option===request($name)) />
        <span class="ml-2">{{ ucfirst($option) }}</span>
    </label>
    @endforeach
</div>