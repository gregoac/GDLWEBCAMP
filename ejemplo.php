<div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
          <?php
              try {
                  require_once('includes/funciones/bd_conexion.php');
                  $sql = "SELECT * FROM `categoria_evento` ORDER BY id_categoria DESC";
                  $resultado = $conn->query($sql);
              } catch (Exception $e) {
                  echo $e->getMessage();
              }
          ?>
          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $categoria = $cat['cat_evento']; ?>
              <a href="#<?php echo strtolower($categoria)?>">
              <i class="fas <?php echo $cat['icono'] ?>" aria-hidden="true"></i><?php echo $categoria ?></a>
            <?php } ?>
          </nav>
          
          <?php
              try {
                  require_once('includes/funciones/bd_conexion.php');
                  $sql = " SELECT `evento_id, nombre_evento, fecha_evento, hora_event`, cat_evento, icono, nombre_invitado, apellido_invitado ";
                  $sql .= " FROM eventos ";
                  $sql .= " INNER JOIN categoria_evento ";
                  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                  $sql .= " INNER JOIN invitados ";
                  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                  $sql .= " AND eventos.id_cat_evento = 3 ";
                  $sql .= " ORDER BY evento_id LIMIT 2; ";
                  $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                  $sql .= " FROM eventos ";
                  $sql .= " INNER JOIN categoria_evento ";
                  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                  $sql .= " INNER JOIN invitados ";
                  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                  $sql .= " AND eventos.id_cat_evento = 2 ";
                  $sql .= " ORDER BY evento_id LIMIT 2; ";
                  $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                  $sql .= " FROM eventos ";
                  $sql .= " INNER JOIN categoria_evento ";
                  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                  $sql .= " INNER JOIN invitados ";
                  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                  $sql .= " AND eventos.id_cat_evento = 1 ";
                  $sql .= " ORDER BY evento_id LIMIT 2; ";
              } catch (Exception $e) {
                  echo $e->getMessage();
              }
          ?>
 
          <?php $conn->multi_query($sql); ?>
 
          <?php
 
          do {
            $resultado = $conn->store_result();
            $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
            
            <?php $i = 0; { ?>
            <?php foreach($row as $evento); ?>
            <?php if($i % 2 == 0) { ?>
                <div id="<?php echo strtolower($evento['cat-evento']); ?>" class="info-curso ocultar clearfix">
            <?php } ?>
                    <div class="detalle-evento">
                      <h3><?php echo utf8_encode($evento['nombre_evento']); ?></h3>
                      <p><i class="far fa-clock" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                      <p><i class="fas fa-calendar-alt" aria-hidden="true"> <?php echo $evento['fecha_evento']; ?></p>
                      <p><i class="fas fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " . echo $evento['apellido_invitado']; ?></p>
                    </div>
                
            <?php if($i % 2 == 1); ?>
                <a href="#" class="boton float-right">Ver Todos</a>
                </div>
            <?php endif; ?>
          <?php $i++; ?>      
          <?php endforeach; ?>
          <?php $resultado->free(); ?>
 
 
          <?php } while ($conn->more_results() && $conn->next_result()); ?>
 
        </div>
        <!--programa evento-->
      </div>
      <!--contenedor-->
    </div>
    <!--contenido programa-->