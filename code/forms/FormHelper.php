<?php

class FormHelper
{
    /** @var array 值 */
    protected $values = array();

    /**
     * FormHelper 建構子。
     * @param array $values 值
     */
    public function __construct(array $values = array())
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->values = $_POST;
        } else {
            $this->values = $values;
        }
    }

    /**
     * 輸入元素
     *
     * @param string $type 型態
     * @param array $attributes 屬性
     * @param bool $isMultiple 是否多選
     * @return string input 元素
     */
    public function input(
        string $type,
        array $attributes = array(),
        bool $isMultiple = false
    ): string {
        $attributes['type'] = $type;

        if ($type == 'radio' || $type == 'checkbox') {
            if ($this->isOptionSelected($attributes['name'] ?? null,
                $attributes['value'] ?? null)) {
                $attributes['checked'] = true;
            }
        }

        return $this->tag('input', $attributes, $isMultiple);
    }

    /**
     * 選項是否選取
     *
     * @param string $name 名稱
     * @param string $value 值
     * @return bool 是否選取
     */
    protected function isOptionSelected(string $name, string $value): bool
    {
        /**
         * 如果 $name 不在 values 陣列中
         * 選項就不會選取
         */
        if (!isset($this->values[$name])) {
            return false;
        } elseif (is_array($this->values[$name])) {
            /**
             * 如果 $name 元素是個陣列
             * 那檢查一下 $value 有沒有在這個陣列中
             */
            return in_array($value, $this->values[$name]);
        } else {
            /**
             * 否則的話，將 $value 與 $name 元素作比較
             * 回傳是否存在
             */
            return $value == $this->values[$name];
        }
    }

    /**
     * 標籤
     *
     * @param string $tag 標籤名稱
     * @param array $attributes 屬性
     * @param bool $isMultiple 是否多選
     * @return string 標籤
     */
    public function tag(
        string $tag,
        array $attributes = array(),
        bool $isMultiple = false
    ): string {
        return "<$tag {$this->attributes($attributes, $isMultiple)} />";
    }

    /**
     * 屬性
     *
     * @param array $attributes 屬性
     * @param bool $isMultiple 是否多選
     * @param bool $valueAttribute 是否包含值
     * @return string 屬性
     */
    protected function attributes(
        array $attributes,
        bool $isMultiple,
        bool $valueAttribute = true
    ): string {
        /** @var array $result 結果 */
        $result = array();

        /**
         * 如果標籤有 value attribute 而且
         * 有 name 並且存在於 values 陣列中
         * 那就設定 value attribute
         */
        if ($valueAttribute && isset($attributes['name']) &&
            array_key_exists($attributes['name'], $this->values)) {
            $attributes['value'] = $this->values[$attributes['name']];
        }

        foreach ($attributes as $key => $attribute) {
            // 如果是布林值的話，表示是布林屬性
            if (is_bool($attribute)) {
                if ($attribute) {
                    $result[] = $this->encode($key);
                }
            } else {
                // 否則的話是鍵 = 值型態
                $value = $this->encode($attribute);

                /**
                 * 如果元件有多個值
                 * 把[]加到它的值後面
                 */
                if ($isMultiple && ($key == 'name')) {
                    $value .= '[]';
                }
                $result[] = "$key='$value'";
            }
        }

        return implode(' ', $result);
    }

    /**
     * 編碼
     *
     * @param string $text 內容
     * @return string 編碼
     */
    public function encode(string $text): string
    {
        return htmlentities($text);
    }

    /**
     * 選擇元素
     *
     * @param array $options 選項
     * @param array $attributes 屬性
     * @return string 選擇元素
     */
    public function select(array $options, array $attributes = array()): string
    {
        /** @var bool $multiple 多選 */
        $multiple = $attributes['multiple'] ?? false;

        return
            $this->start('select', $attributes, $multiple) .
            $this->options($attributes['name'] ?? null, $options) .
            $this->end('select');
    }

    /**
     * 標籤開始
     *
     * @param string $tag 標籤
     * @param array $attributes 屬性
     * @param bool $isMultiple 是否多選
     * @return string 標籤開始
     */
    public function start(
        string $tag,
        array $attributes = array(),
        bool $isMultiple = false
    ): string {
        /** @var bool $valueAttribute <select> 與 <textarea> 標籤沒有 value 屬性 */
        $valueAttribute = (!(($tag == 'select') || ($tag == 'textarea')));
        /** @var string $attribute 屬性字串 */
        $attribute = $this->attributes($attributes, $isMultiple, $valueAttribute);

        return "<$tag $attribute>";
    }

    /**
     * 選項標籤
     *
     * @param string $name 名稱
     * @param array $options 選項
     * @return string 選項標籤
     */
    protected function options(string $name, array $options): string
    {
        /** @var array $result 結果 */
        $result = array();

        foreach ($options as $key => $value) {
            /** @var string $context 選項元素 */
            $context = "<option value='{$this->encode($key)}'";

            if ($this->isOptionSelected($name, $key)) {
                $context .= ' selected';
            }
            $context .= ">{$this->encode($value)}</option>";
            $result[] = $context;
        }

        return implode('', $result);
    }

    /**
     * 標籤結束
     *
     * @param string $tag 標籤名稱
     * @return string 標籤結束
     */
    public function end(string $tag): string
    {
        return "</$tag>";
    }

    /**
     * 文字區域元素
     *
     * @param array $attributes 屬性
     * @return string 文字區域元素
     */
    public function textarea($attributes = array())
    {
        /** @var string|null $name 名稱 */
        $name = $attributes['name'] ?? null;
        /** @var string $value 值 */
        $value = $this->values[$name] ?? '';

        return $this->start('textarea', $attributes) .
            $this->encode($value) . $this->end('textarea');
    }
}
