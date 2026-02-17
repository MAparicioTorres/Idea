<x-layout>

    <x-form title="Register an account" description="Start tracking your ideas">
        <form class="space-y-4 mt-7" action="/register" method="POST">
            @csrf

            <x-form.field name="name" label="Name" />
            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />


            <button type="submit" class="btn mt-2 h-10 w-full">Create account</button>
        </form>
    </x-form>
</x-layout>
