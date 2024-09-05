<?php
namespace App;

class HtmlElement {
    // Declaración de propiedad privada
    private $name;

    // Constructor para inicializar la clase con el nombre del elemento
    public function __construct(string $name) {
        $this->name = $name;
    }

    // Método para renderizar el elemento HTML
    public function render() {
        return '<' . $this->name . '>HTML ELEMENT HERE</' . $this->name . '>';
    }
}

// Ejemplo de uso de la clase HtmlElement
$element = new HtmlElement('div'); // Creando un elemento 'div'
echo $element->render(); // Renderizando el elemento
