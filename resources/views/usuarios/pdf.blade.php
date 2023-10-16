<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Observatorio SRCH</title>
        
        <style>
      body{
    font-family: Arial;
}
table{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
    min-width: 150px;
    padding: 0.5rem;
    
    
}
p, h3, h2, h1{
    text-align: center;
}
th, td{
    border: solid 1px  #0f362d;
    padding: 5px;
    font-size: 10px;
}

thead {
    background-color: #6777EF;
    border-bottom: solid 2px #3d4790;
    color: white;

}
tr:nth-child(even){
    background-color: #e0e0e0;
}
	hr{
		page-break-after: always;
		border: none;
		margin: 0;
		padding: 0;
	}

 img{
        align-content: center;
        width: 75px;
        height: 40px;
    }
  
        </style>
</head>
<body>
   <h2>
    <img src="assets/images/ojo.png">
   </h2>
   <h3>Observatorio SRCH</h3>
    
    <h2>Lista de usuarios</h2>
   
    <table>
        <thead>                                     
            <th style="display: none;">ID</th>
            <th style="color:#fff;">Nombre</th>
            <th style="color:#fff;">E-mail</th>
            <th style="color:#fff;">Rol</th>                                                              
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
            <tr>
              <td style="display: none;">{{ $usuario->id }}</td>
              <td>{{ $usuario->name }}</td>
              <td>{{ $usuario->email }}</td>
              <td>
                @if(!empty($usuario->getRoleNames()))
                  @foreach($usuario->getRoleNames() as $rolNombre)                                       
                    <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                  @endforeach
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    
</body>

</html>