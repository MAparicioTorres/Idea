<x-layout>

    <x-form title="Login In" description="Welcome back">
        <form class="space-y-4 mt-7" action="/login" method="POST">
            @csrf

            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />


            <button type="submit" class="btn mt-2 h-10 w-full">Sign In</button>
        </form>
    </x-form>
</x-layout>
