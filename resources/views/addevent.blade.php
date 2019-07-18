<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: #2e6da4 ; color: white;">
                                Agregar Eventos 
                        </div>                        
                        </div>
                        <div class="panel-body">
                            <h1>Agregar el dato</h1>
                            <form method="POST" action="{{url('/addeventurl')}}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <label for="">Titulo del Evento</label>  
                                <input class="form-control" type="text" name="title" placeholder="Ingrese el titulo"/> 
                                <br/>     
                                <label for="">El color</label>  
                                <input class="form-control" type="color" name="color" placeholder="Ingrese en color"/>                            
                                <br/>                                                          
                                <label for="">Ingrese el inicio de la fecha</label><br/>
                                <input type="date" class="form-control" name="start_date" placeholder="Ingrese el inicio del evento"/><br/>
                                <br/>
                               
                                <label for="">Ingrese el fin de la fecha</label><br/>
                                <input type="date" class="form-control" name="end_date" placeholder="Ingrese el fin del evento"/><br/>
                                <br/>
                                <br/>                                
                                <input type="submit" name="submit" class="btn btn-primary" value="Agregue el Evento"> <br/>                                                        
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{  session()->get('error') }} </div>
                                @endif
                           </form>

                        </div>
                    </div>    
                </div>        
        </div>   
    </div>  
</body>
</html>