<?php


// $count = $i;

$form = rex_config_form::factory('fe_replacer');
$form->addFieldset('Frontend Replacer - Einstellungen');

$field = $form->addTextAreaField('searchreplace',null,['class'=>'edittable','id'=>'edittable-srp']);
$field->setLabel('Suchmuster');
$field->setNotice('Jeweils korrespondierende Suche- und Ersetzmuster (regex) eingeben.');


$content = $form->get();

$fragment = new rex_fragment();
$fragment->setVar('title', 'Einstellungen');
$fragment->setVar('body', $content, false);
$content = $fragment->parse('core/page/section.php');

?>

<div class="rex-page-main">
        <?= $content ?>
</div>

<script>
var mytable = $('.edittable').editTable({
    data: [['']],           // Fill the table with a js array (this is overridden by the textarea content if not empty)
    tableClass: 'inputtable',   // Table class, for styling
    jsonData: false,        // Fill the table with json data (this will override data property)
    headerCols: ["Suchen", "Ersetzen"],
    maxRows: 999,           // Max number of rows which can be added
    first_row: false,        // First row should be highlighted?
    row_template: false,    // An array of column types set in field_templates
    field_templates: false, // An array of custom field type objects

    // Validate fields
    validate_field: function (col_id, value, col_type, $element) {
        return true;
    }
});
</script>
<style>
    #edittable-srp {
        display: none;
    }
</style>
