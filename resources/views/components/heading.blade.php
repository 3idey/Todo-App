@props(['heading'])


<!DOCTYPE html>
<html lang="en" class="bg-gray-900 text-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
