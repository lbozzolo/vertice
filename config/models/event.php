<?php

    $model = 'event';
    $model_plural = 'projects';
    $model_spanish = 'evento';
    $model_spanish_plural = 'eventos';

return [

    'store_success_message_M' => ucfirst($model_spanish).' creado con éxito',
    'store_success_message_F' => ucfirst($model_spanish).' creada con éxito',
    'store_failure_message_M' => 'Ocurrió un error. No se pudo crear el'.ucfirst($model_spanish),
    'store_failure_message_F' => ($this->gender == 'M')? 'Ocurrió un error. No se pudo crear el'.ucfirst($this->modelSpanish) : 'Ocurrió un error. No se pudo crear la'.ucfirst($this->modelSpanish),
    'show_failure_message' => ($this->gender == 'M')? 'No se encontró el'.ucfirst($this->modelSpanish.' especificado') : 'No se encontró la'.ucfirst($this->modelSpanish.' especificada'),
    'update_success_message' => ($this->gender == 'M')? ucfirst($this->modelSpanish).' actualizado con éxito' : ucfirst($this->modelSpanish).' actualizada con éxito',
    'update_failure_message' => ($this->gender == 'M')? 'Ocurrió un error. No se pudo actualizar el'.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo actualizar la'.ucfirst($this->modelSpanish).' especificada',
    'destroy_success_message' => ($this->gender == 'M')? ucfirst($this->modelSpanish).' eliminado con éxito' : ucfirst($this->modelSpanish).' eliminada con éxito',
    'destroy_failure_message' => ($this->gender == 'M')? 'Ocurrió un error. No se pudo eliminar el'.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo eliminar la'.ucfirst($this->modelSpanish).' especificada',
    'no_results_message' => ($this->gender == 'M')? 'No hay ningún '.$this->modelSpanish. ' cargado en el sistema.' : 'No hay ninguna '. $this->modelSpanish . ' cargada en el sistema.',

];