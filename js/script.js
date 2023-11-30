function setLikeDislike(type,id){
    jQuery.ajax({
        url:'setLikeDislike.php',
        type:'post',
        data:'type='+type+'&id='+id,
        
        
    });
}