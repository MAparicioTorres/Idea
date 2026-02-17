<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/idea-logo.svg" width="40" alt="Idea logo">
            </a>
        </div>

        <div class="flex gap-x-6 items-center ">
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            @else
                <a href="/register">Register</a>
                <a href="/login" class="btn">Sign In</a>
            @endauth
        </div>
    </div>
</nav>
