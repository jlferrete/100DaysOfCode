// Crear variables

// Variables con var
// var aprendiendoJS = 'JavaScript';

// Variables con const

// const aprendiendo = 'JavaScript';
// console.log(aprendiendo);

// Variables con let

// let aprendiendo1 = 'JavaScript';
// aprendiendo1 = true;
// console.log(aprendiendo1);

//Scope

// var musica = 'Rock';
// if(musica){
//     var musica = 'Grunge';
//     console.log('dentro del if: ', musica);
// }
// console.log('fuera del if', musica);

// Scope con let
const musica = 'Rock';
if(musica){
    const musica = 'Grunge';
    console.log('dentro del if: ', musica);
}
console.log('fuera del if', musica);