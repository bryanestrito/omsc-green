
<?php

if ($reportPermissions->canRead()) {

    include_component('core', 'ohrmList', $parmetersForListComponent);
    echo '<input type="button" value="Print" id="resultTablePrint" style="margin-left: 20px;" />';
}
?>



