<x-layout>
    <div class="py-8 max-w-4xl mx-auto">
        <div class="flex justify-between">
            <a
                class="flex items-center gap-x-2 text-sm font-medium"
                href="{{ route("idea.index") }}"
            >
                <x-icons.arrow-back />
                Back to ideas
            </a>

            <div class="flex items-center gap-x-3">
                <button class="btn btn-outlined">
                    <x-icons.external />
                    Edit Idea
                </button>

                <form
                    action="{{ route("idea.destroy", ["idea" => $idea]) }}"
                    method="POST"
                >
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-outlined text-red-500">
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-7 space-y-6">
            <h1 class="font-bold text-4xl">{{ $idea->title }}</h1>

            <div class="mt-2 flex gap-x-3 items-center">
                <x-idea.status-label :status="$idea->status->value">
                    {{ $idea->status->label() }}
                </x-idea.status-label>
                <div class="text-muted-foreground text-sm">
                    {{ $idea->created_at->diffForHumans() }}
                </div>
            </div>

            <x-card class="mt-6">
                <div class="text-foreground max-w-none cursor-pointer">
                    {{ $idea->description }}
                </div>
            </x-card>

            @if (count($idea->links))
                <div>
                    <h3 class="font-bold text-xl mt-6">Links</h3>

                    <div class="mt-3">
                        @foreach ($idea->links as $link)
                            <x-card
                                class="text-primary font-medium flex gap-x-3 items-center"
                                :href="$link"
                            >
                                <x-icons.external />
                                {{ $link }}
                            </x-card>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layout>
