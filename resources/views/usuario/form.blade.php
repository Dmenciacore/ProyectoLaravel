<h1>{{ $modo }} Usuario</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
               <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif

<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Tipo de Documento: </lable>
                <select name="tipoDocumento" value= "{{ isset($usuario->tipoDocumento)?$usuario->tipoDocumento:old('tipoDocumento') }}">
                    <option value="ti">Tarjeta de Identidad</option>
                    <option value="cc">Cédula de Ciudadanía</option>
                    <option value="passport">Pasaporte</option>
                    <option value="ce">Cédula de Extranjería</option>  
                    <option value="other">Otro</option>  
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="cedula">Número de Cédula:</label>
                <input type="text" class="form-control" name="cedula" value= "{{ isset($usuario->cedula)?$usuario->cedula:old('cedula') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value= "{{ isset($usuario->nombre)?$usuario->nombre:old('nombre') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" name="apellido" value= "{{ isset($usuario->apellido)?$usuario->apellido:old('apellido') }}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Fecha de Nacimiento : </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="fechaNacimiento" value= "{{ isset($usuario->fechaNacimiento)?$usuario->fechaNacimiento:old('fechaNacimiento') }}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Ciudad</lable>
                <select name="ciudadNacimiento" value= "{{ isset($usuario->ciudadNacimiento)?$usuario->ciudadNacimiento:old('ciudadNacimiento') }}">
                  <option value="Bogota">Bogota</option>
                  <option value="Medellin">Medellin</option>
                  <option value="Cali">Cali</option>  
                  <option value="Bucaramanga">Bucaramanga</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" value= "{{ isset($usuario->email)?$usuario->email:old('email') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" name="usuario" value= "{{ isset($usuario->usuario)?$usuario->usuario:old('usuario') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="password">Contraseña:</label>
                <input type="text" class="form-control" name="password" value= "{{ isset($usuario->password)?$usuario->password:old('password') }}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">{{$modo}}</button>
            <a href=" {{ url('usuario') }} " class="btn btn-primary">Regresar</a>
        </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>