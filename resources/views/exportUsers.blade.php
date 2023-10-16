<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>Users Observatorio SRCH</title>
<h3>Users del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Nombre</th>
    <th>Email</th>
        </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>