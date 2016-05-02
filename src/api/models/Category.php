<?php
class Category extends BaseModel {
    public $id = 0;
    public $title = '';

    public function __construct($container, $id = 0, $internal = false) {
        parent::__construct('column', $id, $container);

        if ($internal) {
            return;
        }

        $this->loadFromBean($this->bean);
    }

    public static function fromBean($container, $bean) {
        $instance = new self($container, 0, true);
        $instance->loadFromBean($bean);

        return $instance;
    }

    public static function fromJson($container, $json) {
        $instance = new self($container, 0, true);
        $instance->loadFromJson($json);

        return $instance;
    }

    public function updateBean() {
    }

    public function loadFromBean($bean) {
    }

    public function loadFromJson($json) {
    }
}
