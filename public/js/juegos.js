const deleteJuego = async function(){
    let id = this.juego.id;
    let eliminarbtn = await Swal.fire({title:"Esta seguro de la operacion?",text:"Esta operacion no es reversible"
    , icon: "warning",showCancelButton:true});
    if(eliminarbtn.isConfirmed){
        Swal.fire("El Juego a eliminar es: " + this.juego.nombre);
        if(await eliminarJuego(id)){
            let juego = await getJuegos();
            cargarTabla(juego);
            Swal.fire("Juego eliminado", "Se elimino correctamente el Juego", "info");
        }
    }else{
        Swal.fire("Cancelado", "La operacion fue cancelada", "info");
    }
    
}

const cargarTabla = (juego) =>{
    
    let tbody = document.querySelector("#tbody-juegos");
    tbody.innerHTML = "";
    for(let i=0; i < juego.length; ++i){
        let tr = document.createElement("tr");

        let tdId = document.createElement("td");
        tdId.innerText = juego[i].id;
        tdId.classList.add("px-6","py-4", "whitespace-nowrap");
        let tdNombre = document.createElement("td");
        tdNombre.innerText = juego[i].nombre;
        tdNombre.classList.add("px-6","py-4", "whitespace-nowrap");

        let tdFecha_lanzamiento = document.createElement("td");
        tdFecha_lanzamiento.innerText = juego[i].fecha_lanzamiento;
        tdFecha_lanzamiento.classList.add("px-6","py-4", "whitespace-nowrap");

        let tdPlataforma = document.createElement("td");
        tdPlataforma.innerText = juego[i].plataforma;
        tdPlataforma.classList.add("px-6","py-4", "whitespace-nowrap");

        let tdAcciones = document.createElement("td");
        tdAcciones.classList.add("px-6","py-4", "whitespace-nowrap");
        
        let botonEliminar = document.createElement("button");
        botonEliminar.innerHTML = "<span class='text-md material-icons text-white'>delete</span>";
        botonEliminar.classList.add("inline-flex","items-center","px-2" , "shadow-md","py-2" ,"bg-red-600" ,"border" ,"border-transparent" ,"rounded-md" ,"font-semibold", "text-xs" ,"text-white" ,"uppercase" ,"tracking-wrutest", "hover:shadow-lg" ,"hover:bg-red-400" ,"active:bg-red-900" ,"focus:outline-none" ,"focus:border-red-900" ,"focus:ring" ,"ring-red-300" ,"disabled:opacity-25" ,"transform" ,"hover:scale-105" ,"focus:scale-110" ,"transition" ,"ease-in-out" ,"duration-150");
        botonEliminar.juego = juego[i];
        botonEliminar.addEventListener("click",deleteJuego);

        let Ver_Juego = document.createElement("button");
        Ver_Juego.innerHTML = "<span class='text-md material-icons text-white'>visibility</span>";
        Ver_Juego.classList.add("inline-flex","items-center","px-2" , "shadow-md","py-2" ,"bg-blue-600" ,"border" ,"border-transparent" ,"rounded-md" ,"font-semibold", "text-xs" ,"text-white" ,"uppercase" ,"tracking-wrutest", "hover:shadow-lg" ,"hover:bg-blue-400" ,"active:bg-blue-900" ,"focus:outline-none" ,"focus:border-blue-900" ,"focus:ring" ,"ring-blue-300" ,"disabled:opacity-25" ,"transform" ,"hover:scale-105" ,"focus:scale-110" ,"transition" ,"ease-in-out" ,"duration-150");
        Ver_Juego.addEventListener("click", ()=>{
            window.location = "/ver_juego/"+juego[i].id;
        });
        

        tr.appendChild(tdId);
        tr.appendChild(tdNombre);
        tr.appendChild(tdFecha_lanzamiento);
        tr.appendChild(tdPlataforma);
        tr.appendChild(tdAcciones);
        tdAcciones.appendChild(botonEliminar);
        tdAcciones.appendChild(Ver_Juego);
        
        tbody.appendChild(tr);
        
    }

}



document.addEventListener("DOMContentLoaded" , async()=>{
    let juego = await getJuegos();
    cargarTabla(juego);
});