<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>Readify</title>

  <!-- <style>
    * {
      border: 1px red solid;
    }
  </style> -->
</head>

<body class="min-h-screen flex flex-col mx-20 font-poppins">
  <nav>
    <div class="flex justify-between h-32 items-center">
      <div class="font-bold text-3xl">readify.</div>
      <div>
        <ul class="flex gap-8 items-center">
          <li><a href="#" class="text-xl hover:text-gray-600 transition ease-in-out duration-150">Books</a></li>
          <li><a href="#" class="text-xl hover:text-gray-600 transition ease-in-out duration-150">Trending</a></li>
          <li><a href="#" class="text-xl hover:text-gray-600 transition ease-in-out duration-150">Discover</a></li>
          <li>
            <button class="w-32 h-16 text-2xl rounded-xl text-white font-bold uppercase bg-blue-500 hover:bg-blue-600 transition ease-in-out duration-150">
              Sign In
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield("content")
</body>

</html>