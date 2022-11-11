<?php 
if(isset($_POST['mostrar-btn'])){
    $opcion = $_REQUEST['desplegable'];
}else{
    $opcion = 1;
}

function nombreCapitulo($Capitulo){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://rickandmortyapi.com/api/episode/'."[".$Capitulo."]");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    $data = curl_exec($ch);
    curl_close($ch);
    
    $epi = json_decode($data);

    foreach($epi as $episodio){
        $Nombre = $episodio->name;
    }

    return $Nombre;
}

function ListaTitulos(){
    for($i = 1; $i <= 51; $i++){
        echo '
        <option value="'.$i.'">Capitulo '.$i.': '.nombreCapitulo($i).'</option>
        ';
    }
}

function capituloPer($id)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://rickandmortyapi.com/api/episode/'.$id);
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
            <div class = 'episodios'>
                <img class='image-cap' src='$per->image'>
                <div class = 'datosCapitulo'>
                    <p> $per->name</p>
                    <p> ID: $per->id</p>
                    <p> Genero: $per->gender</p>
                    <p> Estatus: $per->status</p>
                </div>
            </div>";
        }
    }