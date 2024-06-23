<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Your CSS styles here */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td button {
            padding: 5px 10px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->usertype }}</td>
                    <td>
                        @if($user->usertype != 'admin')
                            <form action="{{ route('promote.user', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Promote to Admin</button>
                            </form>
                        @else
                            Admin
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br>
<a href="{{ url('/') }}" class="back-to-home">Back to Home</a>
<style>.back-to-home {
    margin-bottom: 20px;
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}
</style>
</body>
</html>
