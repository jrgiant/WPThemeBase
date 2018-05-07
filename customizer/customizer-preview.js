;(function(customizer){
    console.log(`My customizer has been called`);
    customizer('show_top_bar', (value)=>{
        value.bind(n=>{
            console.log(`Value Passed to Sho_top_bar: ${n}`);//debug information
            const menuBar = document.querySelector(".top-bar");
            if ("hide" === n) menuBar.style.display = "none";
            else menuBar.style = "";
        })
    });
}(wp.customize));