const back = document.querySelectorAll('div');
back.forEach(bg =>{
    bg.addEventListener('click', function(e){
        let x = e.clientX;
        let y = e.clientY;

        let water = document.createElement('span');
        water.style.left = x + 'px';
        water.style.top = y + 'px';
        this.appendChild(water);

        setTimeout(()=>{
            water.remove()
        },1000);
    })
})
