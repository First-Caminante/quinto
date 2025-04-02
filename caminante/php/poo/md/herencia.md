🔥 **Prepárate para una explicación brutalmente detallada de la herencia en PHP.** Aquí no hay lugar para dudas ni atajos. Vamos a diseccionar este concepto como un cirujano experto.

---

# 🧬 **HERENCIA EN PHP**  
La **herencia** en PHP es un mecanismo que permite que una **clase hija** herede propiedades y métodos de una **clase padre**. Esto promueve la **reutilización de código** y es uno de los pilares fundamentales de la **Programación Orientada a Objetos (POO)**.

---

## 🔎 **Conceptos Fundamentales**
Antes de entrar en código, grábate estos conceptos:

✅ **Clase Padre (Base/Superclase):** La clase que proporciona sus propiedades y métodos.  
✅ **Clase Hija (Derivada/Subclase):** La clase que hereda de la clase padre.  
✅ **`extends` :** Palabra clave que indica que una clase está heredando de otra.  
✅ **`parent::` :** Se usa para llamar a un método del padre dentro de la clase hija.  
✅ **`protected` :** Permite que una propiedad/método esté accesible en la propia clase y en sus clases hijas, pero no fuera de ellas.  
✅ **`private` :** Solo puede ser usado dentro de la clase donde fue declarado (ni siquiera en las clases hijas).  
✅ **`public` :** Accesible desde cualquier parte del código.

---

## ⚙️ **Estructura Básica de la Herencia**
```php
<?php
// Clase Padre
class Persona {
    public $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años.<br>";
    }
}

// Clase Hija que hereda de Persona
class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad); // Llamamos al constructor del padre
        $this->carrera = $carrera;
    }

    public function mostrarCarrera() {
        echo "Estoy estudiando {$this->carrera}.<br>";
    }
}

// Uso de las clases
$estudiante = new Estudiante("Carlos", 21, "Ingeniería de Software");
$estudiante->presentarse();   // Heredado de Persona
$estudiante->mostrarCarrera(); // Propio de Estudiante
?>
```

---

## 🔬 **Explicación en Profundidad**

### 🟧 **Clase Padre (`Persona`)**
- Tiene dos propiedades:
  - `$nombre` (pública) → Se puede acceder directamente desde cualquier parte del código.
  - `$edad` (protegida) → Solo se puede acceder dentro de la clase o en sus clases hijas.

- El constructor recibe `$nombre` y `$edad` para inicializar los atributos.  
- El método `presentarse()` accede directamente a `$nombre` y `$edad`.

---

### 🟦 **Clase Hija (`Estudiante`)**
- Usa `extends Persona` para heredar de la clase `Persona`.
- Su constructor:
  - Usa `parent::__construct()` para invocar el constructor de la clase padre.  
  - Esto asegura que `$nombre` y `$edad` se inicialicen correctamente.  
- Añade una nueva propiedad `$carrera` (privada) que solo es accesible dentro de `Estudiante`.

---

### ⚙️ **Llamada a Métodos del Padre**
- Dentro de la clase hija, usamos `parent::` para invocar métodos del padre.  
- Ejemplo: `parent::__construct($nombre, $edad);` permite que la lógica del constructor de `Persona` se ejecute.

---

### 🚨 **Diferencias Clave entre `private`, `protected` y `public` en la herencia**

| Visibilidad  | En la clase actual | En clases hijas | Fuera de la clase |
|:-------------|:-------------------|:-----------------|:-------------------|
| `public`       | ✅ Sí                | ✅ Sí               | ✅ Sí                |
| `protected`    | ✅ Sí                | ✅ Sí               | ❌ No                |
| `private`       | ✅ Sí                | ❌ No               | ❌ No                |

---

## 🧨 **Ejemplo Avanzado con Sobrescritura (Override)**
La **sobrescritura** permite que una clase hija redefina un método heredado para darle un comportamiento diferente.

```php
<?php
class Empleado {
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function calcularBono() {
        return $this->sueldo * 0.10; // 10% de bono por defecto
    }
}

class Gerente extends Empleado {
    public function calcularBono() {
        return $this->sueldo * 0.20; // 20% de bono para gerentes
    }
}

$empleado = new Empleado("Juan", 3000);
$gerente = new Gerente("María", 5000);

echo "Bono de Juan: " . $empleado->calcularBono() . "<br>";
echo "Bono de María: " . $gerente->calcularBono() . "<br>";
?>
```

### 🔍 **Explicación**
- El método `calcularBono()` fue redefinido en la clase `Gerente`.
- Aunque ambos objetos tienen el mismo método, se comportan distinto según la clase a la que pertenecen.

---

## 🏗️ **Finalización de la Herencia (`final`)**
- La palabra clave `final` impide que una clase sea heredada o que sus métodos sean sobrescritos.

### Ejemplo: Evitar que una clase sea extendida
```php
final class Seguridad {
    public function verificar() {
        echo "Verificación completa.";
    }
}

// ❌ Esto fallará porque `Seguridad` es final
class Hackeo extends Seguridad {}
```

### Ejemplo: Evitar que un método sea sobrescrito
```php
class Base {
    final public function metodoCritico() {
        echo "Este método no se puede modificar.";
    }
}

class Derivada extends Base {
    // ❌ Esto fallará porque `metodoCritico()` es final
    public function metodoCritico() {
        echo "Intento de sobrescritura fallido.";
    }
}
```

---

## 🔥 **Errores Comunes en la Herencia (Y Cómo Evitarlos)**
1. **Olvidar usar `parent::__construct()`**  
   → Resultado: La clase hija no inicializará correctamente los atributos de la clase padre.  

2. **Acceder directamente a propiedades protegidas o privadas**  
   → Resultado: Error fatal. Usa métodos `getters` y `setters` para manejar propiedades protegidas/privadas.  

3. **Intentar sobrescribir un método `final`**  
   → Resultado: Error fatal. Los métodos `final` son intocables.  

---

## 🚀 **Resumen: Reglas de Oro para la Herencia en PHP**
✅ Usa `extends` para heredar.  
✅ Utiliza `parent::` para llamar al constructor o métodos del padre.  
✅ Declara propiedades como `protected` si las vas a reutilizar en clases hijas.  
✅ Usa `private` para proteger propiedades que solo se usen dentro de la clase.  
✅ Si necesitas modificar el comportamiento de un método heredado, sobrescríbelo.  
✅ Usa `final` para proteger clases o métodos que no deban modificarse.
