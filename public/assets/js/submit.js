const FORM = 'submit-form';

document.getElementById(FORM).addEventListener('submit', async (e) => {
    e.preventDefault();

    const form = new FormData(e.target);
    
    const res = await fetch(`Home/submit`, {
        method: 'POST',
        body: form
    });

    const data = await res.json();
    if (data.success) {
        Swal.fire({
            icon: 'success',
            title: 'Congratulations!',
            text: `${data.message}`,
        })
        setTimeout(function(){
            window.location.href = `/`;
        }, 1000);
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: `${data.message}`,
        })
    }
});

