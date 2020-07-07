$("#bourse").focusout(function(){
 
    if($("#bourse").val()=='non'){
        $("#generer").html('')
var input=document.createElement("input")
input.setAttribute('type','text')
input.setAttribute('name','adresse')
input.setAttribute('id','adresse')
input.setAttribute('class','form-control ')
var div1=document.createElement("div")
div1.setAttribute('class','input-group col-10 m-auto')

var div2=document.createElement("div")
div2.setAttribute('class','input-group-prepend')
var span=document.createElement('span')
span.setAttribute('class','input-group-text span-size')
span.innerText='adresse'
div2.append(span)
div1.append(div2)
div1.append(input)
$('#generer').append(div1)

    }else{
        $("#generer").html('')
        $("#generer").html('<br>')
        $("#generer").html('<div class="input-group col-10 m-auto"><div class="input-group-prepend "><span class="input-group-text span-size">Logement</span></div> <select class="custom-select custom-select-lg span-size" id="logement" name="logement"><option selected>Veuillez choisir</option><option value="Oui">Oui</option> <option value="Non">Non</option> </select></div>') 
    }
})


 