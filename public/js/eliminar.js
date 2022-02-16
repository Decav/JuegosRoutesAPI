const confirmarEliminacion =  function(element_id){
    Swal.fire({title:"¿Esta seguro de la operacion?",text:"Esta operacion no es reversible"
    , icon: "warning",showCancelButton:true}).then((result) => {
        console.log(result.isConfirmed);
        if (result.isConfirmed) {
            document.getElementById('formid_'+element_id).submit();
        }
    });
    
}