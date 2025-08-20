<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/auth.css')
</head>
<body class="h-screen flex bg-gray-50 dark:bg-gray-900">

@include('admin.includes.sidebar')

<form action=" {{ route('admin.categories.store') }}" method="POST">
    @csrf
    <div class="flex-1 p-4 overflow-auto">
        <div class="flex items-center gap-2">
            <input name="title" type="text"
                   class="form-control text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                   placeholder="Название категории">
        </div>

        @error('title')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <input type="submit"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                   value="Подвердить">
        </div>
    </div>
</form>

</body>
</html>
