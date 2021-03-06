<?php namespace App\CMS\FieldTypes;

class Dropdown extends FieldType {

    public function __construct()
    {
        $this->Table = new Table();
    }

    protected function _config()
    {
        $output  = "";
        $output .= $this->Table->render('options', [
            'title' => 'Dropdown Options',
            'cols' => [
                [
                    'title' => 'Option Label',
                    'handle' => 'title',
                    'type' => 'single-line'
                ],[
                    'title' => 'Value',
                    'handle' => 'value',
                    'type' => 'single-line'
                ],[
                    'title' => 'Default',
                    'handle' => 'selected',
                    'type' => 'checkbox',
                    'width' => 50
                ]
            ]
        ]);
        return $output;
    }

    protected function _process(array $settings = [])
    {
        return $settings;
    }

    protected function fillOptions($field, $params)
    {
        $parentOptions = parent::fillOptions($field, $params);
        $options = [];
        foreach($params['options'] as $key => $option) {
            if (!is_array($option)) {
                $option = [
                    'title' => $option,
                    'value' => $key
                ];
            }
            $option['selected'] = isset($params['value']) && $params['value'] == $option['value'] ? 'selected' : '';
            $options[] = $option;
        }
        return $parentOptions + compact('options');
    }

}