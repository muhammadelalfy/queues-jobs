<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<x-sidebar title="hello" :info="$info" class="bg-gray-500">
    <div>
        additional to component
    </div>
<x-slot name="any_speech_with_name">any speech with slot name</x-slot>

</x-sidebar>

</body>
</html>

