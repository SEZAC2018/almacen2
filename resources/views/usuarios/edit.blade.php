@extends('layouts.principal')
@section('contenido')
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Usuario</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=localidad">Usuario</a></li>
      <li class="active">Editar Usuario</li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-8">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;">Editar Usuario</h2>
            </div>
            <div class="col-md-4">
              <div class="btn-group pull-right">
                <div class="actions"> 
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div class="porlets-content">
          <div class="porlets-content">
            <form  action="{{url('usuarios',[$usuarios->id])}}" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>
             {{csrf_field()}}



             <!--este  no esta  agregarlo en todos -->
             <input type="hidden" name="_method" value="PUT">





             <div class="form-group">
              <label class="col-sm-3 control-label">Nombre(s)<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">

               <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="nombreCompleto" id="nombreCompleto" 
               maxlength="50" required value="{{$usuarios->nombreCompleto}}" placeholder="Ingrese el Nombre completo del Usuario">
             </div>
           </div><!--/form-group-->
           <div class="form-group">


            <div class="form-group">
              <label class="col-sm-3 control-label">Apellidos(s)<strog class="theme_color">*</strog></label>
              <div class="col-sm-6">

               <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="apellido" id="apellido" 
               maxlength="50" required value="{{$usuarios->apellido}}" placeholder="Ingrese los Apellidos">
             </div>
           </div><!--/form-group-->



           <div class="form-group">
            <label class="col-sm-3 control-label">Nombre de Usuario(s)<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">

             <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="nombreusuario" id="nombreusuario" 
             maxlength="50" required value="{{$usuarios->nombreusuario}}" placeholder="Ingrese el nombre de Usuario">
           </div>
         </div><!--/form-group-->


         <div class="form-group">
          <label class="col-sm-3 control-label">Contraseña<strog class="theme_color">*</strog></label>
          <div class="col-sm-6">

           <input onchange="mayus(this);" type="text" class="form-control"  autofocus name="contraseña" id="contrasena" 
           maxlength="50" required value="{{$usuarios->contraseña}}" placeholder="Ingrese la Contraseña">
         </div>
       </div><!--/form-group-->

       <div class="form-group">
        <label class="col-sm-3 control-label">Tipo de Usuario:<strog class="theme_color">*</strog></label>
        <div class="col-sm-6">
          <select class="form-control" name="tipoUsuario" required id="ambito">
           <option value="ADMINISTRADOR"> 
             ADMINISTRADOR          
           </option>
           <option value="ALMACENISTA"> 
             ALMACENISTA          
           </option>
           <option value="USUARIO REGULAR"> 
             USUARIO REGULAR           
           </option>
         </select>
       </div>
     </div><!--/form-group-->


     <div class="form-group">
      <label class="col-sm-3 control-label">Departamento<strog class="theme_color">*</strog></label>
      <div class="col-sm-6">
        <select name="idDireccion" class="form-control" required>
          @foreach($direcciones as $direccion)
          @if($usuarios->idDireccion==$direccion->id)
          <option value="{{$direccion->id}}">
            {{$direccion->nombre}}
          </option>
          @else
          <option value="{{$direccion->id}}">
            {{$direccion->nombre}}
          </option>
          @endif
          @endforeach
        </select>
        <div class="help-block with-errors"></div>
      </div>
    </div><!--/form-group-->



    <div class="form-group">
      <div class="col-sm-offset-7 col-sm-5">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/usuarios')}}" class="btn btn-default"> Cancelar</a>
      </div>
    </div><!--/form-group-->
  </form>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 
@endsection