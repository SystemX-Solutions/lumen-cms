<?php namespace App\Http\FieldTypes;

class Radio extends FieldType {

    public function __construct() {
        $this->Table = new Table();
    }

    protected function _config() {

        $output  = "";
        $output .= $this->Table->renderConfig('options', ['label' => 'Checkbox Options']);
        return $output;
    }

    protected function _render($field, array $options = []) {

        extract($this->fillOptions($field, $options));

        $output = '<div class="formplate">';

        $output .= "<span class=\"fp-checkbox\"><input id=\"$fieldId\" type=\"radio\" name=\"$field\" value=\"1\" /></span>";
        $output .= "<label for=\"$fieldId\">$labelText</label>";

        $output .= '</div>';

        return $output;
    }

    protected function _process(array $settings = []) {
        return $settings;
    }

}