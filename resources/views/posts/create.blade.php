<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create New Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #1e3a8a; /* Darker blue background */
            color: white; /* Text color white */
        }

        .input {
            background-color: #1e40af; /* Darker blue input background */
            color: rgb(12, 7, 7);
            border-color: #1e3a8a;
        }

        .input::placeholder {
            color: #a5b4fc;
        }

        .form-label {
            color: #0c0909; /* Label color white */
        }

        .form-error {
            background-color: #e3342f; /* Error message background color */
            color: #110c0c; /* Error message text color */
        }
    </style>
</head>

<body>

<div class="container mx-auto mt-10 mb-10 px-10">
    <div class="grid grid-cols-8 gap-4 p-5">
        <div class="col-span-4 mt-2">
            <h1 class="text-3xl font-bold">
                CREATE NEW DATA
            </h1>
        </div>
        <div class="col-span-4">

        </div>
    </div>
    <div class="bg-white p-5 rounded shadow-sm text-gray-900">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="NIK" class="form-label">NIK</label>
                <input type="text" name="NIK" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    input
                    bg-clip-padding
                    border
                    rounded-full
                    transition
                    ease-in-out
                    m-0
                    focus:bg-white focus:border-blue-600 focus:outline-none
                  " value="{{ old('NIK') }}" required>

                @error('NIK')
                <div class="form-error p-2 shadow-sm rounded mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="NAMA_LENGKAP" class="form-label">Nama Lengkap</label>
                <input type="text" name="NAMA_LENGKAP" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    input
                    bg-clip-padding
                    border
                    rounded-full
                    transition
                    ease-in-out
                    m-0
                    focus:bg-white focus:border-blue-600 focus:outline-none
                  " value="{{ old('NAMA_LENGKAP') }}" required>

                @error('NAMA_LENGKAP')
                <div class="form-error p-2 shadow-sm rounded mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="ALAMAT" class="form-label">Alamat</label>
                <input type="text" name="ALAMAT" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    input
                    bg-clip-padding
                    border
                    rounded-full
                    transition
                    ease-in-out
                    m-0
                    focus:bg-white focus:border-blue-600 focus:outline-none
                  " value="{{ old('ALAMAT') }}" required>

                @error('ALAMAT')
                <div class="form-error p-2 shadow-sm rounded mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="NOMOR_HP" class="form-label">Nomor HP</label>
                <input type="text" name="NOMOR_HP" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    input
                    bg-clip-padding
                    border
                    rounded-full
                    transition
                    ease-in-out
                    m-0
                    focus:bg-white focus:border-blue-600 focus:outline-none
                  " value="{{ old('NOMOR_HP') }}" required>

                @error('NOMOR_HP')
                <div class="form-error p-2 shadow-sm rounded mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-3">
                <button type="submit"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Save
                </button>
                <a href="{{ route('posts.index') }}"
                   class="inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out">Back</a>
            </div>

        </form>

    </div>

</div>

<script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
</body>

</html>
