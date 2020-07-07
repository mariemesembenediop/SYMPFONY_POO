

let offset = 0;
$.ajax({
    method:'POST',
    url:"/listeEtudiants",
        data: {limit:7,offset:offset},
        dataType: "JSON",
        success: function (data) {
           
            for (let i = 0; i < data.length; i++) {
                console.log(data[i]);

                var tr=document.createElement('tr')
                var td1=document.createElement('td')
                td1.innerText=data[i].matricule
                var td2=document.createElement('td')
                td2.innerText=data[i].prenom
            
                var td3=document.createElement('td')
                td3.innerText=data[i].nom

                var td4=document.createElement('td')
                td4.innerText=data[i].email
                var tdf4=document.createElement('td')
                tdf4.innerText=data[i].telephone
            
                var td5=document.createElement('td')
                var td6=document.createElement('td')

                if(data[i].adresse){
                    td5.innerText=data[i].adresse
                }else{
                    td5.innerText="Neant"

                }
               

                var td7=document.createElement('td')
                var mod=document.createElement('button')
                mod.setAttribute('id',data[i].id)
                mod.setAttribute('class','btn btn-success')
                mod.setAttribute('onClick','modifier(this)')
                mod.setAttribute('data-toggle','modal')
                mod.setAttribute('data-target','#staticBackdrop')
                mod.innerText='Modifier'

                td7.append(mod)
                var td8=document.createElement('td')
                var sup=document.createElement('button')
                sup.setAttribute('id',data[i].id)
                sup.setAttribute('class','btn btn-danger')
                sup.setAttribute('onClick','supprimer(this)')

                sup.innerText='Supprimer'
                td8.append(sup)
                tr.append(td1)
                tr.append(td2)
                tr.append(td3)
                tr.append(td4)
                tr.append(tdf4)
                

                
                 
                tr.append(td5)
               
                tr.append(td7)  
                 tr.append(td8)
                $('#table').append(tr)
            
            
            
            
                
            }
            offset +=7
        }
    });
function supprimer(e){
    var id=e.getAttribute('id')
    
    $.ajax({
        method:'post',
        url:"/supprimer",
        data:{id:id},
        success:function(data){
            console.log(data);
            
        }

    })
}