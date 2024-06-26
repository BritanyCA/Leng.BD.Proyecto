<?php
require_once '../models/ProductoInventario.php';

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $productoInventario = new productoInventario();
        $productosInventarios = $productoInventario->listarTodosDb();
        $data = array();
        foreach ($productosInventarios as $reg) {
            $data[] = array(
                "0" => $reg->getIdProducto(),
                "1" => $reg->getNombre(),
                "2" => $reg->getDescripcion(),
                "3" => $reg->getStockProducto(),
                "4" => $reg->getIdProveedor(),
                "5" => $reg->getPrecio(),
                "6" => ""

            );
        }
        $resultados = array(
            "sEcho" => 1, // Información para DataTables
            "iTotalRecords" => count($data), // Total de registros al DataTables
            "iTotalDisplayRecords" => count($data), // Enviamos el total de registros a visualizar
            "aaData" => $data
        );
        echo json_encode($resultados);
        break;

    case 'insertar':
        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
        $descripcion = isset($_POST["descripcion"]) ? trim($_POST["descripcion"]) : "";
        $stockProducto = isset($_POST["stockProducto"]) ? trim($_POST["stockProducto"]) : "";
        $idProveedor = isset($_POST["idProveedor"]) ? trim($_POST["idProveedor"]) : "";
        $precio = isset($_POST["precio"]) ? trim($_POST["precio"]) : "";

        // Crear el objeto Proveedor y establecer los valores
        $productoInventario = new productoInventario();
        $productoInventario->setNombre($nombre);
        $productoInventario->setDescripcion($descripcion);
        $productoInventario->setStockProducto($stockProducto);
        $productoInventario->setIdProveedor($idProveedor);
        $productoInventario->setPrecio($precio);

        // Llamar al método para guardar en la base de datos
        $productoInventario->guardarEnDb();
        if ($productoInventario->verificarExistenciaDb()) {
            //if(enviarCorreo($email,$clave,$nombre)){
            echo 1; // Registro de proveedor exitoso
            //} else {
            //  echo 4; // Registro de proveedor exitoso pero falló al enviar el correo electrónico
            //}
        } else {
            echo 3; // Fallo al realizar el registro del proveedor
        }
        break;
        
}
?>
