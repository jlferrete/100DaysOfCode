/*
*** LECCION 9
*/

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
// const musica = 'Rock';
// if(musica){
//     const musica = 'Grunge';
//     console.log('dentro del if: ', musica);
// }
// console.log('fuera del if', musica);

/*
*** LECCION 10
*/

// // Template Strings
// const nombre = 'Jose Luis';
// const trabajo = 'Desarrollador Web';

// //Concatenar javascript
// console.log('Nombre: '+nombre + ', Trabajo: '+ trabajo);
// console.log(`Nombre: ${nombre} , Trabajo: ${trabajo}`);

// //Concatenar con múltiples líneas
// const contenedorApp = document.querySelector('#app');
// // let html = '<ul>' +
// //                 '<li> Nombre: ' + nombre + '</li>' +
// //                 '<li> Trabajo: ' + trabajo + '</li>' +
// //             '</ul>';

// let html = `
//             <ul>
//                 <li>Nombre: ${nombre} </li>
//                 <li>Trabajo: ${trabajo} </li>
//             </ul>
//         `;
        
// contenedorApp.innerHTML = html;

/*
*** LECCION 11
*** Diferencias entre function Declaration y function Expression
*/

// //Creando una funcion
// function saludar( nombre ){
//     console.log('Bienvenido ' + nombre);
// }

// saludar('Juan');
// saludar('Alejandra');
// saludar('Miguel');

// //Function Declaration
// function saludar(){
//     console.log('Bienvenido ');
// }
// saludar();

// //Function expression
// const cliente = function(nombreCliente) {
//     console.log('Mostrando datos del cliente: ' + nombreCliente);
// }

// cliente('Juan');

