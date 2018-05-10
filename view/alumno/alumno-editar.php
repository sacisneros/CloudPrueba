<h1>
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol>
  <li><a href="?c=Alumno">Alumnos</a></li>
  <li><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div>
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" placeholder="Ingrese su nombre"/>
    </div>
    
    <div>
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $alm->Apellido; ?>" placeholder="Ingrese su apellido" />
    </div>
    
    <div>
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $alm->Correo; ?>" placeholder="Ingrese su correo electrónico" />
    </div>
    
    <div>
        <label>Sexo</label>
        <select name="Sexo" >
            <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
            <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
        </select>
    </div>
    
    <div>
        <label>Fecha de nacimiento</label>
        <input readonly type="text" name="FechaNacimiento" value="<?php echo $alm->FechaNacimiento; ?>" placeholder="Ingrese su fecha de nacimiento" />
    </div>
    
    <hr />
    
    <div>
        <button>Guardar</button>
    </div>
</form>
