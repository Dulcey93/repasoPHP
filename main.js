async function enviar(){
    let config = {
        method: "GET", 
        headers: {
            'Content-Type': 'application/json'
        }
    }
    console.log(await (await fetch("http://marcosfenixphp.rf.gd/23_05_2023/model/api.php",config)).text());
}
enviar();