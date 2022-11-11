<?php 

//funcion para mostrar personajes capitulo 1--------------------------------------------------------------------------------------
    function capitulo1()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://rickandmortyapi.com/api/episode/1');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $data = curl_exec($ch);
        curl_close($ch);

        $epi = json_decode($data);
        $episodios = $epi->characters;

        foreach($episodios as $episodio)
        {
            $mos = curl_init();
            curl_setopt($mos, CURLOPT_URL, $episodio);
            curl_setopt($mos, CURLOPT_RETURNTRANSFER,true); 

            $dato = curl_exec($mos); 
            curl_close($mos);

            $per = json_decode($dato);

            echo "
            <div class = 'datos'>
                <img class='personajesCap1' src='$per->image'>
                <div class = 'datosPerson'>
                    <p class= 'nombre'> $per->name</p>
                    <p class= 'nombre'> ID: $per->id</p>
                    <p> Genero: $per->gender</p>
                    <p> Estatus: $per->status</p>
                </div>
            </div>";
        }
    }

    $id = 0;

    if(isset($_POST["personaje"])){
        $id = $_POST["personaje"];
        $datosPer = personaje($id);
    }
    
    if(empty($datosPer) || $id > 826 || $id <=0)
    {
        $datosPer[0] = "El personsaje no existe";
        $datosPer[1] = "El personsaje no existe";
        $datosPer[2] = "El personsaje no existe";
        $datosPer[3] = "El personsaje no existe";
        $datosPer[4] = "El personsaje no existe";
    }

//funcion para mostrar personaje mediante un id----------------------------------------------------------------------------------
    function personaje($id){

        $URL = 'https://rickandmortyapi.com/api/character/'."[".$id."]";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $data = curl_exec($ch);
        curl_close($ch);
            
        $personajes = json_decode($data);

        $Imagen = "";
        $Id = "";
        $Nombre = "";
        $Sexo = "";
        $Estatus = "";        
        
        if(empty($id))
        {
            $datos = array();
            array_push($datos, $Imagen, $Id, $Nombre, $Sexo, $Estatus);
            return $datos;

        }else
        {
            foreach($personajes as $personaje)
            {
                $Imagen = $personaje->image;
                $Id = $personaje->id; 
                $Nombre = $personaje->name;
                $Sexo = $personaje->gender;
                $Estatus = $personaje->status;
            }

            $datos = array();
            array_push($datos, $Imagen, $Id, $Nombre, $Sexo, $Estatus);
            return $datos;
        }
    }

//funcion muestra 3 personajes aleatorios----------------------------------------------------------------------------------------
    function personajeRandom()
    {
        $random1 = rand(1, 826);
        $random2 = rand(1, 826);
        $random3 = rand(1, 826);

        $URL = 'https://rickandmortyapi.com/api/character/'."[".$random1.",".$random2.",".$random3."]";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $data = curl_exec($ch);
        curl_close($ch);
            
        $personajes = json_decode($data);

        foreach($personajes as $personaje)
        {
            echo "
            <div class = 'datosPer'>
                <img class='Buscar' src='$personaje->image'>
                <div class = 'datosPerson'>
                    <p> $personaje->name</p>
                    <p> ID: $personaje->id</p>
                    <p> Genero: $personaje->gender</p>
                    <p> Estatus: $personaje->status</p>
                </div>
            </div>";
        }
    }