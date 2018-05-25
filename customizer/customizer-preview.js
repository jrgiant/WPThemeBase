/**
 * add funtionality add preview functionality for customizer controls with postMessage 
 */
;(function(customizer, ns){
    // log developer information
    ns.isDev && console.log(`My customizer has been called`);
    /** show and hide the topbar based on the selection in the customizer */
    customizer('show_top_bar', (value)=>{
        value.bind(n=>{
            ns.isDev && console.log(`Value Passed to Sho_top_bar: ${n}`);//debug information
            const menuBar = document.querySelector(".top-bar");
            if ("hide" === n) menuBar.style.display = "none";
            else menuBar.style = "";
        })
    });
}(wp.customize, window.aata));