<?php
class DocumentLinkComponent
{
  public static function render($filePath, $title, $content)
  {
?>
    <a class="hover:scale-105 group ease-in-out transition-all" target="_blank" href="<?php echo $filePath; ?>">
      <div class="bg-darkown text-bluelightown p-5">
        <div class="flex items-center text-xl gap-4">
          <div class="bg-red-300 group-hover:bg-red-500 ease-in-out transition-all flex items-center justify-center min-h-11 min-w-11 rounded-full">
            <img class="size-6" src="<?php echo PATH_ICONS; ?>filetype-pdf.svg" alt="">
          </div>
          <span class="font-bold"><?php echo $title; ?></span>
        </div>
        <p><?php echo $content; ?></p>
      </div>
    </a>
<?php
  }
}
?>