
(function(win,doc){
    'use strict';

    //Delete
    function confirmDel(Event)
    {
        Event.preventDefault();
        //console.log(Event.Target.parentNode.href);
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo apagar?")){
            let ajax=new XMLHttpRequest();
            ajax.open("DELETE",Event.Target.parentNode.href );
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                   Win.location.href="usuario";
                }
            }
        }else{
            return false;
        }
    }

    if(doc.querySelector('.js-del')){
        let btn=doc.querySelectorAll('js-del');
        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click',confirmDel,false);
        }
    }
})(window,document);
