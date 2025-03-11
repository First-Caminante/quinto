<?php





class Persona{


  public $apellido = array();
  public $nombre = array();


    public function guardar($nombre, $apellido){
 
    $this->nombre[] = $nombre;
    $this->apellido[] = $apellido;
  
  
   }
  #public function mostrar(){  
    #for($i=1; $i<count($this->nombre); $i++) {
    #  self::formato($this->nombre[$i],$this->apellido[$i]);
   #   }
  #}

  
public function mostrar() {
    // Asegurarse de que $this->nombre y $this->apellido sean arrays
    if (is_array($this->nombre) && is_array($this->apellido)) {
        for ($i = 0; $i < count($this->nombre); $i++) {
            self::formato($this->nombre[$i], $this->apellido[$i]);
        }
    } else {
        echo "Error: 'nombre' y 'apellido' deben ser arrays.";
    }
}


    public function formato($nombre,$apellido){
      echo "nombre : ".$nombre."| apellido: ".$apellido."<br>"; 
    }
  

  }


  $persona = new Persona();

  $persona->guardar("Juanito","Perez"); 
  $persona->guardar("NataIia", "Flores");
  $persona->mostrar();


?>
