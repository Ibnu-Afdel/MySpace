<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
    <!--
      Heads up! 👋
      Plugins:
        - @tailwindcss/forms
    -->

    <div class="flex justify-center pt-10">
        <div class="sm:hidden">
            <label for="Tab" class="sr-only">Tab</label>
            <select id="Tab" class="w-full rounded-md border-gray-200">
                <option>Settings</option>
                <option>Messages</option>
                <option>Archive</option>
                <option select>Notifications</option>
            </select>
        </div>

        <div class="hidden sm:block">
            <nav class="flex gap-6" aria-label="Tabs">
                <x-nav-link href="/" :active=" request()->is('/') " >Home</x-nav-link>
                <x-nav-link href="/about" :active=" request()->is('about') " >About</x-nav-link>
                <x-nav-link href="/contact" :active=" request()->is('contact') " >Contact</x-nav-link>
            </nav>
        </div>
    </div>

    {{ $slot }}
</body>
</html>
