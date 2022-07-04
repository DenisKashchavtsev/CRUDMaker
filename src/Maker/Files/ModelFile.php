<?php

namespace DKart\CrudMaker\Maker\Files;

class ModelFile extends File
{
    CONST PREFIX_FILE = '.php';

    CONST FILE_NAME = 'model';

    /**
     * @return ModelFile
     */
    protected function buildClass(): ModelFile
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
