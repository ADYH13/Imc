let primaire = ["CP1", "CP2", "CE1", "CE2", "CM1", "CM2"];
let college = ["Sixième", "Cinquième", "Quatième", "Troisième"];
let lycée = ["Seconde", "Première", "Terminale"];
let serie = ["C","D","A1","A2"];
let i = 0;

document.getElementById('primaire').onclick = function() {
 
 
    for (const val of primaire)
    {
        var option = document.createElement("option");
        option.value = val;
        option.text = val.charAt(0).toUpperCase() + val.slice(1);
        document.getElementById("validationDefault03").appendChild(option);
    }
 
    
 
}