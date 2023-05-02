const clock = document.querySelector('.clock');

//assigning time values to constants
const tick = () => {
    const now = new Date();
    let h = now.getHours();
    const m = now.getMinutes();
    const s = now.getSeconds();
    let am_pm = 'AM';

    const today = new Date();
    const date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();

    clock.innerHTML = `
        <div style="text-align: center;"><span>${date}</span></div>

        <span>${h}</span> : 
        <span>${m}</span> : 
        <span>${s}</span>
        <span class="ampm">${am_pm}</span>
    `;
};

//refreshing clock every 1 second
setInterval(tick, 1000);