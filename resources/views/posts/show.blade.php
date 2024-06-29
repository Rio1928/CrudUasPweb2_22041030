<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Detail - Tutorial CRUD Laravel 10 @ qadrlabs.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #1e3a8a; /* Darker blue background */
            margin: 0;
            padding: 0;
            color: white; /* Text color white */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #4c51bf;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #cbd5e0;
        }

        .content {
            padding: 20px;
            background-color: #1e3a8a; /* Darker blue content background */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #1e3a8a; /* Darker blue table background */
            color: white; /* Table text color white */
        }

        table th,
        table td {
            border: 1px solid #2563eb; /* Border color */
            padding: 12px;
            text-align: left;
        }

        table th {
            background-color: #4c51bf;
            color: #ffffff;
            font-weight: bold;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #2a4365; /* Darker blue for even rows */
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .action-buttons a,
        .action-buttons button {
            padding: 8px 16px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            color: white; /* Button text color white */
            background-color: #2563eb; /* Initial button background color */
        }

        .action-buttons a:hover,
        .action-buttons button:hover {
            background-color: #718096;
            color: #ffffff;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="header">
        <h1 class="text-3xl font-bold">dETAIL dATA</h1>
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->NIK }}</td>
                    <td>{{ $post->NAMA_LENGKAP }}</td>
                    <td>{{ $post->ALAMAT }}</td>
                    <td>{{ $post->NOMOR_HP }}</td>
                    <td>{{ $post->created_at->format('d-m-Y H:i:s') }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-600 text-white hover:bg-blue-700">Edit</a>
                        <form onsubmit="return confirm('Are you sure you want to delete this post?');"
                              action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>
