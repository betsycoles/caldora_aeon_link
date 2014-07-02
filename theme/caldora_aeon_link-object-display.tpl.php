<?php
/**
 * @file
 *
 * This is the template file for the object page for basic image
 *
 * @TODO: add documentation about file and available variables
 */
?>

<div class="caldora-image-object islandora clear-fix">
  <?php if (isset($viewer)): ?>
  <div class="caldora-seadragon">
  <?php print $viewer; ?>
  </div>
  <?php endif; ?>
   <div class="caldora-image">
     <?php print($image); ?>
   </div>
  <?php if (isset($metadata_table)): ?>
   <div class="caldora-metadata">
     <?php print($metadata_table); ?>
   </div>
  <?php endif; ?>
</div>
