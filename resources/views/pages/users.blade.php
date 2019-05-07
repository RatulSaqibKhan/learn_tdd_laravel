<style>
    .table {
        width: 100%;
        border: 1px solid #ccc;
        border-collapse: collapse;
    }

    .table td, th {
        border: 1px solid #ccc;
        align-content: center;
        padding: 5px;
    }

    .big-btn {
        border: 1px solid #ece773;
        border-radius: 25%;
        background-color: #ece773;
        color: #000;
        width: 10%;
        padding: 2px 30px;
        text-underline: none;
    }
    .edit-btn {
        border: 1px solid #9eec9b;
        border-radius: 25%;
        background-color: #9eec9b;
        color: #000;
        width: 2%;
    }
    .delete-btn {
        border: 1px solid #ec5151;
        border-radius: 25%;
        background-color: #ec5151;
        color: #ffffff;
        width: 2%;
    }

    a{
        text-decoration: none;
    }
</style>
<a href="{{ url('users/create') }}" class="big-btn">New User</a>
<table class="table">
    <thead>
    <tr>
        <th>Sl</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if($users && $users->count())
        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name ?? '' }}</td>
                <td>{{ $user->email ?? '' }}</td>
                <td>
                    <a href="{{ url('users/'.$user->id) }}" class="edit-btn">Edit</a>
                    <a onclick="return confirm('Are you sure?');" href="{{ url('users/'.$user->id.'/delete') }}" class="delete-btn">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>