<fieldset>
    <legend>Informacion General</legend>

    <label for="nombre">Nombre:</label>
    <input id="nombre" name="vendedor[nombre]" type="text" placeholder="Nombre Vendedor(a)" value="<?php echo s($vendedor->nombre); ?>">

    <label for="apellido">Apellido:</label>
    <input id="apellido" name="vendedor[apellido]" type="text" placeholder="Apellido Vendedor(a)" value="<?php echo s($vendedor->apellido); ?>">

    <label for="telefono">Telefono:</label>
    <input id="telefono" name="vendedor[telefono]" type="tel" placeholder="Telefono Vendedor(a)" value="<?php echo s($vendedor->telefono); ?>">

</fieldset>