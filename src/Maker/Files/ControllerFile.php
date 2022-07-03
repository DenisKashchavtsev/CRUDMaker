<?php

namespace DKart\CrudMaker\Maker\Files;

class ControllerFile extends File
{
    /**
     * @param $settings
     */
    public function __construct($settings)
    {
        $this->fileName = $settings['entityPlural'] . 'Controller.php';

        $this->templatePath = config('crudMaker.dir_templates') . 'Default/controller';

        parent::__construct($settings);
    }

    /**
     * @return ControllerFile
     */
    protected function buildClass(): ControllerFile
    {
        $replaceArray = [
            '$ENTITY$' => $this->entity,
            '$PASCAL_ENTITY$' => ucfirst($this->entity),
            '$PASCAL_ENTITY_PLURAL$' => ucfirst($this->entityPlural),
            '$NAMESPACE$' => $this->namespace,
        ];

        $this->template = str_replace( array_keys($replaceArray), array_values($replaceArray), $this->template );

        return $this;
    }

}
