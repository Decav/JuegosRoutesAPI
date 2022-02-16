//getJuegos
const getJuegos = async()=>{
    let respuesta = await axios.get("juegos");
    return respuesta.data;
};

//eliminarJuego
const eliminarJuego = async(juego)=>{

    let respuesta = await axios.delete(`juegos/${juego}`,{juego},{
        headers:{
            'Content-Type': 'application/json'
        }
    }).catch(err => console.error(err));
    return respuesta.data == "ok";

}