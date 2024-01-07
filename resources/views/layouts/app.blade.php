<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel ChatGPT Examples</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="/"><span class="font-semibold text-xl tracking-tight">Laravel ChatGPT Examples</span></a>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Start
            </a>
            <a href="/poem" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Text
            </a>
            <a href="/roast" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Audio
            </a>
            <a href="/image" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                Image
            </a>
        </div>
    </div>
</nav>
<div class="h-full grid place-items-center p-6">
    @yield('content')
</div>
</body>
</html>
