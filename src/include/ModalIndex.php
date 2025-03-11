<?php
function renderModalIndex($ModalContent2)
{
  $ModalTittle = "Por favor, lee lo siguiente:";
  $ModalContent1 = '<strong>IMPORTANTE 1:</strong> Para regresar a la plataforma MOODLE utiliza el enlace "Volver a mis cursos" en el menú principal. Si has terminado de revisar el contenido, por favor, utiliza el botón "Salir" en el mismo menú.';
  $ModalContent3 = 'Si tienes alguna pregunta <span class="text-3xl">🤔</span> estamos para ayudarte en: <span class="text-secondary">pel@cch.unam.mx</span>';

  ob_start();
?>
  <div id="default-modal" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full bg-black/63 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
          <h3 class="text-xl font-semibold text-gray-900">
            <?php echo htmlspecialchars($ModalTittle); ?>
          </h3>
          <button class="close-modal-button cursor-pointer text-gray-700 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Cerrar</span>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-4">
          <p>
            <?php echo $ModalContent1; ?>
          </p>
          <?php
          echo isset($ModalContent2) ? '<p>' . $ModalContent2 . '</p>' : '';
          ?>
          <p>
            <?php echo $ModalContent3; ?>
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button class="close-modal-button text-white bg-orange-own hover:bg-orange-own/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">Ok</button>
        </div>
      </div>
    </div>
  </div>
<?php
  ob_end_flush();
}
?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('default-modal');
    modal.classList.remove('hidden');

    var closeModalButtons = document.querySelectorAll('.close-modal-button');
    closeModalButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        modal.classList.add('hidden');
      });
    });
  });
</script>
