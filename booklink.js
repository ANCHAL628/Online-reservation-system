window.addEventListener('load',() =>{
        const params=(new URL(document.location)).searchParams;
        const name = params.get('name');
        const finallocation = params.get('finallocation');
        const currlocation = params.get('currlocation');
        document.getElementById("result_name").innerHTML=name;
}