/**========================================================================
 * ?                                ABOUT
 * @author         :  Edgardo Ferreyra
 * @email          :  ed20052006@hotmail.com
 * @repo           :  
 * @createdOn      :  2022-05-19 
 * @description    :  
 *========================================================================**/
let menuVisible = false;

/* 
	Esto es como los métodos son definido en el prototipo 
	de cualquier Objecto incorporado 
*/
Object.defineProperty(String.prototype, 'capitalizarPrimeraLetra', {
    value: function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    },
    writable: true, // Asi, puede sobreescribirse más tarde
    configurable: true // Asi, puede borrarse más tarde
});

/* string.capitalizePrimeraLetra(); */