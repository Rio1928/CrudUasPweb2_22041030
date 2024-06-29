<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DAFTAR IDENTITAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #1e3a8a; /* Darker blue background */
            color: white;
        }

        .input {
            background-color: #1e40af; /* Darker blue input background */
            color: white;
            border-color: #1e3a8a;
        }

        .input::placeholder {
            color: #a5b4fc;
        }

        table {
            background-color: #1e3a8a; /* Darker blue table background */
        }

        th, td {
            border-color: #2563eb; /* Border color */
        }
    </style>
</head>

<body>

<div class="container mx-auto mt-10 mb-10 px-10">
    <div class="grid grid-cols-8 gap-4 mb-4 p-5">
        <div class="col-span-4 mt-2">
            <h1 class="text-3xl font-bold">
                DAFTAR NAMA
            </h1>
        </div>

        <div class="input-container" style="width: 220px; position: relative;">
            <form action="{{ route('posts.search') }}" method="GET">
                <input type="text" name="text" class="input" style="width: 100%; height: 40px; padding: 10px; transition: .2s linear; border: 2.5px solid black; font-size: 14px; text-transform: uppercase; letter-spacing: 2px;" placeholder="search...">
                <span class="icon" style="position: absolute; right: 10px; top: calc(50% + 5px); transform: translateY(calc(-50% - 5px)) scale(1);">
                  <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </span>
            </form>
        </div>
          
        <div class="col-span-4">
            <div class="flex justify-end">
                <a href="{{ route('posts.create') }}"
                   class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                   id="add-post-btn">+ Tambah Data</a>
            </div>
        </div>
    </div>
    <div class="bg-white p-5 rounded shadow-sm text-gray-900">
        <!-- Flash session notification -->
        @if (session('success'))
            <div class="p-3 rounded bg-green-500 text-green-100 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full table-auto border">
            <thead class="border-b">
            <tr>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">NIK</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">Nama Lengkap</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">Alamat</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">Nomor HP</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">Create At</th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($posts as $post)
                <tr class="border-b border-blue-500">
                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">{{ $post->NIK }}</td>
                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">{{ $post->NAMA_LENGKAP }}</td>
                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">{{ $post->ALAMAT }}</td>
                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">{{ $post->NOMOR_HP }}</td>
                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap text-center">{{ $post->created_at->format('d-m-Y') }}</td>
                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap text-center">

                        <div class="flex justify-center items-center space-x-2">
                            <a href="{{ route('posts.show', $post->id) }}"
                               class="inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-orange-600 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-700 active:shadow-lg transition duration-150 ease-in-out">
                                Show
                            </a>

                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                  action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('posts.edit', $post->id) }}" id="{{ $post->id }}-edit-btn"
                                   class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">Edit</a>

                                <button type="submit"
                                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                        id="{{ $post->id }}-delete-btn">Delete
                                </button>
                            </form>
                        </div>

                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center text-sm text-white px-6 py-4 whitespace-nowrap" colspan="6">No data available</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>

</html>
