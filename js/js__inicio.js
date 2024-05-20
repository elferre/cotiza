/**========================================================================
 * ?                                ABOUT
 * @author         :  Edgardo Ferreyra
 * @email          :  ed20052006@hotmail.com
 * @repo           :  
 * @createdOn      :  2022-05-19 
 * @description    :  
 *========================================================================**/

varBtnMenu.addEventListener("click", () => {
  
    if (menuVisible == false) {
        varMenuVisibleS.removeAttribute("hidden");
        menuVisible = true;
    } else {
        varMenuVisibleS.setAttribute("hidden", "");
        menuVisible = false;
    }
});

varImg02.addEventListener("click", () => {
  UnoNuevo();
});


function UnoNuevo(){
  varImg08.removeAttribute("hidden");
  varImg07.removeAttribute("hidden");
  varImg04.removeAttribute("hidden");
  varImg05.removeAttribute("hidden");
  varImg06.removeAttribute("hidden");
  varImg02.setAttribute("hidden", "");
  varImg03.setAttribute("hidden", "");
}