<!-- Modal para Detalles del Raite (El que ya tenías) -->
<div class="modal fade" id="modalDetalles" tabindex="-1" aria-hidden="true">
    <!-- ... tu código de pasajeros y paquetería ... -->
</div>

<!-- Modal para aviso de Origen (El nuevo) -->
<div class="modal fade" id="modalOrigen" tabindex="-1" aria-hidden="true" style="z-index: 1060;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Configurar Origen</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center py-4">
        <i class="bi bi-geo-alt-fill text-primary" style="font-size: 3rem;"></i>
        <p class="mt-3 fs-5">Por favor, <strong>toca el mapa</strong> para seleccionar tu punto de partida.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">CAMBIAR</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal de Estado: Solicitando Viaje -->
<div class="modal fade" id="modalEstado" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-body text-center py-5">
        <!-- Icono con animación de pulso -->
        <div class="spinner-grow text-primary mb-4" role="status" style="width: 3rem; height: 3rem;">
          <span class="visually-hidden">Cargando...</span>
        </div>
        <h4 class="fw-bold">Solicitando Viaje...</h4>
        <p class="text-muted"><strong>Estamos buscando al conductor más cercano para tu RAITE</strong></p>
        
        <!-- Botón para cancelar por si el usuario se arrepiente -->
        <button type="button" class="btn btn-outline-danger btn-sm mt-4" data-bs-dismiss="modal">
          Cancelar Solicitud
        </button>
      </div>
    </div>
  </div>
</div>